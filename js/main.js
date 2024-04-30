$(document).ready(function() {
  // Add active class to clicked link and toggle submenu
  $('.sidebar-link').click(function() {
      var isActive = $(this).hasClass('active');

      // Remove active class from all links
      $('.sidebar-link').removeClass('active');
      // Add active class to the clicked link if it's not already active
      if (!isActive) {
          $(this).addClass('active');
      }

      // Toggle submenu
      var subMenu = $(this).next('.sub-menu');
      if (subMenu.length) {
          subMenu.toggleClass('show', !
              isActive); // Toggle the submenu only if link is not already active
      }
  });

  // Add active class to parent link if sub-menu is active
  $('.sub-menu').each(function() {
      if ($(this).hasClass('show')) {
          $(this).prev('.sidebar-link').addClass('active');
      }
  });
});