<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bar;
use App\Models\Barbari;
use App\Http\Requests\Bar_form;//!!!

class BarController extends Controller
{
  public function save_bar(Bar_form $request){
    $save=new Bar();
    $save->bar=$request->bar;
    $save->company=$request->session()->get('id_barbari');;
    $save->ostan_start=$request->ostan_start;
    $save->city_start=$request->city_start;
    $save->address_start=$request->address_start;
    $save->ostan_off=$request->ostan_off;
    $save->city_off=$request->city_off;
    $save->address_off=$request->address_off;
    $save->ton=$request->ton;
    $save->car=$request->car;
    $save->price=$request->price;
    $save->show=1;
    $save-> save();

  }
  // public function show_bar(Request $request){
  //   $show_bar=Bar::where('show' , 1)->get();
  //   }
}
