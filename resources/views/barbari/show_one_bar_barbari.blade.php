
@extends('layout_barbari')

@section('title')
  ویرایش بار
@endsection

@section('content')

  <div class="ddd ">
    <button type="button" name="button" class="btn btn-success">ویرایش و ثبت بار</button>
    <form class="bg-success form_bar_edit" action="" method="post" id="form_bar_edit">
      <div class="ajax_bar_edit" id="ajax_bar_edit"></div>
      {{ csrf_field() }}


       <div class="form-group">
         <label for="bar_bar_edit">نام بار</label>
         <input type="text" class="form-control" id="bar_bar_edit" value="{{$show_one_bar['bar']}}">
       </div>
       <div class="form-group">
         <label for="ostan_start_bar_edit">استان مبدا</label>
         <input type="text" class="form-control" id="ostan_start_bar_edit" value="{{$show_one_bar['ostan_start']}}">
       </div>

       <div class="form-group">
         <label for="city_start_bar_edit">شهر مبدا</label>
         <input type="text" class="form-control" id="city_start_bar_edit" value="{{$show_one_bar['city_start']}}">
       </div>
       <div class="form-group">
         <label for="address_start_bar_edit">آدرس مبدا</label>
         <input type="text" class="form-control" id="address_start_bar_edit" value="{{$show_one_bar['address_start']}}">
       </div>
       <div class="form-group">
         <label for="ostan_off_bar_edit">استان مقصد</label>
         <input type="text" class="form-control" id="ostan_off_bar_edit" value="{{$show_one_bar['ostan_off']}}">
       </div>
       <div class="form-group">
         <label for="city_off_bar_edit">شهر ممقصد</label>
         <input type="text" class="form-control" id="city_off_bar_edit" value="{{$show_one_bar['city_off']}}">
       </div>
       <div class="form-group">
         <label for="address_off_bar_edit">آدرس مقصد</label>
         <input type="text" class="form-control" id="address_off_bar_edit" value="{{$show_one_bar['address_off']}}">
       </div>
       <div class="form-group">
         <label for="ton_bar_edit">تناژ</label>
         <input type="text" class="form-control" id="ton_bar_edit" value="{{$show_one_bar['ton']}}">
       </div>
       <div class="form-group">
         <label for="car_bar_edit">نوع کامیون</label>
         <input type="text" class="form-control" id="car_bar_edit" value="{{$show_one_bar['car']}}">
       </div>
       <div class="form-group">
         <label for="price_bar_edit">مبلغ کرایه</label>
         <input type="text" class="form-control" id="price_bar_edit" value="{{$show_one_bar['price']}}">
       </div>

       <button type="button" class="btn btn-primary" onclick="edit_bar({{$show_one_bar['id']}})">ثبت تغیرات</button>
    </form>
  </div>
  <!-- The Modal -->
  <div class="modal" id="end_edit_bar">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          ثبت تغییرات با موفقیت انجام شد .
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">

          <button type="button" class="btn btn-primary" data-dismiss="modal" >متوجه شدم !!</button>
        </div>

      </div>
    </div>
  </div>{{--end modal--}}
@endsection
@section('js')
  <script type="text/javascript" src="\js\barbari.js"></script>
@endsection
