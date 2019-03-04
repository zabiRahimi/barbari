

@extends('layout_driver')

@section('title')
  پروفایل راننده
@endsection
@section('css')


@endsection
@section('content')


  <div class="profile_driver" >
    <form class=" form_driver_edit" action="" method="post" id="form_driver_edit">
      <div class="ajax_driver_edit" id="ajax_driver_edit"></div>
      {{ csrf_field() }}

       <div class="form-group">
         <label for="name_driver_edit">نام و نام خانوادگی</label>
         <input type="text" class="form-control" id="name_driver_edit" value="{{$show_driver['name']}}">
       </div>
       <div class="form-group">
         <label for="mobail_driver_edit">موبایل</label>
         <input type="text" class="form-control" id="mobail_driver_edit" value="{{$show_driver['mobail']}}">
       </div>
       <div class="form-group">
         <label for="tel_driver_edit">تلفن منزل</label>
         <input type="text" class="form-control" id="tel_driver_edit" value="{{$show_driver['tel']}}">
       </div>

       <div class="form-group">
         <label for="ostan_driver_edit">استان محل سکونت</label>
         <input type="text" class="form-control" id="ostan_driver_edit" value="{{$show_driver['ostan']}}">
       </div>
       <div class="form-group">
         <label for="city_driver_edit">شهر محل سکونت</label>
         <input type="text" class="form-control" id="city_driver_edit" value="{{$show_driver['city']}}">
       </div>
       <div class="form-group">
         <label for="address_driver_edit">آدرس محل سکونت</label>
         <input type="text" class="form-control" id="address_driver_edit" value="{{$show_driver['address']}}">
       </div>
       <div class="form-group">
         <label for="codepost_driver_edit">کد پستی محل سکونت</label>
         <input type="text" class="form-control" id="codepost_driver_edit" value="{{$show_driver['codepost']}}">
       </div>
       <div class="form-group">
         <label for="birthday_driver_edit">تاریخ تولد</label>
         <input type="text" class="form-control" id="birthday_driver_edit" value="{{$show_driver['birthday']}}">
       </div>
       <div class="form-group">
         <label for="codemly_driver_edit">کد ملی</label>
         <input type="text" class="form-control" id="codemly_driver_edit" value="{{$show_driver['codemly']}}">
       </div>
       <div class="form-group">
         <label for="number_run_driver_edit">شماره گواهینامه</label>
         <input type="text" class="form-control" id="number_ran_driver_edit" value="{{$show_driver['number_ran']}}">
       </div>
       <div class="form-group">
         <label for="hooshmand_ran_driver_edit">شماره کارت هوشمند</label>
         <input type="text" class="form-control" id="hooshmand_ran_driver_edit" value="{{$show_driver['hooshmand_ran']}}">
       </div>



       <button type="button" class="btn btn-success" onclick="edit_driver({{$show_driver['id']}})">ثبت</button>
    </form>


    <!-- مودال ثبت تغییرات-->


    <!-- The Modal -->
    <div class="modal" id="end_edit_driver">
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
  </div>
@endsection
@section('js')
  <script type="text/javascript" src="\js\driver.js"></script>
@endsection
