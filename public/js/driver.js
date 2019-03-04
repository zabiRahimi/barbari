

function redirect_href(href){
  window.location.href  = href;
}
function save_driver1(){

  $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  var mobail=$('#mobail_driver_first').val();
  var patt =/^[0-9]{10}$/;
  if(patt.test(mobail)){mobail = 0 + mobail;}
    $.ajax({
        url: "/save_driver1",
        method: 'post',
        data: {

            name: $('#name_driver_first').val(),
            mobail: mobail,

            amniat: $('#amniat_driver_first').val(),
        },
        success: function(data) {
          $('#ajax_driver_first').empty();
          document.getElementById("form1_driver_sabt").reset();
          $('#end_sabt1_driver').modal('show');


            },
        error: function(xhr) {

            var errors = xhr.responseJSON;

            var error=errors.errors;
            // scroll_form('form_data_buyer');


             if(error['name']){

               $('#ajax_driver_first').html('<div id="alarm_red">'+error['name']+'</div>');
               $('#ajax_driver_first').css("border-color" , "#c30909");
            }else if(error['mobail']){

               $('#ajax_driver_first').html('<div id="alarm_red">' + error['mobail'] +'</div>');
               $('#ajax_driver_first').css("border-color" , "#c30909");
            }

          }
},"json");
}

function login_driver(){

  $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  var mobail=$('#mobail_driver_login').val();
  var patt =/^[0-9]{10}$/;
  if(patt.test(mobail)){mobail = 0 + mobail;}
    $.ajax({
        url: "/login_driver",
        method: 'post',
        data: {

            name: $('#name_driver_login').val(),
            mobail: mobail,

            amniat: $('#amniat_driver_login').val(),
        },
        success: function(data) {
          if(data=='error'){
            $('#ajax_driver_login').html('<div id="alarm_red">نام و یا موبایل اشتباه است .</div>');
          }
          else{
          $('#ajax_driver_login').empty();
          document.getElementById("form_driver_login").reset();
          redirect_href('/driver_panel');
            }

            },
        error: function(xhr) {

            var errors = xhr.responseJSON;

            var error=errors.errors;
            // scroll_form('form_data_buyer');


             if(error['name']){

               $('#ajax_driver_login').html('<div id="alarm_red">'+error['name']+'</div>');
               $('#ajax_driver_login').css("border-color" , "#c30909");
            }else if(error['mobail']){

               $('#ajax_driver_login').html('<div id="alarm_red">' + error['mobail'] +'</div>');
               $('#ajax_driver_login').css("border-color" , "#c30909");
            }

          }
},"json");
}

function show_one_bar(id_bar){
  $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({url: "/show_one_bar",method: 'post',data: {id_bar: id_bar,},
        success: function(data) {$('#continer_driver').html(data);},
  },"json");}
function show_all_bar(){
  $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({url: "/show_all_bar",method: 'post',
        success: function(data) {$('#continer_driver').html(data);},
      },"json");}

function edit_driver(id){

        $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
        var mobail=$('#mobail_driver_edit').val();
        var tel=$('#tel_driver_edit').val();
        var patt =/^[0-9]{10}$/;
        if(patt.test(mobail)){mobail = 0 + mobail;}
        if(patt.test(tel)){tel = 0 + tel;}
          $.ajax({
              url: "/edit_driver",
              method: 'post',
              data: {
                  id:id,
                  name: $('#name_driver_edit').val(),
                  mobail: mobail,
                  tel:tel,
                  ostan: $('#ostan_driver_edit').val(),
                  city: $('#city_driver_edit').val(),
                  address: $('#address_driver_edit').val(),
                  codepost: $('#codepost_driver_edit').val(),
                  birthday: $('#birthday_driver_edit').val(),
                  codemly: $('#codemly_driver_edit').val(),
                  number_ran: $('#number_ran_driver_edit').val(),
                  hooshmand_ran: $('#hooshmand_ran_driver_edit').val(),
              },
              success: function(data) {
                $('#ajax_driver_edit').empty();
                $('#end_edit_driver').modal('show');

                  },
              error: function(xhr) {

                  var errors = xhr.responseJSON;

                  var error=errors.errors;
                  scroll_form('form_driver_edit');


                   if(error['name']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">'+error['name']+'</div>');
                     $('#ajax_driver_login').css("border-color" , "#c30909");
                  }else if(error['mobail']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['mobail'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else if(error['tel']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['tel'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else if(error['ostan']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['ostan'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else if(error['city']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['city'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else if(error['address']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['address'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else if(error['codepost']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['codepost'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else if(error['birthday']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['birthday'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else if(error['codemly']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['codemly'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else if(error['number_ran']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['number_ran'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else if(error['hooshmand_ran']){

                     $('#ajax_driver_edit').html('<div id="alarm_red">' + error['hooshmand_ran'] +'</div>');
                     $('#ajax_driver_edit').css("border-color" , "#c30909");
                  }else{
                    $('#ajax_driver_edit').html('<div id="alarm_red">ثبت مشخصات انجام نشد ، دوباره سعی نمایید .</div>');
                  }

                }
      },"json");
      }
function sabt_edit_car(id=0){
  
              $.ajaxSetup({  headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});

              $.ajax({
                    url: "/sabt_edit_car",
                    method: 'post',
                    data: {
                        id:id,
                        name: $('#name_car_sabt_edit').val(),
                        class: $('#class_car_sabt_edit').val(),
                        axile:$('#axile_car_sabt_edit').val(),
                        ton: $('#ton_car_sabt_edit').val(),
                        plak: $('#plak_car_sabt_edit').val(),
                        model: $('#model_car_sabt_edit').val(),
                        hooshmand_car: $('#hooshmand_car_car_sabt_edit').val(),
                        pic: $('#pic_car_sabt_edit').val(),

                    },
                    success: function(data) {
                      $('#ajax_driver_edit').empty();
                      $('#end_edit_driver').modal('show');

                        },
                    error: function(xhr) {

                        var errors = xhr.responseJSON;

                        var error=errors.errors;
                        scroll_form('form_car_sabt_edit');


                         if(error['name']){

                           $('#ajax_car_sabt_edit').html('<div id="alarm_red">'+error['name']+'</div>');
                           $('#ajax_car_sabt_edit').css("border-color" , "#c30909");
                        }else if(error['class']){

                           $('#ajax_car_sabt_edit').html('<div id="alarm_red">' + error['class'] +'</div>');
                           $('#ajax_car_sabt_edit').css("border-color" , "#c30909");
                        }else if(error['axile']){

                           $('#ajax_car_sabt_edit').html('<div id="alarm_red">' + error['axile'] +'</div>');
                           $('#ajax_car_sabt_edit').css("border-color" , "#c30909");
                        }else if(error['ton']){

                           $('#ajax_car_sabt_edit').html('<div id="alarm_red">' + error['ton'] +'</div>');
                           $('#ajax_car_sabt_edit').css("border-color" , "#c30909");
                        }else if(error['plak']){

                           $('#ajax_car_sabt_edit').html('<div id="alarm_red">' + error['plak'] +'</div>');
                           $('#ajax_car_sabt_edit').css("border-color" , "#c30909");
                        }else if(error['model']){

                           $('#ajax_car_sabt_edit').html('<div id="alarm_red">' + error['model'] +'</div>');
                           $('#ajax_car_sabt_edit').css("border-color" , "#c30909");
                        }else if(error['hooshmand_car']){

                           $('#ajax_car_sabt_edit').html('<div id="alarm_red">' + error['hooshmand_car'] +'</div>');
                           $('#ajax_car_sabt_edit').css("border-color" , "#c30909");
                        }else if(error['pic']){

                           $('#ajax_car_sabt_edit').html('<div id="alarm_red">' + error['birthday'] +'</div>');
                           $('#ajax_car_sabt_edit').css("border-color" , "#c30909");
                        }else{
                          $('#ajax_car_sabt_edit').html('<div id="alarm_red">ثبت مشخصات انجام نشد ، دوباره سعی نمایید .</div>');
                        }

                      }
            },"json");
            }
