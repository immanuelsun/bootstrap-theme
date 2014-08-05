/* ==================================================
   ! Main JS functionality.
================================================== */
jQuery(document).ready(function ($) {
  // Bootstrap Offcanvas
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active');
  });
});