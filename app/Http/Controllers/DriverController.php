<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Bar;
use App\Models\Barbari;
use App\Models\Car;
use App\Http\Requests\Driver_form;
use App\Http\Requests\Driver_login_form;
use App\Http\Requests\Edit_driver_form;

use App\Http\Requests\car_form;
class DriverController extends Controller
{
    public function show(Request $request){

      return view('driver.driver_first');
    }
    //خروج از پتل راننده و برگشت به صفحه ثبت نام
    public function show2(Request $request){
      $request->session()->regenerate();
      return view('driver.driver_first');
    }
    //مرحله اول ثبت راننده

    public function save_driver1(Driver_form $request){
      $save=new Driver();
      $save->name=$request->name;
      $save->mobail=$request->mobail;
      $save->show=1;
      $save-> save();
      $id_session=$request->session()->getId();
      $request->session()->put('session_driver' , $id_session);
      $request->session()->put('id_driver' , $save->id);

    }
    //ورود به پنل راننده پس از ثبت نام
    public function driver_panel(Request $request){
      $id_driver=$request->session()->get('id_driver');
      $show_driver=Driver::find($id_driver);
      $show_bar=Bar::where('show' , 1)->get();
      return view('driver.driver_panel' , compact('show_driver' , 'id_driver' , 'show_bar') );
    }
    //ورود به پنل راننده پس از لاگین کردن
    public function login_driver(Driver_login_form $request){
      // $id_driver=$request->session()->get('id_driver');
      $name=$request->name;
      $mobail=$request->mobail;
      $show_driver=Driver::whereNameAndMobail($name,$mobail)->first();
      if(isset($show_driver)){
        $id=$show_driver['id'];
        $id_session=$request->session()->getId();
        $request->session()->put('session_driver' , $id_session);
        $request->session()->put('id_driver' , $id);


      }else{
        return 'error';
      }
      // return view('driver_panel' , compact('show_driver' , 'id_driver') );

    }
    //خروج از پنل راننده و رفتن به صفحه اول سایت
    public function close_driver_panel(Request $request){
      $request->session()->regenerate();
      return view('welcome');
    }
    //مشاهده جزییات یک بار
    public function show_one_bar(Request $request){
      $id_bar=$request->id_bar;
      $show_one_bar=Bar::find($id_bar);
      $id_barbari=$show_one_bar['company'];
      $show_barbari=Barbari::find($id_barbari);
      return view('driver.show_one_bar' , compact('show_one_bar' , 'show_barbari'));
    }
    public function show_all_bar(Request $request){
      $show_bar=Bar::where('show' , 1)->get();
      return view('driver.show_all_bar' , compact('show_bar'));
    }
    public function profaile_driver(Request $request){
      $id_driver=$request->session()->get('id_driver');
      $show_driver=Driver::find($id_driver);
      $show_bar=Bar::where('show' , 1)->get();
      return view('driver.profaile_driver' , compact('show_driver' , 'id_driver' , 'show_bar') );
    }
    public function car_driver(Request $request){
      $id_driver=$request->session()->get('id_driver');
      $show_driver=Driver::find($id_driver);
      $show_bar=Bar::where('show' , 1)->get();
      return view('driver.car_driver' , compact('show_driver' , 'id_driver' , 'show_bar') );
    }
    public function data_driver(Request $request){
      $id_driver=$request->session()->get('id_driver');
      $show_driver=Driver::find($id_driver);
      $show_bar=Bar::where('show' , 1)->get();
      return view('driver.data_driver' , compact('show_driver' , 'id_driver' , 'show_bar') );
    }

    public function edit_driver(Edit_driver_form $request){
      $id_driver=$request->id;
      $edit_driver=Driver::find($id_driver);
      $edit_driver->name =$request->name;
      $edit_driver->mobail =$request->mobail;
      $edit_driver->tel =$request->tel;
      $edit_driver->ostan =$request->ostan;
      $edit_driver->city =$request->city;
      $edit_driver->address =$request->address;
      $edit_driver->codepost =$request->codepost;
      $edit_driver->birthday =$request->birthday;
      $edit_driver->codemly =$request->codemly;
      $edit_driver->number_ran =$request->number_ran;
      $edit_driver->hooshmand_ran =$request->hooshmand_ran;
      $edit_driver->show =1;
      $edit_driver-> save();
    }
    public function sabt_edit_car(Car_form $request){
      $id_car=$request->id;
      if(empty($id_car)){
        $edit_driver=new Car();
      }else{
        $edit_driver=Car::find($id_car);
      }

      $edit_driver->name =$request->name;
      $edit_driver->class =$request->class;
      $edit_driver->axile =$request->axile;
      $edit_driver->ton =$request->ton;
      $edit_driver->plak =$request->plak;
      $edit_driver->model =$request->model;
      $edit_driver->hooshmand_car =$request->hooshmand_car;
      $edit_driver->pic =$request->pic;
      $edit_driver->rank =1;
      $edit_driver->show =1;
      $edit_driver-> save();
    }
}
