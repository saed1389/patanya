<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\SubDistrictController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\AdsController;
use App\Http\Controllers\Backend\AdsOtherController;
use App\Http\Controllers\Backend\WebsiteSettingController;
use App\Http\Controllers\Backend\SpecialCategoryController;
use App\Http\Controllers\Backend\NewspaperController;
use App\Http\Controllers\Backend\SpecialPostController;
use App\Http\Controllers\Frontend\ExtraController;
use App\Http\Controllers\Frontend\HomePageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('main.home');
});*/
Route::get('/', [HomePageController::class , 'Index']);
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () {return view('admin.index');})->name('dashboard');
});
//Admin Logout
Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

// Admin Category All Routes
Route::get('/categories', [CategoryController::class , 'Index'])->name('categories');
Route::get('/add/category', [CategoryController::class, 'AddCategory'])->name('add.category');
Route::post('/store/category', [CategoryController::class, 'StoreCategory'])->name('store.category');
Route::get('/edit/category/{id}', [CategoryController::class, 'EditCategory'])->name('edit.category');
Route::post('/update/category/{id}', [CategoryController::class, 'UpdateCategory'])->name('update.category');
Route::get('/delete/category/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');

//Admin Subcategory All Routes
Route::get('/subcategories', [SubCategoryController::class, 'Index'])->name('subcategories');
Route::get('/add/subcategory', [SubCategoryController::class, 'AddSubCategory'])->name('add.subcategory');
Route::post('/store/subcategory', [SubCategoryController::class, 'StoreSubCategory'])->name('store.subcategory');
Route::get('/edit/subcategory/{id}', [SubCategoryController::class, 'EditSubCategory'])->name('edit.subcategory');
Route::post('/update/subcategory/{id}', [SubCategoryController::class, 'UpdateSubCategory'])->name('update.subcategory');
Route::get('/delete/subcategory/{id}', [SubCategoryController::class, 'DeleteSubCategory'])->name('delete.subcategory');

// Districts All Routes
Route::get('/district', [DistrictController::class, 'Index'])->name('district');
Route::get('/add/district', [DistrictController::class, 'AddDistrict'])->name('add.district');
Route::post('/store/district', [DistrictController::class, 'StoreDistrict'])->name('store.district');
Route::get('/edit/district/{id}', [DistrictController::class, 'EditDistrict'])->name('edit.district');
Route::post('/update/district/{id}', [DistrictController::class, 'UpdateDistrict'])->name('update.district');
Route::get('/delete/district/{id}', [DistrictController::class, 'DeleteDistrict'])->name('delete.district');

//Admin SubDistrict All Routes
Route::get('/subdistrict', [SubDistrictController::class, 'Index'])->name('subdistrict');
Route::get('/add/subdistrict', [SubDistrictController::class, 'AddSubDistrict'])->name('add.subdistrict');
Route::post('/store/subdistrict', [SubDistrictController::class, 'StoreSubDistrict'])->name('store.subdistrict');
Route::get('/edit/subdistrict/{id}', [SubDistrictController::class, 'EditSubDistrict'])->name('edit.subdistrict');
Route::post('/update/subdistrict/{id}', [SubDistrictController::class, 'UpdateSubDistrict'])->name('update.subdistrict');
Route::get('/delete/subdistrict/{id}', [SubDistrictController::class, 'DeleteSubDistrict'])->name('delete.subdistrict');

// Json Data For Category And District
Route::get('/get/subcategory/{category_id}', [PostController::class, 'GetSubCategory']);
Route::get('/get/subdistrict/{district_id}', [PostController::class, 'GetSubDistrict']);

// Admin Posts All Routes
Route::get('/allpost', [PostController::class, 'Index'])->name('all.post');
Route::get('/createpost', [PostController::class, 'Create'])->name('create.post');
Route::post('/store/post', [PostController::class, 'StorePost'])->name('store.post');
Route::get('/edit/post/{id}', [PostController::class, 'EditPost'])->name('edit.post');
Route::post('/update/post/{id}', [PostController::class, 'UpdatePost'])->name('update.post');
Route::get('/delete/post/{id}', [PostController::class, 'DeletePost'])->name('delete.post');

// Social Settings Routes
Route::get('/social/setting', [SettingController::class, 'SocialSetting'])->name('social.setting');
Route::post('/social/update/{id}', [SettingController::class, 'SocialUpdate'])->name('update.social');

// Newspaper Link Route
Route::get('/all/newspaper', [NewspaperController::class, 'Index'])->name('all.newspaper');
Route::get('/add/newspaper', [NewspaperController::class, 'AddNewspaper'])->name('add.newspaper');
Route::post('/store/newspaper', [NewspaperController::class, 'StoreNewspaper'])->name('store.newspaper');
Route::get('/delete/newspaper/{id}', [NewspaperController::class, 'DeleteNewspaper'])->name('delete.newspaper');
Route::post('/get/ChangeStatusNewspaper/{id}/{status}', [NewspaperController::class, 'ChangeStatusNewspaper']);

// Seo Setting Routes
Route::get('/seo/setting', [SettingController::class, 'SeoSetting'])->name('seo.setting');
Route::post('/seo/setting/{id}', [SettingController::class, 'SeoUpdate'])->name('update.seo');

// Prayer Setting Routes
Route::get('/prayer/setting', [SettingController::class, 'PrayerSetting'])->name('prayer.setting');
Route::post('/prayer/setting/{id}', [SettingController::class, 'PrayerUpdate'])->name('update.prayer');

// Live TV Setting Routes
Route::get('/livetv/setting', [SettingController::class, 'LiveTvSetting'])->name('livetv.setting');
Route::post('/livetv/setting/{id}', [SettingController::class, 'LiveTvUpdate'])->name('update.livetv');
Route::get('/livetv/active/{id}', [SettingController::class, 'ActiveSetting'])->name('active.livetv');
Route::get('/livetv/deactive{id}', [SettingController::class, 'DeActiveSetting'])->name('deactive.livetv');

// Notice Setting Routes
Route::get('/notice/setting', [SettingController::class, 'NoticeSetting'])->name('notice.setting');
Route::post('/notice/setting/{id}', [SettingController::class, 'NoticeUpdate'])->name('update.notice');
Route::get('/notice/active/{id}', [SettingController::class, 'ActiveNoticeSetting'])->name('active.notice');
Route::get('/notice/deactive{id}', [SettingController::class, 'DeActiveNoticeSetting'])->name('deactive.notice');

// Website Link Route
Route::get('/website/setting', [SettingController::class, 'WebsiteSetting'])->name('all.website');
Route::get('/add/website', [SettingController::class, 'AddWebsiteSetting'])->name('add.website');
Route::post('/store/website', [SettingController::class, 'StoreWebsite'])->name('store.website');
Route::get('/edit/website/{id}', [SettingController::class, 'EditWebsite'])->name('edit.website');
Route::post('/update/website/{id}', [SettingController::class, 'UpdateWebsite'])->name('update.website');
Route::get('/delete/website/{id}', [SettingController::class, 'DeleteWebsite'])->name('delete.website');

// Photo Gallery RRoutes
Route::get('/photo/gallery', [GalleryController::class, 'PhotoGallery'])->name('photo.gallery');
Route::get('/add/gallery', [GalleryController::class, 'AddPhoto'])->name('add.photo');
Route::post('/store/photo', [GalleryController::class, 'StorePhoto'])->name('store.photo');
Route::post('/delete/photo/{id}', [GalleryController::class, 'DeletePhoto'])->name('delete.photo');

// Video Gallery Routes
Route::get('/video/gallery', [GalleryController::class, 'VideoGallery'])->name('video.gallery');
Route::get('/add/video', [GalleryController::class, 'AddVideo'])->name('add.video');
Route::post('/store/video', [GalleryController::class, 'StoreVideo'])->name('store.video');

// FRONTEND
// Multi Language Routes
Route::get('/lang/english', [ExtraController::class, 'English'])->name('lang.english');
Route::get('/lang/turkish', [ExtraController::class, 'Turkish'])->name('lang.turkish');
Route::get('/lang/russian', [ExtraController::class, 'Russian'])->name('lang.russian');

// Single Post Page
Route::get('/post/{slug}', [ExtraController::class, 'SinglePost']);

// Post Category and SubCategory Pages
Route::get('/pataniya/{id}/{slug}', [ExtraController::class, 'CatPost']);
Route::get('/subcatpost/{id}/{slug}', [ExtraController::class, 'SubCatPost']);

// Search District In Home page
Route::get('/get/subdistrict/frontend/{district_id}', [ExtraController::class, 'GetSubDist']);
Route::get('/search/district', [ExtraController::class, 'SearchDistrict'])->name('searchby.districts');

// Ads Home Page Backend Section Route
Route::get('/list/add', [AdsController::class, 'ListAds'])->name('list.add');
Route::get('/add/ads', [AdsController::class, 'AddAds'])->name('add.ads');
Route::post('/store/ads', [AdsController::class, 'StoreAds'])->name('store.ads');
Route::get('/edit/ads/{id}', [AdsController::class, 'EditAds'])->name('edit.ads');
Route::post('/update/ads/{id}', [AdsController::class, 'UpdateAds'])->name('update.ads');
Route::get('/delete/ads/{id}', [AdsController::class, 'DeleteAds'])->name('delete.ads');
Route::post('/get/ChangeStatusAdsHome/{id}/{status}', [AdsController::class, 'ChangeStatusAdsHome']);

// Ads Other Page Backend Section Route
Route::get('/list/addOther', [AdsOtherController::class, 'ListAds'])->name('list.addOther');
Route::get('/add/adsOther', [AdsOtherController::class, 'AddAds'])->name('add.adsOther');
Route::post('/store/adsOther', [AdsOtherController::class, 'StoreAds'])->name('store.adsOther');
Route::get('/edit/adsOther/{id}', [AdsOtherController::class, 'EditAds'])->name('edit.adsOther');
Route::post('/update/adsOther/{id}', [AdsOtherController::class, 'UpdateAds'])->name('update.adsOther');
Route::get('/delete/adsOther/{id}', [AdsOtherController::class, 'DeleteAds'])->name('delete.adsOther');
Route::post('/get/ChangeStatusAdsOther/{id}/{status}', [AdsOtherController::class, 'ChangeStatusAdsOther']);

// Writer Role Routes
Route::get('/add/writer', [RoleController::class, 'InsertWriter'])->name('add.writer');
Route::post('/store/writer', [RoleController::class, 'StoreWriter'])->name('store.writer');
Route::get('/all/writer', [RoleController::class, 'AllWriter'])->name('all.writer');
Route::get('/edit/writer/{id}', [RoleController::class, 'EditWriter'])->name('edit.writer');
Route::post('/update/writer/{id}', [RoleController::class, 'UpdateWriter'])->name('update.writer');

// All Website Setting Routes
Route::get('/web/setting', [WebsiteSettingController::class, 'MainWebSetting'])->name('website.setting');
Route::post('/update/websetting/{id}', [WebsiteSettingController::class, 'UpdateWebSetting'])->name('update.websetting');

// Account Setting Routes
Route::get('/account/setting', [AdminController::class, 'AccountSetting'])->name('account.setting');
Route::get('/profile/edit', [AdminController::class, 'ProfileEdit'])->name('profile.edit');
Route::post('/profile/store', [AdminController::class, 'ProfileStore'])->name('profile.store');

/// Change Password
Route::get('/show/password', [AdminController::class, 'ShowPassword'])->name('show.password');
Route::post('/change/password', [AdminController::class, 'ChangePassword'])->name('change.password');

// Special Category
Route::get('/specialCategory', [SpecialCategoryController::class , 'Index'])->name('specialCategory');
Route::get('/add/specialCategory', [SpecialCategoryController::class, 'AddSpecialCategory'])->name('add.specialCategory');
Route::post('/store/specialCategory', [SpecialCategoryController::class, 'StoreSpecialCategory'])->name('store.specialCategory');
Route::get('/edit/specialCategory/{id}', [SpecialCategoryController::class, 'EditSpecialCategory'])->name('edit.specialCategory');
Route::post('/update/specialCategory/{id}', [SpecialCategoryController::class, 'UpdateSpecialCategory'])->name('update.specialCategory');
Route::get('/delete/specialCategory/{id}', [SpecialCategoryController::class, 'DeleteSpecialCategory'])->name('delete.specialCategory');

//Special Post
Route::get('/allSpecialPost', [SpecialPostController::class, 'Index'])->name('all.SpecialPost');
Route::get('/createSpecialPost', [SpecialPostController::class, 'Create'])->name('create.SpecialPost');
Route::post('/store/SpecialPost', [SpecialPostController::class, 'StorePost'])->name('store.SpecialPost');
Route::get('/edit/SpecialPost/{id}', [SpecialPostController::class, 'EditPost'])->name('edit.SpecialPost');
Route::post('/update/SpecialPost/{id}', [SpecialPostController::class, 'UpdatePost'])->name('update.SpecialPost');
Route::get('/delete/SpecialPost/{id}', [SpecialPostController::class, 'DeletePost'])->name('delete.SpecialPost');

Route::post('/get/ChangeStatus/{id}/{status}', [SpecialPostController::class, 'ChangeStatus']);
