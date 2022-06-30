<?php

use Illuminate\Support\Facades\Route;

//employee side start
use App\Http\Controllers\EmployeeLoginController;
use App\Http\Controllers\EmployeeWrittingController;
use App\Http\Controllers\EmployeeSpeakingController;

//admin side start
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\SubCatagoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UserPackageController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SpeakingController;
use App\Http\Controllers\SpeakingTestController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\WrittingController;
use App\Http\Controllers\WrittingTestController;
use App\Http\Controllers\WrittingAnswerController;
use App\Http\Controllers\ListeningTestController;
use App\Http\Controllers\ListeningQueController;
use App\Http\Controllers\ListeningResController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ReportController;

//clientside start
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\UserArticleController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\UserTeamController;
use App\Http\Controllers\ClientPackageController;
use App\Http\Controllers\UserMyTestController;
use App\Http\Controllers\UserCartController;
use App\Http\Controllers\UserReadingController;
use App\Http\Controllers\UserWrittingController;
use App\Http\Controllers\UserSpeakingController;
use App\Http\Controllers\UserListeningController;
use App\Http\Controllers\UserCheckoutController;
use App\Http\Controllers\UserfeedbackController;
use App\Http\Controllers\UserProgressController;
//clientside over


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

use App\Http\Middleware\CheckAdminLogin;
use App\Http\Middleware\CheckEmployeeLogin;
use App\Http\Middleware\CheckUserLogin;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[AdminLoginController::class,'login']);
Route::get('/logout',[AdminLoginController::class,'logout']);
Route::post('/checkloginadmin',[AdminLoginController::class,'checkloginadmin']);
Route::get('/admin/createaccount',[AdminLoginController::class,'createaccount']);


Route::get('employee/emplogin',[EmployeeLoginController::class,'emplogin']);
Route::get('/emplogout',[EmployeeLoginController::class,'emplogout']);
Route::post('/empchecklogin',[EmployeeLoginController::class,'empchecklogin']);
Route::get('/employee/empcreateaccount',[EmployeeLoginController::class,'empcreateaccount']);
Route::get('/employee/empforgetpassword',[EmployeeLoginController::class,'empforgetpassword']);

Route::middleware([CheckEmployeeLogin::class])->group(function (){

//employee Panel start

Route::get('/employee/empdashboard',[EmployeeLoginController::class,'empdashboard']);

Route::get('/employee/changepassword',[EmployeeLoginController::class,'changepassword']);

Route::get('/employee/writing/viewwritingtest/{type}',[EmployeeWrittingController::class,'viewwrittingtest']);
Route::get('/employee/writing/writtingtestdetail/{id}',[EmployeeWrittingController::class,'detailtest']);
Route::post('/employee/storwritingdata',[EmployeeWrittingController::class,'storwritingdata']);

Route::get('employee/speaking/speakingtest/{type}',[EmployeeSpeakingController::class,'viewspeakingtest']);
Route::get('/employee/speaking/speakingtestdetail/{id}',[EmployeeSpeakingController::class,'viewspeakingdetail']);
Route::post('/storespeakingdata',[EmployeeSpeakingController::class,'storespeakingdata']);

//employee panel end

});


Route::middleware([CheckAdminLogin::class])->group(function () {



//admin panel start
Route::get('/admin/dashboard',[AdminLoginController::class,'dashboard']);
Route::get('/admin/forgetpassword',[AdminLoginController::class,'forgetpassword']);
Route::post('/checkemail',[AdminLoginController::class,'checkpassword']);
Route::get('/admin/changepassword',[AdminLoginController::class,'changepassword']);
Route::post('/admin/changepasswordins',[AdminLoginController::class,'changepasswordins']);

Route::get('/admin/catagory/add',[CatagoryController::class,'add']);
Route::post('/admin/catagory/edit',[CatagoryController::class,'edit']);
Route::post('/admin/catagory/insert',[CatagoryController::class,'insert']);
Route::get('/admin/catagory/view',[CatagoryController::class,'view']);
Route::post('/admin/catagory/delete',[CatagoryController::class,'delete']);
Route::get('/admin/catagory/update/{id}',[CatagoryController::class,'update']);

Route::get('/admin/report/viewreport',[ReportController::class,'viewreport']);

Route::get('/admin/subcatagory/subadd',[SubCatagoryController::class,'subadd']);
Route::post('/admin/subcatagory/edit',[SubCatagoryController::class,'edit']);
Route::post('/admin/subcatagory/subinsert',[SubCatagoryController::class,'subinsert']);
Route::post('/admin/subcatagory/subdelete',[SubCatagoryController::class,'subdelete']);
Route::get('/admin/subcatagory/subview',[SubCatagoryController::class,'subview']);
Route::get('/admin/subcatagory/subupdate/{id}',[SubCatagoryController::class,'subupdate']);

Route::get('/admin/product/addproduct',[ProductController::class,'addpro']);
Route::post('/admin/product/editproduct',[ProductController::class,'editproduct']);
Route::post('/admin/product/insertprod',[ProductController::class,'insertprod']);
Route::post('/admin/product/deletepro',[ProductController::class,'deletepro']);
Route::get('/admin/product/viewproduct/{subcatid?}',[ProductController::class,'viewpro']);
Route::get('/admin/product/updateproduct/{id}',[ProductController::class,'updatepro']);
Route::get('/admin/product/detailproduct/{id}',[ProductController::class,'detailpro']);

Route::get('/user/viewuser',[UserController::class,'viewuser']);
Route::get('/user/detailuser/{id}',[UserController::class,'detailuser']);
Route::post('/user/deleteuser',[UserController::class,'deleteuser']);

Route::get('/admin/cart/viewcart',[CartController::class,'viewcart']);

Route::get('/admin/order/viewporder',[OrderController::class,'viewporder']);
Route::get('/admin/order/viewaorder',[OrderController::class,'viewaorder']);
Route::get('/admin/order/viewcomporder',[OrderController::class,'viewcomporder']);
Route::get('/admin/order/viewcorder',[OrderController::class,'viewcorder']);
Route::get('/admin/order/changeorder/{id}',[OrderController::class,'status_change_approved']);
Route::get('/admin/order/changeordercom/{id}',[OrderController::class,'status_change_completed']);
Route::get('/admin/order/cancleorder/{id}',[OrderController::class,'status_change_cancle']);
Route::get('/admin/order/detailorder/{id}',[OrderController::class,'detailorder']);
Route::get('/admin/order/generatebill/{id}',[OrderController::class,'generatebill']);

Route::get('/admin/items/viewitem',[ItemController::class,'viewitem']);
Route::get('/admin/generatePDF/{id}',[OrderController::class,'generatePDF']);

Route::get('/admin/location/state',[LocationController::class,'state']);
Route::post('/admin/location/editstate',[LocationController::class,'editstate']);
Route::post('/admin/location/insertstate',[LocationController::class,'insertstate']);
Route::post('/admin/location/deletestate',[LocationController::class,'deletestate']);
Route::get('/admin/location/city',[LocationController::class,'city']);
Route::post('/admin/location/editcity',[LocationController::class,'editcity']);
Route::post('/admin/location/insertcity',[LocationController::class,'insertcity']);
Route::post('/admin/location/deletecity',[LocationController::class,'deletecity']);
Route::get('/admin/location/viewstate',[LocationController::class,'viewstate']);
Route::get('/admin/location/viewcity',[LocationController::class,'viewcity']);
Route::get('/admin/location/updatecity/{id}',[LocationController::class,'updatecity']);
Route::get('/admin/location/updatestate/{id}',[LocationController::class,'updatestate']);

Route::get('/admin/employee/addemp',[EmployeeController::class,'addemp']);
Route::post('/admin/employee/editemp',[EmployeeController::class,'editemp']);
Route::post('/admin/employee/insertemp',[EmployeeController::class,'insertemp']);
Route::post('/admin/employee/deleteemp',[EmployeeController::class,'deleteemp']);
Route::get('/admin/employee/viewemp',[EmployeeController::class,'viewemp']);
Route::get('/admin/employee/updateemp/{id}',[EmployeeController::class,'updateemp']);
Route::get('/admin/employee/detailemp/{id}',[EmployeeController::class,'detailemp']);
Route::get('/admin/employee/changestatus/{id}',[EmployeeController::class,'changestatus']);


Route::get('/admin/package/addpackage',[PackageController::class,'addpackage']);
Route::post('/admin/package/editpackage',[PackageController::class,'editpackage']);
Route::post('/admin/package/insertpackage',[PackageController::class,'insertpackage']);
Route::post('/admin/package/deletepackage',[PackageController::class,'deletepackage']);
Route::get('/admin/package/viewpackage',[PackageController::class,'viewpackage']);
Route::get('/admin/package/updatepackage/{id}',[PackageController::class,'updatepackage']);
Route::get('/admin/package/detailpackage/{id}',[PackageController::class,'detailpackage']);

Route::get('/admin/userpackage/viewuserpackage',[UserPackageController::class,'viewuserpackage']);

Route::get('/admin/result/addresult',[ResultController::class,'addresult']);
Route::post('/admin/result/editresult',[ResultController::class,'editresult']);
Route::post('/admin/result/insertresult',[ResultController::class,'insertresult']);
Route::post('/admin/result/deleteresult',[ResultController::class,'deleteresult']);
Route::get('/admin/result/viewresult',[ResultController::class,'viewresult']);
Route::get('/admin/result/updateresult/{id}',[ResultController::class,'updateresult']);
Route::get('/admin/result/detailresult/{id}',[ResultController::class,'detailresult']);

Route::get('/admin/answer/viewanswer',[AnswerController::class,'viewanswer']);

Route::get('/admin/speaking/addspeaking',[SpeakingController::class,'addspeaking']);
Route::post('/admin/speaking/editspeaking',[SpeakingController::class,'editspeaking']);
Route::post('/admin/speaking/insertspeaking',[SpeakingController::class,'insertspeaking']);
Route::post('/admin/speaking/deletespeaking',[SpeakingController::class,'deletespeaking']);
Route::get('/admin/speaking/viewspeaking',[SpeakingController::class,'viewspeaking']);
Route::get('/admin/speaking/updatespeaking/{id}',[SpeakingController::class,'updatespeaking']);

// Route::get('/admin/speakingtest/addspeakingtest',[SpeakingTestController::class,'addspeakingtest']);
// Route::post('/admin/speakingtest/editspeakingtest',[SpeakingTestController::class,'editspeakingtest']);
// Route::post('/admin/speakingtest/insertspeakingtest',[SpeakingTestController::class,'insertspeakingtest']);
// Route::post('/admin/speakingtest/deletespeakingtest',[SpeakingTestController::class,'deletespeakingtest']);
// Route::get('/admin/speakingtest/viewspeakingtest',[SpeakingTestController::class,'viewspeakingtest']);
// Route::get('/admin/speakingtest/updatespeakingtest/{id}',[SpeakingTestController::class,'updatespeakingtest']);

Route::get('/admin/test/viewtest/{type}',[TestController::class,'viewtest']);
Route::get('/admin/test/detailtest/{id}',[TestController::class,'detailtest']);
Route::post('/admin/test/inserttest',[TestController::class,'inserttest']);

Route::get('/admin/writting/addwritting',[WrittingController::class,'addwritting']);
Route::post('/admin/writting/editwritting',[WrittingController::class,'editwritting']);
Route::get('/admin/writting/detailwriting/{id}',[WrittingController::class,'detailwriting']);
Route::post('/admin/writting/insertwritting',[WrittingController::class,'insertwritting']);
Route::post('/admin/writting/deletewritting',[WrittingController::class,'deletewritting']);
Route::get('/admin/writting/viewwritting',[WrittingController::class,'viewwritting']);
Route::get('/admin/writting/updatewritting/{id}',[WrittingController::class,'updatewritting']);

Route::get('/admin/writtingtest/addwrittingtest',[WrittingTestController::class,'addwrittingtest']);
Route::post('/admin/writtingtest/editwrittingtest',[WrittingTestController::class,'editwrittingtest']);
Route::post('/admin/writtingtest/insertwrittingtest',[WrittingTestController::class,'insertwrittingtest']);
Route::post('/admin/writtingtest/deletewrittingtest',[WrittingTestController::class,'deletewrittingtest']);
Route::get('/admin/writtingtest/viewwrittingtest/{type}',[WrittingTestController::class,'viewwrittingtest']);
Route::get('/admin/writtingtest/updatewrittingtest/{id}',[WrittingTestController::class,'updatewrittingtest']);

Route::get('/admin/writting_ans/viewwrittingans',[WrittingAnswerController::class,'viewwrittingans']);

Route::get('/admin/listeningtest/addlisteningtest',[ListeningTestController::class,'addlisteningtest']);
Route::post('/admin/listeningtest/editlisteningtest',[ListeningTestController::class,'editlisteningtest']);
Route::get('/admin/listeningtest/detaillistning/{id}',[ListeningTestController::class,'detaillistning']);
Route::post('/admin/listeningtest/insertlisteningtest',[ListeningTestController::class,'insertlisteningtest']);
Route::post('/admin/listeningtest/deletelisteningtest',[ListeningTestController::class,'deletelisteningtest']);
Route::get('/admin/listeningtest/viewlisteningtest',[ListeningTestController::class,'viewlisteningtest']);
Route::get('/admin/listeningtest/updatelisteningtest/{id}',[ListeningTestController::class,'updatelisteningtest']);

Route::get('/admin/listeningque/addlisteningque',[ListeningQueController::class,'addlisteningque']);
Route::post('/admin/listeningque/editlisteningque',[ListeningQueController::class,'editlisteningque']);
Route::get('/admin/listeningque/detaillistningque/{id}',[ListeningQueController::class,'detaillistningque']);
Route::post('/admin/listeningque/insertlisteningque',[ListeningQueController::class,'insertlisteningque']);
Route::post('/admin/listeningque/deletelisteningque',[ListeningQueController::class,'deletelisteningque']);
Route::get('/admin/listeningque/viewlisteningque',[ListeningQueController::class,'viewlisteningque']);
Route::get('/admin/listeningque/updatelisteningque/{id}',[ListeningQueController::class,'updatelisteningque']);

Route::get('/admin/listeningres/viewlisteningres',[ListeningResController::class,'viewlisteningres']);

Route::get('/admin/article/addarticle',[ArticleController::class,'addarticle']);
Route::post('/admin/article/editarticle',[ArticleController::class,'editarticle']);
Route::post('/admin/article/insertarticle',[ArticleController::class,'insertarticle']);
Route::get('/admin/article/detailarticle/{id}',[ArticleController::class,'detailarticle']);
Route::post('/admin/article/deletearticle',[ArticleController::class,'deletearticle']);
Route::get('/admin/article/viewarticle',[ArticleController::class,'viewarticle']);
Route::get('/admin/article/updatearticle/{id}',[ArticleController::class,'updatearticle']);



Route::get('/admin/comment/viewcomment/{articleid?}',[CommentController::class,'viewcomment']);

Route::get('/admin/likes/viewlikes/{likeid?}',[LikesController ::class,'viewlikes']);

Route::get('/admin/log/addlog',[LogController ::class,'addlog']);
Route::post('/admin/log/editlog',[LogController ::class,'editlog']);
Route::post('/admin/log/insertlog',[LogController ::class,'insertlog']);
Route::post('/admin/log/deletelog',[LogController ::class,'deletelog']);
Route::get('/admin/log/viewlog',[LogController ::class,'viewlog']);
Route::get('/admin/log/updatelog/{id}',[LogController ::class,'updatelog']);

Route::get('/admin/appointments/penappointments',[AppointmentController ::class,'penappointments']);
Route::get('/admin/appointments/apdetails/{id}',[AppointmentController ::class,'apdetails']);
Route::get('/admin/comappointments/comappointments/view',[AppointmentController ::class,'comappointments']);
Route::get('/admin/appointments/changestatus/{id}',[AppointmentController::class,'status_change_complated']);

//admin panel end

});

//client side start

Route::get('/client/login',[UserLoginController::class,'login']);
Route::post('/checklogin',[UserLoginController::class,'checklogin']);
Route::get('/client/logout',[UserLoginController::class,'logout']);

Route::get('/client/registration',[UserLoginController::class,'registration']);
Route::get('/client/otp',[UserLoginController::class,'otp']);
Route::post('/client/checkotp',[UserLoginController::class,'checkotp']);
Route::post('/client/insertuser',[UserLoginController::class,'insertuser']);
Route::get('/client/forgetpassword',[UserLoginController::class,'forgetpassword']);

Route::get('/client/viewproduct',[UserProductController::class,'viewproduct']);

Route::get('/client/productdetails/{id}',[UserProductController::class,'productdetails']);

Route::get('/client/index',[IndexController::class,'viewindex']);

Route::get('/client/aboutus',[AboutusController::class,'viewaboutus']);

Route::get('/client/contactus',[ContactusController::class,'viewcontactus']);

Route::get('/client/article',[UserArticleController::class,'viewarticle']);
Route::get('/client/articledetails/{id}',[UserArticleController::class,'viewarticledetails']);
Route::post('/user/insertarticle',[UserArticleController::class,'insertarticle']);

Route::get('/client/viewteam',[UserTeamController::class,'viewteam']);
Route::get('/client/teamdetails/{id}',[UserTeamController::class,'teamdetail']);


Route::middleware([CheckUserLogin::class])->group(function (){

Route::get('/client/userorder',[UserOrderController::class,'vieworder']);

Route::get('/client/userprogress',[UserProgressController::class,'viewprogress']);

Route::get('/client/userorderdetails/{id}',[UserOrderController::class,'vieworderdetail']);

Route::get('/client/viewpackage',[ClientPackageController::class,'viewpackage']);
Route::get('/client/packagedetails/{id}',[ClientPackageController::class,'viewpackagedetail']);
Route::get('/client/insertpackagedata',[ClientPackageController::class,'insertdata']);

Route::get('/client/usertest',[UserMyTestController::class,'viewmytest']);
Route::get('/client/usertest/viewusertest/{id}',[UserMyTestController::class,'viewusertest']);
Route::get('/client/usertest/viewusertestspeaking/{id}',[UserMyTestController::class,'viewusertestspeaking']);
Route::get('/client/usertest/viewusertestreading/{id}',[UserMyTestController::class,'viewusertestreading']);
Route::get('/client/usertest/viewusertestlistening/{id}',[UserMyTestController::class,'viewusertestlistening']);

Route::get('/client/usercart',[UserCartController::class,'viewcart']);
Route::get('client/cartupdate/plus/{id}',[UserCartController::class,'cartupdateplus']);
Route::get('client/cartupdate/minus/{id}',[UserCartController::class,'cartupdateminus']);
Route::post('/client/usercart/deleteitem',[UserCartController::class,'delete']);

Route::get('/client/checkout',[UserCheckoutController::class,'viewcheckout']);
Route::post('/client/checkout2',[UserCheckoutController::class,'viewcheckout2']);
Route::get('/client/userorder/insertuserorder',[UserCheckoutController::class,'insertorder']);
Route::get('client/thankyou',[UserCheckoutController::class,'thankyou']);

Route::get('/client/reading',[UserReadingController::class,'viewreading']);
Route::get('/client/readingtest',[UserReadingController::class,'viewreadingtest']);
Route::post('/client/viewreadingmain/{id}',[UserReadingController::class,'viewreadingmain']);
Route::post('/client/insertreadingans',[UserReadingController::class,'insertreadingans']);

Route::post('/client/insert',[UserProductController::class,'insertproduct']);

Route::get('/client/writting',[UserWrittingController::class,'viewwritting']);
Route::get('/client/writtingtest',[UserWrittingController::class,'viewwrittingtest']);
Route::post('/client/insertwrittingans',[UserWrittingController::class,'insertwrittingans']);
Route::post('/client/viewwrittingmain/{id}',[UserWrittingController::class,'viewwrittingmain']);

Route::get('/client/speaking',[UserSpeakingController::class,'viewspeaking']);
Route::get('/client/speakingtest',[UserSpeakingController::class,'viewspeakingtest']);
Route::post('/client/viewspeakingmain/{id}',[UserSpeakingController::class,'viewspeakingmain']);
Route::post('/client/insertspeakingans',[UserSpeakingController::class,'insertspeakingans']);

Route::get('/client/listening',[UserListeningController::class,'viewlistening']);
Route::get('/client/listeningtest',[UserListeningController::class,'viewlisteningtest']);
Route::post('/client/viewlisteningmain/{id}',[UserListeningController::class,'viewlisteningmain']);
Route::post('/client/insertlisteningans',[UserListeningController::class,'insertlisteningans']);

Route::get('/client/feedback',[UserfeedbackController::class,'feedback']);
Route::post('/client/add',[UserfeedbackController::class,'insert']);

Route::get('/client/appointment',[AppointmentController::class,'Appointment']);
Route::post('/client/insertappoitment',[AppointmentController::class,'insert']);

Route::get('/addlikes/{id}',[UserArticleController::class,'addlikes']);


});
//client side end
