@foreach ($show_bar as  $value_bar)
  <div class="div1_show_all_bar">
    <span>{{$value_bar->bar}}</span>
    <span>{{$value_bar->ostan_start . '--' . $value_bar->city_start}}</span>
    <span>{{$value_bar->ostan_off . '--' . $value_bar->city_off}}</span>
    <span>{{$value_bar->ton}} </span>
    <span>{{$value_bar->car}}</span>
    <span>{{$value_bar->price}}</span>
    <span> <button type="button" onclick="show_one_bar({{$value_bar->id}})">مشاهده</button> </span>
  </div>
@endforeach
