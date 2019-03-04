
@extends('layout_barbari')

@section('title')
  نمایش کامیونها
@endsection

@section('content')
  <h1>show car</h1>
  @foreach ($show_all_car as $cars)
    <div class="">
      <span>راننده : {{$cars->name}}</span>
      <span>کامیون :{{$cars->car}}</span>
      <span>موبایل راننده :{{$cars->mobail}}</span>
      <span>تلفن راننده : {{ $cars->tel }}</span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  @endforeach
@endsection
@section('js')
  <script type="text/javascript" src="\js\barbari.js"></script>
@endsection
