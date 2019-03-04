
function redirect_href(href){
  window.location.href  = href;
}
function save_barbari1(){

  $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  var mobail=$('#mobail_barbari_first').val();
  var tel=$('#tel_barbari_first').val();
  var patt =/^[0-9]{10}$/;
  if(patt.test(mobail)){mobail = 0 + mobail;}
  if(patt.test(tel)){tel = 0 + tel;}
    $.ajax({
        url: "/save_barbari1",
        method: 'post',
        data: {

            name: $('#name_barbari_first').val(),
            mobail: mobail,
            tel:tel,
            company: $('#company_barbari_first').val(),
            code_co: $('#code_co_barbari_first').val(),
            ostan: $('#ostan_barbari_first').val(),
            city: $('#city_barbari_first').val(),
            codepost: $('#codepost_barbari_first').val(),
            address: $('#address_barbari_first').val(),
            amniat: $('#amniat_barbari_first').val(),
        },
        success: function(data) {
          $('#ajax_barbari_first').empty();
          document.getElementById("form1_barbari_sabt").reset();
           $('#end_sabt1_barbari').modal('show');


            },
        error: function(xhr) {

            var errors = xhr.responseJSON;

            var error=errors.errors;
            scroll_form('form1_barbari_sabt');


             if(error['name']){

               $('#ajax_barbari_first').html('<div id="alarm_red">'+error['name']+'</div>');
               $('#ajax_barbari_first').css("border-color" , "#c30909");
            }else if(error['mobail']){

               $('#ajax_barbari_first').html('<div id="alarm_red">' + error['mobail'] +'</div>');
               $('#ajax_barbari_first').css("border-color" , "#c30909");
            }else if(error['tel']){

               $('#ajax_barbari_first').html('<div id="alarm_red">' + error['tel'] +'</div>');
               $('#ajax_barbari_first').css("border-color" , "#c30909");
            }else if(error['company']){

               $('#ajax_barbari_first').html('<div id="alarm_red">' + error['company'] +'</div>');
               $('#ajax_barbari_first').css("border-color" , "#c30909");
            }else if(error['code_co']){

               $('#ajax_barbari_first').html('<div id="alarm_red">' + error['code_co'] +'</div>');
               $('#ajax_barbari_first').css("border-color" , "#c30909");
            }else if(error['ostan']){

               $('#ajax_barbari_first').html('<div id="alarm_red">' + error['ostan'] +'</div>');
               $('#ajax_barbari_first').css("border-color" , "#c30909");
            }else if(error['city']){

               $('#ajax_barbari_first').html('<div id="alarm_red">' + error['city'] +'</div>');
               $('#ajax_barbari_first').css("border-color" , "#c30909");
            }else if(error['codepost']){

               $('#ajax_barbari_first').html('<div id="alarm_red">' + error['codepost'] +'</div>');
               $('#ajax_barbari_first').css("border-color" , "#c30909");
            }else if(error['address']){

               $('#ajax_barbari_first').html('<div id="alarm_red">' + error['address'] +'</div>');
               $('#ajax_barbari_first').css("border-color" , "#c30909");
            }

          }
},"json");
}
function login_barbari(){

  $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  var mobail=$('#mobail_barbari_login').val();
  var patt =/^[0-9]{10}$/;
  if(patt.test(mobail)){mobail = 0 + mobail;}
    $.ajax({
        url: "/login_barbari",
        method: 'post',
        data: {

            name: $('#name_barbari_login').val(),
            mobail: mobail,

            amniat: $('#amniat_barbari_login').val(),
        },
        success: function(data) {
          if(data=='error'){
            $('#ajax_barbari_login').html('<div id="alarm_red">نام و یا موبایل اشتباه است .</div>');
          }
          else{
          $('#ajax_barbari_login').empty();
          document.getElementById("form_barbari_login").reset();
          redirect_href('/barbari_panel');
            }

            },
        error: function(xhr) {

            var errors = xhr.responseJSON;

            var error=errors.errors;
            // scroll_form('form_data_buyer');


             if(error['name']){

               $('#ajax_barbari_login').html('<div id="alarm_red">'+error['name']+'</div>');
               $('#ajax_barbari_login').css("border-color" , "#c30909");
            }else if(error['mobail']){

               $('#ajax_barbari_login').html('<div id="alarm_red">' + error['mobail'] +'</div>');
               $('#ajax_barbari_login').css("border-color" , "#c30909");
            }

          }
},"json");
}

function save_bar(){

  $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});

    $.ajax({
        url: "/save_bar",
        method: 'post',
        data: {

            bar: $('#bar_bar_save').val(),
            ostan_start: $('#ostan_start_bar_save').val(),
            city_start: $('#city_start_bar_save').val(),
            address_start: $('#address_start_bar_save').val(),
            ostan_off: $('#ostan_off_bar_save').val(),
            city_off: $('#city_off_bar_save').val(),
            address_off: $('#address_off_bar_save').val(),
            ton: $('#ton_bar_save').val(),
            car: $('#car_bar_save').val(),
            price: $('#price_bar_save').val(),

        },
        success: function(data) {

          $('#ajax_bar_save').empty();
          document.getElementById("form_bar_save").reset();
          $('#ajax_bar_save').html('<div id="alarm_green">بار با موفقیت ثبت شد</div>');
          scroll_form('form_bar_save');


            },
        error: function(xhr) {

            var errors = xhr.responseJSON;

            var error=errors.errors;
            scroll_form('form_bar_save');


             if(error['bar']){

               $('#ajax_bar_save').html('<div id="alarm_red">'+error['bar']+'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }else if(error['ostan_start']){

               $('#ajax_bar_save').html('<div id="alarm_red">' + error['ostan_start'] +'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }else if(error['city_start']){

               $('#ajax_bar_save').html('<div id="alarm_red">' + error['city_start'] +'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }else if(error['address_start']){

               $('#ajax_bar_save').html('<div id="alarm_red">' + error['address_start'] +'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }else if(error['ostan_off']){

               $('#ajax_bar_save').html('<div id="alarm_red">' + error['ostan_off'] +'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }else if(error['city_off']){

               $('#ajax_bar_save').html('<div id="alarm_red">' + error['city_off'] +'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }else if(error['address_off']){

               $('#ajax_bar_save').html('<div id="alarm_red">' + error['address_off'] +'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }else if(error['ton']){

               $('#ajax_bar_save').html('<div id="alarm_red">' + error['ton'] +'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }else if(error['car']){

               $('#ajax_bar_save').html('<div id="alarm_red">' + error['car'] +'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }else if(error['price']){

               $('#ajax_bar_save').html('<div id="alarm_red">' + error['price'] +'</div>');
               $('#ajax_bar_save').css("border-color" , "#c30909");
            }

          }
},"json");
}
function edit_bar(id){
    $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
        url: "/edit_bar",
        method: 'post',
        data: {
            id:id,
            bar: $('#bar_bar_edit').val(),
            ostan_start: $('#ostan_start_bar_edit').val(),
            city_start: $('#city_start_bar_edit').val(),
            address_start: $('#address_start_bar_edit').val(),
            ostan_off: $('#ostan_off_bar_edit').val(),
            city_off: $('#city_off_bar_edit').val(),
            address_off: $('#address_off_bar_edit').val(),
            ton: $('#ton_bar_edit').val(),
            car: $('#car_bar_edit').val(),
            price: $('#price_bar_edit').val(),
        },
        success: function(data) {
          $('#ajax_bar_edit').empty();
          scroll_form('form_bar_edit');
          $('#end_edit_bar').modal('show');
            },
        error: function(xhr) {
            var errors = xhr.responseJSON;
            var error=errors.errors;
            scroll_form('form_bar_edit');
             if(error['bar']){
               $('#ajax_bar_edit').html('<div id="alarm_red">'+error['bar']+'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }else if(error['ostan_start']){
               $('#ajax_bar_edit').html('<div id="alarm_red">' + error['ostan_start'] +'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }else if(error['city_start']){
               $('#ajax_bar_edit').html('<div id="alarm_red">' + error['city_start'] +'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }else if(error['address_start']){
               $('#ajax_bar_edit').html('<div id="alarm_red">' + error['address_start'] +'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }else if(error['ostan_off']){
               $('#ajax_bar_edit').html('<div id="alarm_red">' + error['ostan_off'] +'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }else if(error['city_off']){
               $('#ajax_bar_edit').html('<div id="alarm_red">' + error['city_off'] +'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }else if(error['address_off']){
               $('#ajax_bar_edit').html('<div id="alarm_red">' + error['address_off'] +'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }else if(error['ton']){
               $('#ajax_bar_edit').html('<div id="alarm_red">' + error['ton'] +'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }else if(error['car']){
               $('#ajax_bar_edit').html('<div id="alarm_red">' + error['car'] +'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }else if(error['price']){
               $('#ajax_bar_edit').html('<div id="alarm_red">' + error['price'] +'</div>');
               $('#ajax_bar_edit').css("border-color" , "#c30909");
            }
          }
},"json");
}
