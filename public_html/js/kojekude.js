/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Slajder
$(function() {
    $('#slides').slidesjs({
        height: 250,
        navigation: false,
        pagination: false,
        effect: {
            fade: {
            speed: 400}},callback:
            {
            start: function(number)
            {
            $("#slider_content1,#slider_content2,#slider_content3,#slider_content4,#slider_content5").hide(500);},
            complete: function(number)
            {
            $("#slider_content" + number).delay(500).slideDown(1000);}},
            play:
            {
            active: false,
            auto: true,
            interval: 6000,
            pauseOnHover: false}
    });
});

$(document).ready(function () {
    //sakrivanje info srednjeg menija
    $("#text-developinga").hide();
    $("#text-design").hide();
    $("#text-ready").hide();
//    var poruka = $( "#alternative_menu option:selected" ).text()+'.html';
      
    $("#alternative_menu").change(function(e){
        window.location = $(this).val();
    });

    // dugmici socijale
    $('#twiter').mouseover(function () {
        $("#twiter").attr("src", "images/t-nar.png");
    });
    $('#twiter').mouseleave(function () {
        $("#twiter").attr("src", "images/t-belo.png");
    });

    $('#in').mouseover(function () {
        $("#in").attr("src", "images/in-nar.png");
    });
    $('#in').mouseleave(function () {
        $("#in").attr("src", "images/in-belo.png");
    });

    $('#face').mouseover(function () {
        $("#face").attr("src", "images/f-nar.png");
    });
    $('#face').mouseleave(function () {
        $("#face").attr("src", "images/f-belo.png");
    });

    $('#google').mouseover(function () {
        $("#google").attr("src", "images/g-nar.png");
    });
    $('#google').mouseleave(function () {
        $("#google").attr("src", "images/g-belo.png");
    });
    
    $('#elance').mouseover(function () {
        $("#elance").attr("src", "images/e-nar.png");
    });
    $('#elance').mouseleave(function () {
        $("#elance").attr("src", "images/e-belo.png");
    });
    
    $('#behance').mouseover(function () {
        $("#behance").attr("src", "images/be-nar.png");
    });
    $('#behance').mouseleave(function () {
        $("#behance").attr("src", "images/be-belo.png");
    });
    
    
    
    // dugmici gornje socijale
    $('#twiter2').mouseover(function () {
        $("#twiter2").attr("src", "images/social_icons/t-nar.png");
    });
    $('#twiter2').mouseleave(function () {
        $("#twiter2").attr("src", "images/social_icons/t-sivo.png");
    });

    $('#in2').mouseover(function () {
        $("#in2").attr("src", "images/social_icons/in-nar.png");
    });
    $('#in2').mouseleave(function () {
        $("#in2").attr("src", "images/social_icons/in-sivo.png");
    });

    $('#face2').mouseover(function () {
        $("#face2").attr("src", "images/social_icons/f-nar.png");
    });
    $('#face2').mouseleave(function () {
        $("#face2").attr("src", "images/social_icons/f-sivo.png");
    });

    $('#google2').mouseover(function () {
        $("#google2").attr("src", "images/social_icons/g-nar.png");
    });
    $('#google2').mouseleave(function () {
        $("#google2").attr("src", "images/social_icons/g-sivo.png");
    });
    
    $('#elance2').mouseover(function () {
        $("#elance2").attr("src", "images/social_icons/e-nar.png");
    });
    $('#elance2').mouseleave(function () {
        $("#elance2").attr("src", "images/social_icons/e-sivo.png");
    });
    
    $('#behance2').mouseover(function () {
        $("#behance2").attr("src", "images/social_icons/be-nar.png");
    });
    $('#behance2').mouseleave(function () {
        $("#behance2").attr("src", "images/social_icons/be-sivo.png");
    });
    
    



    //dugmici srednjeg menija
    $('#develop').mouseover(function () {
        $("#develop").attr("src", "images/developing-hover.png");
        $("#develop").attr("width", "100%");
        $("#text-developinga").show();
    });
    $('#develop').mouseleave(function () {
        $("#develop").attr("src", "images/developing.png");
        $("#text-developinga").hide();
    });

    $('#desi').mouseover(function () {
        $("#desi").attr("src", "images/design-hover.png");
        $("#develop").attr("width", "100%");
        $("#text-design").show();
    });
    $('#desi').mouseleave(function () {
        $("#desi").attr("src", "images/design.png");
        $("#text-design").hide();
    });

    $('#ready').mouseover(function () {
        $("#ready").attr("src", "images/web-design-hover.png");
        $("#develop").attr("width", "100%");
        $("#text-ready").show();
    });
    $('#ready').mouseleave(function () {
        $("#ready").attr("src", "images/web-design.png");
        $("#text-ready").hide();
    });
    
    
    //dugmici portfolio
    $("#portfolio h3").hide();
    $('#portfolio .col-lg-6').mouseover(function () {
        $(this).find("h3").show(500);
    
    });
    $('#portfolio .col-lg-6').mouseleave(function () {
        $(this).find("h3").hide(500);
    });
    
    //dugmici obout us slicica
    $('#ivona').mouseover(function () {
        $("#ivona").attr("src", "images/our_team/ivona-hover.png");
    });
    $('#ivona').mouseleave(function () {
        $("#ivona").attr("src", "images/our_team/ivona.png");
    });
    
    $('#igor').mouseover(function () {
        $("#igor").attr("src", "images/our_team/igor-hover.png");
    });
    $('#igor').mouseleave(function () {
        $("#igor").attr("src", "images/our_team/igor.png");
    });
    
    $('#dragan').mouseover(function () {
        $("#dragan").attr("src", "images/our_team/dragan-hover.png");
    });
    $('#dragan').mouseleave(function () {
        $("#dragan").attr("src", "images/our_team/dragan.png");
    });
    
    var pathname = window.location.pathname.slice(10);
    $("#alternative_menu").val(pathname);
    
    //about us dugmici
    //kartica ivona
    $("#kartica-ivona").hide();
    $("#ivona").click(function(){
        $("#aboutcontent").fadeOut();
        $("#kartica-ivona").fadeIn(1000);
    });
    
    //kartica igor
    $("#kartica-igor").hide();
    $("#igor").click(function(){
        $("#aboutcontent").fadeOut();
        $("#kartica-igor").fadeIn(1000);
    });
    
    //kartica dragan
    $("#kartica-dragan").hide();
    $("#dragan").click(function(){
        $("#aboutcontent").fadeOut();
        $("#kartica-dragan").fadeIn(1000);
    });
    
    // dugme za zatvaranje kartica
    $(".close").mouseover(function(){
        $(".close").attr("src","images/X_beli.png");
    });
    $(".close").mouseout(function(){
        $(".close").attr("src","images/X_narandzasti.png");
    });
    $(".close").click(function(){
        $(".kartica").hide();
        $("#aboutcontent").fadeIn(1000);
    });
    

    // portfolio veliki meni
    $("#portfolio #2").click(function(){
        window.location.href = "logo";
    });
    
      $("#portfolio #1").click(function(){
        window.location.href = "branding";
    });
    
      $("#portfolio #3").click(function(){
        window.location.href = "corporate";
    });
    
     $("#portfolio #4").click(function(){
        window.location.href = "brochures";
    });
    
      $("#portfolio #5").click(function(){
        window.location.href = "packaging";
    });
    
    $("#portfolio #6").click(function(){
        window.location.href = "web";
    });

    $(".tdImg").mouseover(function(){
        $(this).find(".shadow").hide();
    });
   $(".tdImg").mouseleave(function(){
        $(this).find(".shadow").show();
    });
   
    $(".lytebox").mouseover(function(){
        $(this).find("img:first").hide();
    });
   $(".lytebox").mouseleave(function(){
        $(this).find("img:first").show();
    });
   
});

