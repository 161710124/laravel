<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Woy</h1>'
    .'Selamat Datang Di Web APP saya<br>'
    .'Laravel, Aduduuuuhhhh.';
});

//route parameter
Route::get('/kantin/{mkn}/{mnm}/{ngm}',function($mk,$mn,$ml){
	return 'makan '.$mk.'<br>minum '.$mn.'<br>ngemil '.$ml;
});

Route::get('user/{nama?}',function($a="Jhonson"){
	return $a;
});
