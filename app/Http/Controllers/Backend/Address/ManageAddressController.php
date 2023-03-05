<?php

namespace App\Http\Controllers\Backend\Address;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\Address\Country;
use App\Models\Address\District;
use App\Models\Address\Municipalities;
use App\Models\Address\Provinces;
use Illuminate\Http\Request;

class ManageAddressController extends BackendController
{

    public function index(Request $request)
    {
        if (!empty($request->criteria)) {
            if ($request->isMethod('get')) {
                $criteria = $request->criteria;
                $this->data('countryData', Country::all());
                $this->data('editCountryData', Country::find($criteria));
                return view($this->pagePath . 'address.country', $this->data);
            }
            if ($request->isMethod('post')) {
                $this->validate($request, [
                    'country_name' => 'required',
                    'code' => 'required',
                ]);
                $countryData = Country::find($request->criteria);
                $countryData->country_name = $request->country_name;
                $countryData->code = $request->code;
                $countryData->save();
                return redirect()->route('manage-address')->with('success', 'Country Updated Successfully');
            }

        }

        if ($request->isMethod('get')) {
            $countryData = Country::all();
            $this->data('countryData', $countryData);
            $this->data('editCountryData', '');
            return view($this->pagePath . 'address.country', $this->data);

        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'country_name' => 'required',
                'code' => 'required',
            ]);
            $data = $request->all();
            Country::create($data);
            return redirect()->back()->with('success', 'Country added successfully');
        }
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function deleteCountry(Request $request)
    {
        $id = $request->criteria;
        if (Provinces::where('country_id', $id)->count() > 0) {
            return redirect()->back()->with('error', 'Country has provinces, please delete them first');
        } else {
            Country::find($id)->delete();
            return redirect()->back()->with('success', 'Country deleted successfully');
        }
    }

    public function manageProvince(Request $request)
    {

        if ($request->isMethod('get')) {
            $criteria = $request->criteria;
            $this->data('provinceData', Provinces::where('country_id', $criteria)->get());
            return view($this->pagePath . 'address.province', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'province_name' => 'required',
            ]);
            $data = $request->all();
            $data['country_id'] = $request->criteria;
            Provinces::create($data);
            return redirect()->back()->with('success', 'Province added successfully');
        }

        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function deleteProvince(Request $request)
    {
        $id = $request->criteria;
        if (District::where('province_id', $id)->count() > 0) {
            return redirect()->back()->with('error', 'Province has districts, please delete them first');
        } else {
            Provinces::find($id)->delete();
            return redirect()->back()->with('success', 'Province deleted successfully');

        }
    }

    public function editProvince(Request $request)
    {
        if ($request->isMethod('get')) {
            $criteria = $request->criteria;
            $this->data('provinceData', Provinces::find($criteria));
            $this->data('countryData', Country::all());
            return view($this->pagePath . 'address.edit-province', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'province_name' => 'required',
                'country_id' => 'required',
            ]);
            $data = $request->all();
            Provinces::find($request->criteria)->update($data);
            return redirect()->back()->with('success', 'Province updated successfully');
        }

        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function manageDistrict(Request $request)
    {
        if ($request->isMethod('get')) {
            $criteria = $request->criteria;
            $this->data('districtData', District::where('province_id', $criteria)->get());
            return view($this->pagePath . 'address.district', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'district_name' => 'required',
            ]);
            $data = $request->all();
            $data['province_id'] = $request->criteria;
            District::create($data);
            return redirect()->back()->with('success', 'District added successfully');
        }

        return redirect()->back()->with('error', 'Something went wrong');

    }

    public function deleteDistrict(Request $request)
    {
        $id = $request->criteria;
        if (Municipalities::where('district_id', $id)->count() > 0) {
            return redirect()->back()->with('error', 'District has municipalities, please delete them first');
        } else {
            District::find($id)->delete();
            return redirect()->back()->with('success', 'District deleted successfully');

        }
    }

    public function editDistrict(Request $request)
    {
        if ($request->isMethod('get')) {
            $criteria = $request->criteria;
            $this->data('districtData', District::find($criteria));
            $this->data('provinceData', Provinces::all());
            return view($this->pagePath . 'address.edit-district', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'district_name' => 'required',
                'province_id' => 'required',
            ]);
            $data = $request->all();
            District::find($request->criteria)->update($data);
            return redirect()->back()->with('success', 'Province updated successfully');
        }
        return redirect()->back()->with('error', 'Something went wrong');

    }


    public function manageMunicipalities(Request $request)
    {
        if ($request->isMethod('get')) {
            $criteria = $request->criteria;
            $this->data('municipalitiesData', Municipalities::where('district_id', $criteria)->get());
            return view($this->pagePath . 'address.municipalities', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'municipality_name' => 'required',
            ]);
            $data = $request->all();
            $data['district_id'] = $request->criteria;
            Municipalities::create($data);
            return redirect()->back()->with('success', 'Municipality added successfully');
        }

        return redirect()->back()->with('error', 'Something went wrong');

    }

    public function deleteMunicipalities(Request $request)
    {
        $id = $request->criteria;
        Municipalities::find($id)->delete();
        return redirect()->back()->with('success', 'District deleted successfully');


    }

    public function editMunicipalities(Request $request)
    {
        if ($request->isMethod('get')) {
            $criteria = $request->criteria;
            $this->data('munData', Municipalities::find($criteria));
            $this->data('districtData', District::all());
            return view($this->pagePath . 'address.edit-municipalities', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'municipality_name' => 'required',
                'district_id' => 'required',
            ]);
            $data = $request->all();
            Municipalities::find($request->criteria)->update($data);
            return redirect()->back()->with('success', 'municipality updated successfully');
        }
        return redirect()->back()->with('error', 'Something went wrong');

    }
}
