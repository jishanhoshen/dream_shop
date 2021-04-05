$( document ).ready(function() {
	//preloader
	$('.js-preloader').preloadinator({
		minTime: 2000
	});
	//dropdown menu
	$(".dropdown").hide();
	$(".dropbox").click(function(){
	    $(".dropdown").slideToggle();
	});
	//nav toggle
	$("#openNav").css({"display": "none"});
	$("#openNav").click(function(){
		$("#openNav").css({"display": "none"});
		$("#closeNav").css({"display": "block"});
		$(".leftSide").css({"left": "0px"});
		$(".rightSide").css({"margin-left": "250px"});
	});
	$("#closeNav").click(function(){
		$("#closeNav").css({"display": "none"});
		$("#openNav").css({"display": "block"});
		$(".leftSide").css({"left": "-500px"});
		$(".rightSide").css({"margin-left": "0px"});
	});
	$('.mainContainer').css({'display':'block'});
});