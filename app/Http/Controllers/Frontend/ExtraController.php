<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class ExtraController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function English() {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'english');
        return  redirect()->back();
    }

    public function Turkish() {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'turkish');
        return  redirect()->back();
    }

   /* public function Russian() {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'russian');
        return  redirect()->back();
    }*/

    public function SinglePost($slug){
        $post = DB::table('posts')
            ->join('categories','posts.category_id','categories.id')
            ->join('subcategories','posts.subcategory_id','subcategories.id')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','categories.category_en','categories.category_tr','subcategories.subcategory_en','subcategories.subcategory_tr','users.name')
            ->where('posts.slug',$slug)->first();
        return view('main.single_post',compact('post'));

    }


    public function CatPost($id, $slug){
        $sliders = DB::table('posts')->where('category_id',$id)->orderBy('id','desc')->limit(18)->get();
        $allPosts = DB::table('posts')->where('category_id', $id)->skip(18)->orderBy('id', 'desc')->paginate(12);
        $randoms = DB::table('posts')->where('category_id', $id)->inRandomOrder()->limit(6)->get();
        $category = DB::table('categories')->where('id', $id)->first();
        return view('main.allpost',compact('sliders', 'allPosts', 'randoms', 'category'));

    }


    public function SubCatPost($id, $slug){
        $subcatposts = DB::table('posts')->where('subcategory_id',$id)->orderBy('id','desc')->paginate(5);
        return view('main.subpost',compact('subcatposts'));
    }


    public function GetSubDist($district_id){
        $sub = DB::table('subdistricts')->where('district_id',$district_id)->get();
        return response()->json($sub);
    }


    public function SearchDistrict(Request $request){
        $distid = $request->district_id;
        $subdistid = $request->subdistrict_id;


        $catposts = DB::table('posts')->where('district_id',$distid)->where('subdistrict_id',$subdistid)->orderBy('id','desc')->paginate(5);
        return view('main.allpost',compact('catposts'));

    }

    public function HomePage() {}
}
