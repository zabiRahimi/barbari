
@extends('layout_driver')

@section('title')
  پنل راننده
@endsection

@section('content')


  <div class="div2_panel_driver" >
    @include('driver.show_all_bar')
  </div>
@endsection
@section('js')
  <script type="text/javascript" src="\js\driver.js"></script>
@endsection
