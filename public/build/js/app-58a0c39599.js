(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

$(function () {
	/***************** TAB */
	$('.nav-pills a').click(function (e) {
		e.preventDefault();
		$(this).parents('.nav-pills').find('li').removeClass('active');
		$(this).parent('li').addClass('active');
	});

	/*$('.img-gallery .gallery-item a').click(function(e){
 	if( $(this).hasClass('prevent') ) {
 		e.preventDefault();
 		var href = $(this).attr('href');
 		var hash = href.substring(href.indexOf('#')+1);
 			$('.'+hash).one("load", function() {
 	    	}).attr('src', href).show('slow');
 	}
 });*/

	$('.pop').on('click', function (e) {
		e.preventDefault();

		var pop = $(this);

		$('.imagepreview').attr('src', pop.attr('href'));
		$('#imagemodal').modal('show');
	});

	$("img").one("load", function () {
		// do stuff
	}).each(function () {
		if (this.complete) $(this).load();
	});
});

},{}]},{},[1]);

//# sourceMappingURL=app.js.map
