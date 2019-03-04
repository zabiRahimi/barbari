

@extends('layout')
@section('title')
  ورود - ثبت نام باربری
@endsection
@section('css')
  <link rel="stylesheet" href="/css/master.css">
@endsection
@section('content')

  <div class="ddd " style="">
    <button type="button" name="button" class="btn btn-success">ورود</button>
    <form class="bg-primary" action="" method="post" id="form_barbari_login">
      <div class="ajax_barbari_first" id="ajax_barbari_login"></div>
      {{ csrf_field() }}

       <div class="form-group">
         <label for="name_barbari_login">نام و نام خانوادگی</label>
         <input type="text" class="form-control" id="name_barbari_login">
       </div>
       <div class="form-group">
         <label for="mobail_barbari_login">موبایل</label>
         <input type="text" class="form-control" id="mobail_barbari_login">
       </div>
       <div class="form-group">
         <label for="amniat_barbari_login">کد امنیتی</label>
         <input type="text" class="form-control" id="amniat_barbari_login">
       </div>

       <button type="button" class="btn btn-success" onclick="login_barbari()">ثبت</button>
    </form>


  </div>

  <div class="ddd ">
    <button type="button" name="button" class="btn btn-success">ثبت نام</button>
    <form class="bg-success form1_barbari_sabt" action="" method="post" id="form1_barbari_sabt">
      <div class="ajax_barbari_first" id="ajax_barbari_first"></div>
      {{ csrf_field() }}


       <div class="form-group">
         <label for="name">نام و نام خانوادگی</label>
         <input type="text" class="form-control" id="name_barbari_first">
       </div>
       <div class="form-group">
         <label for="mobail">موبایل</label>
         <input type="text" class="form-control" id="mobail_barbari_first">
       </div>

       <div class="form-group">
         <label for="tel_barbari_first">تلفن</label>
         <input type="text" class="form-control" id="tel_barbari_first">
       </div>
       <div class="form-group">
         <label for="company_barbari_first">نام شرکت</label>
         <input type="text" class="form-control" id="company_barbari_first">
       </div>
       <div class="form-group">
         <label for="code_co_barbari_first">کد شرکت</label>
         <input type="text" class="form-control" id="code_co_barbari_first">
       </div>
       <div class="form-group">
         <label for="osatn_barbari_first">استان</label>
         <input type="text" class="form-control" id="ostan_barbari_first">
       </div>
       <div class="form-group">
         <label for="city_barbari_first">شهر</label>
         <input type="text" class="form-control" id="city_barbari_first">
       </div>
       <div class="form-group">
         <label for="codepost_barbari_first">کدپستی</label>
         <input type="text" class="form-control" id="codepost_barbari_first">
       </div>
       <div class="form-group">
         <label for="address_barbari_first">آدرس</label>
         <input type="text" class="form-control" id="address_barbari_first">
       </div>
       <div class="form-group">
         <label for="amniat_barbari_first">کد امنیتی</label>
         <input type="text" class="form-control" id="amniat_barbari_first">
       </div>

       <button type="button" class="btn btn-primary" onclick="save_barbari1()">ثبت</button>
    </form>
  </div>


  <!-- مودال انتهای ثبت نام -->


  <!-- The Modal -->
  <div class="modal" id="end_sabt1_barbari">
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
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="redirect_href('/barbari_panel')">ورود به پنل کاربری باربری</button>
        </div>

      </div>
    </div>
  </div>{{-- انتهای مودال ثبت نام --}}

@endsection
@section('js')
  <script type="text/javascript" src="\js\barbari.js"></script>
@endsection
