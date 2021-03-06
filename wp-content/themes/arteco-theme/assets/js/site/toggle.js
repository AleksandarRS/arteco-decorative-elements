"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		toggleIcon: $('.hero-icon'),
		toggleSearchIcon: $('.toggle-icon')
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			this.$dom.toggleIcon.click(function() {
				// $( this ).parent('.hero-decription-icon-animate-wrap').toggleClass( "toggled-content" );
				$( this ).parent('.hero-decription-icon-animate-wrap').find('.hero-text-description').slideToggle( "slow" );
			});
			this.$dom.toggleSearchIcon.click(function() {
				$( this ).parents('.header-social-search-menu-item').toggleClass( "search-opened" );
			});
		}
    },

};