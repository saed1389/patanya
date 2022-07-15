<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DistrictController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function Index() {
        $district = DB::table('districts')->orderBy('id', 'desc')->paginate(10);
        return view('backend.district.index', compact('district'));
    }

    public function AddDistrict() {
        return view('backend.district.create');
    }

    public function StoreDistrict(Request $request) {
        $validatedData = $request->validate([
            'district_en' => 'required|unique:districts|max:255',
            'district_tr' => 'required|unique:districts|max:255',
            'district_ru' => 'nullable',
        ]);

        $data = array();
        $data['district_en'] = $request->district_en;
        $data['district_tr'] = $request->district_tr;
        $data['district_ru'] = $request->district_ru;

        DB::table('districts')->insert($data);

        $notification = array(
            'message' => 'District Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('district')->with($notification);
    }

    public function EditDistrict ($id) {
        $district = DB::table('districts')->where('id', $id)->first();
        return view('backend.district.edit', compact('district'));
    }

    public function UpdateDistrict(Request $request, $id) {
        $data = array();
        $data['district_en'] = $request->district_en;
        $data['district_tr'] = $request->district_tr;
        $data['district_ru'] = $request->district_ru;
        DB::table('districts')->where('id', $id)->update($data);

        $notification = array(
            'message' => 'District Updated Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('district')->with($notification);
    }

    public function DeleteDistrict($id) {
        DB::table('districts')->where('id', $id)->delete();

        $notification = array(
            'message' => 'District Deleted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('district')->with($notification);
    }
}
