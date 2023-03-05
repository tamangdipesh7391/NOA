<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Address\Country;
use App\Models\Address\District;
use App\Models\Address\Municipalities;
use App\Models\Address\Provinces;
use App\Models\MembershipType\MembershipType;
use App\Models\User\User;
use App\Models\User\UserAddress;
use App\Models\User\UserDocuments;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function registerStepOne(Request $request)
    {
        if ($request->isMethod('get')) {
            $user = $request->session()->get('user');
            $this->data('user', $user);
            $this->data('memberTypes', MembershipType::all());
            return view('frontend.pages.register.register-step-one', $this->data);
        }

        if ($request->isMethod('post')) {
            if (empty($request->session()->get('user'))) {
                $validatedData = $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'gender' => 'required',
                    'password' => 'required|min:6',
                    'phone' => 'required|unique:users,phone',
                    'date_of_birth' => 'required',
                    'membership_type_id' => 'required',
                ], [
                    'membership_type_id.required' => 'Please select membership type',
                ]);
                $data = $request->all();
                $data['password'] = bcrypt($data['password']);
                $userData = User::create($data);
                $lastInsertedId = $userData->id;
                $user = User::find($lastInsertedId);
                $user->fill($validatedData);
                $addressData = new userAddress();
                $request->session()->put('addressData', $addressData);
                $request->session()->put('user', $user);
            } else {
                $user = $request->session()->get('user');
                $userId = $user->id;
                $validatedData = $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,' . $userId . ',id',
                    'gender' => 'required',
                    'password' => 'required|min:6',
                    'phone' => 'required',
                    'date_of_birth' => 'required',
                    'membership_type_id' => 'required',
                ], [
                    'membership_type_id.required' => 'Please select membership type',
                ]);
                $user = User::find($userId);
                if (empty($user)) {
                    $request->session()->forget('user');
                    return redirect()->route('register.step.one');
                }
                $user->update($validatedData);
                $user->fill($validatedData);
                $addressData = new userAddress();
                $request->session()->put('addressData', $addressData);
                $request->session()->put('user', $user);
            }
            return redirect()->route('register.step.two');
        }
    }

    public function registerStepTwo(Request $request)
    {
        if ($request->isMethod('get')) {
            $sessionUser = $request->session()->get('user');
            $addressData = [
                'permanent_country' => '',
                'permanent_province' => '',
                'permanent_district' => '',
                'permanent_municipality' => '',
            ];


            if (empty($sessionUser)) {
                return redirect()->route('register.step.one');
            }
            $this->data('user', $request->session()->get('user'));
            if (empty($request->session()->get('addressData'))) {
                $request->session()->put('addressData', $addressData);
            }
            $this->data('addressData', $request->session()->get('addressData'));
            $this->data('countryData', Country::all());
            $this->data('provinceData', Provinces::all());
            $this->data('districtData', District::all());
            $this->data('munData', Municipalities::all());
            return view('frontend.pages.register.register-step-two', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'permanent_country' => 'required',
                'permanent_province' => 'required',
                'permanent_district' => 'required',
                'permanent_municipality' => 'required',
            ]);
            $data = $request->all();
            $user = $request->session()->get('user');
            $findData = UserAddress::where('user_id', '=', $user->id)->count();
            if ($findData > 0) {
                $userAddress = UserAddress::where('user_id', '=', $user->id)->first();
                $data['user_id'] = $user->id;
                $userAddress->update($data);
                $userAddress->fill($data);
                $request->session()->put('addressData', $userAddress);
                return redirect()->route('register.step.three');
            } else {
                $data['user_id'] = $user->id;
                $lastObj = UserAddress::create($data);
                $lastObj->fill($data);
                $request->session()->put('addressData', $lastObj);
                return redirect()->route('register.step.three');
            }
        }

        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function registerStepThree(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('user', $request->session()->get('user'));
            return view('frontend.pages.register.register-step-three', $this->data);
        }
        if ($request->isMethod('post')) {
            $validatedData = $this->validate($request, [
                'front_size' => 'required',
                'back_size' => 'required',

            ]);
            $user = $request->session()->get('user');
            $userDocument = new UserDocuments();

            if ($request->hasFile('front_size')) {
                $file = $request->file('front_size');
                $ext = $file->getClientOriginalExtension();
                $imagName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/users/');
                if (!$file->move($uploadPath, $imagName)) {
                    return redirect()->back()->with('error', 'file upload errors');
                }
                $userDocument->front_size ='uploads/users/'. $imagName;
            }
            if ($request->hasFile('back_size')) {
                $file = $request->file('back_size');
                $ext = $file->getClientOriginalExtension();
                $imagName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/users/');
                if (!$file->move($uploadPath, $imagName)) {
                    return redirect()->back()->with('error', 'file upload errors');
                }
                $userDocument->back_size ='uploads/users/'. $imagName;
            }
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $imagName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('uploads/users/');
                if (!$file->move($uploadPath, $imagName)) {
                    return redirect()->back()->with('error', 'file upload errors');
                }
                $userDocument->image ='uploads/users/'. $imagName;
            }

            $userDocument->user_id = $user->id;
            $userDocument->save();
            $request->session()->forget('user');
            $request->session()->forget('addressData');
            return redirect()->route('login')->with('success', 'Registration Successful');


        }

        return redirect()->back()->with('error', 'Something went wrong');
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

}
