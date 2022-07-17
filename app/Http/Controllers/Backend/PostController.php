<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function Index() {
        $post = DB::table('posts')
            ->join('categories', 'posts.category_id', 'categories.id')
            ->join('subcategories', 'posts.subcategory_id', 'subcategories.id')
            ->join('districts', 'posts.district_id', 'districts.id')
            ->join('subdistricts', 'posts.subdistrict_id', 'subdistricts.id')
            ->select('posts.*', 'categories.category_en', 'subcategories.subcategory_en', 'districts.district_en', 'subdistricts.subdistrict_en')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('backend.post.index', compact('post'));
    }
    public function Create() {
        $category = DB::table('categories')->get();
        $district = DB::table('districts')->get();
        return view('backend.post.create', compact('category', 'district'));
    }

    public function StorePost(Request $request) {
        $validatedData = $request->validate([
            'slug' => 'unique:posts|max:255',
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
        $data['subcategory_id'] = $request->subcategory_id;
        $data['district_id']    = $request->district_id;
        $data['subdistrict_id'] = $request->subdistrict_id;
        $data['tag_en']         = $request->tag_en;
        $data['tag_tr']         = $request->tag_tr;
        $data['tag_ru']         = $request->tag_ru;
        $data['details_en']     = $request->details_en;
        $data['details_tr']     = $request->details_tr;
        $data['details_ru']     = $request->details_ru;
        $data['headline']       = $request->headline;
        $data['video']          = $request->video;
        $data['bigthumbnail']   = $request->bigthumbnail;
        $data['first_section']  = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['post_date']      = date('d-m-Y');
        $data['post_month']     = date("F");

        $images = array();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $image_name = uniqid().'.'.$file->getClientOriginalExtension();
                Image::make($file)->save('image/postimg/'.$image_name);
                $image_url = 'image/postimg/'.$image_name;
                $images[] = $image_url;
            }
            $MImage = implode('|', $images);
            $data['images'] = $MImage;
        }

        $image = $request->image;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            //Image::make($image)->resize(500, 300)->save('image/postimg/'.$image_one);
            Image::make($image)->save('image/postimg/'.$image_one);
            $data['image'] = 'image/postimg/'.$image_one;
            DB::table('posts')->insert($data);

            $notification = array(
                'message' => 'Post inserted Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('all.post')->with($notification);
        } else {
            return Redirect()->back();
        }
    }

    public function EditPost($id) {

        $post = DB::table('posts')->where('id', $id)->first();
        $category = DB::table('categories')->get();
        $district = DB::table('districts')->get();
        return view('backend.post.edit', compact('post', 'category', 'district'));

    }

    public function UpdatePost(Request $request, $id) {
        $data = array();
        $data['slug'] = Str::of($request->title_tr)->slug('-');
        $data['title_en']       = $request->title_en;
        $data['title_tr']       = $request->title_tr;
        $data['title_ru']       = $request->title_ru;
        $data['user_id']        = Auth::id();
        $data['category_id']    = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['district_id']    = $request->district_id;
        $data['subdistrict_id'] = $request->subdistrict_id;
        $data['tag_en']         = $request->tag_en;
        $data['tag_tr']         = $request->tag_tr;
        $data['tag_ru']         = $request->tag_ru;
        $data['details_en']     = $request->details_en;
        $data['details_tr']     = $request->details_tr;
        $data['details_ru']     = $request->details_ru;
        $data['headline']       = $request->headline;
        $data['bigthumbnail']   = $request->bigthumbnail;
        $data['first_section']  = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
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
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.post')->with($notification);

        } else {
            $data['image'] = $oldimage;
            DB::table('posts')->where('id', $id)->update($data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.post')->with($notification);
        }
    }

    public function DeletePost($id) {
        $post = DB::table('posts')->where('id', $id)->first();
        unlink($post->image);

        DB::table('posts')->where('id', $id)->delete();
        $notification = array(
            'message' => 'Post Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('all.post')->with($notification);
    }


    public function GetSubCategory($category_id) {
        $sub = DB::table('subcategories')->where('category_id', $category_id)->get();
        return response()->json($sub);
    }

    public function GetSubDistrict($district_id) {
        $sub = DB::table('subdistricts')->where('district_id', $district_id)->get();
        return response()->json($sub);
    }
}
