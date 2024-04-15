<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix'=>'admin'],function(){

    Route::get('/',[AdminController::class, 'index'] );
    Route::get('/signout',[AdminController::class, 'signout'])->name('admin-signout');
    Route::post('/login',[AdminController::class, 'auth'])->name('admin-login');


        Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin-dashboard');
        Route::group(['prefix' => 'religion'], function(){
            Route::get('/', [RelegionController::class, 'index'])->name('religion');
            Route::get('/create', [RelegionController::class, 'create'])->name('create-religion');
            Route::post('/store', [RelegionController::class, 'store'])->name('store-religion');
            Route::get('/edit/{id}', [RelegionController::class, 'edit'])->name('edit-religion');
            Route::post('/update', [RelegionController::class, 'update'])->name('update-religion');
            Route::get('/delete/{id}', [RelegionController::class, 'delete'])->name('delete-religion');
            Route::get('/active/{id}', [RelegionController::class, 'active'])->name('active-religion');
            Route::get('/in_active/{id}', [RelegionController::class, 'inactive'])->name('in-active-religion');
        });

        Route::group(['prefix' => 'community'], function(){
            Route::get('/', [CommunityController::class, 'index'])->name('community');
            Route::post('/store', [CommunityController::class, 'store'])->name('store-community');
            Route::get('/edit/{id}', [CommunityController::class, 'edit'])->name('edit-community');
            Route::post('/update', [CommunityController::class, 'update'])->name('update-community');
            Route::get('/status/{id}/{code}', [CommunityController::class, 'status'])->name('status-community');
        });
        Route::group(['prefix' => 'language'], function(){
            Route::get('/', [LanguageController::class, 'index'])->name('language');
            Route::post('/store', [LanguageController::class, 'store'])->name('store-language');
        });
        
        Route::group(['prefix' => 'employment'], function(){
            Route::get('/', [EmploymentController::class, 'index'])->name('employment');
            Route::post('/store', [EmploymentController::class, 'store'])->name('store-employment');
        });
        
        Route::group(['prefix' => 'Occupation'], function(){
            Route::get('/', [OccupationController::class, 'index'])->name('occupation');
            Route::post('/store', [OccupationController::class, 'store'])->name('store-occupation');
        });
   
});

Route::get('/',[FrontController::class,'index']);
Route::get('/about',[FrontController::class,'about']);
Route::get('/faq',[FrontController::class,'faq']);
Route::get('/contact',[FrontController::class,'contact']);
Route::get('/wedding',[FrontController::class,'wedding']);
Route::get('/matching_profiles',[FrontController::class,'matching_profiles']);
Route::get('/plans',[FrontController::class,'plans']);


Route::get('user',[UsersController::class, 'index']);
Route::get('user/signup',[UsersController::class, 'signup']);
Route::post('user/signup_process',[UsersController::class, 'signup_process'])->name('signup.manage_signup_process');
Route::get('user/profile_details/{id}',[ProfileController::class, 'profile_details']);
Route::post('user/profile_details_process',[ProfileController::class, 'manage_profile_details'])->name('profile_details.profile_details_process');
Route::get('user/preferred_details/{id}',[ProfileController::class, 'preferred_details']);
Route::post('user/preferred_details_process',[ProfileController::class,'manage_preferred_details'])->name('preferred_details.preferred_details_process');
Route::get('user/match_making/{id}',[MatchMakingController::class, 'match_making']);
Route::post('user/match_making_process',[MatchMakingController::class,'manage_match_making'])->name('match_making.match_making_process');

Route::get('user/verification/{id}', [UsersController::class, 'verification']);
Route::get('user/plan_details/{id}', [UsersController::class, 'plan_details']);
Route::get('user/about_self/{id}', [UsersController::class, 'about_self']);
Route::post('user/about_self_process',[UsersController::class, 'manage_about_self'])->name('about_self.about_self_process');
Route::post('user/auth',[UsersController::class, 'auth'])->name('users.auth');

Route::group(['middleware'=>'users_auth'],function(){
    Route::get('user/dashboard',[UsersController::class,'dashboard']);
    Route::get('user/profile_view',[UsersController::class,'profile_view']);
    Route::get('user/matching_profiles',[MatchMakingController::class, 'matching_profiles']);
    Route::get('user/profile_interests',[MatchMakingController::class, 'profile_interests']);
    Route::get('user/profile_plan',[MatchMakingController::class, 'profile_plan']);
    Route::get('user/chat_lists',[MatchMakingController::class, 'chat_lists']);
    Route::get('user/profile_setting',[MatchMakingController::class, 'profile_setting']);
    Route::get('user/profile_detail_view',[MatchMakingController::class, 'profile_detail_view']);
    Route::post('user/matching_profiles/interests/{id}',[MatchMakingController::class, 'expressinterests'])->name('matching_profiles.expressinterests');

    Route::get('user/logout', function(){
        session()->forget('USERS_LOGIN');
        session()->forget('USERS_ID');
        session()->flash('error','Logout Successfully');
        return redirect('user');
    });
});