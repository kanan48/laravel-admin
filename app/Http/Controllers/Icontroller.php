<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
class Icontroller extends Controller
{
   public function login()
   {
        return view('login');
   }
   public function addpage()
   {
     if(Auth::check()){
          return view('addpage');
     }
     return redirect('/')->withSuccess('Opps! You do not have accesss');
   }
   public function category()
   {
     if(Auth::check()){
          return view('category');
     }
     return redirect('/')->withSuccess('Opps! You do not have accesss');
   }
   public function categoryadd()
   {
     if(Auth::check()){
          return view('categoryadd');
     }
     return redirect('/')->withSuccess('Opps! You do not have accesss');
   }
   public function change()
   {
     if(Auth::check()){
          return view('change');
     }
     return redirect('/')->withSuccess('Opps! You do not have accesss');
   }
   public function pagesumm()
   {
     if(Auth::check()){
          return view('pagesumm');
     }
     return redirect('/')->withSuccess('Opps! You do not have accesss');
   }
   public function product()
   {
     if(Auth::check()){
          return view('product');
     }
     return redirect('/')->withSuccess('Opps! You do not have accesss');
   }
   public function productadd()
   {
     if(Auth::check()){
          $categories=category::all();
          return view('productadd',compact('categories'));
     }
     return redirect('/')->withSuccess('Opps! You do not have accesss');
   }
   
}
