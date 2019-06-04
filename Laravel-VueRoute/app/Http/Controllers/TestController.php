<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreBlogPost;

class TestController extends Controller
{
    public function check(Request $request){
        $name1 = 'Minh';
        if($request->has('input')){
            dd($request->input('input'));
        }
        return view('test', compact('name1'));
    }
    // public function setCookie(){
    //     $respone = new Response();
    //     $respone->withCookie('name', 'value', 1);
    //     return $respone;
    // }
    // public function getCookie(Request $request){
    //     echo "asd";
    //     dd($request->cookie('name'));
    //     return $request->cookie('name');
    // }
    // public function upFile(Request $request){
    //     if($request->hasFile('myFile')){
    //         $request->file('myFile')->move(
    //             'images',
    //             'Saved.img'
    //         );
    //     }
    // }
    public function setCookie(Response $response){
        $response->withCookie('name', 'value', 1);
        return $response;
    }
    public function getCookie(Request $request){
        if($request->cookie('name')){
            return $request->cookie('name');
        }
        return ;
    }
    public function upFile(Request $request){
        if($request->has('myFile')){
            $file = $request->file('myFile');
            // dd($file->getClientSize('myFile'));
            // dd($file->getClientMimeType('myFile'));
            // dd($file->getClientOriginalExtension('myFile'));
            // dd($file->getClientOriginalName('myFile'));
            if($file->getClientOriginalExtension('myFile') == "png"){
                // $request->file('myFile')->move(
                //     'images',
                //     'nameFile.img'
                // );
                    dd($file->getClientOriginalName('myFile'));
            }
        }

    }
    public function content(StoreBlogPost $request){
        dd($request->validated());
        return view('welcome');
    }
    public function json(){
        $array = ['a'=> 'a'];
        return response()->json($array);
    }
    public function session(Request $request){
        session(['name1' => 'Minh']);
        $request->session()->push('a', 'a');
        $request->session()->push('a', '1');
        $request->session()->push('a', '12');
        $request->session()->pull('name1', 'default');
        $request->session()->flash('ac', '121');
        $request->session()->reflash();
        $uri = $request->fullUrl();
        $method = $request->method();
        dd($request->all());
        // $request->session()->forget('ac');
        // $request->session()->flush();
        dd(session()->all());
        dd(session('a'));
    }
}
