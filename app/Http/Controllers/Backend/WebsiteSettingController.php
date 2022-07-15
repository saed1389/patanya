<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSettingModel;
use Image;

class WebsiteSettingController extends Controller
{
    public function MainWebSetting() {
        $websitesetting = WebsiteSettingModel::first();
        return view('backend.setting.website', compact('websitesetting'));
    }

    public function UpdateWebSetting(Request $request, $id) {
        $data = array();
        $data['address_en'] = $request->address_en;
        $data['address_tr'] = $request->address_tr;
        $data['address_ru'] = $request->address_ru;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['about_en'] = $request->about_en;
        $data['about_tr'] = $request->about_tr;
        $data['about_ru'] = $request->about_ru;

        /*$oldimage = $request->oldlogo;

        $image = $request->logo;*/
        /*if ($image) {*/
            /*$image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('image/logo'.$image_one);
            $data['logo'] = 'image/logo/'.$image_one;*/
            WebsiteSettingModel::where('id', $id)->update($data);
            /*unlink($oldimage);*/

            $notification = array(
                'message' => 'Web Setting Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('website.setting')->with($notification);
        /*} else {
            $data['logo'] = $oldimage;
            WebsiteSettingModel::where('id', $id)->update($data);

            $notification = array(
                'message' => 'Web Setting Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('website.setting')->with($notification);
        }*/
    }
}
