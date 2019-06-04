<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Response;
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/a/{id?}', function($id = 1){
//     return 'ab';
// });
// Route::get('/a/{id?}', function ($id){
//     return redirect()->route('name1', [$id]);
// });
// //them dieu kien cho cac tham so va ten route: where and as.
// Route::get('b/{id}',[
//     'as' => 'name1',
//     function($id){
//         return "$id";
//     }
// ]);
// Route::get('/render', function(){
//     return redirect()->route('name',[12,'Minh']);
// })->where(['name' => '[a-zA-Z]+', 'tuoi' => '[0-9]+']);

// Route::get('/a/{tuoi}/{ten}', [
//     'as'=> 'name',
//     function($tuoi, $ten){
//         return 'as';
//     }
// ])->where(['tuoi' => '[0-9]{2}', 'ten' => '[a-zA-Z]+']);

// Route::get('/view/{name}', function($name1){
//     return view('test', compact('name1'));
// });

// //prefix
// Route::group(
//     ['prefix' => 'group-food'],
//     function(){
//         Route::get('beef', function(){
//             return "A big beef";
//         });
//         Route::get('pork', function(){
//             return "A big pork";
//         });
//     }
// );

// //View share Tao 1 bien de tat ca cac view deu dung duoc. <?php echo $title ? > trong cac view
// //syntax: View::share('setupName', 'setupValue');
// View::share('title', 'Tile View::share');

// //ViewComposer: chi nhung view duoc truyen vao ms thuc hien tao bien
// //syntax:  View::composer(['nameView1, nameView2'], function($link){
// //     return $link->with(['setupName'=> 'setupValue', 'setupName1' => 'seteupValue1']);
// // });
// View::composer(['test'], function($variable){
//     return $variable->with('name', 'value');
// });
// View::composer('testComposer', function($va){
//     return $va->with(['name'=> 'value','name1' => 'value1']);
// });
// Route::get('/composer', function(){
//     return view('testComposer');
// });

// //kiem tra su ton tai cua view
// Route::get('/check/view', function(){
//     if(view()->exists('testComposer')){
//         return "yes exists";
//     }else{
//         return "No exists";
//     }
// });

// Route::get('/url/full', function(){
//     return URL::full();
// });
// Route::get('/get/url', function(){
//   return secure_url('information', ['aaa' => 'aaa']);
// });

// //$Request
// Route::get('/test1', function(){
//     return view('test1');
// });
// Route::get('/test2', function(){
//     return view('test2');
// });
// Route::post('/form123', 'TestController@check')->name('postForm');
// Route::get('/setcookie', 'TestController@setCookie');
// Route::get('/getcookie', 'TestController@getCookie');

// Route::post('/post/file', 'TestController@upFile')->name('postFile');
// Route::post('/post/content', 'TestController@content')->name('content');
// //Du lieu dang Json
// Route::get('/json', 'TestController@json');
// //Create Table
// Route::get('/create/table', function(){
//     Schema::create('loaisanpham', function($table){
//         $table->increments('id');
//         $table->string('ten', 200);
//     });
// });
// Route::get('suabang', function(){
//     Schema::table('theloai', function(Blueprint $table){
//         $table->dropColumn('nsx');
//     });
// });
// Route::get('themcot', function(){
//     Schema::table('theloai', function(Blueprint $table){
//         $table->string('Email');
//     });
// });

// //Today: Don't be afraid to do everything. But just afraid everything when not doing. Labor is glory

// //Query builder
// Route::group(['prefix' => 'query'], function(){
//     Route::get('/builder', function(){
//         $data = DB::table('users')->get();
//         foreach($data as $key => $value){
//             foreach($value as $k => $v){
//                 echo $k . ':' . $v;
//                 echo "<br>";
//             }
//         }
//     });
//     //Query where
//     Route::get('/where', function(){
//         $data = DB::table('users')->where('id', '=', 9)->get();
//         foreach($data as $value){
//             foreach($value as $k => $v){
//                 if($k != 'id'){
//                     echo $k . ': ' . $v;
//                     echo "<br>";
//                 }
//             }
//         }
//     });
//     //Query select
//     Route::get('/select', function(){
//         $data = DB::table('users')->where('id', 9)->select(['id','email','name'])->get();
//         dd($data);
//     });
//     //Query row doi ten cot when show view but in DB not change
//     Route::get('/row', function(){
//         $data = DB::table('users')->select(['id', 'name as ten', 'email'])->where('id', 9)->get();
//         dd($data);
//     });
//     //Query orwhere
//     Route::get('/orwhere', function(){
//         $data = DB::table('users')->where('id', 8)->orwhere('name','>' ,'L')->get();
//         dd($data);
//     });
//     //Query orderBy sort id
//     Route::get('/order-by', function(){
//         $data = DB::table('users')->orderBy('id', 'desc')->get();
//         dd($data);
//     });
//     //Query groupBy: at database.php in folder config. change strict from true to false will oke.
//     Route::get('/group-by', function(){
//         $data = DB::table('users')->groupBy('id')->having('id', '>', 0)->get();
//         dd($data);
//     });
//     //Query skip and take
//     Route::get('/skip-take', function(){
//         $data = DB::table('users')->skip('id',8)->take(1)->get();
//         dd($data);
//     });
//     //Query avg: Not get()
//     Route::get('/avg', function(){
//         $data = DB::table('users')->avg('id');
//         dd($data);
//     });
//     //Query max: Not get()
//     Route::get('/max', function(){
//         $data = DB::table('users')->max('id');
//         dd($data);
//     });
//     //Query update
//     Route::get('/update', function(){
//         DB::table('users')->where('id', 9)->update(['name' => 'ten']);
//         dd("Updated!");
//     });
//     //Query increment: just update value is number.
//     Route::get('/increment', function(){
//         DB::table('users')->increment('name', 'a');
//         dd("Updated!");
//     });
//     //Query decrement
//     Route::get('/decrement', function(){
//         DB::table('users')->decrement('id', 4);
//         dd("Updated!");
//     });
//     //Query delete
//     Route::get('/delete', function(){
//         DB::table('users')->where('id', 9)->delete();
//         dd("Updated!");
//     });
//     //Query truncate(): delete all value in table and update index to 0
//     Route::get('/truncate', function(){
//         DB::table('users')->truncate();
//     });
// });

// //Model: is a class data have struct same with table in DB. used to handing data inside and outside the table
// Route::group(['prefix' => 'model'], function(){
//     //save
//     Route::get('/save', function(){
//         $user = new App\User();
//         $user->name = 'Minh';
//         $user->email = 'eee@gmail.com';
//         $user->password = bcrypt('Minh');
//         $user->save();
//         dd("Oke");
//     });
//     Route::get('/query', function(){
//         $user = new App\User();
//         echo $user->find(1)->name;
//     });
//     Route::get('/get/sanpham', function(){
//         $sanpham = new App\SanPham();
//         echo "<pre>";
//         // print_r($sanpham->all()->toJson());
//         print_r($sanpham->all()->toArray());
//     });
//     //delete
//     Route::get('/destroy', function(){
//         App\SanPham::destroy(4);
//         dd("ok");
//     });
//     Route::get('/belongsto', function(){
//         $data = App\SanPham::find(2)->loaisanpham->toArray();
//         dd($data);
//     });
//     Route::get('/hasMany', function(){
//         $data = App\LoaiSanPham::find(1)->sanpham->toArray();
//         dd($data);
//     });
// });
// Route::get('profile/{user}', function(App\User $user) {
//     return "asds";
// });
// Route::get('/response', function(){
//     return [1,2,3,4];
// });
// Route::get('/session', 'TestController@session');
// Route::get('home1', function() {
//     $cookie = cookie('name', 'value', 1);

// return response('Hello World')->cookie($cookie);
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
