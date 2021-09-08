'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const slick = require('./site/slick');
const example = require('./site/example');

jQuery( function(){

  /**
   * Initialize site navigation
   */
  Navigation.init();

  /**
   * Initialize Slick slider module
   */
   slick.init();

  /**
   * Initialize sample module
   */
  example.init();

});