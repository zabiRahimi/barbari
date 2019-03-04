
@extends('layout')
@section('title')
  ورود - ثبت نام راننده
@endsection
@section('css')
  <link rel="stylesheet" href="/css/master.css">
@endsection
@section('content')

  <div class="ddd " style="">
    <button type="button" name="button" class="btn btn-success">ورود</button>
    <form class="bg-primary" action="" method="post" id="form_driver_login">
      <div class="ajax_driver_first" id="ajax_driver_login"></div>
      {{ csrf_field() }}

       <div class="form-group">
         <label for="name_driver_login">نام و نام خانوادگی</label>
         <input type="text" class="form-control" id="name_driver_login">
       </div>
       <div class="form-group">
         <label for="mobail_driver_login">موبایل</label>
         <input type="text" class="form-control" id="mobail_driver_login">
       </div>
       <div class="form-group">
         <label for="amniat_driver_login">کد امنیتی</label>
         <input type="text" class="form-control" id="amniat_driver_login">
       </div>

       <button type="button" class="btn btn-success" onclick="login_driver()">ثبت</button>
    </form>


  </div>
  <div class="ddd ">
    <button type="button" name="button" class="btn btn-success">ثبت نام</button>
    <form class="bg-success" action="" method="post" id="form1_driver_sabt">
      <div class="ajax_driver_first" id="ajax_driver_first"></div>
      {{ csrf_field() }}

       <div class="form-group">
         <label for="name">نام و نام خانوادگی</label>
         <input type="text" class="form-control" id="name_driver_first">
       </div>
       <div class="form-group">
         <label for="mobail">موبایل</label>
         <input type="text" class="form-control" id="mobail_driver_first">
       </div>
       <div class="form-group">
         <label for="amniat">کد امنیتی</label>
         <input type="text" class="form-control" id="amniat_driver_first">
       </div>

       <button type="button" class="btn btn-primary" onclick="save_driver1()">ثبت</button>
    </form>
  </div>


  <!-- مودال انتهای ثبت نام -->


  <!-- The Modal -->
  <div class="modal" id="end_sabt1_driver">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          ثبت نام با موفقیت انجام شد !
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="redirect_href('/')">خروج</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="redirect_href('/driver_panel')">ورود به پنل کابری</button>
        </div>

      </div>
    </div>
  </div>{{-- انتهای مودال ثبت نام --}}

@endsection
@section('js')
  <script type="text/javascript" src="\js\driver.js"></script>
@endsection
