$(document).ready(function(){
  $("#sidebar_btn").click(function(){
    $(".sidebar,.overlay,.humburg").toggleClass("open");
  });
   $(".overlay").click(function(){
    $(".sidebar,.overlay,.filter-sidebar").removeClass("open");
  });
  
  $(".filter-btn").click(function(){
    $(".overlay,.filter-sidebar").toggleClass("open");
  });
  
   $("#sidebar_btn").click(function(){
    $(".filter-sidebar").removeClass("open");
  });
});