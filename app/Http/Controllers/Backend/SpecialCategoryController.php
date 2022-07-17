<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\SpecialCategoryModel;
use Image;

class SpecialCategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function Index() {
        $specialCategory = SpecialCategoryModel::orderBy('id', 'desc')->paginate(10);
        return view('backend.specialCategory.index', compact('specialCategory'));
    }

    public function AddSpecialCategory() {
        return view('backend.specialCategory.create');
    }

    public function StoreSpecialCategory(Request $request) {
        $validatedData = $request->validate([
            'slug' => 'unique:specialcategory|max:255',
            'category_en' => 'nullable',
            'category_tr' => 'required|unique:specialcategory|max:255',
            'category_ru' => 'nullable',
        ]);

        $data = array();
        $data['slug'] = Str::of($request->category_tr)->slug('-');
        $data['category_en'] = $request->category_en;
        $data['category_tr'] = $request->category_tr;
        $data['category_ru'] = $request->category_ru;

        $image = $request->image;

        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            //Image::make($image)->resize(500, 300)->save('image/postimg/'.$image_one);
            Image::make($image)->save('image/category/'.$image_one);
            $data['image'] = 'image/category/'.$image_one;
            SpecialCategoryModel::insert($data);

            $notification = array(
                'message' => 'Post inserted Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('specialCategory')->with($notification);
        } else {
            return Redirect()->back();
        }

    }

    public function EditSpecialCategory ($id) {
        $SpecialCategory = SpecialCategoryModel::where('id', $id)->first();
        return view('backend.specialCategory.edit', compact('SpecialCategory'));
    }

    public function UpdateSpecialCategory(Request $request, $id) {
        $data = array();
        $data['slug'] = Str::of($request->category_tr)->slug('-');
        $data['category_en'] = $request->category_en;
        $data['category_tr'] = $request->category_tr;
        $data['category_ru'] = $request->category_ru;

        $oldimage = $request->oldimage;
        $image = $request->image;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            //Image::make($image)->resize(500, 300)->save('image/postimg/'.$image_one);
            Image::make($image)->save('image/category/'.$image_one);
            $data['image'] = 'image/category/'.$image_one;

            SpecialCategoryModel::where('id', $id)->update($data);
            unlink($oldimage);
            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('specialCategory')->with($notification);

        } else {
            $data['image'] = $oldimage;
            SpecialCategoryModel::where('id', $id)->update($data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('specialCategory')->with($notification);
        }
    }

    public function DeleteSpecialCategory($id) {
        SpecialCategoryModel::where('id', $id)->delete();

        $notification = array(
            'message' => 'Special Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('specialCategory')->with($notification);
    }
}
