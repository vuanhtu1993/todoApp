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
    $task = new TodoApp(); //   tạo một công việc mới(tạo một dòng mới trong Browser)
    $task->type = 'text'; // point to type column
    $task->content=$input_text; // assign content $input_text to "content" column
    $task->done = '0';
    $task->save(); // save to database
    return back();
});
Route::get('/delete', function (){
    $id =  request('id');   // lấy giá trị của id trong thẻ input gán vào biến id
    TodoApp::find($id)->delete(); // find giá trị ($id) và xóa
    return redirect()->back();
});
Route::get('/done',function (){
    $id = request()->id;
    $done = TodoApp::find($id);
    $done ->done ='1';
    $done->save();
    return redirect(url('/'));
    //    $this->Product->id = $id;
//    $this->Product->saveField('status', 1);
//    $this->redirect($this->Session->read('urlpro'));
});


















