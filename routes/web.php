<?php
use App\TodoApp;
use Illuminate\Http\UploadedFile;
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
    return view('todoApp.index');
});

Route::post('/', function(){
//    https://laravel.com/docs/5.4/requests#files
    /** @var UploadedFile $user_file_media */
    $input_text = request()->input_text; // instance and obtains an input items with name = input_text
    $task = new TodoApp();
    $task->type = 'text'; // point to type column
    $task->content=$input_text; // assign content $input_text to "content" column
    $task->save(); // save to database
});


















