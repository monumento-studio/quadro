jQuery(document).ready(function($) {
'use strict';

var gsapTypeIt = function() {

  // Create global element references
  this.el = null;
  this.cursor = null;
  this.wordIndex = 0;
  this.wordIndexLength = 0;
  // Define option defaults
  var defaults = {
    el: null,
    elClass: '',
    rotateWords : true,
        rotateWordsOptions: {
          wordsList: [],
          cycle:true,
          clear: false,
          clearingDuration: 10,
          clear_background: '#000',
          clear_color: '#fff',
          original_background: 'transparent',
          original_color: '#000',
          append: false,
          pause: false,
        },
    word: "",
    cursorSign: "",
    autoPlay: true,
    delay: 5,
    charterPerSecond: false,
    yoyo: true,
    duration: 15,
    easing: Linear.easeNone
  }

  // Create options by extending defaults with the passed in arugments
  if (arguments[0] && typeof arguments[0] === "object") {
    this.options = extendDefaults(defaults, arguments[0]);
  }

  buildGsapTypeIt.call(this);

}

// Private Methods
function extendDefaults(source, properties) {
var property;
for (property in properties) {
    if (properties.hasOwnProperty(property)) {
        if (typeof properties[property] === 'object' && properties[property] !== null && !(properties[property] instanceof Date) && typeof properties[property].nodeType === 'undefined' && !Array.isArray(properties[property]) && property !== 'easing'){
            extendDefaults(source[property], properties[property]);
        } else {
            source[property] = properties[property];
        }
    }
}

return source;
}

// Public Methods

gsapTypeIt.prototype.type = function() {

  var op = this.options,
      el = op.el,
      delay = op.delay,
      ease = op.easing,
      duration = op.duration,
      cps = op.charterPerSecond,
      word = op.word,
      rotateWordsOptions = op.rotateWordsOptions,
      words = rotateWordsOptions.wordsList,
      wordIndex = this.wordIndex,
      oldClass;

  TweenLite.delayedCall(0, setCurstorClassName, [ this.cursor, "blink"]);
  TweenLite.delayedCall(delay, setCurstorClassName, [ this.cursor, " "]);

  if(!this.options.rotateWords){
    console.log(cps);
    if(cps){
     duration =  setCharterPerSecondDuration(word, cps);
    }
    TweenLite.to(el, duration, {text:{value:word}, delay:delay, ease:ease, onComplete:setCurstorClassName, onCompleteParams: [ this.cursor, 'blink' ] });

  } else{
     this.wordIndex = wordIndex;

  if(cps) {
   duration =  setCharterPerSecondDuration(words[this.wordIndex], cps);
  }


  if(rotateWordsOptions.append && wordIndex > 0) {
    word = el.textContent + ' ' + words[this.wordIndex];
    oldClass = '';
  } else {
    word = words[this.wordIndex];
    oldClass = 'old';
  }

  TweenLite.to(el, duration, {text:{value:word, oldClass:oldClass}, delay:delay, ease:ease, onComplete:this.typeRotationCompleted, onCompleteParams:[this]  });
}
}

gsapTypeIt.prototype.typeRotationCompleted = function(that) {

  setCurstorClassName(that.cursor, 'blink');

  if( that.wordIndex >= that.wordIndexLength -1 ){
        if(that.options.rotateWordsOptions.cycle){
        that.wordIndex = 0;
        }else{
          return;
        }
      }else {
        that.wordIndex++;
      }
  if(that.options.rotateWordsOptions.clear){
    that.clear();
    return false;
  }
   if(that.options.rotateWordsOptions.pause){
    return false;
  }

    that.type(that.el);
}
gsapTypeIt.prototype.clear = function() {
      var rotateWordsOp = this.options.rotateWordsOptions;

      TweenLite.set(this.el, {background:rotateWordsOp.clear_background, color:'white', delay: rotateWordsOp.clearingDuration });
      TweenLite.delayedCall(rotateWordsOp.clearingDuration/2, setCurstorClassName, [ this.cursor, "hide"]);

      TweenLite.set(this.el, {text:{value:""}, background:rotateWordsOp.original_background, color:rotateWordsOp.original_color,  delay: rotateWordsOp.clearingDuration} );
      TweenLite.delayedCall(rotateWordsOp.clearingDuration, setCurstorClassName, [ this.cursor, "blink"]);

  if(!rotateWordsOp.pause){
   var that = this;
   TweenLite.delayedCall(rotateWordsOp.clearingDuration, this.type, [], that );
  }
}

gsapTypeIt.prototype.clearCompleted = function() {

}

function setCurstorClassName(cursor, className) {
 // cursor.className = " ";
  cursor.className = "gsapCursor " + className;
}

function setCharterPerSecondDuration(word, cps){
 return word.length/cps;
}

function gsapTypeItError(message) {
  this.message = message;
  this.name = "gsapTypeItError s";
}

function buildGsapTypeIt() {
  var HTMLcursor, op;
  op = this.options;
  this.el = op.el;

  if (this.options.elClass) {
    this.el.className = op.elClass;
  }
  if(op.rotateWords){
    this.wordIndexLength = op.rotateWordsOptions.wordsList.length;

  }

  HTMLcursor = document.createElement("span");
  HTMLcursor.className = 'gsapCursor blink';
  this.el.parentNode.insertBefore(HTMLcursor, this.el.nextSibling);
  HTMLcursor.innerHTML = this.options.cursorSign;
  this.cursor = HTMLcursor;

  if(op.autoPlay){
    this.type();
  }

}

 var tagline = new gsapTypeIt({
  el: document.getElementById('tagline'),
  rotateWords: true,
  autoPlay: true,
  delay: 4,
  yoyo: true,
  charterPerSecond: 7,
  rotateWordsOptions : {
    wordsList : ['1982 México', 'Polanco', 'Contadero', 'Calidad y Servicio'],
    cycle: true,
    append: false
  }
});

$('.bottom .m-dropdown').on('click', function(){
  $('.links').toggleClass('show');
});

$('.dis').on('mouseenter', function(){
  $('.links .dropdown').addClass('show');
});

$('.links .dropdown').on('mouseleave', function(){
  $(this).removeClass('show');
});

if(screen.width < 600) {
  $('.buscador button').on('click', function(){
    $('.buscador input').toggleClass('pop');
  });
}

$(window).on('scroll', function(){
  if($(this).scrollTop() > 800) {
    $('.stt').addClass('op');
  } else {
    $('.stt').removeClass('op');
  }
});

$('.stt').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
    return false;
});

//Homepage Slider
$(document).ready(function(){
  $('.colecciones').slick({
    fade: true,
    // appendArrows: $('.arrows'),
    prevArrow: '<button type="button" class="slick-prev">&#x2190;</button>',
    nextArrow: '<button type="button" class="slick-next">	&#x2192;</button>',
    speed: 2500
  });
});

//Extra

$('ul#menu-menu-header li.menu-item-has-children').on('mouseenter', function(){
  $('ul#menu-menu-header li.menu-item-has-children ul.sub-menu').css('display', 'flex');
});

$('ul#menu-menu-header li.menu-item-has-children').on('mouseleave', function(){
  $('ul#menu-menu-header li.menu-item-has-children ul.sub-menu').css('display', 'none');
});

$('.woocommerce-notices-wrapper').delay(4000).fadeOut(100);


// $('.woocommerce-ordering select').select2();


});
