function scroll_form(class_form){
  var h= $('.'+class_form).offset();
  var hTop=h.top-12;
  window.scrollTo(0 ,hTop);
}
