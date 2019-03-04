<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barbari;
use App\Models\Bar;
use App\Models\Driver;
use App\Http\Requests\Barbari_form;
use App\Http\Requests\Barbari_login_form;
use App\Http\Requests\Edit_bar_form;
class BarbariController extends Controller
{
  public function show(Request $request){
    return view('barbari.barbari_first');
  }
  //خروج از پتل باربری و برگشت به صفحه ثبت نام
  public function show2(Request $request){
    $request->session()->regenerate();
    return view('barbari.barbari_first');
  }
  //مرحله اول ثبت باربری
  public function save_barbari1(Barbari_form $request){
    $save=new Barbari();
    $save->name=$request->name;
    $save->mobail=$request->mobail;
    $save->tel=$request->tel;
    $save->company=$request->company;
    $save->code_co=$request->code_co;
    $save->ostan=$request->ostan;
    $save->city=$request->city;
    $save->codepost=$request->codepost;
    $save->address=$request->address;
    $save->show=1;
    $save-> save();
    $id_session=$request->session()->getId();
    $request->session()->put('session_barbari' , $id_session);
    $request->session()->put('id_barbari' , $save->id);
  }
  //ورود به پنل باربری پس از ثبت نام
  public function barbari_panel(Request $request){
    $id_barbari=$request->session()->get('id_barbari');
    $show_barbari=Barbari::find($id_barbari);
    return view('barbari.barbari_panel' , compact('show_barbari' , 'id_barbari') );
  }
  //ورود به پنل باربری پس از لاگین کردن
  public function login_barbari(Barbari_login_form $request){
    // $id_barbari=$request->session()->get('id_barbari');
    $name=$request->name;
    $mobail=$request->mobail;
    $show_barbari=Barbari::whereNameAndMobail($name,$mobail)->first();
    if(isset($show_barbari)){
      $id=$show_barbari['id'];
      $id_session=$request->session()->getId();
      $request->session()->put('session_barbari' , $id_session);
      $request->session()->put('id_barbari' , $id);


    }else{
      return 'error';
    }
    // return view('barbari_panel' , compact('show_barbari' , 'id_barbari') );

  }
  //خروج از پنل باربری و رفتن به صفحه اول سایت
  public function close_barbari_panel(Request $request){
    $request->session()->regenerate();
    return view('welcome');
  }
  public function show_all_bar_barabri(Request $request){
    $id_barbari=$request->session()->get('id_barbari');
    $show_barbari=Barbari::find($id_barbari);
    $show_bar=Bar::where('show' , 1)->get();
    return view('barbari.show_all_bar_barabri' , compact('show_barbari' , 'id_barbari','show_bar') );

  }
  public function show_one_bar_barbari(Request $request , $id){
    $id=$request->id;
    $show_one_bar=Bar::find($id);
    $id_barbari=$request->session()->get('id_barbari');
    $show_barbari=Barbari::find($id_barbari);
    return view('barbari.show_one_bar_barbari' , compact('show_barbari' , 'id_barbari','show_one_bar') );
  }
  public function edit_bar(Edit_bar_form $request){
    $id=$request->id;
    $save= Bar::find($id);
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
  public function show_all_car_barbari(Request $request){

    $show_all_car=Driver::where('show',1)->get();
    $id_barbari=$request->session()->get('id_barbari');
    $show_barbari=Barbari::find($id_barbari);
    return view('barbari.show_all_car_barbari' , compact('show_barbari' , 'id_barbari','show_all_car') );
  }
}
