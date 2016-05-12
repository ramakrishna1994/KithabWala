// CTAG:GLOBAL:NAV
/* Apply a CSS class and handle the hover action entirely in JS (so we don't
mix CSS-based and JS-based nav dropdown behavior). Add a slight delay to
the hover. */
var module; UMD(module, {
  'minted:m': ['M'],
  'minted:vendor/backbone-1.0.0.min': 'Backbone',
  'minted:vendor/jquery-1.9.1.min': '$',
  'minted:vendor/underscore-1.8.2.min': '_',
})(this, function (m_module, Backbone, $, _) {

  "use strict";

  var M = m_module.M;
  M.SecondaryFlyoutNav = M.SecondaryFlyoutNav || {};
  M.SecondaryFlyoutNav.initNavHoverIntent = function() {
    var navItem = $('.secondaryNav > li');
    navItem.addClass('jsHover');
    navItem.hoverIntent({
      timeout: 120,
      over: function() {
        var $flyoutWrapper = $(".flyoutWrapper", this);
        $flyoutWrapper.fadeIn(150);

        // If the flyout extends beyond the edge of the page, move it to the left
        // so it stays within the bounds of the page.
        if (!$flyoutWrapper.hasClass('repositioned')) {
          var flyoutWidth = $flyoutWrapper.width();
          var navWidth = $('.secondaryNav').outerWidth();
          var xPos = $(this).position().left;
          if ((flyoutWidth + xPos) > navWidth) {
            var diff = Math.round(navWidth - (flyoutWidth + xPos));
            $flyoutWrapper.css('left', diff + 'px');
            $flyoutWrapper.addClass('repositioned');
          }
        }

        // TODO: Remove once the 2013 nav experiment has ended
        // https://www.pivotaltracker.com/story/show/57603848
        // https://www.optimizely.com/edit?experiment_id=347870188
        window.optimizely = window.optimizely || [];
        window.optimizely.push(['trackEvent', 'secondary_nav_hover']);
      },
      out: function() {
       $(".flyoutWrapper", this).hide();
      }
    });
  }

  M.SecondaryFlyoutNav.createImageFlyoutOverlayOnload = function() {
    if (M.IS_MOBILE) {
      return;
    }
    $('.secondaryNav > .imageFlyoutOverlayWrapper').each(function() {
      var fetchUrl = $(this).data('fetch-url');
      var buttonCallToAction = $(this).data('button-cta');
      var redirectUrl = $(this).data('redirect-url');
      if (fetchUrl && buttonCallToAction) {
        var voteNavOverlay = new M.Community.View.Util.SecondaryNavOverlay ({
          model: new M.Community.Model.SecondaryNavOverlay({
            fetchUrl: fetchUrl,
            redirectUrl: redirectUrl
          }),
          buttonText: buttonCallToAction,
          $parentContainer: $(this)
        });
      }
    });
  };

  $(document).ready(function() {
    if (!M.IS_MOBILE) {
      M.SecondaryFlyoutNav.createImageFlyoutOverlayOnload();
      M.SecondaryFlyoutNav.initNavHoverIntent();
    }
  });

  return {};

});
