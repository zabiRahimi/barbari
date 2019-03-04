<button type="button" name="button" onclick="show_all_bar()">مشاهده همه بارها</button>
<br>
<h2>مشخصات بار</h2>
نام بار :{{$show_one_bar['bar']}}
<br>
آدرس بارگیری : {{$show_one_bar['ostan_start'] . ' - ' . $show_one_bar['city_start'] . ' - ' . $show_one_bar['address_start']}}
<br>
آدرس تخلیه بار : {{$show_one_bar['ostan_off'] . ' - ' . $show_one_bar['city_off'] . ' - ' . $show_one_bar['address_off']}}
<br>
تناژ : {{$show_one_bar['ton']}} کیلو گرم
<br>
نوع کامیون : {{$show_one_bar['car']}}
<br>
مبلغ کرایه : {{$show_one_bar['price']}} تومان
<br>
<h2>مشخصات باربری</h2>
نام باربری : {{$show_barbari['company']}}
<br>
آدرس باربری :{{$show_barbari['ostan'] . ' - ' . $show_barbari['city'] . ' - ' . $show_barbari['address'] }}
<br>
موبایل باربری :{{$show_barbari['mobail']}}
<br>
تلفن باربری :{{$show_barbari['tel']}}
