'use strict';

$ = require('jquery');

const Navigation = require('./core/navigation');
const slick = require('./site/slick');
const toggle = require('./site/toggle');
const equalheight = require('./site/equalheight');
const example = require('./site/example');

jQuery( function(){

  /**
   * Initialize site navigation
   */
  Navigation.init();

  /**
   * Initialize equalheight module
   */
   equalheight.init();

  /**
   * Initialize Slick slider module
   */
   slick.init();

  /**
   * Initialize toggle module
   */
  toggle.init();

  /**
   * Initialize sample module
   */
  example.init();

});