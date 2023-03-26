<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Address\Country;
use App\Models\Address\District;
use App\Models\Address\Municipalities;
use App\Models\Address\Provinces;
use App\Models\MembershipType\MembershipType;
use App\Models\User\User;
use App\Models\User\UserAddress;
use App\Models\User\UserDocuments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDF;

class MemberDashboardController extends FrontendController
{

    public function index(Request $request)
    {
        return view($this->frontendPath . 'members.home');
    }


    public function ajaxAddressFilter(Request $request)
    {

        if ($request->country_id) {
            $provinceData = Provinces::where('country_id', $request->country_id)->get();
            $output = '<option value="">Select Province</option>';
            foreach ($provinceData as $key => $value) {
                $output .= '<option value="' . $value->id . '">' . $value->province_name . '</option>';
            }
            echo $output;
        }
        if ($request->province_id) {
            $districtData = District::where('province_id', $request->province_id)->get();
            $output = '<option value="">Select District</option>';
            foreach ($districtData as $key => $value) {
                $output .= '<option value="' . $value->id . '">' . $value->district_name . '</option>';
            }
            echo $output;
        }
        if ($request->district_id) {
            $munData = Municipalities::where('district_id', $request->district_id)->get();
            $output = '<option value="">Select Municipality</option>';
            foreach ($munData as $key => $value) {
                $output .= '<option value="' . $value->id . '">' . $value->municipality_name . '</option>';
            }
            echo $output;
        }

    }


    public function memberCertificate(Request $request)
    {
        $id = Auth::guard('web')->user()->id;
        $user = User::find($id);
        $this->data('userData', $user);
        $certificateInfo = [
            "name" => $user->name ?? null,
            "address" => $user->userAddress->pDistrict->district_name ?? null,
            "membership_type" => $user->memberType->type ?? null,
            "date_of_registration" => $user->date_of_registration ?? null,
            "qualification" => $user->userDocuments->qualification ?? null,
            "citizenship" => $user->userDocuments->citizenship_no ?? null,
            "graduation_year" => $user->userDocuments->year_of_graduation ?? null,
            "university" => $user->userDocuments->university ?? null,
        ];
        foreach ($certificateInfo as $key => $value) {
            if ($value == null) {
                return redirect()->route('certificate-error')->with('error', 'Please fill up all the information');
            }
        }
//        return view($this->frontendPath . 'members.certificate', $this->data);
        $pdf = PDF::loadView($this->frontendPath . 'members.certificate', $this->data);
        return $pdf->download('member-certificate.pdf');

    }

    public function memberIdCard(Request $request)
    {
        $id = Auth::guard('web')->user()->id;
        $user = User::find($id);
        $this->data('userData', $user);
        $idCardInfo = [
            "id" => $user->id ?? null,
            "name" => $user->name ?? null,
            "membership_type" => $user->memberType->type ?? null,
            "expiry_date" => $user->isExpired() ?? null,
            "citizenship" => $user->userDocuments->citizenship_no ?? null,
            "phone" => $user->phone ?? null,
            "address" => $user->userAddress->pDistrict->district_name ?? null,

        ];
        foreach ($idCardInfo as $key => $value) {
            if ($value == null) {
                return redirect()->route('id-card-error')->with('error', 'Please fill up all the information');
            }
        }
//        return view($this->frontendPath . 'members.id-card', $this->data);
        $pdf = PDF::loadView($this->frontendPath . 'members.id-card', $this->data);
        return $pdf->download('member-id-card.pdf');
    }

    public function updateVoucher(Request $request)
    {
        if ($request->isMethod('get')) {

            return view($this->frontendPath . 'members.payment', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'voucher' => 'required',
            ]);
            $findUser = Auth::guard('web')->user();
            $this->deleteFile($findUser->voucher_file);
            $fileName = $request->file('voucher')->store('public/users/voucher');
            // $fileName = $this->customFileUpload('uploads/users/voucher');
            // $fileName = Storage::disk('public')->put('uploads/users/voucher', $request->file('voucher'));
            $findUser->voucher_file = $fileName;
            $findUser->account_status = 'active';
            $findUser->voucher_status = 'pending';
            $findUser->save();
            return redirect()->back()->with('success', 'Your voucher has been uploaded successfully. Please wait for the admin to verify your voucher.');
        }
        return redirect()->back();
    }


    /*
         * ===========================Update user information===========================
         */

    public function updateGeneralInfo(Request $request)
    {
        $id = Auth::guard('web')->user()->id;

        if ($request->isMethod('get')) {
            $user = User::find($id);
            $this->data('userData', $user);
            $this->data('memberTypes', MembershipType::all());
            return view($this->frontendPath . 'members.update.general-info', $this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'date_of_birth' => 'required',
                'membership_type_id' => 'required',
            ]);

            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->date_of_birth = $request->date_of_birth;
            $user->phone = $request->phone;
            $user->membership_type_id = $request->membership_type_id;
            $user->update();
            return redirect()->back()->with('success', 'Update successful');
        }
    }

    public function updateAddressInfo(Request $request)
    {
        $id = Auth::guard('web')->user()->id;
        if ($request->isMethod('get')) {
            $user = User::find($id);
            $this->data('userData', $user);
            $this->data('countryData', Country::all());
            $this->data('provinceData', Provinces::all());
            $this->data('districtData', District::all());
            $this->data('munData', Municipalities::all());
            return view($this->frontendPath . 'members.update.address-info', $this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'permanent_country' => 'required',
                'permanent_province' => 'required',
                'permanent_district' => 'required',
                'permanent_municipality' => 'required',
                'temporary_country' => 'required',
                'temporary_province' => 'required',
                'temporary_district' => 'required',
                'temporary_municipality' => 'required',
            ]);
            $user = UserAddress::where('user_id', $id)->count();
            if ($user) {
                $user = UserAddress::where('user_id', $id)->first();
                $user->permanent_country = $request->permanent_country;
                $user->permanent_province = $request->permanent_province;
                $user->permanent_district = $request->permanent_district;
                $user->permanent_municipality = $request->permanent_municipality;
                $user->temporary_country = $request->temporary_country;
                $user->temporary_province = $request->temporary_province;
                $user->temporary_district = $request->temporary_district;
                $user->temporary_municipality = $request->temporary_municipality;
                $user->permanent_tole = $request->permanent_tole;
                $user->temporary_tole = $request->temporary_tole;
                $user->update();
                return redirect()->back()->with('success', 'Update successful');
            } else {
                $data = $request->all();
                $data['user_id'] = $id;
                UserAddress::create($data);
                return redirect()->back()->with('success', 'Update successful');
            }


        }
    }


    public function updateDocumentsInfo(Request $request)
    {
        $id = Auth::guard('web')->user()->id;
        if ($request->isMethod('get')) {
            $user = User::find($id);
            $this->data('userData', $user);
            return view($this->frontendPath . 'members.update.documents', $this->data);
        }
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'citizenship_no' => 'required',
                'qualification' => 'required',
                'year_of_graduation' => 'required',
                'university' => 'required',

            ]);

            $user = UserDocuments::where('user_id', $id)->first();
            $user->citizenship_no = $request->citizenship_no;
            $user->qualification = $request->qualification;
            $user->year_of_graduation = $request->year_of_graduation;
            $user->university = $request->university;
            if ($request->hasFile('front_size')) {
                $file = $request->file('front_size');
                $ext = $file->getClientOriginalExtension();
                $imagName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/users/');
                if (!$file->move($uploadPath, $imagName)) {
                    return redirect()->back()->with('error', 'file upload errors');
                }
                $user->front_size ='uploads/users/'. $imagName;
            }
            if ($request->hasFile('back_size')) {
                $file = $request->file('back_size');
                $ext = $file->getClientOriginalExtension();
                $imagName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/users/');
                if (!$file->move($uploadPath, $imagName)) {
                    return redirect()->back()->with('error', 'file upload errors');
                }
                $user->back_size ='uploads/users/'. $imagName;
            }
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $imagName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/users/');
                if (!$file->move($uploadPath, $imagName)) {
                    return redirect()->back()->with('error', 'file upload errors');
                }
                $user->image ='uploads/users/'. $imagName;
            }
            $user->update();
            return redirect()->back()->with('success', 'Update successful');
        }
    }


    /*
     * ===========================End Update user information===========================
     */


}
