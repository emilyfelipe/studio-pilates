smoothScroll.init({
    speed: 1000,
    easing: 'easeInOutCubic',
    offset: '60',
    updateURL: true,
    callbackBefore: function ( toggle, anchor ) {},
    callbackAfter: function ( toggle, anchor ) {}
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})