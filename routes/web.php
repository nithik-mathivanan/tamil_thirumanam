<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;
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
            Route::get('/delete/{id}', [CommunityController::class, 'delete'])->name('delete-community');

        });
      Route::group(['prefix' => 'language'], function(){
            Route::get('/', [LanguageController::class, 'index'])->name('language');
            Route::post('/store', [LanguageController::class, 'store'])->name('store-language');
            Route::get('/edit/{id}', [LanguageController::class, 'edit'])->name('edit-language');
            Route::post('/update', [LanguageController::class, 'update'])->name('update-language');
            Route::get('/status/{id}/{code}', [LanguageController::class, 'status'])->name('status-language');
            Route::get('/delete/{id}', [LanguageController::class, 'delete'])->name('delete-language');
        });

      Route::group(['prefix' => 'employment'], function(){
            Route::get('/', [EmploymentController::class, 'index'])->name('employment');
            Route::post('/store', [EmploymentController::class, 'store'])->name('store-employment');
            Route::get('/edit/{id}', [EmploymentController::class, 'edit'])->name('edit-employment');
            Route::post('/update', [EmploymentController::class, 'update'])->name('update-employment');
            Route::get('/status/{id}/{code}', [EmploymentController::class, 'status'])->name('status-employment');
            Route::get('/delete/{id}', [EmploymentController::class, 'delete'])->name('delete-employment');
        });
      Route::group(['prefix' => 'Occupation'], function(){
            Route::get('/', [OccupationController::class, 'index'])->name('occupation');
            Route::post('/store', [OccupationController::class, 'store'])->name('store-occupation');
            Route::get('/edit/{id}', [OccupationController::class, 'edit'])->name('edit-occupation');
            Route::post('/update', [OccupationController::class, 'update'])->name('update-occupation');
            Route::get('/status/{id}/{code}', [OccupationController::class, 'status'])->name('status-occupation');
            Route::get('/delete/{id}', [OccupationController::class, 'delete'])->name('delete-occupation');
        });
      Route::group(['prefix' => 'profile'], function(){
            Route::get('/', [ProfileController::class, 'index'])->name('profile');
            Route::post('/store', [ProfileController::class, 'store'])->name('store-profile');
            Route::get('/edit/{id}', [ProfileController::class, 'edit'])->name('edit-profile');
            Route::post('/update', [ProfileController::class, 'update'])->name('update-profile');
            Route::get('/status/{id}/{code}', [ProfileController::class, 'status'])->name('status-profile');
            Route::get('/delete/{id}', [ProfileController::class, 'delete'])->name('delete-profile');

        });
      Route::group(['prefix' => 'jobtype'], function(){
            Route::get('/', [JobtypeController::class, 'index'])->name('jobtype');
            Route::post('/store', [JobtypeController::class, 'store'])->name('store-jobtype');
            Route::get('/edit/{id}', [JobtypeController::class, 'edit'])->name('edit-jobtype');
            Route::post('/update', [JobtypeController::class, 'update'])->name('update-jobtype');
            Route::get('/status/{id}/{code}', [JobtypeController::class, 'status'])->name('status-jobtype');
            Route::get('/delete/{id}', [JobtypeController::class, 'delete'])->name('delete-jobtype');

        });
    Route::group(['prefix' => 'education'], function(){
        Route::get('/', [EducationController::class, 'index'])->name('education');
        Route::post('/store', [EducationController::class, 'store'])->name('store-education');
        Route::get('/edit/{id}', [EducationController::class, 'edit'])->name('edit-education');
        Route::post('/update', [EducationController::class, 'update'])->name('update-education');
        Route::get('/status/{id}/{code}', [EducationController::class, 'status'])->name('status-education');
        Route::get('/delete/{id}', [EducationController::class, 'delete'])->name('delete-education');
    });
    Route::group(['prefix' => 'familystatus'], function(){
        Route::get('/', [FamilystatusController::class, 'index'])->name('familystatus');
        Route::post('/store', [FamilystatusController::class, 'store'])->name('store-familystatus');
        Route::get('/edit/{id}', [FamilystatusController::class, 'edit'])->name('edit-familystatus');
        Route::post('/update', [FamilystatusController::class, 'update'])->name('update-familystatus');
        Route::get('/status/{id}/{code}', [FamilystatusController::class, 'status'])->name('status-familystatus');
        Route::get('/delete/{id}', [FamilystatusController::class, 'delete'])->name('delete-familystatus');

    });
      Route::group(['prefix' => 'familytype'], function(){
        Route::get('/', [FamilytypeController::class, 'index'])->name('familytype');
        Route::post('/store', [FamilytypeController::class, 'store'])->name('store-familytype');
        Route::get('/edit/{id}', [FamilytypeController::class, 'edit'])->name('edit-familytype');
        Route::post('/update', [FamilytypeController::class, 'update'])->name('update-familytype');
        Route::get('/status/{id}/{code}', [FamilytypeController::class, 'status'])->name('status-familytype');
        Route::get('/delete/{id}', [FamilytypeController::class, 'delete'])->name('delete-familytype');
    });
      
      Route::group(['prefix' => 'familyvalue'], function(){
        Route::get('/', [FamilyvalueController::class, 'index'])->name('familyvalue');
        Route::post('/store', [FamilyvalueController::class, 'store'])->name('store-familyvalue');
        Route::get('/edit/{id}', [FamilyvalueController::class, 'edit'])->name('edit-familyvalue');
        Route::post('/update', [FamilyvalueController::class, 'update'])->name('update-familyvalue');
        Route::get('/status/{id}/{code}', [FamilyvalueController::class, 'status'])->name('status-familyvalue');
        Route::get('/delete/{id}', [FamilyvalueController::class, 'delete'])->name('delete-familyvalue');

    });
      Route::group(['prefix' => 'parentalstatus'], function(){
        Route::get('/', [ParentalstatusController::class, 'index'])->name('parentalstatus');
        Route::post('/store', [ParentalstatusController::class, 'store'])->name('store-parentalstatus');
        Route::get('/edit/{id}', [ParentalstatusController::class, 'edit'])->name('edit-parentalstatus');
        Route::post('/update', [ParentalstatusController::class, 'update'])->name('update-parentalstatus');
        Route::get('/status/{id}/{code}', [ParentalstatusController::class, 'status'])->name('status-parentalstatus');
        Route::get('/delete/{id}', [ParentalstatusController::class, 'delete'])->name('delete-parentalstatus');

    });

    Route::group(['prefix' => 'eatinghabbit'], function(){
        Route::get('/', [EatinghabbitController::class, 'index'])->name('eatinghabbit');
        Route::post('/store', [EatinghabbitController::class, 'store'])->name('store-eatinghabbit');
        Route::get('/edit/{id}', [EatinghabbitController::class, 'edit'])->name('edit-eatinghabbit');
        Route::post('/update', [EatinghabbitController::class, 'update'])->name('update-eatinghabbit');
        Route::get('/status/{id}/{code}', [EatinghabbitController::class, 'status'])->name('status-eatinghabbit');
        Route::get('/delete/{id}', [EatinghabbitController::class, 'delete'])->name('delete-eatinghabbit');

    });

    Route::group(['prefix' => 'countries'], function(){
        Route::get('/', [CountriesController::class, 'index'])->name('countries');
        Route::get('/status/{id}/{code}', [CountriesController::class, 'status'])->name('status-countries');
    });

     Route::group(['prefix' => 'states'], function(){
        Route::get('/', [StatesController::class, 'index'])->name('states');
        Route::get('/status/{id}/{code}', [StatesController::class, 'status'])->name('status-states');
    });

    Route::group(['prefix' => 'cities'], function(){
        Route::get('/', [CitiesController::class, 'index'])->name('cities');
        Route::get('/status/{id}/{code}', [CitiesController::class, 'status'])->name('status-cities');
    });

    Route::group(['prefix' => 'interest'], function(){
        Route::get('/', [InterestController::class, 'index'])->name('interest');
        Route::get('/view/{id}', [InterestController::class, 'view'])->name('edit-interest');
       
    });
   
});

Route::get('/',[FrontController::class,'index']);
Route::get('/about',[FrontController::class,'about']);
Route::get('/faq',[FrontController::class,'faq']);
Route::get('/contact',[FrontController::class,'contact']);
Route::get('/wedding',[FrontController::class,'wedding']);
Route::get('/matching_profiles',[FrontController::class,'matching_profiles']);
Route::get('/plans',[FrontController::class,'plans']);


Route::get('user/logout', function(){Auth::logout();return redirect()->route('user-login');})->name('user-logout');
Route::get('user',[UsersController::class, 'index'])->name('user-login');
Route::get('user/signup',[UsersController::class, 'signup']);
Route::post('user/signup_process',[UsersController::class, 'signup_process'])->name('signup.manage_signup_process');
Route::get('user/getCityByState/{id}',[UsersController::class, 'getCityByState']);
Route::get('user/profile_details/{id}',[UserProfileController::class, 'profile_details']);
Route::get('user/edit_profile_details/{id}',[UserProfileController::class, 'editprofile_details']);
Route::post('user/profile_details_process',[UserProfileController::class, 'manage_profile_details'])->name('profile_details.profile_details_process');
Route::get('user/getcasteByReligion/{id}',[UsersController::class, 'getcasteByReligion']);
Route::get('user/preferred_details/{id}',[UserProfileController::class,'preferred_details'])->name('user-preferred-details');
Route::post('user/preferred_details_process',[UserProfileController::class,'manage_preferred_details'])->name('preferred_details.preferred_details_process');
Route::get('user/match_making/{id}',[MatchMakingController::class, 'match_making']);
Route::post('user/match_making_process',[MatchMakingController::class,'manage_match_making'])->name('match_making.match_making_process');

Route::get('user/verification/{id}', [UsersController::class, 'verification']);
Route::get('user/plan_details/{id}', [UsersController::class, 'plan_details']);
Route::get('user/about_self/{id}', [UsersController::class, 'about_self']);
Route::post('user/about_self_process',[UsersController::class, 'manage_about_self'])->name('about_self.about_self_process');
Route::post('user/auth',[UsersController::class, 'auth'])->name('users.auth');

Route::group(['middleware'=>'auth'],function(){
    Route::get('user/dashboard',[UsersController::class,'dashboard'])->name('user-dashboard');
    Route::get('user/profile_view',[UsersController::class,'profile_view']);
    Route::get('user/profile_interests',[MatchMakingController::class, 'profile_interests']);
    Route::get('user/profile_plan',[MatchMakingController::class, 'profile_plan']);
    Route::get('user/chat_lists',[MatchMakingController::class, 'chat_lists']);
    Route::get('user/profile_setting',[MatchMakingController::class, 'profile_setting']);
    Route::get('user/profile_detail_view/{id}',[MatchMakingController::class, 'profile_detail_view']);
    Route::get('user/upload_photo/{id}',[UsersController::class, 'upload_photo']);
    Route::post('user/matching_profiles/interests/{id}',[MatchMakingController::class, 'expressinterests'])->name('matching_profiles.expressinterests');
    Route::get('user/send-interest/{user_id}',[MatchMakingController::class, 'sendInterest'])->name('send-interest');
    Route::get('user/accept-interest/{interest_id}',[MatchMakingController::class, 'acceptInterest'])->name('accept-interest');
    Route::get('user/deny-interest/{interest_id}',[MatchMakingController::class, 'denyInterest'])->name('deny-interest');
    Route::get('user/match_list',[MatchMakingController::class, 'matching_profiles'])->name('match-list');
    
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
