<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function SocialSetting() {
        $social = DB::table('socials')->first();
        return view('backend.setting.social', compact('social'));
    }

    public function SocialUpdate(Request $request, $id) {
        $data = array();
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['youtube'] = $request->youtube;
        $data['linkedin'] = $request->linkedin;
        $data['instagram'] = $request->instagram;

        DB::table('socials')->where('id', $id )->update($data);

        $notification = array(
            'message' => 'Social Links Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('social.setting')->with($notification);
    }

    public function SeoSetting() {
        $seo = DB::table('seos')->first();
        return view('backend.setting.seo', compact('seo'));
    }

    public function SeoUpdate(Request $request, $id) {
        $data = array();
        $data['meta_author'] = $request->meta_author;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->meta_keyword;
        $data['meta_description'] = $request->meta_description;
        $data['google_analytics'] = $request->google_analytics;
        $data['google_verification'] = $request->google_verification;
        $data['alexa_analytics'] = $request->alexa_analytics;

        DB::table('seos')->where('id', $id)->update($data);

        $notification = array(
            'message' => 'SEO Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('seo.setting')->with($notification);
    }

    public function PrayerSetting() {
        $prayer = DB::table('prayers')->first();
        return view('backend.setting.prayer', compact('prayer'));
    }

    public function PrayerUpdate(Request $request, $id) {
        $data = array();
        $data['fajr'] = $request->fajr;
        $data['johor'] = $request->johor;
        $data['asor'] = $request->asor;
        $data['magrib'] = $request->magrib;
        $data['eaha'] = $request->eaha;
        $data['jummah'] = $request->jummah;

        DB::table('prayers')->where('id', $id)->update($data);

        $notification = array(
            'message' => 'Prayer Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('prayer.setting')->with($notification);
    }

    public function LiveTvSetting() {
        $livetv = DB::table('livetvs')->first();
        return view('backend.setting.livetv', compact('livetv'));
    }

    public function LiveTvUpdate(Request $request, $id) {
        $data = array();
        $data['embed_code'] = $request->embed_code;
        $data['status'] = $request->status;

        DB::table('livetvs')->where('id', $id)->update($data);

        $notification = array(
            'message' => 'Live TV Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('livetv.setting')->with($notification);
    }

    public function ActiveSetting(Request $request, $id) {
        DB::table('livetvs')->where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Live TV Active Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeActiveSetting(Request $request, $id) {
        DB::table('livetvs')->where('id', $id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Live TV DeActive Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function NoticeSetting() {
        $notice = DB::table('notices')->first();
        return view('backend.setting.notice', compact('notice'));
    }

    public function NoticeUpdate(Request $request, $id) {
        $data = array();
        $data['notice'] = $request->notice;
        $data['status'] = $request->status;

        DB::table('notices')->where('id', $id)->update($data);

        $notification = array(
            'message' => 'Notice Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('notice.setting')->with($notification);
    }

    public function ActiveNoticeSetting(Request $request, $id) {
        DB::table('notices')->where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Notice Active Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeActiveNoticeSetting(Request $request, $id) {
        DB::table('notices')->where('id', $id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Notice DeActive Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function WebsiteSetting(){
        $website =  DB::table('websites')->orderBy('id','desc')->paginate(5);
        return view('backend.website.index',compact('website'));
    }

    public function AddWebsiteSetting(){
        return view('backend.website.create');
    }

    public function StoreWebsite(Request $request){

        $data = array();
        $data['website_name'] = $request->website_name;
        $data['website_link'] = $request->website_link;

        DB::table('websites')->insert($data);

        $notification = array(
            'message' => 'Website Link Updated Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('all.website')->with($notification);
    }

    public function EditWebsite() {
        $website = DB::table('websites')->first();
        return view('backend.website.edit', compact('website'));
    }

    public function UpdateWebsite(Request $request, $id) {
        $data = array();
        $data['website_name'] = $request->website_name;
        $data['website_link'] = $request->website_link;

        DB::table('websites')->where('id', $id )->update($data);

        $notification = array(
            'message' => 'Website Links Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('all.website')->with($notification);
    }

    public function DeleteWebsite($id) {
        DB::table('websites')->where('id', $id)->delete();

        $notification = array(
            'message' => 'Website Link Deleted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('all.website')->with($notification);
    }
}
