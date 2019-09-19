<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tambah', 'Blogcn@get2', function () {
    return view('tambah');
});

Route::get('/tampil', 'Blogcn@get', function () {
    return view('tampil');
});

Route::post('/save','Blogcn@tambah')->name('save');

Route::get('/edit/{id}','Blogcn@edit')->name('edit');

Route::post('/editl','Blogcn@update')->name('edit.simpan');

Route::get('/del/{id}','Blogcn@destroy')->name('del');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('/portofolio', 'PortofolioController@index');

Route::get('/article', 'blogcn@get1');

Route::get('/cari/{id}',function ($id){
    $kate = DB::table('article')->where('id_kategori', $id)->get();
    $title = DB::table('category')->where('id', $id)->get();
    return view('article1', ['kate'=>$kate,'judul'=>$title]);
})->name('article1.lol');

Route::resource('/member', 'DataMemberController');

Route::get('/member', 'DataMemberController@getData');  

Route::get('/index', function () {
    return view('index');
});

Route::get('/jenis', 'DataMemberController@jenis', function(){
    return view('create');
});

Route::post('/simpan', 'DataMemberController@proses_simpan')->name('blog.simpan');

Route::get('/edit{id}', 'DataMemberController@edit')->name('blog.edit');

Route::post('/update', 'DataMemberController@update')->name('blog.update');

Route::get('/create', 'DataMemberController@simpan');

Route::get('/delete/{id}','DataMemberController@delete')->name('blog.delete');

Route::get('/readmore/{id}', function($id){
	$blog = Blog::where('id', '=', $id)->get();
	return view('readmore', ['blog'=> $blog]);
});

Route::get('/galeri','GaleriController@get1');

Route::get('/menugaleri',function(){
	return view('menugaleri');
});

Route::get('/menugaleri', 'GaleriController@get', function(){
	return view('menugaleri');
});

Route::get('getgaleri', 'GaleriController@get2',function(){
	return view('tambahgaleri');
});

Route::post('/tambahgaleri', 'GaleriController@tbh')->name('tambahgaleri');
Route::get('/savegaleri', 'GaleriController@tbh')->name('galeri.save');
Route::get('/deletegaleri/{id}', 'GaleriController@delete')->name('galeri.delete');
Route::get('product-export/{type}', 'MaatwebsiteDemoController@galeriExport')->name('galeri.export');
Route::get('dtables', 'GaleriController@dtables');

Route::get('kirimemail','MailController@basic_email');
Route::get('/sendhtmlemail','MailController@html_email');
Route::get('sendemail','MailController@send_email');

Route::get('/chart', 'ChartController@index');

Route::get('kategori', 'CategoryController@index');
Route::post('kategori', 'CategoryController@create');
Route::put('/kategori/{id}', 'CategoryController@update');
Route::delete('/kategori/{id}', 'CategoryController@delete');