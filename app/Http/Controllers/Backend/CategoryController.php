<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function Index() {
        $category = DB::table('categories')->orderBy('id', 'desc')->paginate(10);
        return view('backend.category.index', compact('category'));
    }

    public function AddCategory() {
        return view('backend.category.create');
    }

    public function StoreCategory(Request $request) {
        $validatedData = $request->validate([
            'slug' => 'unique:categories|max:255',
            'category_en' => 'required|unique:categories|max:255',
            'category_tr' => 'required|unique:categories|max:255',
            'category_ru' => 'nullable',
        ]);

        $data = array();
        $data['slug'] = Str::of($request->category_tr)->slug('-');
        $data['category_en'] = $request->category_en;
        $data['category_tr'] = $request->category_tr;
        $data['category_ru'] = $request->category_ru;

        DB::table('categories')->insert($data);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('categories')->with($notification);
    }

    public function EditCategory ($id) {
        $category = DB::table('categories')->where('id', $id)->first();
        return view('backend.category.edit', compact('category'));
    }

    public function UpdateCategory(Request $request, $id) {
        $data = array();
        $data['slug'] = Str::of($request->category_tr)->slug('-');
        $data['category_en'] = $request->category_en;
        $data['category_tr'] = $request->category_tr;
        $data['category_ru'] = $request->category_ru;
        DB::table('categories')->where('id', $id)->update($data);

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('categories')->with($notification);
    }

    public function DeleteCategory($id) {
        DB::table('categories')->where('id', $id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('categories')->with($notification);
    }
}
