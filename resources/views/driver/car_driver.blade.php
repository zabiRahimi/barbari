
@extends('layout_driver')

@section('title')
  پنل راننده
@endsection
@section('css')
  <link rel="stylesheet" href="/css/driver/driver_panel.css">
  <link rel="stylesheet" href="/css/driver/show_all_bar.css">
@endsection
@section('content')



    <div class="ddd ">

      <form class="bg-success form_car_sabt_edit" action="" method="post" id="form_car_sabt_edit">
        <div class="ajax_car_sabt_edit" id="ajax_car_sabt_edit"></div>
        {{ csrf_field() }}


         <div class="form-group">
           <label for="name_car_sabt_edit">نام کامیون</label>
           <input type="text" class="form-control" id="name_car_sabt_edit" value="">
         </div>
         <div class="form-group">
           <label for="class_car_sabt_edit">نوع کامیون</label>
           <input type="text" class="form-control" id="class_car_sabt_edit" value="">
         </div>
         <div class="form-group">
           <label for="axile_car_sabt_edit">تعداد محور</label>
           <input type="text" class="form-control" id="axile_car_sabt_edit" value="">
         </div>
         <div class="form-group">
           <label for="ton_car_sabt_edit">تناژ</label>
           <input type="text" class="form-control" id="ton_car_sabt_edit" value="">
         </div>


         <div class="form-group">
           <label for="plak_start_car_sabt_edit">پلاک</label>
           <input type="text" class="form-control" id="plak_car_sabt_edit" value="">
         </div>
         <div class="form-group">
           <label for="model_car_sabt_edit">مدل کامیون</label>
           <input type="text" class="form-control" id="model_car_sabt_edit" value="">
         </div>
         <div class="form-group">
           <label for="hooshmand_car_sabt_edit">شماره کارت هوشمند کامیون</label>
           <input type="text" class="form-control" id="hooshmand_car_car_sabt_edit" value="">
         </div>
         <div class="form-group">
           <label for="pic_car_sabt_edit">عکس کامیون</label>
           <input type="text" class="form-control" id="pic_car_sabt_edit" value="">
         </div>


         <button type="button" class="btn btn-primary" onclick="sabt_edit_car()">ثبت تغیرات</button>
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
  <script type="text/javascript" src="\js\driver.js"></script>
@endsection
