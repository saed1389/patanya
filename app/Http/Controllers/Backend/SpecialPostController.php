<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpecialPostModel;
use App\Models\SpecialCategoryModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Image;

class SpecialPostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function Index() {
        $post = SpecialPostModel::
        join('specialcategory', 'specialpost.category_id', 'specialcategory.id')
            ->join('districts', 'specialpost.district_id', 'districts.id')
            ->select('specialPost.*', 'specialcategory.category_tr', 'districts.district_tr')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('backend.specialPost.index', compact('post'));
    }
    public function Create() {
        $category = SpecialCategoryModel::all();
        $district = DB::table('districts')->get();
        return view('backend.specialPost.create', compact('category', 'district'));
    }

    public function StorePost(Request $request) {
        $validatedData = $request->validate([
            'slug' => 'unique:specialPost|max:255',
            'category_id' => 'required',
            'district_id' => 'required',
        ]);

        $data = array();
        $data['slug'] = Str::of($request->title_tr)->slug('-');
        $data['title_en']       = $request->title_en;
        $data['title_tr']       = $request->title_tr;
        $data['title_ru']       = $request->title_ru;
        $data['user_id']        = Auth::id();
        $data['category_id']    = $request->category_id;
        $data['district_id']    = $request->district_id;
        $data['subdistrict_id'] = $request->subdistrict_id;
        $data['tag_en']         = $request->tag_en;
        $data['tag_tr']         = $request->tag_tr;
        $data['tag_ru']         = $request->tag_ru;
        $data['details_en']     = $request->details_en;
        $data['details_tr']     = $request->details_tr;
        $data['details_ru']     = $request->details_ru;
        $data['post_date']      = date('d-m-Y');
        $data['post_month']     = date("F");

        $image = $request->image;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            //Image::make($image)->resize(500, 300)->save('image/postimg/'.$image_one);
            Image::make($image)->save('image/postimg/'.$image_one);
            $data['image'] = 'image/postimg/'.$image_one;
            SpecialPostModel::insert($data);

            $notification = array(
                'message' => 'Special Post inserted Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('all.SpecialPost')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function EditPost($id) {

        $post = SpecialPostModel::where('id', $id)->first();
        $category = SpecialCategoryModel::all();
        $district = DB::table('districts')->get();
        return view('backend.specialPost.edit', compact('post', 'category', 'district'));

    }

    public function UpdatePost(Request $request, $id) {
        $data = array();
        $data['slug'] = Str::of($request->title_tr)->slug('-');
        $data['title_en']       = $request->title_en;
        $data['title_tr']       = $request->title_tr;
        $data['title_ru']       = $request->title_ru;
        $data['user_id']        = Auth::id();
        $data['category_id']    = $request->category_id;
        $data['district_id']    = $request->district_id;
        $data['subdistrict_id'] = $request->subdistrict_id;
        $data['tag_en']         = $request->tag_en;
        $data['tag_tr']         = $request->tag_tr;
        $data['tag_ru']         = $request->tag_ru;
        $data['details_en']     = $request->details_en;
        $data['details_tr']     = $request->details_tr;
        $data['details_ru']     = $request->details_ru;
        $data['post_date']      = date('d-m-Y');
        $data['post_month']     = date("F");

        $oldimage = $request->oldimage;
        $image = $request->image;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            //Image::make($image)->resize(500, 300)->save('image/postimg/'.$image_one);
            Image::make($image)->save('image/postimg/'.$image_one);
            $data['image'] = 'image/postimg/'.$image_one;

            DB::table('posts')->where('id', $id)->update($data);
            unlink($oldimage);
            $notification = array(
                'message' => 'Special Post Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.SpecialPost')->with($notification);

        } else {
            $data['image'] = $oldimage;
            SpecialPostModel::where('id', $id)->update($data);

            $notification = array(
                'message' => 'Special Post Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.SpecialPost')->with($notification);
        }
    }

    public function DeletePost($id) {
        $post = SpecialPostModel::where('id', $id)->first();
        unlink($post->image);

        SpecialPostModel::where('id', $id)->delete();
        $notification = array(
            'message' => 'Post Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('all.SpecialPost')->with($notification);
    }

    public function GetSubDistrict($district_id) {
        $sub = DB::table('subdistricts')->where('district_id', $district_id)->get();
        return response()->json($sub);
    }

    public function ChangeStatus($id, $status) {
        SpecialPostModel::where('id', $id)->update(['status' => $status]);
    }
}
