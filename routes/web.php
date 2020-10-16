<?php

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
Auth::routes();
/*---------------Home-------*/
Route::get('/admin', 'admin\HomeController@index');
/*---------------User-------*/
Route::get('/admin/user', 'admin\UserController@indexuser')->middleware('permission:user-show');
Route::get('/admin/user/create', 'admin\UserController@createuserget')->middleware('permission:user-create');
Route::post('/admin/user/create', 'admin\UserController@createuserpost')->middleware('permission:user-create');
Route::get('/admin/user/delete/{id}', 'admin\UserController@deleteuser')->middleware('permission:user-delete');
Route::get('/admin/user/edit/{id}', 'admin\UserController@edituserget')->middleware('permission:user-edit');
Route::post('/admin/user/edit/{id}', 'admin\UserController@edituserpost')->middleware('permission:user-edit');
Route::get('/admin/user/reset/{id}', 'admin\UserController@resetpassworduserget')->middleware('permission:user-password');
Route::Post('/admin/user/reset/{id}', 'admin\UserController@resetpassworduserpost')->middleware('permission:user-password');
Route::get('/admin/user/statues/{id}', 'admin\UserController@editstatues')->middleware('permission:user-statues');
/*---------------role-------*/
Route::get('/admin/role', 'admin\RoleController@indexrole')->middleware('permission:role-show');
Route::get('/admin/role/create', 'admin\RoleController@createroleget')->middleware('permission:role-create');
Route::post('/admin/role/create', 'admin\RoleController@createrolepost')->middleware('permission:role-create');
Route::get('/admin/role/delete/{id}', 'admin\RoleController@deleterole')->middleware('permission:role-delete');
Route::get('/admin/role/edit/{id}', 'admin\RoleController@editroleget')->middleware('permission:role-edit');
Route::post('/admin/role/edit/{id}', 'admin\RoleController@editrolepost')->middleware('permission:role-edit');
/*---------------permission-------*/
Route::get('/admin/permission', 'admin\PermissionController@indexpermission')->middleware('permission:permission-show');
Route::get('/admin/permission/create', 'admin\PermissionController@createpermissionget')->middleware('permission:permission-create');
Route::post('/admin/permission/create', 'admin\PermissionController@createpermissionpost')->middleware('permission:permission-create');
Route::get('/admin/permission/delete/{id}', 'admin\PermissionController@deletepermission')->middleware('permission:permission-delete');
Route::get('/admin/permission/edit/{id}', 'admin\PermissionController@editpermissionget')->middleware('permission:permission-edit');
Route::post('/admin/permission/edit/{id}', 'admin\PermissionController@editpermissionpost')->middleware('permission:permission-edit');
/*---------------About_Us-------*/
Route::get('/admin/about_us', 'admin\AboutUsController@indexaboutus')->middleware('permission:about-us-show');
Route::get('/admin/about_us/create', 'admin\AboutUsController@createaboutusget')->middleware('permission:about-us-create');
Route::post('/admin/about_us/create', 'admin\AboutUsController@createaboutuspost')->middleware('permission:about-us-create');
Route::get('/admin/about_us/edit/{id}', 'admin\AboutUsController@editaboutusget')->middleware('permission:about-us-edit');
Route::post('/admin/about_us/edit/{id}', 'admin\AboutUsController@editaboutuspost')->middleware('permission:about-us-edit');
/*---------------Setting-------*/
Route::get('/admin/setting', 'admin\SettingController@indexsetting')->middleware('permission:setting-show');
Route::get('/admin/setting/create', 'admin\SettingController@createsettingget')->middleware('permission:setting-create');
Route::post('/admin/setting/create', 'admin\SettingController@createsettingpost')->middleware('permission:setting-create');
Route::get('/admin/setting/edit/{id}', 'admin\SettingController@editsettingget')->middleware('permission:setting-edit');
Route::post('/admin/setting/edit/{id}', 'admin\SettingController@editsettingpost')->middleware('permission:setting-edit');
/*---------------Home_Slider-------*/
Route::get('/admin/home_slider', 'admin\HomeSliderController@indexhomeslider')->middleware('permission:home-slider-show');
Route::get('/admin/home_slider/create', 'admin\HomeSliderController@createhomesliderget')->middleware('permission:home-slider-create');
Route::post('/admin/home_slider/create', 'admin\HomeSliderController@createhomesliderpost')->middleware('permission:home-slider-create');
Route::get('/admin/home_slider/delete/{id}', 'admin\HomeSliderController@deletehomeslider')->middleware('permission:home-slider-delete');
Route::get('/admin/home_slider/edit/{id}', 'admin\HomeSliderController@edithomesliderget')->middleware('permission:home-slider-edit');
Route::post('/admin/home_slider/edit/{id}', 'admin\HomeSliderController@edithomesliderpost')->middleware('permission:home-slider-edit');
/*---------------Contact_Us-------*/
Route::get('/admin/contact_us', 'admin\ContactUsController@indexcontactus')->middleware('permission:contact-us-show');
Route::get('/admin/contact_us/create', 'admin\ContactUsController@createcontactusget')->middleware('permission:contact-us-create');
Route::post('/admin/contact_us/create', 'admin\ContactUsController@createcontactuspost')->middleware('permission:contact-us-create');
Route::get('/admin/contact_us/edit/{id}', 'admin\ContactUsController@editcontactusget')->middleware('permission:contact-us-edit');
Route::post('/admin/contact_us/edit/{id}', 'admin\ContactUsController@editcontactuspost')->middleware('permission:contact-us-edit');
/*---------------country-------*/
Route::get('/admin/country', 'admin\CountryController@indexcountry')->middleware('permission:country-show');
Route::get('/admin/country/create', 'admin\CountryController@createcountryget')->middleware('permission:country-create');
Route::post('/admin/country/create', 'admin\CountryController@createcountrypost')->middleware('permission:country-create');
Route::get('/admin/country/edit/{id}', 'admin\CountryController@editcountryget')->middleware('permission:country-edit');
Route::post('/admin/country/edit/{id}', 'admin\CountryController@editcountrypost')->middleware('permission:country-edit');
/*---------------Country_Place-------*/
Route::get('/admin/country_place', 'admin\CountryPlaceController@indexcountryplace')->middleware('permission:country-place-show');
Route::get('/admin/country_place/create', 'admin\CountryPlaceController@createcountryplaceget')->middleware('permission:country-place-create');
Route::post('/admin/country_place/create', 'admin\CountryPlaceController@createcountryplacepost')->middleware('permission:country-place-create');
Route::get('/admin/country_place/delete/{id}', 'admin\CountryPlaceController@deletecountryplace')->middleware('permission:country-place-delete');
Route::get('/admin/country_place/edit/{id}', 'admin\CountryPlaceController@editcountryplaceget')->middleware('permission:country-place-edit');
Route::post('/admin/country_place/edit/{id}', 'admin\CountryPlaceController@editcountryplacepost')->middleware('permission:country-place-edit');
/*---------------service-------*/
Route::get('/admin/service', 'admin\ServiceController@indexservice')->middleware('permission:service-show');
Route::get('/admin/service/create', 'admin\ServiceController@createserviceget')->middleware('permission:service-create');
Route::post('/admin/service/create', 'admin\ServiceController@createservicepost')->middleware('permission:service-create');
Route::get('/admin/service/edit/{id}', 'admin\ServiceController@editserviceget')->middleware('permission:service-edit');
Route::post('/admin/service/edit/{id}', 'admin\ServiceController@editservicepost')->middleware('permission:service-edit');
/*---------------faq_service-------*/
Route::get('/admin/faq_service', 'admin\FaqServiceController@indexfaqservice')->middleware('permission:faq-service-show');
Route::get('/admin/faq_service/create', 'admin\FaqServiceController@createfaqserviceget')->middleware('permission:faq-service-create');
Route::post('/admin/faq_service/create', 'admin\FaqServiceController@createfaqservicepost')->middleware('permission:faq-service-create');
Route::get('/admin/faq_service/delete/{id}', 'admin\FaqServiceController@deletefaqservice')->middleware('permission:faq-service-delete');
Route::get('/admin/faq_service/edit/{id}', 'admin\FaqServiceController@editfaqserviceget')->middleware('permission:faq-service-edit');
Route::post('/admin/faq_service/edit/{id}', 'admin\FaqServiceController@editfaqservicepost')->middleware('permission:faq-service-edit');
/*---------------description_service-------*/
Route::get('/admin/description_service', 'admin\DescriptionServiceController@indexdescriptionservice')->middleware('permission:description-service-show');
Route::get('/admin/description_service/create', 'admin\DescriptionServiceController@createdescriptionserviceget')->middleware('permission:description-service-create');
Route::post('/admin/description_service/create', 'admin\DescriptionServiceController@createdescriptionservicepost')->middleware('permission:description-service-create');
Route::get('/admin/description_service/delete/{id}', 'admin\DescriptionServiceController@deletedescriptionservice')->middleware('permission:description-service-delete');
Route::get('/admin/description_service/edit/{id}', 'admin\DescriptionServiceController@editdescriptionserviceget')->middleware('permission:description-service-edit');
Route::post('/admin/description_service/edit/{id}', 'admin\DescriptionServiceController@editdescriptionservicepost')->middleware('permission:description-service-edit');
/*---------------program-------*/
Route::get('/admin/program', 'admin\ProgramController@indexprogram')->middleware('permission:program-show');
Route::get('/admin/program/create', 'admin\ProgramController@createprogramget')->middleware('permission:program-create');
Route::post('/admin/program/create', 'admin\ProgramController@createprogrampost')->middleware('permission:program-create');
Route::get('/admin/program/edit/{id}', 'admin\ProgramController@editprogramget')->middleware('permission:program-edit');
Route::post('/admin/program/edit/{id}', 'admin\ProgramController@editprogrampost')->middleware('permission:program-edit');
/*---------------description_program-------*/
Route::get('/admin/description_program', 'admin\DescriptionProgramController@indexdescriptionprogram')->middleware('permission:description-program-show');
Route::get('/admin/description_program/create', 'admin\DescriptionProgramController@createdescriptionprogramget')->middleware('permission:description-program-create');
Route::post('/admin/description_program/create', 'admin\DescriptionProgramController@createdescriptionprogrampost')->middleware('permission:description-program-create');
Route::get('/admin/description_program/delete/{id}', 'admin\DescriptionProgramController@deletedescriptionprogram')->middleware('permission:description-program-delete');
Route::get('/admin/description_program/edit/{id}', 'admin\DescriptionProgramController@editdescriptionprogramget')->middleware('permission:description-program-edit');
Route::post('/admin/description_program/edit/{id}', 'admin\DescriptionProgramController@editdescriptionprogrampost')->middleware('permission:description-program-edit');
/*---------------requirement-------*/
Route::get('/admin/requirement', 'admin\RequirementController@indexrequirement')->middleware('permission:requirement-show');
Route::get('/admin/requirement/create', 'admin\RequirementController@createrequirementget')->middleware('permission:requirement-create');
Route::post('/admin/requirement/create', 'admin\RequirementController@createrequirementpost')->middleware('permission:requirement-create');
Route::get('/admin/requirement/delete/{id}', 'admin\RequirementController@deleterequirement')->middleware('permission:requirement-delete');
Route::get('/admin/requirement/edit/{id}', 'admin\RequirementController@editrequirementget')->middleware('permission:requirement-edit');
Route::post('/admin/requirement/edit/{id}', 'admin\RequirementController@editrequirementpost')->middleware('permission:requirement-edit');
/*---------------national_curriculum-------*/
Route::get('/admin/national_curriculum', 'admin\NationalCurriculumController@indexnationalcurriculum')->middleware('permission:national-curriculum-show');
Route::get('/admin/national_curriculum/create', 'admin\NationalCurriculumController@createnationalcurriculumget')->middleware('permission:national-curriculum-create');
Route::post('/admin/national_curriculum/create', 'admin\NationalCurriculumController@createnationalcurriculumpost')->middleware('permission:national-curriculum-create');
Route::get('/admin/national_curriculum/delete/{id}', 'admin\NationalCurriculumController@deletenationalcurriculum')->middleware('permission:national-curriculum-delete');
Route::get('/admin/national_curriculum/edit/{id}', 'admin\NationalCurriculumController@editnationalcurriculumget')->middleware('permission:national-curriculum-edit');
Route::post('/admin/national_curriculum/edit/{id}', 'admin\NationalCurriculumController@editnationalcurriculumpost')->middleware('permission:national-curriculum-edit');
/*---------------american_high_school-------*/
Route::get('/admin/american_high_school', 'admin\AmericanHighSchoolController@indexamericanhighschool')->middleware('permission:american-high-school-show');
Route::get('/admin/american_high_school/create', 'admin\AmericanHighSchoolController@createamericanhighschoolget')->middleware('permission:american-high-school-create');
Route::post('/admin/american_high_school/create', 'admin\AmericanHighSchoolController@createamericanhighschoolpost')->middleware('permission:american-high-school-create');
Route::get('/admin/american_high_school/delete/{id}', 'admin\AmericanHighSchoolController@deleteamericanhighschool')->middleware('permission:american-high-school-delete');
Route::get('/admin/american_high_school/edit/{id}', 'admin\AmericanHighSchoolController@editamericanhighschoolget')->middleware('permission:american-high-school-edit');
Route::post('/admin/american_high_school/edit/{id}', 'admin\AmericanHighSchoolController@editamericanhighschoolpost')->middleware('permission:american-high-school-edit');
/*---------------Gce-------*/
Route::get('/admin/gce', 'admin\GceController@indexgce')->middleware('permission:gce-show');
Route::get('/admin/gce/create', 'admin\GceController@creategceget')->middleware('permission:gce-create');
Route::post('/admin/gce/create', 'admin\GceController@creategcepost')->middleware('permission:gce-create');
Route::get('/admin/gce/delete/{id}', 'admin\GceController@deletegce')->middleware('permission:gce-delete');
Route::get('/admin/gce/edit/{id}', 'admin\GceController@editgceget')->middleware('permission:gce-edit');
Route::post('/admin/gce/edit/{id}', 'admin\GceController@editgcepost')->middleware('permission:gce-edit');
/*---------------international_baccalaureate-------*/
Route::get('/admin/international_baccalaureate', 'admin\InternationalBaccalaureateController@indexinternationalbaccalaureate')->middleware('permission:international-baccalaureate-show');
Route::get('/admin/international_baccalaureate/create', 'admin\InternationalBaccalaureateController@createinternationalbaccalaureateget')->middleware('permission:international-baccalaureate-create');
Route::post('/admin/international_baccalaureate/create', 'admin\InternationalBaccalaureateController@createinternationalbaccalaureatepost')->middleware('permission:international-baccalaureate-create');
Route::get('/admin/international_baccalaureate/delete/{id}', 'admin\InternationalBaccalaureateController@deleteinternationalbaccalaureate')->middleware('permission:international-baccalaureate-delete');
Route::get('/admin/international_baccalaureate/edit/{id}', 'admin\InternationalBaccalaureateController@editinternationalbaccalaureateget')->middleware('permission:international-baccalaureate-edit');
Route::post('/admin/international_baccalaureate/edit/{id}', 'admin\InternationalBaccalaureateController@editinternationalbaccalaureatepost')->middleware('permission:international-baccalaureate-edit');
/*---------------call_us-------*/
Route::get('/admin/call_us/', 'admin\CallUsController@indexcallus')->middleware('permission:call-us-show');
Route::get('/admin/call_us/delete/{id}', 'admin\CallUsController@deletecallus')->middleware('permission:call-us-delete');
/*---------------book-------*/
Route::get('/admin/book/', 'admin\BookController@indexbook')->middleware('permission:book-show');
Route::get('/admin/book/delete/{id}', 'admin\BookController@deletebook')->middleware('permission:book-delete');
/*---------------Frontend-------*/

Route::group(['middleware' => 'language'], function () {
    Route::post('/setLang', 'frontend\HomeController@language');
    Route::get('/', 'frontend\HomeController@home');
    Route::get('/about_us', 'frontend\HomeController@about_us');
    Route::get('/contact_us', 'frontend\HomeController@contact_us');
    Route::post('/call_us', 'frontend\HomeController@call_us');
    Route::get('/program/{slug}/{slug1}', 'frontend\HomeController@program');
    Route::get('/requirement/{slug}', 'frontend\HomeController@requirement');
    Route::get('/country_info/{slug}', 'frontend\HomeController@country_info');
    Route::get('/certificates/{slug}', 'frontend\HomeController@certificates');
    Route::get('/service/{slug}/{slug1}', 'frontend\HomeController@service');
    Route::get('/book', 'frontend\HomeController@bookget');
    Route::post('/book', 'frontend\HomeController@bookpost');


});

