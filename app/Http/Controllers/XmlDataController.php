<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class XmlDataController extends Controller
{
    public function index(Request $request) {
        return view('backend.setting.bot');
    }

    public function ntvEconomy(Request $request) {

        $data = array();

        $response = Http::get('https://brtk.net/wp-json/wp/v2/posts?categories=26&_embed&per_page=5');
        /*        $response->body();*/
        $json = $response->json();
        foreach ($json as $item) {

            $string = $item['content']['rendered'] . '<br>';
            $regexp = '<img[^>]+src=(?:\"|\')\K(.[^">]+?)(?=\"|\')';
            if (preg_match_all("/$regexp/", $string, $matches, PREG_SET_ORDER)) {
                $img_src = $matches[0][0];
            }
            $regex = "/<img[^>]+>/i";
            $regex1 = '/href=["\']?([^"\'>]+)"/i';
            $content = preg_replace($regex, ' ', $string);
            $content1 = preg_replace($regex1, ' ', $content);
            $url = $img_src;
            $image_name = ( stristr($url, '?', true) ) ? stristr($url, '?', true) : $url;
            $pos = strrpos($image_name, '/');
            $image_name = substr($image_name, $pos + 1);
            $extension = stristr($image_name, '.');

            if ($extension == '.jpg' || $extension == '.png' || $extension == '.gif' || $extension == '.jpeg') {
                 $image_name = $image_name;
            }

            $img = public_path('image/postimg/'.$image_name);
            file_put_contents($img, file_get_contents($url));

            $data['title_tr'] = $item['title']['rendered'];
            $data['slug'] = $item['slug'];
            $data['details_tr'] = $content1;
            $data['image'] = 'image/postimg/'.$image_name;
            $data['category_id'] = 6;
            $data['user_id'] = Auth::user()->id;
            $data['source'] = 'BRTK';

            DB::table('posts')->insert($data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );


        }
        return Redirect()->back()->with($notification);
    }


    public function ntvTurkey(Request $request) {

        $data = array();

        $response = Http::get('https://brtk.net/wp-json/wp/v2/posts?categories=23&_embed&per_page=5');
        /*        $response->body();*/
        $json = $response->json();
        foreach ($json as $item) {

            $string = $item['content']['rendered'] . '<br>';
            $regexp = '<img[^>]+src=(?:\"|\')\K(.[^">]+?)(?=\"|\')';
            if (preg_match_all("/$regexp/", $string, $matches, PREG_SET_ORDER)) {
                $img_src = $matches[0][0];
            }
            $regex = "/<img[^>]+>/i";
            $regex1 = '/href=["\']?([^"\'>]+)"/i';
            $content = preg_replace($regex, ' ', $string);
            $content1 = preg_replace($regex1, ' ', $content);
            $url = $img_src;
            $image_name = ( stristr($url, '?', true) ) ? stristr($url, '?', true) : $url;
            $pos = strrpos($image_name, '/');
            $image_name = substr($image_name, $pos + 1);
            $extension = stristr($image_name, '.');

            if ($extension == '.jpg' || $extension == '.png' || $extension == '.gif' || $extension == '.jpeg') {
                $image_name = $image_name;
            }

            $img = public_path('image/postimg/'.$image_name);
            file_put_contents($img, file_get_contents($url));

            $data['title_tr'] = $item['title']['rendered'];
            $data['slug'] = $item['slug'];
            $data['details_tr'] = $content1;
            $data['image'] = 'image/postimg/'.$image_name;
            $data['category_id'] = 4;
            $data['user_id'] = Auth::user()->id;
            $data['source'] = 'BRTK';

            DB::table('posts')->insert($data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );


        }
        return Redirect()->back()->with($notification);
    }


    public function ntvWorld(Request $request) {

        $data = array();

        $response = Http::get('https://brtk.net/wp-json/wp/v2/posts?categories=22&_embed&per_page=5');
        /*        $response->body();*/
        $json = $response->json();

        foreach ($json as $item) {

            $string = $item['content']['rendered'] . '<br>';
            $regexp = '<img[^>]+src=(?:\"|\')\K(.[^">]+?)(?=\"|\')';
            if (preg_match_all("/$regexp/", $string, $matches, PREG_SET_ORDER)) {
                $img_src = $matches[0][0];
            }
            $regex = "/<img[^>]+>/i";
            $regex1 = '/href=["\']?([^"\'>]+)"/i';
            $content = preg_replace($regex, ' ', $string);
            $content1 = preg_replace($regex1, ' ', $content);
            $url = $img_src;
            $image_name = ( stristr($url, '?', true) ) ? stristr($url, '?', true) : $url;
            $pos = strrpos($image_name, '/');
            $image_name = substr($image_name, $pos + 1);
            $extension = stristr($image_name, '.');

            if ($extension == '.jpg' || $extension == '.png' || $extension == '.gif' || $extension == '.jpeg') {
                $image_name = $image_name;
            }

            $img = public_path('image/postimg/'.$image_name);
            file_put_contents($img, file_get_contents($url));

            /*dd(html_entity_decode($item['title']['rendered']));*/
            $data['title_tr'] = $item['title']['rendered'];
            $data['slug'] = $item['slug'];
            $data['details_tr'] = $content1;
            $data['image'] = 'image/postimg/'.$image_name;
            $data['category_id'] = 3;
            $data['user_id'] = Auth::user()->id;
            $data['source'] = 'BRTK';
            $data['post_date'] = $item['date'];
            $match = array('slug' => $item['slug']);

            DB::table('posts')->updateOrInsert($match, $data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );


        }
        return Redirect()->back()->with($notification);
    }


    public function ntvHealth(Request $request) {

        $data = array();

        $response = Http::get('https://brtk.net/wp-json/wp/v2/posts?categories=5&_embed&per_page=5');
        /*        $response->body();*/
        $json = $response->json();
        foreach ($json as $item) {

            $string = $item['content']['rendered'] . '<br>';
            $regexp = '<img[^>]+src=(?:\"|\')\K(.[^">]+?)(?=\"|\')';
            if (preg_match_all("/$regexp/", $string, $matches, PREG_SET_ORDER)) {
                $img_src = $matches[0][0];
            }
            $regex = "/<img[^>]+>/i";
            $regex1 = '/href=["\']?([^"\'>]+)"/i';
            $content = preg_replace($regex, ' ', $string);
            $content1 = preg_replace($regex1, ' ', $content);
            $url = $img_src;
            $image_name = ( stristr($url, '?', true) ) ? stristr($url, '?', true) : $url;
            $pos = strrpos($image_name, '/');
            $image_name = substr($image_name, $pos + 1);
            $extension = stristr($image_name, '.');

            if ($extension == '.jpg' || $extension == '.png' || $extension == '.gif' || $extension == '.jpeg') {
                $image_name = $image_name;
            }

            $img = public_path('image/postimg/'.$image_name);
            file_put_contents($img, file_get_contents($url));

            $data['title_tr'] = $item['title']['rendered'];
            $data['slug'] = $item['slug'];
            $data['details_tr'] = $content1;
            $data['image'] = 'image/postimg/'.$image_name;
            $data['category_id'] = 3;
            $data['user_id'] = Auth::user()->id;
            $data['source'] = 'BRTK';

            DB::table('posts')->insert($data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );


        }
        return Redirect()->back()->with($notification);
    }


    public function ntvSport(Request $request) {

        $post = DB::table('posts')->get();
        $data = array();
        $response = Http::get('https://brtk.net/wp-json/wp/v2/posts?categories=3&_embed&per_page=5');
        /*        $response->body();*/
        $json = $response->json();
        foreach ($json as $item) {

            $string = $item['content']['rendered'] . '<br>';
            $regexp = '<img[^>]+src=(?:\"|\')\K(.[^">]+?)(?=\"|\')';
            if (preg_match_all("/$regexp/", $string, $matches, PREG_SET_ORDER)) {
                $img_src = $matches[0][0];
            }
            $regex = "/<img[^>]+>/i";
            $regex1 = '/href=["\']?([^"\'>]+)"/i';
            $content = preg_replace($regex, ' ', $string);
            $content1 = preg_replace($regex1, ' ', $content);
            $url = $img_src;
            $image_name = ( stristr($url, '?', true) ) ? stristr($url, '?', true) : $url;
            $pos = strrpos($image_name, '/');
            $image_name = substr($image_name, $pos + 1);
            $extension = stristr($image_name, '.');

            if ($extension == '.jpg' || $extension == '.png' || $extension == '.gif' || $extension == '.jpeg') {
                $image_name = $image_name;
            }

            $img = public_path('image/postimg/'.$image_name);
            file_put_contents($img, file_get_contents($url));

            $data['title_tr'] = $item['title']['rendered'];
            $data['slug'] = $item['slug'];
            $data['details_tr'] = $content1;
            $data['image'] = 'image/postimg/'.$image_name;
            $data['category_id'] = 8;
            $data['user_id'] = Auth::user()->id;
            $data['source'] = 'BRTK';
            $data['post_date'] = $item['date'];
            $match = array('slug' => $item['slug']);

            DB::table('posts')->updateOrInsert($match, $data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );


        }
        return Redirect()->back()->with($notification);
    }



    public function ntvPolicy(Request $request) {

        $data = array();

        $response = Http::get('https://brtk.net/wp-json/wp/v2/posts?categories=27&_embed&per_page=5');
        /*        $response->body();*/
        $json = $response->json();
        foreach ($json as $item) {

            $string = $item['content']['rendered'] . '<br>';
            $regexp = '<img[^>]+src=(?:\"|\')\K(.[^">]+?)(?=\"|\')';
            if (preg_match_all("/$regexp/", $string, $matches, PREG_SET_ORDER)) {
                $img_src = $matches[0][0];
            }
            $regex = "/<img[^>]+>/i";
            $regex1 = '/href=["\']?([^"\'>]+)"/i';
            $content = preg_replace($regex, ' ', $string);
            $content1 = preg_replace($regex1, ' ', $content);
            $url = $img_src;
            $image_name = ( stristr($url, '?', true) ) ? stristr($url, '?', true) : $url;
            $pos = strrpos($image_name, '/');
            $image_name = substr($image_name, $pos + 1);
            $extension = stristr($image_name, '.');

            if ($extension == '.jpg' || $extension == '.png' || $extension == '.gif' || $extension == '.jpeg') {
                $image_name = $image_name;
            }

            $img = public_path('image/postimg/'.$image_name);
            file_put_contents($img, file_get_contents($url));

            $data['title_tr'] = $item['title']['rendered'];
            $data['slug'] = $item['slug'];
            $data['details_tr'] = $content1;
            $data['image'] = 'image/postimg/'.$image_name;
            $data['category_id'] = 8;
            $data['user_id'] = Auth::user()->id;
            $data['source'] = 'BRTK';

            DB::table('posts')->insert($data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );


        }
        return Redirect()->back()->with($notification);
    }

    public function ntvKKTC(Request $request) {

        $data = array();

        $response = Http::get('https://brtk.net/wp-json/wp/v2/posts?categories=26&_embed&per_page=10');
        /*        $response->body();*/
        $json = $response->json();
        foreach ($json as $item) {

            $string = $item['content']['rendered'] . '<br>';
            $regexp = '<img[^>]+src=(?:\"|\')\K(.[^">]+?)(?=\"|\')';
            if (preg_match_all("/$regexp/", $string, $matches, PREG_SET_ORDER)) {
                $img_src = $matches[0][0];
            }
            $regex = "/<img[^>]+>/i";
            $regex1 = '/href=["\']?([^"\'>]+)"/i';
            $content = preg_replace($regex, ' ', $string);
            $content1 = preg_replace($regex1, ' ', $content);
            $url = $img_src;
            $image_name = ( stristr($url, '?', true) ) ? stristr($url, '?', true) : $url;
            $pos = strrpos($image_name, '/');
            $image_name = substr($image_name, $pos + 1);
            $extension = stristr($image_name, '.');

            if ($extension == '.jpg' || $extension == '.png' || $extension == '.gif' || $extension == '.jpeg') {
                $image_name = $image_name;
            }

            $img = public_path('image/postimg/'.$image_name);
            file_put_contents($img, file_get_contents($url));

            $data['title_tr'] = $item['title']['rendered'];
            $data['slug'] = $item['slug'];
            $data['details_tr'] = $content1;
            $data['image'] = 'image/postimg/'.$image_name;
            $data['category_id'] = 8;
            $data['user_id'] = Auth::user()->id;
            $data['source'] = 'BRTK';

            DB::table('posts')->insert($data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );


        }
        return Redirect()->back()->with($notification);
    }


    public function ntvGundem(Request $request) {

        $data = array();

        $response = Http::get('https://brtk.net/wp-json/wp/v2/posts?categories=14&_embed&per_page=5');
        /*        $response->body();*/
        $json = $response->json();
        foreach ($json as $item) {

            $string = $item['content']['rendered'] . '<br>';
            $regexp = '<img[^>]+src=(?:\"|\')\K(.[^">]+?)(?=\"|\')';
            if (preg_match_all("/$regexp/", $string, $matches, PREG_SET_ORDER)) {
                $img_src = $matches[0][0];
            }
            $regex = "/<img[^>]+>/i";
            $regex1 = '/href=["\']?([^"\'>]+)"/i';
            $content = preg_replace($regex, ' ', $string);
            $content1 = preg_replace($regex1, ' ', $content);
            $url = $img_src;
            $image_name = ( stristr($url, '?', true) ) ? stristr($url, '?', true) : $url;
            $pos = strrpos($image_name, '/');
            $image_name = substr($image_name, $pos + 1);
            $extension = stristr($image_name, '.');

            if ($extension == '.jpg' || $extension == '.png' || $extension == '.gif' || $extension == '.jpeg') {
                $image_name = $image_name;
            }

            $img = public_path('image/postimg/'.$image_name);
            file_put_contents($img, file_get_contents($url));

            $data['title_tr'] = $item['title']['rendered'];
            $data['slug'] = $item['slug'];
            $data['details_tr'] = $content1;
            $data['image'] = 'image/postimg/'.$image_name;
            $data['category_id'] = 8;
            $data['user_id'] = Auth::user()->id;
            $data['source'] = 'BRTK';

            DB::table('posts')->insert($data);

            $notification = array(
                'message' => 'Post Updated Successfully',
                'alert-type' => 'success'
            );


        }
        return Redirect()->back()->with($notification);
    }




}
