
@extends('layout_barbari')

@section('title')
  بارهای ثبت شد
@endsection

@section('content')
  @foreach ($show_bar as  $value_bar)
    <div class="div1_show_all_bar">
      <span>{{$value_bar->bar}}</span>
      <span>{{$value_bar->ostan_start . '--' . $value_bar->city_start}}</span>
      <span>{{$value_bar->ostan_off . '--' . $value_bar->city_off}}</span>
      <span>{{$value_bar->ton}} </span>
      <span>{{$value_bar->car}}</span>
      <span>{{$value_bar->price}}</span>
      <span> 
              <a href="/show_one_bar_barbari/{{$value_bar->id}}" class="a_barbari">ویرایش</a>
      </span>
    </div>
  @endforeach

@endsection
@section('js')
  <script type="text/javascript" src="\js\barbari.js"></script>
@endsection
