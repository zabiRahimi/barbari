





@extends('layout_barbari')

@section('title')
  پنل باربری
@endsection

@section('content')


  <div class="ddd ">
    <button type="button" name="button" class="btn btn-success">ثبت بار</button>
    <form class="bg-success form_bar_save" action="" method="post" id="form_bar_save">
      <div class="ajax_bar_save" id="ajax_bar_save"></div>
      {{ csrf_field() }}


       <div class="form-group">
         <label for="bar_bar_save">نام بار</label>
         <input type="text" class="form-control" id="bar_bar_save">
       </div>
       <div class="form-group">
         <label for="ostan_start_bar_save">استان مبدا</label>
         <input type="text" class="form-control" id="ostan_start_bar_save">
       </div>

       <div class="form-group">
         <label for="city_start_bar_save">شهر مبدا</label>
         <input type="text" class="form-control" id="city_start_bar_save">
       </div>
       <div class="form-group">
         <label for="address_start_bar_save">آدرس مبدا</label>
         <input type="text" class="form-control" id="address_start_bar_save">
       </div>
       <div class="form-group">
         <label for="ostan_off_bar_save">استان مقصد</label>
         <input type="text" class="form-control" id="ostan_off_bar_save">
       </div>
       <div class="form-group">
         <label for="city_off_bar_save">شهر ممقصد</label>
         <input type="text" class="form-control" id="city_off_bar_save">
       </div>
       <div class="form-group">
         <label for="address_off_bar_save">آدرس مقصد</label>
         <input type="text" class="form-control" id="address_off_bar_save">
       </div>
       <div class="form-group">
         <label for="ton_bar_save">تناژ</label>
         <input type="text" class="form-control" id="ton_bar_save">
       </div>
       <div class="form-group">
         <label for="car_bar_save">نوع کامیون</label>
         <input type="text" class="form-control" id="car_bar_save">
       </div>
       <div class="form-group">
         <label for="price_bar_save">مبلغ کرایه</label>
         <input type="text" class="form-control" id="price_bar_save">
       </div>

       <button type="button" class="btn btn-primary" onclick="save_bar()">ثبت</button>
    </form>
  </div>

@endsection
@section('js')
  <script type="text/javascript" src="\js\barbari.js"></script>
@endsection
