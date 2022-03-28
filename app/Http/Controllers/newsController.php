<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
  public function create(){
    return view('form');
  }
  public function display(Request $request){

   $errors=[];
   $title=$request->title;
   $content=$request->content;
   $image=$request->hasFile('image');  //hasFile ==== checking only if request have file or not.
    if($image){
    $newimage=$request->file('image');
    $newimage->store('images');
    }
   $data =$this->validate($request,[
       "title"=>"required |not_regex:[a-zA-Z]",
      "content"=>"required|min:5|max:10",
      "image"=>"file"

   ]);
   dd($data);
  }
}
