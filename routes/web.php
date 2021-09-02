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

//nav to /page
Route::get('/', 'Pages\PageController@index')->name('home');


//利用者の画像をアップロード
Route::get('/profile/','Pages\ProfileController@index')->name('profile');
Route::post('/profile/update','Pages\ProfileController@updateProfile')->name('profile.update');
Route::post('/profile/passwordchange','Pages\ProfileController@passwordchange')->name('profile.passwordchange');


Route::post('app','Pages\Moshikomi@getmoshikomi')->name('app');
Route::post('cancel','Pages\ProfileController@cancelmoshikomi')->name('cancel');


//管理者のページ
Route::middleware(['admin'])->prefix('admin')->group(function(){
	Route::get('/', function(){
		return view('admin.index');
	})->name('adminIndex');
	Route::resource('infor', 'Admins\InforController')->except('show');
	Route::resource('student', 'Admins\StudentController')->except('show');
	Route::resource('sermina', 'Admins\SerminaController')->except('show');
	Route::resource('book', 'Admins\BookController');
	Route::post('destroy','Admins\BookController@destroy')->name('destroy');
	Route::post('import', 'Admins\InforController@import')->name('import');
	Route::get('export', 'Admins\InforController@export')->name('export');
	
});

Route::get('postsearch','Pages\SearchController@searchName')->name('postsearch');
Route::get('search','Pages\SearchController@searchName')->name('search');

//登録、ログインの部分
//Route::post('/login','Auth\LoginController@credentials');
Auth::routes();
