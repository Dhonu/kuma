(function($) {

  /*
    Create the settings menu
  */
  (function() {
    var $settingsMenu = $('#settings-menu');
    $settingsMenu.mozMenu();
    $settingsMenu.parent().find('.submenu').mozKeyboardNav();
  })();

  /*
    Set up the "from search" buttons if user came from search
  */
  (function() {
    var $fromSearchNav = $('.from-search-navigate');
    if($fromSearchNav.length) {
      var $fromSearchList = $('.from-search-toc');
      $fromSearchNav.mozMenu({
        submenu: $fromSearchList,
        brickOnClick: true
      });
      $fromSearchList.find('ol').mozKeyboardNav();
    }
  })();

  /*
    Toggle for quick links show/hide
  */
  (function() {
    // Set up the quick links for the toggler
    var $quickLinks = $('#quick-links');
    setupTogglers($quickLinks.find('> ul > li, > ol > li'));
    $quickLinks.find('.toggleable').mozTogglers();
    
    var side = $('#quick-links-toggle').closest('.wiki-column').attr('id');
    // Quick Link toggles
    $('#quick-links-toggle, #show-quick-links').on('click', function(e) {
      e.preventDefault();
      $('#' + side).toggleClass('column-closed');
      $('#wiki-column-container').toggleClass(side + '-closed');
      $('#wiki-controls .quick-links').toggleClass('hidden');
    });
  })();
  
  /*
    Set up the zone subnav accordion
  */
  $('.zone-subnav-container').each(function() {
    var $subnavList = $(this).find('.subnav > ol');
    if(!$subnavList.length) return; // Exit if the subnav isn't set up properly
    
    // Set the list items as togglers where needed
    setupTogglers($subnavList.find('li'));
    
    // Make them toggleable!
    $subnavList.find('.toggleable').mozTogglers();
    
    // Try to find the current page in the list, if found, open it
    var $selected = $subnavList.find('a[href$="' + document.location.pathname + '"]');
    $selected.each(function() {
      $(this).parents('.toggleable').find('.toggler').trigger('click');
    }).parent().addClass('current');
    
    // Mark this is an accordion so the togglers open/close properly
    $subnavList.addClass('accordion');
  });

  /*
    Subscribe / unsubscribe to an article
  */
  $('.page-watch a').on('click', function(e) {
    e.preventDefault();
    $(this).closest('form').submit();
  });
  
  // Utility method for the togglers
  function setupTogglers($elements) {
    $elements.each(function() {
      var $li = $(this);
      var $sublist = $li.find('> ul, > ol');
      
      if($sublist.length) {
        $li.addClass('toggleable closed');
        $li.find('> a').addClass('toggler').prepend('<i class="icon-caret-up"></i>');
        $sublist.addClass('toggle-container');
      }
    });
  }


})(jQuery);