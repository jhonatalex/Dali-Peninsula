jQuery(document).ready(function() {

  // Check for click events on the navbar burger icon
  jQuery(".navbar-burger").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      jQuery(".navbar-burger").toggleClass("is-active");
      jQuery(".navbar-menu").toggleClass("is-active");

  });
});