$(document).ready(function(){
    $('#plane1').animate({'marginTop':'910px'},5000);
    $('#ball').animate({'marginTop':'115px'},5000);

    setTimeout(function() {
        $('#plane2').animate({'marginTop':'800px'},5000).hide(1);
    }, 6000);

    setTimeout(function() {
        $('#ball').animate({'marginTop':'0','marginLeft':'156px'},300);
    },5000);

    setTimeout(function() {
        $('#ball').animate({'marginTop':'110px','marginLeft':'252px'},300);
    }, 5300);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'0','marginLeft':'338px'},300);
    }, 5600);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'70px','marginLeft':'425px'},300);
    }, 5900);
//буква F
    setTimeout(function() {
        $('#funf').css({'width':'87px','height':'48px'});
    }, 6050);
    setTimeout(function() {
        $('#funf').css({'width':'87px','height':'89px'});
    }, 6400);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'0','marginLeft':'510px'},300);
    }, 6200);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'70px','marginLeft':'596px'},300);
    }, 6500);
//буква N
    setTimeout(function() {
        $('#funn').css({'width':'87px','height':'48px'});
    }, 6650);
    setTimeout(function() {
        $('#funn').css({'width':'87px','height':'89px'});
    }, 7000);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'0','marginLeft':'682px'},300);
    }, 6800);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'70px','marginLeft':'778px'},300);
    }, 7100);
//буква L
    setTimeout(function() {
        $('#funl').css({'width':'87px','height':'48px'});
    }, 7250);
    setTimeout(function() {
        $('#funl').css({'width':'87px','height':'89px'});
    }, 7600);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'0','marginLeft':'874px'},300);
    }, 7400);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'70px','marginLeft':'970px'},300);
    }, 7700);
//буква B
    setTimeout(function() {
        $('#funb').css({'width':'87px','height':'48px'});
    }, 7850);
    setTimeout(function() {
        $('#funb').css({'width':'87px','height':'89px'});
    }, 8200);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'0','marginLeft':'1030px'},300);
    }, 8000);
    setTimeout(function() {
        $('#ball').animate({'marginTop':'20px','marginLeft':'1075px'},300).fadeOut(1000);
    }, 8330);

//players
    $('#player1').click(function(){
        $('#player1').animate({'width':'400px','height':'400px'},1000);
    })
    $('#player1').mouseout(function(){
        $('#player1').animate({'width':'150px','height':'150px'},1000);
    })



})//конец ready
