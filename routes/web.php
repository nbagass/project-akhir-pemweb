<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\AkunController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/register',function(){
    return view('register',[
        "title"=>"Register Page"
    ]);
});
Route::get('/login',function(){
    return view('login',[
        "title"=>"Login Page"
    ]);
});
Route::get('/dashboard',function(){
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});
Route::get('/mahasiswa',function(){
    return view('mahasiswa',[
        "title"=>"Mahasiswa"
    ]);
});
Route::get('/matakuliah',function(){
    return view('matakuliah',[
        "title"=>"Mata Kuliah"
    ]);
});
Route::get('/tambah_matkul',function(){
    return view('tambah_matkul',[
        "title"=>"Tambah Mata Kuliah"
    ]);
});
Route::get('/tambah_mhs',function(){
    return view('tambah_mhs',[
        "title"=>"Tambah Mahasiswa"
    ]);
});
Route::get('/edit_mhs/{id}',function(){
    return view('edit_mhs');
});
Route::get('/edit_matkul/{id}',function(){
    return view('edit_matkul');
});
Route::get('/mahasiswa/{id}/mahasiswa',function(){
    return redirect()->route('mahasiswa.index');
});
Route::get('/mahasiswa/{id}/matakuliah',function(){
    return redirect()->route('matakuliah.index');
});
Route::get('/matakuliah/{id}/mahasiswa',function(){
    return redirect()->route('mahasiswa.index');
});
Route::get('/matakuliah/{id}/matakuliah',function(){
    return redirect()->route('matakuliah.index');
});
//Route::get('edit_mhs/{id}',MahasiswaController::class);
Route::resource('mahasiswa',MahasiswaController::class);
Route::resource('matakuliah',MataKuliahController::class);
Route::post('/home',[AkunController::class,'store'],function(){
    return view('home');
});
Route::post('login',[AkunController::class,'cek']);