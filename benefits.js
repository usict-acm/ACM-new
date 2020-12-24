function myFunction() {
  document.getElementById("togglerButton").classList.add("sps--blw");
  document.getElementById("togglerButton").classList.remove("sps--abv");
}
/*------- Smooth Scroll -------*/

$('a[href^="#"]').on('click', function(event) {

  var target = $($(this).attr('href'));

  if (target.length) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 1000);
  }

});



/**
 * Swiper 3.4.0
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 *
 * http://www.idangero.us/swiper/
 *
 * Copyright 2016, Vladimir Kharlampidi
 * The iDangero.us
 * http://www.idangero.us/
 *
 * Licensed under MIT
 *
 * Released on: October 16, 2016
 */
! function() {
  "use strict";

  function e(e) {
    e.fn.swiper = function(a) {
      var s;
      return e(this).each(function() {
        var e = new t(this, a);
        s || (s = e)
      }), s
    }
  }
  var a, t = function(e, i) {
    function n(e) {
      return Math.floor(e)
    }

    function o() {
      var e = S.params.autoplay,
        a = S.slides.eq(S.activeIndex);
      a.attr("data-swiper-autoplay") && (e = a.attr("data-swiper-autoplay") || S.params.autoplay), S.autoplayTimeoutId = setTimeout(function() {
        S.params.loop ? (S.fixLoop(), S._slideNext(), S.emit("onAutoplay", S)) : S.isEnd ? i.autoplayStopOnLast ? S.stopAutoplay() : (S._slideTo(0), S.emit("onAutoplay", S)) : (S._slideNext(), S.emit("onAutoplay", S))
      }, e)
    }

    function l(e, t) {
      var s = a(e.target);
      if (!s.is(t))
        if ("string" == typeof t) s = s.parents(t);
        else if (t.nodeType) {
        var i;
        return s.parents().each(function(e, a) {
          a === t && (i = t)
        }), i ? t : void 0
      }
      if (0 !== s.length) return s[0]
    }

    function p(e, a) {
      a = a || {};
      var t = window.MutationObserver || window.WebkitMutationObserver,
        s = new t(function(e) {
          e.forEach(function(e) {
            S.onResize(!0), S.emit("onObserverUpdate", S, e)
          })
        });
      s.observe(e, {
        attributes: "undefined" == typeof a.attributes || a.attributes,
        childList: "undefined" == typeof a.childList || a.childList,
        characterData: "undefined" == typeof a.characterData || a.characterData
      }), S.observers.push(s)
    }

    function d(e) {
      e.originalEvent && (e = e.originalEvent);
      var a = e.keyCode || e.charCode;
      if (!S.params.allowSwipeToNext && (S.isHorizontal() && 39 === a || !S.isHorizontal() && 40 === a)) return !1;
      if (!S.params.allowSwipeToPrev && (S.isHorizontal() && 37 === a || !S.isHorizontal() && 38 === a)) return !1;
      if (!(e.shiftKey || e.altKey || e.ctrlKey || e.metaKey || document.activeElement && document.activeElement.nodeName && ("input" === document.activeElement.nodeName.toLowerCase() || "textarea" === document.activeElement.nodeName.toLowerCase()))) {
        if (37 === a || 39 === a || 38 === a || 40 === a) {
          var t = !1;
          if (S.container.parents("." + S.params.slideClass).length > 0 && 0 === S.container.parents("." + S.params.slideActiveClass).length) return;
          var s = {
              left: window.pageXOffset,
              top: window.pageYOffset
            },
            i = window.innerWidth,
            r = window.innerHeight,
            n = S.container.offset();
          S.rtl && (n.left = n.left - S.container[0].scrollLeft);
          for (var o = [
              [n.left, n.top],
              [n.left + S.width, n.top],
              [n.left, n.top + S.height],
              [n.left + S.width, n.top + S.height]
            ], l = 0; l < o.length; l++) {
            var p = o[l];
            p[0] >= s.left && p[0] <= s.left + i && p[1] >= s.top && p[1] <= s.top + r && (t = !0)
          }
          if (!t) return
        }
        S.isHorizontal() ? (37 !== a && 39 !== a || (e.preventDefault ? e.preventDefault() : e.returnValue = !1), (39 === a && !S.rtl || 37 === a && S.rtl) && S.slideNext(), (37 === a && !S.rtl || 39 === a && S.rtl) && S.slidePrev()) : (38 !== a && 40 !== a || (e.preventDefault ? e.preventDefault() : e.returnValue = !1), 40 === a && S.slideNext(), 38 === a && S.slidePrev())
      }
    }

    function u() {
      var e = "onwheel",
        a = e in document;
      if (!a) {
        var t = document.createElement("div");
        t.setAttribute(e, "return;"), a = "function" == typeof t[e]
      }
      return !a && document.implementation && document.implementation.hasFeature && document.implementation.hasFeature("", "") !== !0 && (a = document.implementation.hasFeature("Events.wheel", "3.0")), a
    }

    function c(e) {
      e.originalEvent && (e = e.originalEvent);
      var a = 0,
        t = S.rtl ? -1 : 1,
        s = m(e);
      if (S.params.mousewheelForceToAxis)
        if (S.isHorizontal()) {
          if (!(Math.abs(s.pixelX) > Math.abs(s.pixelY))) return;
          a = s.pixelX * t
        } else {
          if (!(Math.abs(s.pixelY) > Math.abs(s.pixelX))) return;
          a = s.pixelY
        }
      else a = Math.abs(s.pixelX) > Math.abs(s.pixelY) ? -s.pixelX * t : -s.pixelY;
      if (0 !== a) {
        if (S.params.mousewheelInvert && (a = -a), S.params.freeMode) {
          var i = S.getWrapperTranslate() + a * S.params.mousewheelSensitivity,
            r = S.isBeginning,
            n = S.isEnd;
          if (i >= S.minTranslate() && (i = S.minTranslate()), i <= S.maxTranslate() && (i = S.maxTranslate()), S.setWrapperTransition(0), S.setWrapperTranslate(i), S.updateProgress(), S.updateActiveIndex(), (!r && S.isBeginning || !n && S.isEnd) && S.updateClasses(), S.params.freeModeSticky ? (clearTimeout(S.mousewheel.timeout), S.mousewheel.timeout = setTimeout(function() {
              S.slideReset()
            }, 300)) : S.params.lazyLoading && S.lazy && S.lazy.load(), S.emit("onScroll", S, e), S.params.autoplay && S.params.autoplayDisableOnInteraction && S.stopAutoplay(), 0 === i || i === S.maxTranslate()) return
        } else {
          if ((new window.Date).getTime() - S.mousewheel.lastScrollTime > 60)
            if (a < 0)
              if (S.isEnd && !S.params.loop || S.animating) {
                if (S.params.mousewheelReleaseOnEdges) return !0
              } else S.slideNext(), S.emit("onScroll", S, e);
          else if (S.isBeginning && !S.params.loop || S.animating) {
            if (S.params.mousewheelReleaseOnEdges) return !0
          } else S.slidePrev(), S.emit("onScroll", S, e);
          S.mousewheel.lastScrollTime = (new window.Date).getTime()
        }
        return e.preventDefault ? e.preventDefault() : e.returnValue = !1, !1
      }
    }

    function m(e) {
      var a = 10,
        t = 40,
        s = 800,
        i = 0,
        r = 0,
        n = 0,
        o = 0;
      return "detail" in e && (r = e.detail), "wheelDelta" in e && (r = -e.wheelDelta / 120), "wheelDeltaY" in e && (r = -e.wheelDeltaY / 120), "wheelDeltaX" in e && (i = -e.wheelDeltaX / 120), "axis" in e && e.axis === e.HORIZONTAL_AXIS && (i = r, r = 0), n = i * a, o = r * a, "deltaY" in e && (o = e.deltaY), "deltaX" in e && (n = e.deltaX), (n || o) && e.deltaMode && (1 === e.deltaMode ? (n *= t, o *= t) : (n *= s, o *= s)), n && !i && (i = n < 1 ? -1 : 1), o && !r && (r = o < 1 ? -1 : 1), {
        spinX: i,
        spinY: r,
        pixelX: n,
        pixelY: o
      }
    }

    function h(e, t) {
      e = a(e);
      var s, i, r, n = S.rtl ? -1 : 1;
      s = e.attr("data-swiper-parallax") || "0", i = e.attr("data-swiper-parallax-x"), r = e.attr("data-swiper-parallax-y"), i || r ? (i = i || "0", r = r || "0") : S.isHorizontal() ? (i = s, r = "0") : (r = s, i = "0"), i = i.indexOf("%") >= 0 ? parseInt(i, 10) * t * n + "%" : i * t * n + "px", r = r.indexOf("%") >= 0 ? parseInt(r, 10) * t + "%" : r * t + "px", e.transform("translate3d(" + i + ", " + r + ",0px)")
    }

    function g(e) {
      return 0 !== e.indexOf("on") && (e = e[0] !== e[0].toUpperCase() ? "on" + e[0].toUpperCase() + e.substring(1) : "on" + e), e
    }
    if (!(this instanceof t)) return new t(e, i);
    var f = {
        direction: "horizontal",
        touchEventsTarget: "container",
        initialSlide: 0,
        speed: 300,
        autoplay: !1,
        autoplayDisableOnInteraction: !0,
        autoplayStopOnLast: !1,
        iOSEdgeSwipeDetection: !1,
        iOSEdgeSwipeThreshold: 20,
        freeMode: !1,
        freeModeMomentum: !0,
        freeModeMomentumRatio: 1,
        freeModeMomentumBounce: !0,
        freeModeMomentumBounceRatio: 1,
        freeModeMomentumVelocityRatio: 1,
        freeModeSticky: !1,
        freeModeMinimumVelocity: .02,
        autoHeight: !1,
        setWrapperSize: !1,
        virtualTranslate: !1,
        effect: "slide",
        coverflow: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: !0
        },
        flip: {
          slideShadows: !0,
          limitRotation: !0
        },
        cube: {
          slideShadows: !0,
          shadow: !0,
          shadowOffset: 20,
          shadowScale: .94
        },
        fade: {
          crossFade: !1
        },
        parallax: !1,
        zoom: !1,
        zoomMax: 3,
        zoomMin: 1,
        zoomToggle: !0,
        scrollbar: null,
        scrollbarHide: !0,
        scrollbarDraggable: !1,
        scrollbarSnapOnRelease: !1,
        keyboardControl: !1,
        mousewheelControl: !1,
        mousewheelReleaseOnEdges: !1,
        mousewheelInvert: !1,
        mousewheelForceToAxis: !1,
        mousewheelSensitivity: 1,
        mousewheelEventsTarged: "container",
        hashnav: !1,
        hashnavWatchState: !1,
        history: !1,
        replaceState: !1,
        breakpoints: void 0,
        spaceBetween: 0,
        slidesPerView: 1,
        slidesPerColumn: 1,
        slidesPerColumnFill: "column",
        slidesPerGroup: 1,
        centeredSlides: !1,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
        roundLengths: !1,
        touchRatio: 1,
        touchAngle: 45,
        simulateTouch: !0,
        shortSwipes: !0,
        longSwipes: !0,
        longSwipesRatio: .5,
        longSwipesMs: 300,
        followFinger: !0,
        onlyExternal: !1,
        threshold: 0,
        touchMoveStopPropagation: !0,
        touchReleaseOnEdges: !1,
        uniqueNavElements: !0,
        pagination: null,
        paginationElement: "span",
        paginationClickable: !1,
        paginationHide: !1,
        paginationBulletRender: null,
        paginationProgressRender: null,
        paginationFractionRender: null,
        paginationCustomRender: null,
        paginationType: "bullets",
        resistance: !0,
        resistanceRatio: .85,
        nextButton: null,
        prevButton: null,
        watchSlidesProgress: !1,
        watchSlidesVisibility: !1,
        grabCursor: !1,
        preventClicks: !0,
        preventClicksPropagation: !0,
        slideToClickedSlide: !1,
        lazyLoading: !1,
        lazyLoadingInPrevNext: !1,
        lazyLoadingInPrevNextAmount: 1,
        lazyLoadingOnTransitionStart: !1,
        preloadImages: !0,
        updateOnImagesReady: !0,
        loop: !1,
        loopAdditionalSlides: 0,
        loopedSlides: null,
        control: void 0,
        controlInverse: !1,
        controlBy: "slide",
        normalizeSlideIndex: !0,
        allowSwipeToPrev: !0,
        allowSwipeToNext: !0,
        swipeHandler: null,
        noSwiping: !0,
        noSwipingClass: "swiper-no-swiping",
        passiveListeners: !0,
        containerModifierClass: "swiper-container-",
        slideClass: "swiper-slide",
        slideActiveClass: "swiper-slide-active",
        slideDuplicateActiveClass: "swiper-slide-duplicate-active",
        slideVisibleClass: "swiper-slide-visible",
        slideDuplicateClass: "swiper-slide-duplicate",
        slideNextClass: "swiper-slide-next",
        slideDuplicateNextClass: "swiper-slide-duplicate-next",
        slidePrevClass: "swiper-slide-prev",
        slideDuplicatePrevClass: "swiper-slide-duplicate-prev",
        wrapperClass: "swiper-wrapper",
        bulletClass: "swiper-pagination-bullet",
        bulletActiveClass: "swiper-pagination-bullet-active",
        buttonDisabledClass: "swiper-button-disabled",
        paginationCurrentClass: "swiper-pagination-current",
        paginationTotalClass: "swiper-pagination-total",
        paginationHiddenClass: "swiper-pagination-hidden",
        paginationProgressbarClass: "swiper-pagination-progressbar",
        paginationClickableClass: "swiper-pagination-clickable",
        paginationModifierClass: "swiper-pagination-",
        lazyLoadingClass: "swiper-lazy",
        lazyStatusLoadingClass: "swiper-lazy-loading",
        lazyStatusLoadedClass: "swiper-lazy-loaded",
        lazyPreloaderClass: "swiper-lazy-preloader",
        notificationClass: "swiper-notification",
        preloaderClass: "preloader",
        zoomContainerClass: "swiper-zoom-container",
        observer: !1,
        observeParents: !1,
        a11y: !1,
        prevSlideMessage: "Previous slide",
        nextSlideMessage: "Next slide",
        firstSlideMessage: "This is the first slide",
        lastSlideMessage: "This is the last slide",
        paginationBulletMessage: "Go to slide {{index}}",
        runCallbacksOnInit: !0
      },
      v = i && i.virtualTranslate;
    i = i || {};
    var w = {};
    for (var y in i)
      if ("object" != typeof i[y] || null === i[y] || (i[y].nodeType || i[y] === window || i[y] === document || "undefined" != typeof s && i[y] instanceof s || "undefined" != typeof jQuery && i[y] instanceof jQuery)) w[y] = i[y];
      else {
        w[y] = {};
        for (var x in i[y]) w[y][x] = i[y][x]
      } for (var T in f)
      if ("undefined" == typeof i[T]) i[T] = f[T];
      else if ("object" == typeof i[T])
      for (var b in f[T]) "undefined" == typeof i[T][b] && (i[T][b] = f[T][b]);
    var S = this;
    if (S.params = i, S.originalParams = w, S.classNames = [], "undefined" != typeof a && "undefined" != typeof s && (a = s), ("undefined" != typeof a || (a = "undefined" == typeof s ? window.Dom7 || window.Zepto || window.jQuery : s)) && (S.$ = a, S.currentBreakpoint = void 0, S.getActiveBreakpoint = function() {
        if (!S.params.breakpoints) return !1;
        var e, a = !1,
          t = [];
        for (e in S.params.breakpoints) S.params.breakpoints.hasOwnProperty(e) && t.push(e);
        t.sort(function(e, a) {
          return parseInt(e, 10) > parseInt(a, 10)
        });
        for (var s = 0; s < t.length; s++) e = t[s], e >= window.innerWidth && !a && (a = e);
        return a || "max"
      }, S.setBreakpoint = function() {
        var e = S.getActiveBreakpoint();
        if (e && S.currentBreakpoint !== e) {
          var a = e in S.params.breakpoints ? S.params.breakpoints[e] : S.originalParams,
            t = S.params.loop && a.slidesPerView !== S.params.slidesPerView;
          for (var s in a) S.params[s] = a[s];
          S.currentBreakpoint = e, t && S.destroyLoop && S.reLoop(!0)
        }
      }, S.params.breakpoints && S.setBreakpoint(), S.container = a(e), 0 !== S.container.length)) {
      if (S.container.length > 1) {
        var C = [];
        return S.container.each(function() {
          C.push(new t(this, i))
        }), C
      }
      S.container[0].swiper = S, S.container.data("swiper", S), S.classNames.push(S.params.containerModifierClass + S.params.direction), S.params.freeMode && S.classNames.push(S.params.containerModifierClass + "free-mode"), S.support.flexbox || (S.classNames.push(S.params.containerModifierClass + "no-flexbox"), S.params.slidesPerColumn = 1), S.params.autoHeight && S.classNames.push(S.params.containerModifierClass + "autoheight"), (S.params.parallax || S.params.watchSlidesVisibility) && (S.params.watchSlidesProgress = !0), S.params.touchReleaseOnEdges && (S.params.resistanceRatio = 0), ["cube", "coverflow", "flip"].indexOf(S.params.effect) >= 0 && (S.support.transforms3d ? (S.params.watchSlidesProgress = !0, S.classNames.push(S.params.containerModifierClass + "3d")) : S.params.effect = "slide"), "slide" !== S.params.effect && S.classNames.push(S.params.containerModifierClass + S.params.effect), "cube" === S.params.effect && (S.params.resistanceRatio = 0, S.params.slidesPerView = 1, S.params.slidesPerColumn = 1, S.params.slidesPerGroup = 1, S.params.centeredSlides = !1, S.params.spaceBetween = 0, S.params.virtualTranslate = !0, S.params.setWrapperSize = !1), "fade" !== S.params.effect && "flip" !== S.params.effect || (S.params.slidesPerView = 1, S.params.slidesPerColumn = 1, S.params.slidesPerGroup = 1, S.params.watchSlidesProgress = !0, S.params.spaceBetween = 0, S.params.setWrapperSize = !1, "undefined" == typeof v && (S.params.virtualTranslate = !0)), S.params.grabCursor && S.support.touch && (S.params.grabCursor = !1), S.wrapper = S.container.children("." + S.params.wrapperClass), S.params.pagination && (S.paginationContainer = a(S.params.pagination), S.params.uniqueNavElements && "string" == typeof S.params.pagination && S.paginationContainer.length > 1 && 1 === S.container.find(S.params.pagination).length && (S.paginationContainer = S.container.find(S.params.pagination)), "bullets" === S.params.paginationType && S.params.paginationClickable ? S.paginationContainer.addClass(S.params.paginationModifierClass + "clickable") : S.params.paginationClickable = !1, S.paginationContainer.addClass(S.params.paginationModifierClass + S.params.paginationType)), (S.params.nextButton || S.params.prevButton) && (S.params.nextButton && (S.nextButton = a(S.params.nextButton), S.params.uniqueNavElements && "string" == typeof S.params.nextButton && S.nextButton.length > 1 && 1 === S.container.find(S.params.nextButton).length && (S.nextButton = S.container.find(S.params.nextButton))), S.params.prevButton && (S.prevButton = a(S.params.prevButton), S.params.uniqueNavElements && "string" == typeof S.params.prevButton && S.prevButton.length > 1 && 1 === S.container.find(S.params.prevButton).length && (S.prevButton = S.container.find(S.params.prevButton)))), S.isHorizontal = function() {
        return "horizontal" === S.params.direction
      }, S.rtl = S.isHorizontal() && ("rtl" === S.container[0].dir.toLowerCase() || "rtl" === S.container.css("direction")), S.rtl && S.classNames.push(S.params.containerModifierClass + "rtl"), S.rtl && (S.wrongRTL = "-webkit-box" === S.wrapper.css("display")), S.params.slidesPerColumn > 1 && S.classNames.push(S.params.containerModifierClass + "multirow"), S.device.android && S.classNames.push(S.params.containerModifierClass + "android"), S.container.addClass(S.classNames.join(" ")), S.translate = 0, S.progress = 0, S.velocity = 0, S.lockSwipeToNext = function() {
        S.params.allowSwipeToNext = !1, S.params.allowSwipeToPrev === !1 && S.params.grabCursor && S.unsetGrabCursor()
      }, S.lockSwipeToPrev = function() {
        S.params.allowSwipeToPrev = !1, S.params.allowSwipeToNext === !1 && S.params.grabCursor && S.unsetGrabCursor()
      }, S.lockSwipes = function() {
        S.params.allowSwipeToNext = S.params.allowSwipeToPrev = !1, S.params.grabCursor && S.unsetGrabCursor()
      }, S.unlockSwipeToNext = function() {
        S.params.allowSwipeToNext = !0, S.params.allowSwipeToPrev === !0 && S.params.grabCursor && S.setGrabCursor()
      }, S.unlockSwipeToPrev = function() {
        S.params.allowSwipeToPrev = !0, S.params.allowSwipeToNext === !0 && S.params.grabCursor && S.setGrabCursor()
      }, S.unlockSwipes = function() {
        S.params.allowSwipeToNext = S.params.allowSwipeToPrev = !0, S.params.grabCursor && S.setGrabCursor()
      }, S.setGrabCursor = function(e) {
        S.container[0].style.cursor = "move", S.container[0].style.cursor = e ? "-webkit-grabbing" : "-webkit-grab", S.container[0].style.cursor = e ? "-moz-grabbin" : "-moz-grab", S.container[0].style.cursor = e ? "grabbing" : "grab"
      }, S.unsetGrabCursor = function() {
        S.container[0].style.cursor = ""
      }, S.params.grabCursor && S.setGrabCursor(), S.imagesToLoad = [], S.imagesLoaded = 0, S.loadImage = function(e, a, t, s, i, r) {
        function n() {
          r && r()
        }
        var o;
        e.complete && i ? n() : a ? (o = new window.Image, o.onload = n, o.onerror = n, s && (o.sizes = s), t && (o.srcset = t), a && (o.src = a)) : n()
      }, S.preloadImages = function() {
        function e() {
          "undefined" != typeof S && null !== S && (void 0 !== S.imagesLoaded && S.imagesLoaded++, S.imagesLoaded === S.imagesToLoad.length && (S.params.updateOnImagesReady && S.update(), S.emit("onImagesReady", S)))
        }
        S.imagesToLoad = S.container.find("img");
        for (var a = 0; a < S.imagesToLoad.length; a++) S.loadImage(S.imagesToLoad[a], S.imagesToLoad[a].currentSrc || S.imagesToLoad[a].getAttribute("src"), S.imagesToLoad[a].srcset || S.imagesToLoad[a].getAttribute("srcset"), S.imagesToLoad[a].sizes || S.imagesToLoad[a].getAttribute("sizes"), !0, e)
      }, S.autoplayTimeoutId = void 0, S.autoplaying = !1, S.autoplayPaused = !1, S.startAutoplay = function() {
        return "undefined" == typeof S.autoplayTimeoutId && (!!S.params.autoplay && (!S.autoplaying && (S.autoplaying = !0, S.emit("onAutoplayStart", S), void o())))
      }, S.stopAutoplay = function(e) {
        S.autoplayTimeoutId && (S.autoplayTimeoutId && clearTimeout(S.autoplayTimeoutId), S.autoplaying = !1, S.autoplayTimeoutId = void 0, S.emit("onAutoplayStop", S))
      }, S.pauseAutoplay = function(e) {
        S.autoplayPaused || (S.autoplayTimeoutId && clearTimeout(S.autoplayTimeoutId), S.autoplayPaused = !0, 0 === e ? (S.autoplayPaused = !1, o()) : S.wrapper.transitionEnd(function() {
          S && (S.autoplayPaused = !1, S.autoplaying ? o() : S.stopAutoplay())
        }))
      }, S.minTranslate = function() {
        return -S.snapGrid[0]
      }, S.maxTranslate = function() {
        return -S.snapGrid[S.snapGrid.length - 1]
      }, S.updateAutoHeight = function() {
        var e = [],
          a = 0;
        if ("auto" !== S.params.slidesPerView && S.params.slidesPerView > 1)
          for (r = 0; r < Math.ceil(S.params.slidesPerView); r++) {
            var t = S.activeIndex + r;
            if (t > S.slides.length) break;
            e.push(S.slides.eq(t)[0])
          } else e.push(S.slides.eq(S.activeIndex)[0]);
        for (r = 0; r < e.length; r++)
          if ("undefined" != typeof e[r]) {
            var s = e[r].offsetHeight;
            a = s > a ? s : a
          } a && S.wrapper.css("height", a + "px")
      }, S.updateContainerSize = function() {
        var e, a;
        e = "undefined" != typeof S.params.width ? S.params.width : S.container[0].clientWidth, a = "undefined" != typeof S.params.height ? S.params.height : S.container[0].clientHeight, 0 === e && S.isHorizontal() || 0 === a && !S.isHorizontal() || (e = e - parseInt(S.container.css("padding-left"), 10) - parseInt(S.container.css("padding-right"), 10), a = a - parseInt(S.container.css("padding-top"), 10) - parseInt(S.container.css("padding-bottom"), 10), S.width = e, S.height = a, S.size = S.isHorizontal() ? S.width : S.height)
      }, S.updateSlidesSize = function() {
        S.slides = S.wrapper.children("." + S.params.slideClass), S.snapGrid = [], S.slidesGrid = [], S.slidesSizesGrid = [];
        var e, a = S.params.spaceBetween,
          t = -S.params.slidesOffsetBefore,
          s = 0,
          i = 0;
        if ("undefined" != typeof S.size) {
          "string" == typeof a && a.indexOf("%") >= 0 && (a = parseFloat(a.replace("%", "")) / 100 * S.size), S.virtualSize = -a, S.rtl ? S.slides.css({
            marginLeft: "",
            marginTop: ""
          }) : S.slides.css({
            marginRight: "",
            marginBottom: ""
          });
          var r;
          S.params.slidesPerColumn > 1 && (r = Math.floor(S.slides.length / S.params.slidesPerColumn) === S.slides.length / S.params.slidesPerColumn ? S.slides.length : Math.ceil(S.slides.length / S.params.slidesPerColumn) * S.params.slidesPerColumn, "auto" !== S.params.slidesPerView && "row" === S.params.slidesPerColumnFill && (r = Math.max(r, S.params.slidesPerView * S.params.slidesPerColumn)));
          var o, l = S.params.slidesPerColumn,
            p = r / l,
            d = p - (S.params.slidesPerColumn * p - S.slides.length);
          for (e = 0; e < S.slides.length; e++) {
            o = 0;
            var u = S.slides.eq(e);
            if (S.params.slidesPerColumn > 1) {
              var c, m, h;
              "column" === S.params.slidesPerColumnFill ? (m = Math.floor(e / l), h = e - m * l, (m > d || m === d && h === l - 1) && ++h >= l && (h = 0, m++), c = m + h * r / l, u.css({
                "-webkit-box-ordinal-group": c,
                "-moz-box-ordinal-group": c,
                "-ms-flex-order": c,
                "-webkit-order": c,
                order: c
              })) : (h = Math.floor(e / p), m = e - h * p), u.css("margin-" + (S.isHorizontal() ? "top" : "left"), 0 !== h && S.params.spaceBetween && S.params.spaceBetween + "px").attr("data-swiper-column", m).attr("data-swiper-row", h)
            }
            "none" !== u.css("display") && ("auto" === S.params.slidesPerView ? (o = S.isHorizontal() ? u.outerWidth(!0) : u.outerHeight(!0), S.params.roundLengths && (o = n(o))) : (o = (S.size - (S.params.slidesPerView - 1) * a) / S.params.slidesPerView, S.params.roundLengths && (o = n(o)), S.isHorizontal() ? S.slides[e].style.width = o + "px" : S.slides[e].style.height = o + "px"), S.slides[e].swiperSlideSize = o, S.slidesSizesGrid.push(o), S.params.centeredSlides ? (t = t + o / 2 + s / 2 + a, 0 === e && (t = t - S.size / 2 - a), Math.abs(t) < .001 && (t = 0), i % S.params.slidesPerGroup === 0 && S.snapGrid.push(t), S.slidesGrid.push(t)) : (i % S.params.slidesPerGroup === 0 && S.snapGrid.push(t), S.slidesGrid.push(t), t = t + o + a), S.virtualSize += o + a, s = o, i++)
          }
          S.virtualSize = Math.max(S.virtualSize, S.size) + S.params.slidesOffsetAfter;
          var g;
          if (S.rtl && S.wrongRTL && ("slide" === S.params.effect || "coverflow" === S.params.effect) && S.wrapper.css({
              width: S.virtualSize + S.params.spaceBetween + "px"
            }), S.support.flexbox && !S.params.setWrapperSize || (S.isHorizontal() ? S.wrapper.css({
              width: S.virtualSize + S.params.spaceBetween + "px"
            }) : S.wrapper.css({
              height: S.virtualSize + S.params.spaceBetween + "px"
            })), S.params.slidesPerColumn > 1 && (S.virtualSize = (o + S.params.spaceBetween) * r, S.virtualSize = Math.ceil(S.virtualSize / S.params.slidesPerColumn) - S.params.spaceBetween, S.isHorizontal() ? S.wrapper.css({
              width: S.virtualSize + S.params.spaceBetween + "px"
            }) : S.wrapper.css({
              height: S.virtualSize + S.params.spaceBetween + "px"
            }), S.params.centeredSlides)) {
            for (g = [], e = 0; e < S.snapGrid.length; e++) S.snapGrid[e] < S.virtualSize + S.snapGrid[0] && g.push(S.snapGrid[e]);
            S.snapGrid = g
          }
          if (!S.params.centeredSlides) {
            for (g = [], e = 0; e < S.snapGrid.length; e++) S.snapGrid[e] <= S.virtualSize - S.size && g.push(S.snapGrid[e]);
            S.snapGrid = g, Math.floor(S.virtualSize - S.size) - Math.floor(S.snapGrid[S.snapGrid.length - 1]) > 1 && S.snapGrid.push(S.virtualSize - S.size)
          }
          0 === S.snapGrid.length && (S.snapGrid = [0]), 0 !== S.params.spaceBetween && (S.isHorizontal() ? S.rtl ? S.slides.css({
            marginLeft: a + "px"
          }) : S.slides.css({
            marginRight: a + "px"
          }) : S.slides.css({
            marginBottom: a + "px"
          })), S.params.watchSlidesProgress && S.updateSlidesOffset()
        }
      }, S.updateSlidesOffset = function() {
        for (var e = 0; e < S.slides.length; e++) S.slides[e].swiperSlideOffset = S.isHorizontal() ? S.slides[e].offsetLeft : S.slides[e].offsetTop
      }, S.updateSlidesProgress = function(e) {
        if ("undefined" == typeof e && (e = S.translate || 0), 0 !== S.slides.length) {
          "undefined" == typeof S.slides[0].swiperSlideOffset && S.updateSlidesOffset();
          var a = -e;
          S.rtl && (a = e), S.slides.removeClass(S.params.slideVisibleClass);
          for (var t = 0; t < S.slides.length; t++) {
            var s = S.slides[t],
              i = (a + (S.params.centeredSlides ? S.minTranslate() : 0) - s.swiperSlideOffset) / (s.swiperSlideSize + S.params.spaceBetween);
            if (S.params.watchSlidesVisibility) {
              var r = -(a - s.swiperSlideOffset),
                n = r + S.slidesSizesGrid[t],
                o = r >= 0 && r < S.size || n > 0 && n <= S.size || r <= 0 && n >= S.size;
              o && S.slides.eq(t).addClass(S.params.slideVisibleClass)
            }
            s.progress = S.rtl ? -i : i
          }
        }
      }, S.updateProgress = function(e) {
        "undefined" == typeof e && (e = S.translate || 0);
        var a = S.maxTranslate() - S.minTranslate(),
          t = S.isBeginning,
          s = S.isEnd;
        0 === a ? (S.progress = 0, S.isBeginning = S.isEnd = !0) : (S.progress = (e - S.minTranslate()) / a, S.isBeginning = S.progress <= 0, S.isEnd = S.progress >= 1), S.isBeginning && !t && S.emit("onReachBeginning", S), S.isEnd && !s && S.emit("onReachEnd", S), S.params.watchSlidesProgress && S.updateSlidesProgress(e), S.emit("onProgress", S, S.progress)
      }, S.updateActiveIndex = function() {
        var e, a, t, s = S.rtl ? S.translate : -S.translate;
        for (a = 0; a < S.slidesGrid.length; a++) "undefined" != typeof S.slidesGrid[a + 1] ? s >= S.slidesGrid[a] && s < S.slidesGrid[a + 1] - (S.slidesGrid[a + 1] - S.slidesGrid[a]) / 2 ? e = a : s >= S.slidesGrid[a] && s < S.slidesGrid[a + 1] && (e = a + 1) : s >= S.slidesGrid[a] && (e = a);
        S.params.normalizeSlideIndex && (e < 0 || "undefined" == typeof e) && (e = 0), t = Math.floor(e / S.params.slidesPerGroup), t >= S.snapGrid.length && (t = S.snapGrid.length - 1), e !== S.activeIndex && (S.snapIndex = t, S.previousIndex = S.activeIndex, S.activeIndex = e, S.updateClasses(), S.updateRealIndex())
      }, S.updateRealIndex = function() {
        S.realIndex = S.slides.eq(S.activeIndex).attr("data-swiper-slide-index") || S.activeIndex
      }, S.updateClasses = function() {
        S.slides.removeClass(S.params.slideActiveClass + " " + S.params.slideNextClass + " " + S.params.slidePrevClass + " " + S.params.slideDuplicateActiveClass + " " + S.params.slideDuplicateNextClass + " " + S.params.slideDuplicatePrevClass);
        var e = S.slides.eq(S.activeIndex);
        e.addClass(S.params.slideActiveClass), i.loop && (e.hasClass(S.params.slideDuplicateClass) ? S.wrapper.children("." + S.params.slideClass + ":not(." + S.params.slideDuplicateClass + ')[data-swiper-slide-index="' + S.realIndex + '"]').addClass(S.params.slideDuplicateActiveClass) : S.wrapper.children("." + S.params.slideClass + "." + S.params.slideDuplicateClass + '[data-swiper-slide-index="' + S.realIndex + '"]').addClass(S.params.slideDuplicateActiveClass));
        var t = e.next("." + S.params.slideClass).addClass(S.params.slideNextClass);
        S.params.loop && 0 === t.length && (t = S.slides.eq(0), t.addClass(S.params.slideNextClass));
        var s = e.prev("." + S.params.slideClass).addClass(S.params.slidePrevClass);
        if (S.params.loop && 0 === s.length && (s = S.slides.eq(-1), s.addClass(S.params.slidePrevClass)), i.loop && (t.hasClass(S.params.slideDuplicateClass) ? S.wrapper.children("." + S.params.slideClass + ":not(." + S.params.slideDuplicateClass + ')[data-swiper-slide-index="' + t.attr("data-swiper-slide-index") + '"]').addClass(S.params.slideDuplicateNextClass) : S.wrapper.children("." + S.params.slideClass + "." + S.params.slideDuplicateClass + '[data-swiper-slide-index="' + t.attr("data-swiper-slide-index") + '"]').addClass(S.params.slideDuplicateNextClass), s.hasClass(S.params.slideDuplicateClass) ? S.wrapper.children("." + S.params.slideClass + ":not(." + S.params.slideDuplicateClass + ')[data-swiper-slide-index="' + s.attr("data-swiper-slide-index") + '"]').addClass(S.params.slideDuplicatePrevClass) : S.wrapper.children("." + S.params.slideClass + "." + S.params.slideDuplicateClass + '[data-swiper-slide-index="' + s.attr("data-swiper-slide-index") + '"]').addClass(S.params.slideDuplicatePrevClass)), S.paginationContainer && S.paginationContainer.length > 0) {
          var r, n = S.params.loop ? Math.ceil((S.slides.length - 2 * S.loopedSlides) / S.params.slidesPerGroup) : S.snapGrid.length;
          if (S.params.loop ? (r = Math.ceil((S.activeIndex - S.loopedSlides) / S.params.slidesPerGroup), r > S.slides.length - 1 - 2 * S.loopedSlides && (r -= S.slides.length - 2 * S.loopedSlides), r > n - 1 && (r -= n), r < 0 && "bullets" !== S.params.paginationType && (r = n + r)) : r = "undefined" != typeof S.snapIndex ? S.snapIndex : S.activeIndex || 0, "bullets" === S.params.paginationType && S.bullets && S.bullets.length > 0 && (S.bullets.removeClass(S.params.bulletActiveClass), S.paginationContainer.length > 1 ? S.bullets.each(function() {
              a(this).index() === r && a(this).addClass(S.params.bulletActiveClass)
            }) : S.bullets.eq(r).addClass(S.params.bulletActiveClass)), "fraction" === S.params.paginationType && (S.paginationContainer.find("." + S.params.paginationCurrentClass).text(r + 1), S.paginationContainer.find("." + S.params.paginationTotalClass).text(n)), "progress" === S.params.paginationType) {
            var o = (r + 1) / n,
              l = o,
              p = 1;
            S.isHorizontal() || (p = o, l = 1), S.paginationContainer.find("." + S.params.paginationProgressbarClass).transform("translate3d(0,0,0) scaleX(" + l + ") scaleY(" + p + ")").transition(S.params.speed)
          }
          "custom" === S.params.paginationType && S.params.paginationCustomRender && (S.paginationContainer.html(S.params.paginationCustomRender(S, r + 1, n)), S.emit("onPaginationRendered", S, S.paginationContainer[0]))
        }
        S.params.loop || (S.params.prevButton && S.prevButton && S.prevButton.length > 0 && (S.isBeginning ? (S.prevButton.addClass(S.params.buttonDisabledClass), S.params.a11y && S.a11y && S.a11y.disable(S.prevButton)) : (S.prevButton.removeClass(S.params.buttonDisabledClass), S.params.a11y && S.a11y && S.a11y.enable(S.prevButton))), S.params.nextButton && S.nextButton && S.nextButton.length > 0 && (S.isEnd ? (S.nextButton.addClass(S.params.buttonDisabledClass), S.params.a11y && S.a11y && S.a11y.disable(S.nextButton)) : (S.nextButton.removeClass(S.params.buttonDisabledClass), S.params.a11y && S.a11y && S.a11y.enable(S.nextButton))))
      }, S.updatePagination = function() {
        if (S.params.pagination && S.paginationContainer && S.paginationContainer.length > 0) {
          var e = "";
          if ("bullets" === S.params.paginationType) {
            for (var a = S.params.loop ? Math.ceil((S.slides.length - 2 * S.loopedSlides) / S.params.slidesPerGroup) : S.snapGrid.length, t = 0; t < a; t++) e += S.params.paginationBulletRender ? S.params.paginationBulletRender(S, t, S.params.bulletClass) : "<" + S.params.paginationElement + ' class="' + S.params.bulletClass + '"></' + S.params.paginationElement + ">";
            S.paginationContainer.html(e), S.bullets = S.paginationContainer.find("." + S.params.bulletClass), S.params.paginationClickable && S.params.a11y && S.a11y && S.a11y.initPagination()
          }
          "fraction" === S.params.paginationType && (e = S.params.paginationFractionRender ? S.params.paginationFractionRender(S, S.params.paginationCurrentClass, S.params.paginationTotalClass) : '<span class="' + S.params.paginationCurrentClass + '"></span> / <span class="' + S.params.paginationTotalClass + '"></span>', S.paginationContainer.html(e)), "progress" === S.params.paginationType && (e = S.params.paginationProgressRender ? S.params.paginationProgressRender(S, S.params.paginationProgressbarClass) : '<span class="' + S.params.paginationProgressbarClass + '"></span>', S.paginationContainer.html(e)), "custom" !== S.params.paginationType && S.emit("onPaginationRendered", S, S.paginationContainer[0])
        }
      }, S.update = function(e) {
        function a() {
          S.rtl ? -S.translate : S.translate;
          s = Math.min(Math.max(S.translate, S.maxTranslate()), S.minTranslate()), S.setWrapperTranslate(s), S.updateActiveIndex(), S.updateClasses()
        }
        if (S.updateContainerSize(), S.updateSlidesSize(), S.updateProgress(), S.updatePagination(), S.updateClasses(), S.params.scrollbar && S.scrollbar && S.scrollbar.set(), e) {
          var t, s;
          S.controller && S.controller.spline && (S.controller.spline = void 0), S.params.freeMode ? (a(), S.params.autoHeight && S.updateAutoHeight()) : (t = ("auto" === S.params.slidesPerView || S.params.slidesPerView > 1) && S.isEnd && !S.params.centeredSlides ? S.slideTo(S.slides.length - 1, 0, !1, !0) : S.slideTo(S.activeIndex, 0, !1, !0), t || a())
        } else S.params.autoHeight && S.updateAutoHeight()
      }, S.onResize = function(e) {
        S.params.breakpoints && S.setBreakpoint();
        var a = S.params.allowSwipeToPrev,
          t = S.params.allowSwipeToNext;
        S.params.allowSwipeToPrev = S.params.allowSwipeToNext = !0, S.updateContainerSize(), S.updateSlidesSize(), ("auto" === S.params.slidesPerView || S.params.freeMode || e) && S.updatePagination(), S.params.scrollbar && S.scrollbar && S.scrollbar.set(), S.controller && S.controller.spline && (S.controller.spline = void 0);
        var s = !1;
        if (S.params.freeMode) {
          var i = Math.min(Math.max(S.translate, S.maxTranslate()), S.minTranslate());
          S.setWrapperTranslate(i), S.updateActiveIndex(), S.updateClasses(), S.params.autoHeight && S.updateAutoHeight()
        } else S.updateClasses(), s = ("auto" === S.params.slidesPerView || S.params.slidesPerView > 1) && S.isEnd && !S.params.centeredSlides ? S.slideTo(S.slides.length - 1, 0, !1, !0) : S.slideTo(S.activeIndex, 0, !1, !0);
        S.params.lazyLoading && !s && S.lazy && S.lazy.load(), S.params.allowSwipeToPrev = a, S.params.allowSwipeToNext = t
      }, S.touchEventsDesktop = {
        start: "mousedown",
        move: "mousemove",
        end: "mouseup"
      }, window.navigator.pointerEnabled ? S.touchEventsDesktop = {
        start: "pointerdown",
        move: "pointermove",
        end: "pointerup"
      } : window.navigator.msPointerEnabled && (S.touchEventsDesktop = {
        start: "MSPointerDown",
        move: "MSPointerMove",
        end: "MSPointerUp"
      }), S.touchEvents = {
        start: S.support.touch || !S.params.simulateTouch ? "touchstart" : S.touchEventsDesktop.start,
        move: S.support.touch || !S.params.simulateTouch ? "touchmove" : S.touchEventsDesktop.move,
        end: S.support.touch || !S.params.simulateTouch ? "touchend" : S.touchEventsDesktop.end
      }, (window.navigator.pointerEnabled || window.navigator.msPointerEnabled) && ("container" === S.params.touchEventsTarget ? S.container : S.wrapper).addClass("swiper-wp8-" + S.params.direction), S.initEvents = function(e) {
        var a = e ? "off" : "on",
          t = e ? "removeEventListener" : "addEventListener",
          s = "container" === S.params.touchEventsTarget ? S.container[0] : S.wrapper[0],
          r = S.support.touch ? s : document,
          n = !!S.params.nested;
        if (S.browser.ie) s[t](S.touchEvents.start, S.onTouchStart, !1), r[t](S.touchEvents.move, S.onTouchMove, n), r[t](S.touchEvents.end, S.onTouchEnd, !1);
        else {
          if (S.support.touch) {
            var o = !("touchstart" !== S.touchEvents.start || !S.support.passiveListener || !S.params.passiveListeners) && {
              passive: !0,
              capture: !1
            };
            s[t](S.touchEvents.start, S.onTouchStart, o), s[t](S.touchEvents.move, S.onTouchMove, n), s[t](S.touchEvents.end, S.onTouchEnd, o)
          }(i.simulateTouch && !S.device.ios && !S.device.android || i.simulateTouch && !S.support.touch && S.device.ios) && (s[t]("mousedown", S.onTouchStart, !1), document[t]("mousemove", S.onTouchMove, n), document[t]("mouseup", S.onTouchEnd, !1))
        }
        window[t]("resize", S.onResize), S.params.nextButton && S.nextButton && S.nextButton.length > 0 && (S.nextButton[a]("click", S.onClickNext), S.params.a11y && S.a11y && S.nextButton[a]("keydown", S.a11y.onEnterKey)), S.params.prevButton && S.prevButton && S.prevButton.length > 0 && (S.prevButton[a]("click", S.onClickPrev), S.params.a11y && S.a11y && S.prevButton[a]("keydown", S.a11y.onEnterKey)), S.params.pagination && S.params.paginationClickable && (S.paginationContainer[a]("click", "." + S.params.bulletClass, S.onClickIndex), S.params.a11y && S.a11y && S.paginationContainer[a]("keydown", "." + S.params.bulletClass, S.a11y.onEnterKey)), (S.params.preventClicks || S.params.preventClicksPropagation) && s[t]("click", S.preventClicks, !0)
      }, S.attachEvents = function() {
        S.initEvents()
      }, S.detachEvents = function() {
        S.initEvents(!0)
      }, S.allowClick = !0, S.preventClicks = function(e) {
        S.allowClick || (S.params.preventClicks && e.preventDefault(), S.params.preventClicksPropagation && S.animating && (e.stopPropagation(), e.stopImmediatePropagation()))
      }, S.onClickNext = function(e) {
        e.preventDefault(), S.isEnd && !S.params.loop || S.slideNext()
      }, S.onClickPrev = function(e) {
        e.preventDefault(), S.isBeginning && !S.params.loop || S.slidePrev()
      }, S.onClickIndex = function(e) {
        e.preventDefault();
        var t = a(this).index() * S.params.slidesPerGroup;
        S.params.loop && (t += S.loopedSlides), S.slideTo(t)
      }, S.updateClickedSlide = function(e) {
        var t = l(e, "." + S.params.slideClass),
          s = !1;
        if (t)
          for (var i = 0; i < S.slides.length; i++) S.slides[i] === t && (s = !0);
        if (!t || !s) return S.clickedSlide = void 0, void(S.clickedIndex = void 0);
        if (S.clickedSlide = t, S.clickedIndex = a(t).index(), S.params.slideToClickedSlide && void 0 !== S.clickedIndex && S.clickedIndex !== S.activeIndex) {
          var r, n = S.clickedIndex;
          if (S.params.loop) {
            if (S.animating) return;
            r = a(S.clickedSlide).attr("data-swiper-slide-index"), S.params.centeredSlides ? n < S.loopedSlides - S.params.slidesPerView / 2 || n > S.slides.length - S.loopedSlides + S.params.slidesPerView / 2 ? (S.fixLoop(), n = S.wrapper.children("." + S.params.slideClass + '[data-swiper-slide-index="' + r + '"]:not(.' + S.params.slideDuplicateClass + ")").eq(0).index(), setTimeout(function() {
              S.slideTo(n)
            }, 0)) : S.slideTo(n) : n > S.slides.length - S.params.slidesPerView ? (S.fixLoop(), n = S.wrapper.children("." + S.params.slideClass + '[data-swiper-slide-index="' + r + '"]:not(.' + S.params.slideDuplicateClass + ")").eq(0).index(), setTimeout(function() {
              S.slideTo(n)
            }, 0)) : S.slideTo(n)
          } else S.slideTo(n)
        }
      };
      var z, M, E, P, I, k, L, D, B, H, G = "input, select, textarea, button, video",
        X = Date.now(),
        Y = [];
      S.animating = !1, S.touches = {
        startX: 0,
        startY: 0,
        currentX: 0,
        currentY: 0,
        diff: 0
      };
      var A, O;
      S.onTouchStart = function(e) {
        if (e.originalEvent && (e = e.originalEvent), A = "touchstart" === e.type, A || !("which" in e) || 3 !== e.which) {
          if (S.params.noSwiping && l(e, "." + S.params.noSwipingClass)) return void(S.allowClick = !0);
          if (!S.params.swipeHandler || l(e, S.params.swipeHandler)) {
            var t = S.touches.currentX = "touchstart" === e.type ? e.targetTouches[0].pageX : e.pageX,
              s = S.touches.currentY = "touchstart" === e.type ? e.targetTouches[0].pageY : e.pageY;
            if (!(S.device.ios && S.params.iOSEdgeSwipeDetection && t <= S.params.iOSEdgeSwipeThreshold)) {
              if (z = !0, M = !1, E = !0, I = void 0, O = void 0, S.touches.startX = t, S.touches.startY = s, P = Date.now(), S.allowClick = !0, S.updateContainerSize(), S.swipeDirection = void 0, S.params.threshold > 0 && (D = !1), "touchstart" !== e.type) {
                var i = !0;
                a(e.target).is(G) && (i = !1), document.activeElement && a(document.activeElement).is(G) && document.activeElement.blur(), i && e.preventDefault()
              }
              S.emit("onTouchStart", S, e)
            }
          }
        }
      }, S.onTouchMove = function(e) {
        if (e.originalEvent && (e = e.originalEvent), !A || "mousemove" !== e.type) {
          if (e.preventedByNestedSwiper) return S.touches.startX = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, void(S.touches.startY = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY);
          if (S.params.onlyExternal) return S.allowClick = !1, void(z && (S.touches.startX = S.touches.currentX = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, S.touches.startY = S.touches.currentY = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, P = Date.now()));
          if (A && S.params.touchReleaseOnEdges && !S.params.loop)
            if (S.isHorizontal()) {
              if (S.touches.currentX < S.touches.startX && S.translate <= S.maxTranslate() || S.touches.currentX > S.touches.startX && S.translate >= S.minTranslate()) return
            } else if (S.touches.currentY < S.touches.startY && S.translate <= S.maxTranslate() || S.touches.currentY > S.touches.startY && S.translate >= S.minTranslate()) return;
          if (A && document.activeElement && e.target === document.activeElement && a(e.target).is(G)) return M = !0, void(S.allowClick = !1);
          if (E && S.emit("onTouchMove", S, e), !(e.targetTouches && e.targetTouches.length > 1)) {
            if (S.touches.currentX = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, S.touches.currentY = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, "undefined" == typeof I) {
              var t;
              S.isHorizontal() && S.touches.currentY === S.touches.startY || !S.isHorizontal() && S.touches.currentX !== S.touches.startX ? I = !1 : (t = 180 * Math.atan2(Math.abs(S.touches.currentY - S.touches.startY), Math.abs(S.touches.currentX - S.touches.startX)) / Math.PI, I = S.isHorizontal() ? t > S.params.touchAngle : 90 - t > S.params.touchAngle)
            }
            if (I && S.emit("onTouchMoveOpposite", S, e), "undefined" == typeof O && S.browser.ieTouch && (S.touches.currentX === S.touches.startX && S.touches.currentY === S.touches.startY || (O = !0)), z) {
              if (I) return void(z = !1);
              if (O || !S.browser.ieTouch) {
                S.allowClick = !1, S.emit("onSliderMove", S, e), e.preventDefault(), S.params.touchMoveStopPropagation && !S.params.nested && e.stopPropagation(), M || (i.loop && S.fixLoop(), L = S.getWrapperTranslate(), S.setWrapperTransition(0), S.animating && S.wrapper.trigger("webkitTransitionEnd transitionend oTransitionEnd MSTransitionEnd msTransitionEnd"), S.params.autoplay && S.autoplaying && (S.params.autoplayDisableOnInteraction ? S.stopAutoplay() : S.pauseAutoplay()), H = !1, !S.params.grabCursor || S.params.allowSwipeToNext !== !0 && S.params.allowSwipeToPrev !== !0 || S.setGrabCursor(!0)), M = !0;
                var s = S.touches.diff = S.isHorizontal() ? S.touches.currentX - S.touches.startX : S.touches.currentY - S.touches.startY;
                s *= S.params.touchRatio, S.rtl && (s = -s), S.swipeDirection = s > 0 ? "prev" : "next", k = s + L;
                var r = !0;
                if (s > 0 && k > S.minTranslate() ? (r = !1, S.params.resistance && (k = S.minTranslate() - 1 + Math.pow(-S.minTranslate() + L + s, S.params.resistanceRatio))) : s < 0 && k < S.maxTranslate() && (r = !1, S.params.resistance && (k = S.maxTranslate() + 1 - Math.pow(S.maxTranslate() - L - s, S.params.resistanceRatio))), r && (e.preventedByNestedSwiper = !0), !S.params.allowSwipeToNext && "next" === S.swipeDirection && k < L && (k = L), !S.params.allowSwipeToPrev && "prev" === S.swipeDirection && k > L && (k = L), S.params.threshold > 0) {
                  if (!(Math.abs(s) > S.params.threshold || D)) return void(k = L);
                  if (!D) return D = !0, S.touches.startX = S.touches.currentX, S.touches.startY = S.touches.currentY, k = L, void(S.touches.diff = S.isHorizontal() ? S.touches.currentX - S.touches.startX : S.touches.currentY - S.touches.startY)
                }
                S.params.followFinger && ((S.params.freeMode || S.params.watchSlidesProgress) && S.updateActiveIndex(), S.params.freeMode && (0 === Y.length && Y.push({
                  position: S.touches[S.isHorizontal() ? "startX" : "startY"],
                  time: P
                }), Y.push({
                  position: S.touches[S.isHorizontal() ? "currentX" : "currentY"],
                  time: (new window.Date).getTime()
                })), S.updateProgress(k), S.setWrapperTranslate(k))
              }
            }
          }
        }
      }, S.onTouchEnd = function(e) {
        if (e.originalEvent && (e = e.originalEvent), E && S.emit("onTouchEnd", S, e), E = !1, z) {
          S.params.grabCursor && M && z && (S.params.allowSwipeToNext === !0 || S.params.allowSwipeToPrev === !0) && S.setGrabCursor(!1);
          var t = Date.now(),
            s = t - P;
          if (S.allowClick && (S.updateClickedSlide(e), S.emit("onTap", S, e), s < 300 && t - X > 300 && (B && clearTimeout(B), B = setTimeout(function() {
              S && (S.params.paginationHide && S.paginationContainer.length > 0 && !a(e.target).hasClass(S.params.bulletClass) && S.paginationContainer.toggleClass(S.params.paginationHiddenClass), S.emit("onClick", S, e))
            }, 300)), s < 300 && t - X < 300 && (B && clearTimeout(B), S.emit("onDoubleTap", S, e))), X = Date.now(), setTimeout(function() {
              S && (S.allowClick = !0)
            }, 0), !z || !M || !S.swipeDirection || 0 === S.touches.diff || k === L) return void(z = M = !1);
          z = M = !1;
          var i;
          if (i = S.params.followFinger ? S.rtl ? S.translate : -S.translate : -k, S.params.freeMode) {
            if (i < -S.minTranslate()) return void S.slideTo(S.activeIndex);
            if (i > -S.maxTranslate()) return void(S.slides.length < S.snapGrid.length ? S.slideTo(S.snapGrid.length - 1) : S.slideTo(S.slides.length - 1));
            if (S.params.freeModeMomentum) {
              if (Y.length > 1) {
                var r = Y.pop(),
                  n = Y.pop(),
                  o = r.position - n.position,
                  l = r.time - n.time;
                S.velocity = o / l, S.velocity = S.velocity / 2, Math.abs(S.velocity) < S.params.freeModeMinimumVelocity && (S.velocity = 0), (l > 150 || (new window.Date).getTime() - r.time > 300) && (S.velocity = 0)
              } else S.velocity = 0;
              S.velocity = S.velocity * S.params.freeModeMomentumVelocityRatio, Y.length = 0;
              var p = 1e3 * S.params.freeModeMomentumRatio,
                d = S.velocity * p,
                u = S.translate + d;
              S.rtl && (u = -u);
              var c, m = !1,
                h = 20 * Math.abs(S.velocity) * S.params.freeModeMomentumBounceRatio;
              if (u < S.maxTranslate()) S.params.freeModeMomentumBounce ? (u + S.maxTranslate() < -h && (u = S.maxTranslate() - h), c = S.maxTranslate(), m = !0, H = !0) : u = S.maxTranslate();
              else if (u > S.minTranslate()) S.params.freeModeMomentumBounce ? (u - S.minTranslate() > h && (u = S.minTranslate() + h), c = S.minTranslate(), m = !0, H = !0) : u = S.minTranslate();
              else if (S.params.freeModeSticky) {
                var g, f = 0;
                for (f = 0; f < S.snapGrid.length; f += 1)
                  if (S.snapGrid[f] > -u) {
                    g = f;
                    break
                  } u = Math.abs(S.snapGrid[g] - u) < Math.abs(S.snapGrid[g - 1] - u) || "next" === S.swipeDirection ? S.snapGrid[g] : S.snapGrid[g - 1], S.rtl || (u = -u)
              }
              if (0 !== S.velocity) p = S.rtl ? Math.abs((-u - S.translate) / S.velocity) : Math.abs((u - S.translate) / S.velocity);
              else if (S.params.freeModeSticky) return void S.slideReset();
              S.params.freeModeMomentumBounce && m ? (S.updateProgress(c), S.setWrapperTransition(p), S.setWrapperTranslate(u), S.onTransitionStart(), S.animating = !0, S.wrapper.transitionEnd(function() {
                S && H && (S.emit("onMomentumBounce", S), S.setWrapperTransition(S.params.speed), S.setWrapperTranslate(c), S.wrapper.transitionEnd(function() {
                  S && S.onTransitionEnd()
                }))
              })) : S.velocity ? (S.updateProgress(u), S.setWrapperTransition(p), S.setWrapperTranslate(u), S.onTransitionStart(), S.animating || (S.animating = !0, S.wrapper.transitionEnd(function() {
                S && S.onTransitionEnd()
              }))) : S.updateProgress(u), S.updateActiveIndex()
            }
            return void((!S.params.freeModeMomentum || s >= S.params.longSwipesMs) && (S.updateProgress(), S.updateActiveIndex()))
          }
          var v, w = 0,
            y = S.slidesSizesGrid[0];
          for (v = 0; v < S.slidesGrid.length; v += S.params.slidesPerGroup) "undefined" != typeof S.slidesGrid[v + S.params.slidesPerGroup] ? i >= S.slidesGrid[v] && i < S.slidesGrid[v + S.params.slidesPerGroup] && (w = v, y = S.slidesGrid[v + S.params.slidesPerGroup] - S.slidesGrid[v]) : i >= S.slidesGrid[v] && (w = v, y = S.slidesGrid[S.slidesGrid.length - 1] - S.slidesGrid[S.slidesGrid.length - 2]);
          var x = (i - S.slidesGrid[w]) / y;
          if (s > S.params.longSwipesMs) {
            if (!S.params.longSwipes) return void S.slideTo(S.activeIndex);
            "next" === S.swipeDirection && (x >= S.params.longSwipesRatio ? S.slideTo(w + S.params.slidesPerGroup) : S.slideTo(w)), "prev" === S.swipeDirection && (x > 1 - S.params.longSwipesRatio ? S.slideTo(w + S.params.slidesPerGroup) : S.slideTo(w))
          } else {
            if (!S.params.shortSwipes) return void S.slideTo(S.activeIndex);
            "next" === S.swipeDirection && S.slideTo(w + S.params.slidesPerGroup), "prev" === S.swipeDirection && S.slideTo(w)
          }
        }
      }, S._slideTo = function(e, a) {
        return S.slideTo(e, a, !0, !0)
      }, S.slideTo = function(e, a, t, s) {
        "undefined" == typeof t && (t = !0), "undefined" == typeof e && (e = 0), e < 0 && (e = 0), S.snapIndex = Math.floor(e / S.params.slidesPerGroup), S.snapIndex >= S.snapGrid.length && (S.snapIndex = S.snapGrid.length - 1);
        var i = -S.snapGrid[S.snapIndex];
        if (S.params.autoplay && S.autoplaying && (s || !S.params.autoplayDisableOnInteraction ? S.pauseAutoplay(a) : S.stopAutoplay()), S.updateProgress(i), S.params.normalizeSlideIndex)
          for (var r = 0; r < S.slidesGrid.length; r++) - Math.floor(100 * i) >= Math.floor(100 * S.slidesGrid[r]) && (e = r);
        return !(!S.params.allowSwipeToNext && i < S.translate && i < S.minTranslate()) && (!(!S.params.allowSwipeToPrev && i > S.translate && i > S.maxTranslate() && (S.activeIndex || 0) !== e) && ("undefined" == typeof a && (a = S.params.speed), S.previousIndex = S.activeIndex || 0, S.activeIndex = e, S.updateRealIndex(), S.rtl && -i === S.translate || !S.rtl && i === S.translate ? (S.params.autoHeight && S.updateAutoHeight(), S.updateClasses(), "slide" !== S.params.effect && S.setWrapperTranslate(i), !1) : (S.updateClasses(), S.onTransitionStart(t), 0 === a || S.browser.lteIE9 ? (S.setWrapperTranslate(i), S.setWrapperTransition(0), S.onTransitionEnd(t)) : (S.setWrapperTranslate(i), S.setWrapperTransition(a), S.animating || (S.animating = !0, S.wrapper.transitionEnd(function() {
          S && S.onTransitionEnd(t)
        }))), !0)))
      }, S.onTransitionStart = function(e) {
        "undefined" == typeof e && (e = !0), S.params.autoHeight && S.updateAutoHeight(), S.lazy && S.lazy.onTransitionStart(), e && (S.emit("onTransitionStart", S), S.activeIndex !== S.previousIndex && (S.emit("onSlideChangeStart", S), S.activeIndex > S.previousIndex ? S.emit("onSlideNextStart", S) : S.emit("onSlidePrevStart", S)))
      }, S.onTransitionEnd = function(e) {
        S.animating = !1, S.setWrapperTransition(0), "undefined" == typeof e && (e = !0), S.lazy && S.lazy.onTransitionEnd(), e && (S.emit("onTransitionEnd", S), S.activeIndex !== S.previousIndex && (S.emit("onSlideChangeEnd", S), S.activeIndex > S.previousIndex ? S.emit("onSlideNextEnd", S) : S.emit("onSlidePrevEnd", S))), S.params.history && S.history && S.history.setHistory(S.params.history, S.activeIndex), S.params.hashnav && S.hashnav && S.hashnav.setHash()
      }, S.slideNext = function(e, a, t) {
        if (S.params.loop) {
          if (S.animating) return !1;
          S.fixLoop();
          S.container[0].clientLeft;
          return S.slideTo(S.activeIndex + S.params.slidesPerGroup, a, e, t)
        }
        return S.slideTo(S.activeIndex + S.params.slidesPerGroup, a, e, t)
      }, S._slideNext = function(e) {
        return S.slideNext(!0, e, !0)
      }, S.slidePrev = function(e, a, t) {
        if (S.params.loop) {
          if (S.animating) return !1;
          S.fixLoop();
          S.container[0].clientLeft;
          return S.slideTo(S.activeIndex - 1, a, e, t)
        }
        return S.slideTo(S.activeIndex - 1, a, e, t)
      }, S._slidePrev = function(e) {
        return S.slidePrev(!0, e, !0)
      }, S.slideReset = function(e, a, t) {
        return S.slideTo(S.activeIndex, a, e)
      }, S.disableTouchControl = function() {
        return S.params.onlyExternal = !0, !0
      }, S.enableTouchControl = function() {
        return S.params.onlyExternal = !1, !0
      }, S.setWrapperTransition = function(e, a) {
        S.wrapper.transition(e), "slide" !== S.params.effect && S.effects[S.params.effect] && S.effects[S.params.effect].setTransition(e), S.params.parallax && S.parallax && S.parallax.setTransition(e), S.params.scrollbar && S.scrollbar && S.scrollbar.setTransition(e), S.params.control && S.controller && S.controller.setTransition(e, a), S.emit("onSetTransition", S, e)
      }, S.setWrapperTranslate = function(e, a, t) {
        var s = 0,
          i = 0,
          r = 0;
        S.isHorizontal() ? s = S.rtl ? -e : e : i = e, S.params.roundLengths && (s = n(s), i = n(i)), S.params.virtualTranslate || (S.support.transforms3d ? S.wrapper.transform("translate3d(" + s + "px, " + i + "px, " + r + "px)") : S.wrapper.transform("translate(" + s + "px, " + i + "px)")), S.translate = S.isHorizontal() ? s : i;
        var o, l = S.maxTranslate() - S.minTranslate();
        o = 0 === l ? 0 : (e - S.minTranslate()) / l, o !== S.progress && S.updateProgress(e), a && S.updateActiveIndex(), "slide" !== S.params.effect && S.effects[S.params.effect] && S.effects[S.params.effect].setTranslate(S.translate), S.params.parallax && S.parallax && S.parallax.setTranslate(S.translate), S.params.scrollbar && S.scrollbar && S.scrollbar.setTranslate(S.translate), S.params.control && S.controller && S.controller.setTranslate(S.translate, t), S.emit("onSetTranslate", S, S.translate)
      }, S.getTranslate = function(e, a) {
        var t, s, i, r;
        return "undefined" == typeof a && (a = "x"), S.params.virtualTranslate ? S.rtl ? -S.translate : S.translate : (i = window.getComputedStyle(e, null), window.WebKitCSSMatrix ? (s = i.transform || i.webkitTransform, s.split(",").length > 6 && (s = s.split(", ").map(function(e) {
          return e.replace(",", ".")
        }).join(", ")), r = new window.WebKitCSSMatrix("none" === s ? "" : s)) : (r = i.MozTransform || i.OTransform || i.MsTransform || i.msTransform || i.transform || i.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,"), t = r.toString().split(",")), "x" === a && (s = window.WebKitCSSMatrix ? r.m41 : 16 === t.length ? parseFloat(t[12]) : parseFloat(t[4])), "y" === a && (s = window.WebKitCSSMatrix ? r.m42 : 16 === t.length ? parseFloat(t[13]) : parseFloat(t[5])), S.rtl && s && (s = -s), s || 0)
      }, S.getWrapperTranslate = function(e) {
        return "undefined" == typeof e && (e = S.isHorizontal() ? "x" : "y"), S.getTranslate(S.wrapper[0], e)
      }, S.observers = [], S.initObservers = function() {
        if (S.params.observeParents)
          for (var e = S.container.parents(), a = 0; a < e.length; a++) p(e[a]);
        p(S.container[0], {
          childList: !1
        }), p(S.wrapper[0], {
          attributes: !1
        })
      }, S.disconnectObservers = function() {
        for (var e = 0; e < S.observers.length; e++) S.observers[e].disconnect();
        S.observers = []
      }, S.createLoop = function() {
        S.wrapper.children("." + S.params.slideClass + "." + S.params.slideDuplicateClass).remove();
        var e = S.wrapper.children("." + S.params.slideClass);
        "auto" !== S.params.slidesPerView || S.params.loopedSlides || (S.params.loopedSlides = e.length), S.loopedSlides = parseInt(S.params.loopedSlides || S.params.slidesPerView, 10), S.loopedSlides = S.loopedSlides + S.params.loopAdditionalSlides, S.loopedSlides > e.length && (S.loopedSlides = e.length);
        var t, s = [],
          i = [];
        for (e.each(function(t, r) {
            var n = a(this);
            t < S.loopedSlides && i.push(r), t < e.length && t >= e.length - S.loopedSlides && s.push(r), n.attr("data-swiper-slide-index", t)
          }), t = 0; t < i.length; t++) S.wrapper.append(a(i[t].cloneNode(!0)).addClass(S.params.slideDuplicateClass));
        for (t = s.length - 1; t >= 0; t--) S.wrapper.prepend(a(s[t].cloneNode(!0)).addClass(S.params.slideDuplicateClass))
      }, S.destroyLoop = function() {
        S.wrapper.children("." + S.params.slideClass + "." + S.params.slideDuplicateClass).remove(), S.slides.removeAttr("data-swiper-slide-index")
      }, S.reLoop = function(e) {
        var a = S.activeIndex - S.loopedSlides;
        S.destroyLoop(), S.createLoop(), S.updateSlidesSize(), e && S.slideTo(a + S.loopedSlides, 0, !1)
      }, S.fixLoop = function() {
        var e;
        S.activeIndex < S.loopedSlides ? (e = S.slides.length - 3 * S.loopedSlides + S.activeIndex, e += S.loopedSlides, S.slideTo(e, 0, !1, !0)) : ("auto" === S.params.slidesPerView && S.activeIndex >= 2 * S.loopedSlides || S.activeIndex > S.slides.length - 2 * S.params.slidesPerView) && (e = -S.slides.length + S.activeIndex + S.loopedSlides, e += S.loopedSlides, S.slideTo(e, 0, !1, !0))
      }, S.appendSlide = function(e) {
        if (S.params.loop && S.destroyLoop(), "object" == typeof e && e.length)
          for (var a = 0; a < e.length; a++) e[a] && S.wrapper.append(e[a]);
        else S.wrapper.append(e);
        S.params.loop && S.createLoop(), S.params.observer && S.support.observer || S.update(!0)
      }, S.prependSlide = function(e) {
        S.params.loop && S.destroyLoop();
        var a = S.activeIndex + 1;
        if ("object" == typeof e && e.length) {
          for (var t = 0; t < e.length; t++) e[t] && S.wrapper.prepend(e[t]);
          a = S.activeIndex + e.length
        } else S.wrapper.prepend(e);
        S.params.loop && S.createLoop(), S.params.observer && S.support.observer || S.update(!0), S.slideTo(a, 0, !1)
      }, S.removeSlide = function(e) {
        S.params.loop && (S.destroyLoop(), S.slides = S.wrapper.children("." + S.params.slideClass));
        var a, t = S.activeIndex;
        if ("object" == typeof e && e.length) {
          for (var s = 0; s < e.length; s++) a = e[s], S.slides[a] && S.slides.eq(a).remove(), a < t && t--;
          t = Math.max(t, 0)
        } else a = e, S.slides[a] && S.slides.eq(a).remove(), a < t && t--, t = Math.max(t, 0);
        S.params.loop && S.createLoop(), S.params.observer && S.support.observer || S.update(!0), S.params.loop ? S.slideTo(t + S.loopedSlides, 0, !1) : S.slideTo(t, 0, !1)
      }, S.removeAllSlides = function() {
        for (var e = [], a = 0; a < S.slides.length; a++) e.push(a);
        S.removeSlide(e)
      }, S.effects = {
        fade: {
          setTranslate: function() {
            for (var e = 0; e < S.slides.length; e++) {
              var a = S.slides.eq(e),
                t = a[0].swiperSlideOffset,
                s = -t;
              S.params.virtualTranslate || (s -= S.translate);
              var i = 0;
              S.isHorizontal() || (i = s, s = 0);
              var r = S.params.fade.crossFade ? Math.max(1 - Math.abs(a[0].progress), 0) : 1 + Math.min(Math.max(a[0].progress, -1), 0);
              a.css({
                opacity: r
              }).transform("translate3d(" + s + "px, " + i + "px, 0px)")
            }
          },
          setTransition: function(e) {
            if (S.slides.transition(e), S.params.virtualTranslate && 0 !== e) {
              var a = !1;
              S.slides.transitionEnd(function() {
                if (!a && S) {
                  a = !0, S.animating = !1;
                  for (var e = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"], t = 0; t < e.length; t++) S.wrapper.trigger(e[t])
                }
              })
            }
          }
        },
        flip: {
          setTranslate: function() {
            for (var e = 0; e < S.slides.length; e++) {
              var t = S.slides.eq(e),
                s = t[0].progress;
              S.params.flip.limitRotation && (s = Math.max(Math.min(t[0].progress, 1), -1));
              var i = t[0].swiperSlideOffset,
                r = -180 * s,
                n = r,
                o = 0,
                l = -i,
                p = 0;
              if (S.isHorizontal() ? S.rtl && (n = -n) : (p = l, l = 0, o = -n, n = 0), t[0].style.zIndex = -Math.abs(Math.round(s)) + S.slides.length, S.params.flip.slideShadows) {
                var d = S.isHorizontal() ? t.find(".swiper-slide-shadow-left") : t.find(".swiper-slide-shadow-top"),
                  u = S.isHorizontal() ? t.find(".swiper-slide-shadow-right") : t.find(".swiper-slide-shadow-bottom");
                0 === d.length && (d = a('<div class="swiper-slide-shadow-' + (S.isHorizontal() ? "left" : "top") + '"></div>'), t.append(d)), 0 === u.length && (u = a('<div class="swiper-slide-shadow-' + (S.isHorizontal() ? "right" : "bottom") + '"></div>'), t.append(u)), d.length && (d[0].style.opacity = Math.max(-s, 0)), u.length && (u[0].style.opacity = Math.max(s, 0))
              }
              t.transform("translate3d(" + l + "px, " + p + "px, 0px) rotateX(" + o + "deg) rotateY(" + n + "deg)")
            }
          },
          setTransition: function(e) {
            if (S.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), S.params.virtualTranslate && 0 !== e) {
              var t = !1;
              S.slides.eq(S.activeIndex).transitionEnd(function() {
                if (!t && S && a(this).hasClass(S.params.slideActiveClass)) {
                  t = !0, S.animating = !1;
                  for (var e = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"], s = 0; s < e.length; s++) S.wrapper.trigger(e[s])
                }
              })
            }
          }
        },
        cube: {
          setTranslate: function() {
            var e, t = 0;
            S.params.cube.shadow && (S.isHorizontal() ? (e = S.wrapper.find(".swiper-cube-shadow"), 0 === e.length && (e = a('<div class="swiper-cube-shadow"></div>'), S.wrapper.append(e)), e.css({
              height: S.width + "px"
            })) : (e = S.container.find(".swiper-cube-shadow"), 0 === e.length && (e = a('<div class="swiper-cube-shadow"></div>'), S.container.append(e))));
            for (var s = 0; s < S.slides.length; s++) {
              var i = S.slides.eq(s),
                r = 90 * s,
                n = Math.floor(r / 360);
              S.rtl && (r = -r, n = Math.floor(-r / 360));
              var o = Math.max(Math.min(i[0].progress, 1), -1),
                l = 0,
                p = 0,
                d = 0;
              s % 4 === 0 ? (l = 4 * -n * S.size, d = 0) : (s - 1) % 4 === 0 ? (l = 0, d = 4 * -n * S.size) : (s - 2) % 4 === 0 ? (l = S.size + 4 * n * S.size, d = S.size) : (s - 3) % 4 === 0 && (l = -S.size, d = 3 * S.size + 4 * S.size * n), S.rtl && (l = -l), S.isHorizontal() || (p = l, l = 0);
              var u = "rotateX(" + (S.isHorizontal() ? 0 : -r) + "deg) rotateY(" + (S.isHorizontal() ? r : 0) + "deg) translate3d(" + l + "px, " + p + "px, " + d + "px)";
              if (o <= 1 && o > -1 && (t = 90 * s + 90 * o, S.rtl && (t = 90 * -s - 90 * o)), i.transform(u), S.params.cube.slideShadows) {
                var c = S.isHorizontal() ? i.find(".swiper-slide-shadow-left") : i.find(".swiper-slide-shadow-top"),
                  m = S.isHorizontal() ? i.find(".swiper-slide-shadow-right") : i.find(".swiper-slide-shadow-bottom");
                0 === c.length && (c = a('<div class="swiper-slide-shadow-' + (S.isHorizontal() ? "left" : "top") + '"></div>'), i.append(c)), 0 === m.length && (m = a('<div class="swiper-slide-shadow-' + (S.isHorizontal() ? "right" : "bottom") + '"></div>'), i.append(m)), c.length && (c[0].style.opacity = Math.max(-o, 0)), m.length && (m[0].style.opacity = Math.max(o, 0))
              }
            }
            if (S.wrapper.css({
                "-webkit-transform-origin": "50% 50% -" + S.size / 2 + "px",
                "-moz-transform-origin": "50% 50% -" + S.size / 2 + "px",
                "-ms-transform-origin": "50% 50% -" + S.size / 2 + "px",
                "transform-origin": "50% 50% -" + S.size / 2 + "px"
              }), S.params.cube.shadow)
              if (S.isHorizontal()) e.transform("translate3d(0px, " + (S.width / 2 + S.params.cube.shadowOffset) + "px, " + -S.width / 2 + "px) rotateX(90deg) rotateZ(0deg) scale(" + S.params.cube.shadowScale + ")");
              else {
                var h = Math.abs(t) - 90 * Math.floor(Math.abs(t) / 90),
                  g = 1.5 - (Math.sin(2 * h * Math.PI / 360) / 2 + Math.cos(2 * h * Math.PI / 360) / 2),
                  f = S.params.cube.shadowScale,
                  v = S.params.cube.shadowScale / g,
                  w = S.params.cube.shadowOffset;
                e.transform("scale3d(" + f + ", 1, " + v + ") translate3d(0px, " + (S.height / 2 + w) + "px, " + -S.height / 2 / v + "px) rotateX(-90deg)")
              } var y = S.isSafari || S.isUiWebView ? -S.size / 2 : 0;
            S.wrapper.transform("translate3d(0px,0," + y + "px) rotateX(" + (S.isHorizontal() ? 0 : t) + "deg) rotateY(" + (S.isHorizontal() ? -t : 0) + "deg)")
          },
          setTransition: function(e) {
            S.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), S.params.cube.shadow && !S.isHorizontal() && S.container.find(".swiper-cube-shadow").transition(e)
          }
        },
        coverflow: {
          setTranslate: function() {
            for (var e = S.translate, t = S.isHorizontal() ? -e + S.width / 2 : -e + S.height / 2, s = S.isHorizontal() ? S.params.coverflow.rotate : -S.params.coverflow.rotate, i = S.params.coverflow.depth, r = 0, n = S.slides.length; r < n; r++) {
              var o = S.slides.eq(r),
                l = S.slidesSizesGrid[r],
                p = o[0].swiperSlideOffset,
                d = (t - p - l / 2) / l * S.params.coverflow.modifier,
                u = S.isHorizontal() ? s * d : 0,
                c = S.isHorizontal() ? 0 : s * d,
                m = -i * Math.abs(d),
                h = S.isHorizontal() ? 0 : S.params.coverflow.stretch * d,
                g = S.isHorizontal() ? S.params.coverflow.stretch * d : 0;
              Math.abs(g) < .001 && (g = 0), Math.abs(h) < .001 && (h = 0), Math.abs(m) < .001 && (m = 0), Math.abs(u) < .001 && (u = 0), Math.abs(c) < .001 && (c = 0);
              var f = "translate3d(" + g + "px," + h + "px," + m + "px)  rotateX(" + c + "deg) rotateY(" + u + "deg)";
              if (o.transform(f), o[0].style.zIndex = -Math.abs(Math.round(d)) + 1, S.params.coverflow.slideShadows) {
                var v = S.isHorizontal() ? o.find(".swiper-slide-shadow-left") : o.find(".swiper-slide-shadow-top"),
                  w = S.isHorizontal() ? o.find(".swiper-slide-shadow-right") : o.find(".swiper-slide-shadow-bottom");
                0 === v.length && (v = a('<div class="swiper-slide-shadow-' + (S.isHorizontal() ? "left" : "top") + '"></div>'), o.append(v)), 0 === w.length && (w = a('<div class="swiper-slide-shadow-' + (S.isHorizontal() ? "right" : "bottom") + '"></div>'), o.append(w)), v.length && (v[0].style.opacity = d > 0 ? d : 0), w.length && (w[0].style.opacity = -d > 0 ? -d : 0)
              }
            }
            if (S.browser.ie) {
              var y = S.wrapper[0].style;
              y.perspectiveOrigin = t + "px 50%"
            }
          },
          setTransition: function(e) {
            S.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e)
          }
        }
      }, S.lazy = {
        initialImageLoaded: !1,
        loadImageInSlide: function(e, t) {
          if ("undefined" != typeof e && ("undefined" == typeof t && (t = !0), 0 !== S.slides.length)) {
            var s = S.slides.eq(e),
              i = s.find("." + S.params.lazyLoadingClass + ":not(." + S.params.lazyStatusLoadedClass + "):not(." + S.params.lazyStatusLoadingClass + ")");
            !s.hasClass(S.params.lazyLoadingClass) || s.hasClass(S.params.lazyStatusLoadedClass) || s.hasClass(S.params.lazyStatusLoadingClass) || (i = i.add(s[0])), 0 !== i.length && i.each(function() {
              var e = a(this);
              e.addClass(S.params.lazyStatusLoadingClass);
              var i = e.attr("data-background"),
                r = e.attr("data-src"),
                n = e.attr("data-srcset"),
                o = e.attr("data-sizes");
              S.loadImage(e[0], r || i, n, o, !1, function() {
                if (i ? (e.css("background-image", 'url("' + i + '")'), e.removeAttr("data-background")) : (n && (e.attr("srcset", n), e.removeAttr("data-srcset")), o && (e.attr("sizes", o), e.removeAttr("data-sizes")), r && (e.attr("src", r), e.removeAttr("data-src"))), e.addClass(S.params.lazyStatusLoadedClass).removeClass(S.params.lazyStatusLoadingClass), s.find("." + S.params.lazyPreloaderClass + ", ." + S.params.preloaderClass).remove(), S.params.loop && t) {
                  var a = s.attr("data-swiper-slide-index");
                  if (s.hasClass(S.params.slideDuplicateClass)) {
                    var l = S.wrapper.children('[data-swiper-slide-index="' + a + '"]:not(.' + S.params.slideDuplicateClass + ")");
                    S.lazy.loadImageInSlide(l.index(), !1)
                  } else {
                    var p = S.wrapper.children("." + S.params.slideDuplicateClass + '[data-swiper-slide-index="' + a + '"]');
                    S.lazy.loadImageInSlide(p.index(), !1)
                  }
                }
                S.emit("onLazyImageReady", S, s[0], e[0])
              }), S.emit("onLazyImageLoad", S, s[0], e[0])
            })
          }
        },
        load: function() {
          var e, t = S.params.slidesPerView;
          if ("auto" === t && (t = 0), S.lazy.initialImageLoaded || (S.lazy.initialImageLoaded = !0), S.params.watchSlidesVisibility) S.wrapper.children("." + S.params.slideVisibleClass).each(function() {
            S.lazy.loadImageInSlide(a(this).index())
          });
          else if (t > 1)
            for (e = S.activeIndex; e < S.activeIndex + t; e++) S.slides[e] && S.lazy.loadImageInSlide(e);
          else S.lazy.loadImageInSlide(S.activeIndex);
          if (S.params.lazyLoadingInPrevNext)
            if (t > 1 || S.params.lazyLoadingInPrevNextAmount && S.params.lazyLoadingInPrevNextAmount > 1) {
              var s = S.params.lazyLoadingInPrevNextAmount,
                i = t,
                r = Math.min(S.activeIndex + i + Math.max(s, i), S.slides.length),
                n = Math.max(S.activeIndex - Math.max(i, s), 0);
              for (e = S.activeIndex + t; e < r; e++) S.slides[e] && S.lazy.loadImageInSlide(e);
              for (e = n; e < S.activeIndex; e++) S.slides[e] && S.lazy.loadImageInSlide(e)
            } else {
              var o = S.wrapper.children("." + S.params.slideNextClass);
              o.length > 0 && S.lazy.loadImageInSlide(o.index());
              var l = S.wrapper.children("." + S.params.slidePrevClass);
              l.length > 0 && S.lazy.loadImageInSlide(l.index())
            }
        },
        onTransitionStart: function() {
          S.params.lazyLoading && (S.params.lazyLoadingOnTransitionStart || !S.params.lazyLoadingOnTransitionStart && !S.lazy.initialImageLoaded) && S.lazy.load()
        },
        onTransitionEnd: function() {
          S.params.lazyLoading && !S.params.lazyLoadingOnTransitionStart && S.lazy.load()
        }
      }, S.scrollbar = {
        isTouched: !1,
        setDragPosition: function(e) {
          var a = S.scrollbar,
            t = S.isHorizontal() ? "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX || e.clientX : "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY || e.clientY,
            s = t - a.track.offset()[S.isHorizontal() ? "left" : "top"] - a.dragSize / 2,
            i = -S.minTranslate() * a.moveDivider,
            r = -S.maxTranslate() * a.moveDivider;
          s < i ? s = i : s > r && (s = r), s = -s / a.moveDivider, S.updateProgress(s), S.setWrapperTranslate(s, !0)
        },
        dragStart: function(e) {
          var a = S.scrollbar;
          a.isTouched = !0, e.preventDefault(), e.stopPropagation(), a.setDragPosition(e), clearTimeout(a.dragTimeout), a.track.transition(0), S.params.scrollbarHide && a.track.css("opacity", 1), S.wrapper.transition(100), a.drag.transition(100), S.emit("onScrollbarDragStart", S)
        },
        dragMove: function(e) {
          var a = S.scrollbar;
          a.isTouched && (e.preventDefault ? e.preventDefault() : e.returnValue = !1, a.setDragPosition(e), S.wrapper.transition(0), a.track.transition(0), a.drag.transition(0), S.emit("onScrollbarDragMove", S))
        },
        dragEnd: function(e) {
          var a = S.scrollbar;
          a.isTouched && (a.isTouched = !1, S.params.scrollbarHide && (clearTimeout(a.dragTimeout), a.dragTimeout = setTimeout(function() {
            a.track.css("opacity", 0), a.track.transition(400)
          }, 1e3)), S.emit("onScrollbarDragEnd", S), S.params.scrollbarSnapOnRelease && S.slideReset())
        },
        draggableEvents: function() {
          return S.params.simulateTouch !== !1 || S.support.touch ? S.touchEvents : S.touchEventsDesktop
        }(),
        enableDraggable: function() {
          var e = S.scrollbar,
            t = S.support.touch ? e.track : document;
          a(e.track).on(e.draggableEvents.start, e.dragStart), a(t).on(e.draggableEvents.move, e.dragMove), a(t).on(e.draggableEvents.end, e.dragEnd)
        },
        disableDraggable: function() {
          var e = S.scrollbar,
            t = S.support.touch ? e.track : document;
          a(e.track).off(S.draggableEvents.start, e.dragStart), a(t).off(S.draggableEvents.move, e.dragMove), a(t).off(S.draggableEvents.end, e.dragEnd)
        },
        set: function() {
          if (S.params.scrollbar) {
            var e = S.scrollbar;
            e.track = a(S.params.scrollbar), S.params.uniqueNavElements && "string" == typeof S.params.scrollbar && e.track.length > 1 && 1 === S.container.find(S.params.scrollbar).length && (e.track = S.container.find(S.params.scrollbar)), e.drag = e.track.find(".swiper-scrollbar-drag"), 0 === e.drag.length && (e.drag = a('<div class="swiper-scrollbar-drag"></div>'), e.track.append(e.drag)), e.drag[0].style.width = "", e.drag[0].style.height = "", e.trackSize = S.isHorizontal() ? e.track[0].offsetWidth : e.track[0].offsetHeight, e.divider = S.size / S.virtualSize, e.moveDivider = e.divider * (e.trackSize / S.size), e.dragSize = e.trackSize * e.divider, S.isHorizontal() ? e.drag[0].style.width = e.dragSize + "px" : e.drag[0].style.height = e.dragSize + "px", e.divider >= 1 ? e.track[0].style.display = "none" : e.track[0].style.display = "", S.params.scrollbarHide && (e.track[0].style.opacity = 0)
          }
        },
        setTranslate: function() {
          if (S.params.scrollbar) {
            var e, a = S.scrollbar,
              t = (S.translate || 0, a.dragSize);
            e = (a.trackSize - a.dragSize) * S.progress, S.rtl && S.isHorizontal() ? (e = -e, e > 0 ? (t = a.dragSize - e, e = 0) : -e + a.dragSize > a.trackSize && (t = a.trackSize + e)) : e < 0 ? (t = a.dragSize + e, e = 0) : e + a.dragSize > a.trackSize && (t = a.trackSize - e), S.isHorizontal() ? (S.support.transforms3d ? a.drag.transform("translate3d(" + e + "px, 0, 0)") : a.drag.transform("translateX(" + e + "px)"), a.drag[0].style.width = t + "px") : (S.support.transforms3d ? a.drag.transform("translate3d(0px, " + e + "px, 0)") : a.drag.transform("translateY(" + e + "px)"), a.drag[0].style.height = t + "px"), S.params.scrollbarHide && (clearTimeout(a.timeout), a.track[0].style.opacity = 1, a.timeout = setTimeout(function() {
              a.track[0].style.opacity = 0, a.track.transition(400)
            }, 1e3))
          }
        },
        setTransition: function(e) {
          S.params.scrollbar && S.scrollbar.drag.transition(e)
        }
      }, S.controller = {
        LinearSpline: function(e, a) {
          this.x = e, this.y = a, this.lastIndex = e.length - 1;
          var t, s;
          this.x.length;
          this.interpolate = function(e) {
            return e ? (s = i(this.x, e), t = s - 1, (e - this.x[t]) * (this.y[s] - this.y[t]) / (this.x[s] - this.x[t]) + this.y[t]) : 0
          };
          var i = function() {
            var e, a, t;
            return function(s, i) {
              for (a = -1, e = s.length; e - a > 1;) s[t = e + a >> 1] <= i ? a = t : e = t;
              return e
            }
          }()
        },
        getInterpolateFunction: function(e) {
          S.controller.spline || (S.controller.spline = S.params.loop ? new S.controller.LinearSpline(S.slidesGrid, e.slidesGrid) : new S.controller.LinearSpline(S.snapGrid, e.snapGrid))
        },
        setTranslate: function(e, a) {
          function s(a) {
            e = a.rtl && "horizontal" === a.params.direction ? -S.translate : S.translate, "slide" === S.params.controlBy && (S.controller.getInterpolateFunction(a), r = -S.controller.spline.interpolate(-e)), r && "container" !== S.params.controlBy || (i = (a.maxTranslate() - a.minTranslate()) / (S.maxTranslate() - S.minTranslate()), r = (e - S.minTranslate()) * i + a.minTranslate()), S.params.controlInverse && (r = a.maxTranslate() - r), a.updateProgress(r), a.setWrapperTranslate(r, !1, S), a.updateActiveIndex()
          }
          var i, r, n = S.params.control;
          if (S.isArray(n))
            for (var o = 0; o < n.length; o++) n[o] !== a && n[o] instanceof t && s(n[o]);
          else n instanceof t && a !== n && s(n)
        },
        setTransition: function(e, a) {
          function s(a) {
            a.setWrapperTransition(e, S), 0 !== e && (a.onTransitionStart(), a.wrapper.transitionEnd(function() {
              r && (a.params.loop && "slide" === S.params.controlBy && a.fixLoop(), a.onTransitionEnd())
            }))
          }
          var i, r = S.params.control;
          if (S.isArray(r))
            for (i = 0; i < r.length; i++) r[i] !== a && r[i] instanceof t && s(r[i]);
          else r instanceof t && a !== r && s(r)
        }
      }, S.hashnav = {
        onHashCange: function(e, a) {
          var t = document.location.hash.replace("#", ""),
            s = S.slides.eq(S.activeIndex).attr("data-hash");
          t !== s && S.slideTo(S.wrapper.children("." + S.params.slideClass + '[data-hash="' + t + '"]').index());
        },
        attachEvents: function(e) {
          var t = e ? "off" : "on";
          a(window)[t]("hashchange", S.hashnav.onHashCange)
        },
        setHash: function() {
          if (S.hashnav.initialized && S.params.hashnav)
            if (S.params.replaceState && window.history && window.history.replaceState) window.history.replaceState(null, null, "#" + S.slides.eq(S.activeIndex).attr("data-hash") || "");
            else {
              var e = S.slides.eq(S.activeIndex),
                a = e.attr("data-hash") || e.attr("data-history");
              document.location.hash = a || ""
            }
        },
        init: function() {
          if (S.params.hashnav && !S.params.history) {
            S.hashnav.initialized = !0;
            var e = document.location.hash.replace("#", "");
            if (e) {
              for (var a = 0, t = 0, s = S.slides.length; t < s; t++) {
                var i = S.slides.eq(t),
                  r = i.attr("data-hash") || i.attr("data-history");
                if (r === e && !i.hasClass(S.params.slideDuplicateClass)) {
                  var n = i.index();
                  S.slideTo(n, a, S.params.runCallbacksOnInit, !0)
                }
              }
              S.params.hashnavWatchState && S.hashnav.attachEvents()
            }
          }
        },
        destroy: function() {
          S.params.hashnavWatchState && S.hashnav.attachEvents(!0)
        }
      }, S.history = {
        init: function() {
          if (S.params.history) {
            if (!window.history || !window.history.pushState) return S.params.history = !1, void(S.params.hashnav = !0);
            S.history.initialized = !0, this.paths = this.getPathValues(), (this.paths.key || this.paths.value) && (this.scrollToSlide(0, this.paths.value, S.params.runCallbacksOnInit), S.params.replaceState || window.addEventListener("popstate", this.setHistoryPopState))
          }
        },
        setHistoryPopState: function() {
          S.history.paths = S.history.getPathValues(), S.history.scrollToSlide(S.params.speed, S.history.paths.value, !1)
        },
        getPathValues: function() {
          var e = window.location.pathname.slice(1).split("/"),
            a = e.length,
            t = e[a - 2],
            s = e[a - 1];
          return {
            key: t,
            value: s
          }
        },
        setHistory: function(e, a) {
          if (S.history.initialized && S.params.history) {
            var t = S.slides.eq(a),
              s = this.slugify(t.attr("data-history"));
            window.location.pathname.includes(e) || (s = e + "/" + s), S.params.replaceState ? window.history.replaceState(null, null, s) : window.history.pushState(null, null, s)
          }
        },
        slugify: function(e) {
          return e.toString().toLowerCase().replace(/\s+/g, "-").replace(/[^\w\-]+/g, "").replace(/\-\-+/g, "-").replace(/^-+/, "").replace(/-+$/, "")
        },
        scrollToSlide: function(e, a, t) {
          if (a)
            for (var s = 0, i = S.slides.length; s < i; s++) {
              var r = S.slides.eq(s),
                n = this.slugify(r.attr("data-history"));
              if (n === a && !r.hasClass(S.params.slideDuplicateClass)) {
                var o = r.index();
                S.slideTo(o, e, t)
              }
            } else S.slideTo(0, e, t)
        }
      }, S.disableKeyboardControl = function() {
        S.params.keyboardControl = !1, a(document).off("keydown", d)
      }, S.enableKeyboardControl = function() {
        S.params.keyboardControl = !0, a(document).on("keydown", d)
      }, S.mousewheel = {
        event: !1,
        lastScrollTime: (new window.Date).getTime()
      }, S.params.mousewheelControl && (S.mousewheel.event = navigator.userAgent.indexOf("firefox") > -1 ? "DOMMouseScroll" : u() ? "wheel" : "mousewheel"), S.disableMousewheelControl = function() {
        if (!S.mousewheel.event) return !1;
        var e = S.container;
        return "container" !== S.params.mousewheelEventsTarged && (e = a(S.params.mousewheelEventsTarged)), e.off(S.mousewheel.event, c), !0
      }, S.enableMousewheelControl = function() {
        if (!S.mousewheel.event) return !1;
        var e = S.container;
        return "container" !== S.params.mousewheelEventsTarged && (e = a(S.params.mousewheelEventsTarged)), e.on(S.mousewheel.event, c), !0
      }, S.parallax = {
        setTranslate: function() {
          S.container.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
            h(this, S.progress)
          }), S.slides.each(function() {
            var e = a(this);
            e.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
              var a = Math.min(Math.max(e[0].progress, -1), 1);
              h(this, a)
            })
          })
        },
        setTransition: function(e) {
          "undefined" == typeof e && (e = S.params.speed), S.container.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
            var t = a(this),
              s = parseInt(t.attr("data-swiper-parallax-duration"), 10) || e;
            0 === e && (s = 0), t.transition(s)
          })
        }
      }, S.zoom = {
        scale: 1,
        currentScale: 1,
        isScaling: !1,
        gesture: {
          slide: void 0,
          slideWidth: void 0,
          slideHeight: void 0,
          image: void 0,
          imageWrap: void 0,
          zoomMax: S.params.zoomMax
        },
        image: {
          isTouched: void 0,
          isMoved: void 0,
          currentX: void 0,
          currentY: void 0,
          minX: void 0,
          minY: void 0,
          maxX: void 0,
          maxY: void 0,
          width: void 0,
          height: void 0,
          startX: void 0,
          startY: void 0,
          touchesStart: {},
          touchesCurrent: {}
        },
        velocity: {
          x: void 0,
          y: void 0,
          prevPositionX: void 0,
          prevPositionY: void 0,
          prevTime: void 0
        },
        getDistanceBetweenTouches: function(e) {
          if (e.targetTouches.length < 2) return 1;
          var a = e.targetTouches[0].pageX,
            t = e.targetTouches[0].pageY,
            s = e.targetTouches[1].pageX,
            i = e.targetTouches[1].pageY,
            r = Math.sqrt(Math.pow(s - a, 2) + Math.pow(i - t, 2));
          return r
        },
        onGestureStart: function(e) {
          var t = S.zoom;
          if (!S.support.gestures) {
            if ("touchstart" !== e.type || "touchstart" === e.type && e.targetTouches.length < 2) return;
            t.gesture.scaleStart = t.getDistanceBetweenTouches(e)
          }
          return t.gesture.slide && t.gesture.slide.length || (t.gesture.slide = a(this), 0 === t.gesture.slide.length && (t.gesture.slide = S.slides.eq(S.activeIndex)), t.gesture.image = t.gesture.slide.find("img, svg, canvas"), t.gesture.imageWrap = t.gesture.image.parent("." + S.params.zoomContainerClass), t.gesture.zoomMax = t.gesture.imageWrap.attr("data-swiper-zoom") || S.params.zoomMax, 0 !== t.gesture.imageWrap.length) ? (t.gesture.image.transition(0), void(t.isScaling = !0)) : void(t.gesture.image = void 0)
        },
        onGestureChange: function(e) {
          var a = S.zoom;
          if (!S.support.gestures) {
            if ("touchmove" !== e.type || "touchmove" === e.type && e.targetTouches.length < 2) return;
            a.gesture.scaleMove = a.getDistanceBetweenTouches(e)
          }
          a.gesture.image && 0 !== a.gesture.image.length && (S.support.gestures ? a.scale = e.scale * a.currentScale : a.scale = a.gesture.scaleMove / a.gesture.scaleStart * a.currentScale, a.scale > a.gesture.zoomMax && (a.scale = a.gesture.zoomMax - 1 + Math.pow(a.scale - a.gesture.zoomMax + 1, .5)), a.scale < S.params.zoomMin && (a.scale = S.params.zoomMin + 1 - Math.pow(S.params.zoomMin - a.scale + 1, .5)), a.gesture.image.transform("translate3d(0,0,0) scale(" + a.scale + ")"))
        },
        onGestureEnd: function(e) {
          var a = S.zoom;
          !S.support.gestures && ("touchend" !== e.type || "touchend" === e.type && e.changedTouches.length < 2) || a.gesture.image && 0 !== a.gesture.image.length && (a.scale = Math.max(Math.min(a.scale, a.gesture.zoomMax), S.params.zoomMin), a.gesture.image.transition(S.params.speed).transform("translate3d(0,0,0) scale(" + a.scale + ")"), a.currentScale = a.scale, a.isScaling = !1, 1 === a.scale && (a.gesture.slide = void 0))
        },
        onTouchStart: function(e, a) {
          var t = e.zoom;
          t.gesture.image && 0 !== t.gesture.image.length && (t.image.isTouched || ("android" === e.device.os && a.preventDefault(), t.image.isTouched = !0, t.image.touchesStart.x = "touchstart" === a.type ? a.targetTouches[0].pageX : a.pageX, t.image.touchesStart.y = "touchstart" === a.type ? a.targetTouches[0].pageY : a.pageY))
        },
        onTouchMove: function(e) {
          var a = S.zoom;
          if (a.gesture.image && 0 !== a.gesture.image.length && (S.allowClick = !1, a.image.isTouched && a.gesture.slide)) {
            a.image.isMoved || (a.image.width = a.gesture.image[0].offsetWidth, a.image.height = a.gesture.image[0].offsetHeight, a.image.startX = S.getTranslate(a.gesture.imageWrap[0], "x") || 0, a.image.startY = S.getTranslate(a.gesture.imageWrap[0], "y") || 0, a.gesture.slideWidth = a.gesture.slide[0].offsetWidth, a.gesture.slideHeight = a.gesture.slide[0].offsetHeight, a.gesture.imageWrap.transition(0));
            var t = a.image.width * a.scale,
              s = a.image.height * a.scale;
            if (!(t < a.gesture.slideWidth && s < a.gesture.slideHeight)) {
              if (a.image.minX = Math.min(a.gesture.slideWidth / 2 - t / 2, 0), a.image.maxX = -a.image.minX, a.image.minY = Math.min(a.gesture.slideHeight / 2 - s / 2, 0), a.image.maxY = -a.image.minY, a.image.touchesCurrent.x = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, a.image.touchesCurrent.y = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, !a.image.isMoved && !a.isScaling) {
                if (S.isHorizontal() && Math.floor(a.image.minX) === Math.floor(a.image.startX) && a.image.touchesCurrent.x < a.image.touchesStart.x || Math.floor(a.image.maxX) === Math.floor(a.image.startX) && a.image.touchesCurrent.x > a.image.touchesStart.x) return void(a.image.isTouched = !1);
                if (!S.isHorizontal() && Math.floor(a.image.minY) === Math.floor(a.image.startY) && a.image.touchesCurrent.y < a.image.touchesStart.y || Math.floor(a.image.maxY) === Math.floor(a.image.startY) && a.image.touchesCurrent.y > a.image.touchesStart.y) return void(a.image.isTouched = !1)
              }
              e.preventDefault(), e.stopPropagation(), a.image.isMoved = !0, a.image.currentX = a.image.touchesCurrent.x - a.image.touchesStart.x + a.image.startX, a.image.currentY = a.image.touchesCurrent.y - a.image.touchesStart.y + a.image.startY, a.image.currentX < a.image.minX && (a.image.currentX = a.image.minX + 1 - Math.pow(a.image.minX - a.image.currentX + 1, .8)), a.image.currentX > a.image.maxX && (a.image.currentX = a.image.maxX - 1 + Math.pow(a.image.currentX - a.image.maxX + 1, .8)), a.image.currentY < a.image.minY && (a.image.currentY = a.image.minY + 1 - Math.pow(a.image.minY - a.image.currentY + 1, .8)), a.image.currentY > a.image.maxY && (a.image.currentY = a.image.maxY - 1 + Math.pow(a.image.currentY - a.image.maxY + 1, .8)), a.velocity.prevPositionX || (a.velocity.prevPositionX = a.image.touchesCurrent.x), a.velocity.prevPositionY || (a.velocity.prevPositionY = a.image.touchesCurrent.y), a.velocity.prevTime || (a.velocity.prevTime = Date.now()), a.velocity.x = (a.image.touchesCurrent.x - a.velocity.prevPositionX) / (Date.now() - a.velocity.prevTime) / 2, a.velocity.y = (a.image.touchesCurrent.y - a.velocity.prevPositionY) / (Date.now() - a.velocity.prevTime) / 2, Math.abs(a.image.touchesCurrent.x - a.velocity.prevPositionX) < 2 && (a.velocity.x = 0), Math.abs(a.image.touchesCurrent.y - a.velocity.prevPositionY) < 2 && (a.velocity.y = 0), a.velocity.prevPositionX = a.image.touchesCurrent.x, a.velocity.prevPositionY = a.image.touchesCurrent.y, a.velocity.prevTime = Date.now(), a.gesture.imageWrap.transform("translate3d(" + a.image.currentX + "px, " + a.image.currentY + "px,0)")
            }
          }
        },
        onTouchEnd: function(e, a) {
          var t = e.zoom;
          if (t.gesture.image && 0 !== t.gesture.image.length) {
            if (!t.image.isTouched || !t.image.isMoved) return t.image.isTouched = !1, void(t.image.isMoved = !1);
            t.image.isTouched = !1, t.image.isMoved = !1;
            var s = 300,
              i = 300,
              r = t.velocity.x * s,
              n = t.image.currentX + r,
              o = t.velocity.y * i,
              l = t.image.currentY + o;
            0 !== t.velocity.x && (s = Math.abs((n - t.image.currentX) / t.velocity.x)), 0 !== t.velocity.y && (i = Math.abs((l - t.image.currentY) / t.velocity.y));
            var p = Math.max(s, i);
            t.image.currentX = n, t.image.currentY = l;
            var d = t.image.width * t.scale,
              u = t.image.height * t.scale;
            t.image.minX = Math.min(t.gesture.slideWidth / 2 - d / 2, 0), t.image.maxX = -t.image.minX, t.image.minY = Math.min(t.gesture.slideHeight / 2 - u / 2, 0), t.image.maxY = -t.image.minY, t.image.currentX = Math.max(Math.min(t.image.currentX, t.image.maxX), t.image.minX), t.image.currentY = Math.max(Math.min(t.image.currentY, t.image.maxY), t.image.minY), t.gesture.imageWrap.transition(p).transform("translate3d(" + t.image.currentX + "px, " + t.image.currentY + "px,0)")
          }
        },
        onTransitionEnd: function(e) {
          var a = e.zoom;
          a.gesture.slide && e.previousIndex !== e.activeIndex && (a.gesture.image.transform("translate3d(0,0,0) scale(1)"), a.gesture.imageWrap.transform("translate3d(0,0,0)"), a.gesture.slide = a.gesture.image = a.gesture.imageWrap = void 0, a.scale = a.currentScale = 1)
        },
        toggleZoom: function(e, t) {
          var s = e.zoom;
          if (s.gesture.slide || (s.gesture.slide = e.clickedSlide ? a(e.clickedSlide) : e.slides.eq(e.activeIndex), s.gesture.image = s.gesture.slide.find("img, svg, canvas"), s.gesture.imageWrap = s.gesture.image.parent("." + e.params.zoomContainerClass)), s.gesture.image && 0 !== s.gesture.image.length) {
            var i, r, n, o, l, p, d, u, c, m, h, g, f, v, w, y, x, T;
            "undefined" == typeof s.image.touchesStart.x && t ? (i = "touchend" === t.type ? t.changedTouches[0].pageX : t.pageX, r = "touchend" === t.type ? t.changedTouches[0].pageY : t.pageY) : (i = s.image.touchesStart.x, r = s.image.touchesStart.y), s.scale && 1 !== s.scale ? (s.scale = s.currentScale = 1, s.gesture.imageWrap.transition(300).transform("translate3d(0,0,0)"), s.gesture.image.transition(300).transform("translate3d(0,0,0) scale(1)"), s.gesture.slide = void 0) : (s.scale = s.currentScale = s.gesture.imageWrap.attr("data-swiper-zoom") || e.params.zoomMax, t ? (x = s.gesture.slide[0].offsetWidth, T = s.gesture.slide[0].offsetHeight, n = s.gesture.slide.offset().left, o = s.gesture.slide.offset().top, l = n + x / 2 - i, p = o + T / 2 - r, c = s.gesture.image[0].offsetWidth, m = s.gesture.image[0].offsetHeight, h = c * s.scale, g = m * s.scale, f = Math.min(x / 2 - h / 2, 0), v = Math.min(T / 2 - g / 2, 0), w = -f, y = -v, d = l * s.scale, u = p * s.scale, d < f && (d = f), d > w && (d = w), u < v && (u = v), u > y && (u = y)) : (d = 0, u = 0), s.gesture.imageWrap.transition(300).transform("translate3d(" + d + "px, " + u + "px,0)"), s.gesture.image.transition(300).transform("translate3d(0,0,0) scale(" + s.scale + ")"))
          }
        },
        attachEvents: function(e) {
          var t = e ? "off" : "on";
          if (S.params.zoom) {
            var s = (S.slides, !("touchstart" !== S.touchEvents.start || !S.support.passiveListener || !S.params.passiveListeners) && {
              passive: !0,
              capture: !1
            });
            S.support.gestures ? (S.slides[t]("gesturestart", S.zoom.onGestureStart, s), S.slides[t]("gesturechange", S.zoom.onGestureChange, s), S.slides[t]("gestureend", S.zoom.onGestureEnd, s)) : "touchstart" === S.touchEvents.start && (S.slides[t](S.touchEvents.start, S.zoom.onGestureStart, s), S.slides[t](S.touchEvents.move, S.zoom.onGestureChange, s), S.slides[t](S.touchEvents.end, S.zoom.onGestureEnd, s)), S[t]("touchStart", S.zoom.onTouchStart), S.slides.each(function(e, s) {
              a(s).find("." + S.params.zoomContainerClass).length > 0 && a(s)[t](S.touchEvents.move, S.zoom.onTouchMove)
            }), S[t]("touchEnd", S.zoom.onTouchEnd), S[t]("transitionEnd", S.zoom.onTransitionEnd), S.params.zoomToggle && S.on("doubleTap", S.zoom.toggleZoom)
          }
        },
        init: function() {
          S.zoom.attachEvents()
        },
        destroy: function() {
          S.zoom.attachEvents(!0)
        }
      }, S._plugins = [];
      for (var N in S.plugins) {
        var W = S.plugins[N](S, S.params[N]);
        W && S._plugins.push(W)
      }
      return S.callPlugins = function(e) {
        for (var a = 0; a < S._plugins.length; a++) e in S._plugins[a] && S._plugins[a][e](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5])
      }, S.emitterEventListeners = {}, S.emit = function(e) {
        S.params[e] && S.params[e](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
        var a;
        if (S.emitterEventListeners[e])
          for (a = 0; a < S.emitterEventListeners[e].length; a++) S.emitterEventListeners[e][a](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
        S.callPlugins && S.callPlugins(e, arguments[1], arguments[2], arguments[3], arguments[4], arguments[5])
      }, S.on = function(e, a) {
        return e = g(e), S.emitterEventListeners[e] || (S.emitterEventListeners[e] = []), S.emitterEventListeners[e].push(a), S
      }, S.off = function(e, a) {
        var t;
        if (e = g(e), "undefined" == typeof a) return S.emitterEventListeners[e] = [], S;
        if (S.emitterEventListeners[e] && 0 !== S.emitterEventListeners[e].length) {
          for (t = 0; t < S.emitterEventListeners[e].length; t++) S.emitterEventListeners[e][t] === a && S.emitterEventListeners[e].splice(t, 1);
          return S
        }
      }, S.once = function(e, a) {
        e = g(e);
        var t = function() {
          a(arguments[0], arguments[1], arguments[2], arguments[3], arguments[4]), S.off(e, t)
        };
        return S.on(e, t), S
      }, S.a11y = {
        makeFocusable: function(e) {
          return e.attr("tabIndex", "0"), e
        },
        addRole: function(e, a) {
          return e.attr("role", a), e
        },
        addLabel: function(e, a) {
          return e.attr("aria-label", a), e
        },
        disable: function(e) {
          return e.attr("aria-disabled", !0), e
        },
        enable: function(e) {
          return e.attr("aria-disabled", !1), e
        },
        onEnterKey: function(e) {
          13 === e.keyCode && (a(e.target).is(S.params.nextButton) ? (S.onClickNext(e), S.isEnd ? S.a11y.notify(S.params.lastSlideMessage) : S.a11y.notify(S.params.nextSlideMessage)) : a(e.target).is(S.params.prevButton) && (S.onClickPrev(e), S.isBeginning ? S.a11y.notify(S.params.firstSlideMessage) : S.a11y.notify(S.params.prevSlideMessage)), a(e.target).is("." + S.params.bulletClass) && a(e.target)[0].click())
        },
        liveRegion: a('<span class="' + S.params.notificationClass + '" aria-live="assertive" aria-atomic="true"></span>'),
        notify: function(e) {
          var a = S.a11y.liveRegion;
          0 !== a.length && (a.html(""), a.html(e))
        },
        init: function() {
          S.params.nextButton && S.nextButton && S.nextButton.length > 0 && (S.a11y.makeFocusable(S.nextButton), S.a11y.addRole(S.nextButton, "button"), S.a11y.addLabel(S.nextButton, S.params.nextSlideMessage)), S.params.prevButton && S.prevButton && S.prevButton.length > 0 && (S.a11y.makeFocusable(S.prevButton), S.a11y.addRole(S.prevButton, "button"), S.a11y.addLabel(S.prevButton, S.params.prevSlideMessage)), a(S.container).append(S.a11y.liveRegion)
        },
        initPagination: function() {
          S.params.pagination && S.params.paginationClickable && S.bullets && S.bullets.length && S.bullets.each(function() {
            var e = a(this);
            S.a11y.makeFocusable(e), S.a11y.addRole(e, "button"), S.a11y.addLabel(e, S.params.paginationBulletMessage.replace(/{{index}}/, e.index() + 1))
          })
        },
        destroy: function() {
          S.a11y.liveRegion && S.a11y.liveRegion.length > 0 && S.a11y.liveRegion.remove()
        }
      }, S.init = function() {
        S.params.loop && S.createLoop(), S.updateContainerSize(), S.updateSlidesSize(), S.updatePagination(), S.params.scrollbar && S.scrollbar && (S.scrollbar.set(), S.params.scrollbarDraggable && S.scrollbar.enableDraggable()), "slide" !== S.params.effect && S.effects[S.params.effect] && (S.params.loop || S.updateProgress(), S.effects[S.params.effect].setTranslate()), S.params.loop ? S.slideTo(S.params.initialSlide + S.loopedSlides, 0, S.params.runCallbacksOnInit) : (S.slideTo(S.params.initialSlide, 0, S.params.runCallbacksOnInit), 0 === S.params.initialSlide && (S.parallax && S.params.parallax && S.parallax.setTranslate(), S.lazy && S.params.lazyLoading && (S.lazy.load(), S.lazy.initialImageLoaded = !0))), S.attachEvents(), S.params.observer && S.support.observer && S.initObservers(), S.params.preloadImages && !S.params.lazyLoading && S.preloadImages(), S.params.zoom && S.zoom && S.zoom.init(), S.params.autoplay && S.startAutoplay(), S.params.keyboardControl && S.enableKeyboardControl && S.enableKeyboardControl(), S.params.mousewheelControl && S.enableMousewheelControl && S.enableMousewheelControl(), S.params.hashnavReplaceState && (S.params.replaceState = S.params.hashnavReplaceState), S.params.history && S.history && S.history.init(), S.params.hashnav && S.hashnav && S.hashnav.init(), S.params.a11y && S.a11y && S.a11y.init(), S.emit("onInit", S)
      }, S.cleanupStyles = function() {
        S.container.removeClass(S.classNames.join(" ")).removeAttr("style"), S.wrapper.removeAttr("style"), S.slides && S.slides.length && S.slides.removeClass([S.params.slideVisibleClass, S.params.slideActiveClass, S.params.slideNextClass, S.params.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-column").removeAttr("data-swiper-row"), S.paginationContainer && S.paginationContainer.length && S.paginationContainer.removeClass(S.params.paginationHiddenClass), S.bullets && S.bullets.length && S.bullets.removeClass(S.params.bulletActiveClass), S.params.prevButton && a(S.params.prevButton).removeClass(S.params.buttonDisabledClass), S.params.nextButton && a(S.params.nextButton).removeClass(S.params.buttonDisabledClass), S.params.scrollbar && S.scrollbar && (S.scrollbar.track && S.scrollbar.track.length && S.scrollbar.track.removeAttr("style"), S.scrollbar.drag && S.scrollbar.drag.length && S.scrollbar.drag.removeAttr("style"))
      }, S.destroy = function(e, a) {
        S.detachEvents(), S.stopAutoplay(), S.params.scrollbar && S.scrollbar && S.params.scrollbarDraggable && S.scrollbar.disableDraggable(), S.params.loop && S.destroyLoop(), a && S.cleanupStyles(), S.disconnectObservers(), S.params.zoom && S.zoom && S.zoom.destroy(), S.params.keyboardControl && S.disableKeyboardControl && S.disableKeyboardControl(), S.params.mousewheelControl && S.disableMousewheelControl && S.disableMousewheelControl(), S.params.a11y && S.a11y && S.a11y.destroy(), S.params.history && !S.params.replaceState && window.removeEventListener("popstate", S.history.setHistoryPopState), S.params.hashnav && S.hashnav && S.hashnav.destroy(), S.emit("onDestroy"), e !== !1 && (S = null)
      }, S.init(), S
    }
  };
  t.prototype = {
    isSafari: function() {
      var e = navigator.userAgent.toLowerCase();
      return e.indexOf("safari") >= 0 && e.indexOf("chrome") < 0 && e.indexOf("android") < 0
    }(),
    isUiWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(navigator.userAgent),
    isArray: function(e) {
      return "[object Array]" === Object.prototype.toString.apply(e)
    },
    browser: {
      ie: window.navigator.pointerEnabled || window.navigator.msPointerEnabled,
      ieTouch: window.navigator.msPointerEnabled && window.navigator.msMaxTouchPoints > 1 || window.navigator.pointerEnabled && window.navigator.maxTouchPoints > 1,
      lteIE9: function() {
        var e = document.createElement("div");
        return e.innerHTML = "<!--[if lte IE 9]><i></i><![endif]-->", 1 === e.getElementsByTagName("i").length
      }()
    },
    device: function() {
      var e = navigator.userAgent,
        a = e.match(/(Android);?[\s\/]+([\d.]+)?/),
        t = e.match(/(iPad).*OS\s([\d_]+)/),
        s = e.match(/(iPod)(.*OS\s([\d_]+))?/),
        i = !t && e.match(/(iPhone\sOS)\s([\d_]+)/);
      return {
        ios: t || i || s,
        android: a
      }
    }(),
    support: {
      touch: window.Modernizr && Modernizr.touch === !0 || function() {
        return !!("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch)
      }(),
      transforms3d: window.Modernizr && Modernizr.csstransforms3d === !0 || function() {
        var e = document.createElement("div").style;
        return "webkitPerspective" in e || "MozPerspective" in e || "OPerspective" in e || "MsPerspective" in e || "perspective" in e
      }(),
      flexbox: function() {
        for (var e = document.createElement("div").style, a = "alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient".split(" "), t = 0; t < a.length; t++)
          if (a[t] in e) return !0
      }(),
      observer: function() {
        return "MutationObserver" in window || "WebkitMutationObserver" in window
      }(),
      passiveListener: function() {
        var e = !1;
        try {
          var a = Object.defineProperty({}, "passive", {
            get: function() {
              e = !0
            }
          });
          window.addEventListener("testPassiveListener", null, a)
        } catch (e) {}
        return e
      }(),
      gestures: function() {
        return "ongesturestart" in window
      }()
    },
    plugins: {}
  };
  for (var s = (function() {
      var e = function(e) {
          var a = this,
            t = 0;
          for (t = 0; t < e.length; t++) a[t] = e[t];
          return a.length = e.length, this
        },
        a = function(a, t) {
          var s = [],
            i = 0;
          if (a && !t && a instanceof e) return a;
          if (a)
            if ("string" == typeof a) {
              var r, n, o = a.trim();
              if (o.indexOf("<") >= 0 && o.indexOf(">") >= 0) {
                var l = "div";
                for (0 === o.indexOf("<li") && (l = "ul"), 0 === o.indexOf("<tr") && (l = "tbody"), 0 !== o.indexOf("<td") && 0 !== o.indexOf("<th") || (l = "tr"), 0 === o.indexOf("<tbody") && (l = "table"), 0 === o.indexOf("<option") && (l = "select"), n = document.createElement(l), n.innerHTML = a, i = 0; i < n.childNodes.length; i++) s.push(n.childNodes[i])
              } else
                for (r = t || "#" !== a[0] || a.match(/[ .<>:~]/) ? (t || document).querySelectorAll(a) : [document.getElementById(a.split("#")[1])], i = 0; i < r.length; i++) r[i] && s.push(r[i])
            } else if (a.nodeType || a === window || a === document) s.push(a);
          else if (a.length > 0 && a[0].nodeType)
            for (i = 0; i < a.length; i++) s.push(a[i]);
          return new e(s)
        };
      return e.prototype = {
        addClass: function(e) {
          if ("undefined" == typeof e) return this;
          for (var a = e.split(" "), t = 0; t < a.length; t++)
            for (var s = 0; s < this.length; s++) this[s].classList.add(a[t]);
          return this
        },
        removeClass: function(e) {
          for (var a = e.split(" "), t = 0; t < a.length; t++)
            for (var s = 0; s < this.length; s++) this[s].classList.remove(a[t]);
          return this
        },
        hasClass: function(e) {
          return !!this[0] && this[0].classList.contains(e)
        },
        toggleClass: function(e) {
          for (var a = e.split(" "), t = 0; t < a.length; t++)
            for (var s = 0; s < this.length; s++) this[s].classList.toggle(a[t]);
          return this
        },
        attr: function(e, a) {
          if (1 === arguments.length && "string" == typeof e) return this[0] ? this[0].getAttribute(e) : void 0;
          for (var t = 0; t < this.length; t++)
            if (2 === arguments.length) this[t].setAttribute(e, a);
            else
              for (var s in e) this[t][s] = e[s], this[t].setAttribute(s, e[s]);
          return this
        },
        removeAttr: function(e) {
          for (var a = 0; a < this.length; a++) this[a].removeAttribute(e);
          return this
        },
        data: function(e, a) {
          if ("undefined" != typeof a) {
            for (var t = 0; t < this.length; t++) {
              var s = this[t];
              s.dom7ElementDataStorage || (s.dom7ElementDataStorage = {}), s.dom7ElementDataStorage[e] = a
            }
            return this
          }
          if (this[0]) {
            var i = this[0].getAttribute("data-" + e);
            return i ? i : this[0].dom7ElementDataStorage && e in this[0].dom7ElementDataStorage ? this[0].dom7ElementDataStorage[e] : void 0
          }
        },
        transform: function(e) {
          for (var a = 0; a < this.length; a++) {
            var t = this[a].style;
            t.webkitTransform = t.MsTransform = t.msTransform = t.MozTransform = t.OTransform = t.transform = e
          }
          return this
        },
        transition: function(e) {
          "string" != typeof e && (e += "ms");
          for (var a = 0; a < this.length; a++) {
            var t = this[a].style;
            t.webkitTransitionDuration = t.MsTransitionDuration = t.msTransitionDuration = t.MozTransitionDuration = t.OTransitionDuration = t.transitionDuration = e
          }
          return this
        },
        on: function(e, t, s, i) {
          function r(e) {
            var i = e.target;
            if (a(i).is(t)) s.call(i, e);
            else
              for (var r = a(i).parents(), n = 0; n < r.length; n++) a(r[n]).is(t) && s.call(r[n], e)
          }
          var n, o, l = e.split(" ");
          for (n = 0; n < this.length; n++)
            if ("function" == typeof t || t === !1)
              for ("function" == typeof t && (s = arguments[1], i = arguments[2] || !1), o = 0; o < l.length; o++) this[n].addEventListener(l[o], s, i);
            else
              for (o = 0; o < l.length; o++) this[n].dom7LiveListeners || (this[n].dom7LiveListeners = []), this[n].dom7LiveListeners.push({
                listener: s,
                liveListener: r
              }), this[n].addEventListener(l[o], r, i);
          return this
        },
        off: function(e, a, t, s) {
          for (var i = e.split(" "), r = 0; r < i.length; r++)
            for (var n = 0; n < this.length; n++)
              if ("function" == typeof a || a === !1) "function" == typeof a && (t = arguments[1], s = arguments[2] || !1), this[n].removeEventListener(i[r], t, s);
              else if (this[n].dom7LiveListeners)
            for (var o = 0; o < this[n].dom7LiveListeners.length; o++) this[n].dom7LiveListeners[o].listener === t && this[n].removeEventListener(i[r], this[n].dom7LiveListeners[o].liveListener, s);
          return this
        },
        once: function(e, a, t, s) {
          function i(n) {
            t(n), r.off(e, a, i, s)
          }
          var r = this;
          "function" == typeof a && (a = !1, t = arguments[1], s = arguments[2]), r.on(e, a, i, s)
        },
        trigger: function(e, a) {
          for (var t = 0; t < this.length; t++) {
            var s;
            try {
              s = new window.CustomEvent(e, {
                detail: a,
                bubbles: !0,
                cancelable: !0
              })
            } catch (t) {
              s = document.createEvent("Event"), s.initEvent(e, !0, !0), s.detail = a
            }
            this[t].dispatchEvent(s)
          }
          return this
        },
        transitionEnd: function(e) {
          function a(r) {
            if (r.target === this)
              for (e.call(this, r), t = 0; t < s.length; t++) i.off(s[t], a)
          }
          var t, s = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"],
            i = this;
          if (e)
            for (t = 0; t < s.length; t++) i.on(s[t], a);
          return this
        },
        width: function() {
          return this[0] === window ? window.innerWidth : this.length > 0 ? parseFloat(this.css("width")) : null
        },
        outerWidth: function(e) {
          return this.length > 0 ? e ? this[0].offsetWidth + parseFloat(this.css("margin-right")) + parseFloat(this.css("margin-left")) : this[0].offsetWidth : null
        },
        height: function() {
          return this[0] === window ? window.innerHeight : this.length > 0 ? parseFloat(this.css("height")) : null
        },
        outerHeight: function(e) {
          return this.length > 0 ? e ? this[0].offsetHeight + parseFloat(this.css("margin-top")) + parseFloat(this.css("margin-bottom")) : this[0].offsetHeight : null
        },
        offset: function() {
          if (this.length > 0) {
            var e = this[0],
              a = e.getBoundingClientRect(),
              t = document.body,
              s = e.clientTop || t.clientTop || 0,
              i = e.clientLeft || t.clientLeft || 0,
              r = window.pageYOffset || e.scrollTop,
              n = window.pageXOffset || e.scrollLeft;
            return {
              top: a.top + r - s,
              left: a.left + n - i
            }
          }
          return null
        },
        css: function(e, a) {
          var t;
          if (1 === arguments.length) {
            if ("string" != typeof e) {
              for (t = 0; t < this.length; t++)
                for (var s in e) this[t].style[s] = e[s];
              return this
            }
            if (this[0]) return window.getComputedStyle(this[0], null).getPropertyValue(e)
          }
          if (2 === arguments.length && "string" == typeof e) {
            for (t = 0; t < this.length; t++) this[t].style[e] = a;
            return this
          }
          return this
        },
        each: function(e) {
          for (var a = 0; a < this.length; a++) e.call(this[a], a, this[a]);
          return this
        },
        html: function(e) {
          if ("undefined" == typeof e) return this[0] ? this[0].innerHTML : void 0;
          for (var a = 0; a < this.length; a++) this[a].innerHTML = e;
          return this
        },
        text: function(e) {
          if ("undefined" == typeof e) return this[0] ? this[0].textContent.trim() : null;
          for (var a = 0; a < this.length; a++) this[a].textContent = e;
          return this
        },
        is: function(t) {
          if (!this[0]) return !1;
          var s, i;
          if ("string" == typeof t) {
            var r = this[0];
            if (r === document) return t === document;
            if (r === window) return t === window;
            if (r.matches) return r.matches(t);
            if (r.webkitMatchesSelector) return r.webkitMatchesSelector(t);
            if (r.mozMatchesSelector) return r.mozMatchesSelector(t);
            if (r.msMatchesSelector) return r.msMatchesSelector(t);
            for (s = a(t), i = 0; i < s.length; i++)
              if (s[i] === this[0]) return !0;
            return !1
          }
          if (t === document) return this[0] === document;
          if (t === window) return this[0] === window;
          if (t.nodeType || t instanceof e) {
            for (s = t.nodeType ? [t] : t, i = 0; i < s.length; i++)
              if (s[i] === this[0]) return !0;
            return !1
          }
          return !1
        },
        index: function() {
          if (this[0]) {
            for (var e = this[0], a = 0; null !== (e = e.previousSibling);) 1 === e.nodeType && a++;
            return a
          }
        },
        eq: function(a) {
          if ("undefined" == typeof a) return this;
          var t, s = this.length;
          return a > s - 1 ? new e([]) : a < 0 ? (t = s + a, new e(t < 0 ? [] : [this[t]])) : new e([this[a]])
        },
        append: function(a) {
          var t, s;
          for (t = 0; t < this.length; t++)
            if ("string" == typeof a) {
              var i = document.createElement("div");
              for (i.innerHTML = a; i.firstChild;) this[t].appendChild(i.firstChild)
            } else if (a instanceof e)
            for (s = 0; s < a.length; s++) this[t].appendChild(a[s]);
          else this[t].appendChild(a);
          return this
        },
        prepend: function(a) {
          var t, s;
          for (t = 0; t < this.length; t++)
            if ("string" == typeof a) {
              var i = document.createElement("div");
              for (i.innerHTML = a, s = i.childNodes.length - 1; s >= 0; s--) this[t].insertBefore(i.childNodes[s], this[t].childNodes[0])
            } else if (a instanceof e)
            for (s = 0; s < a.length; s++) this[t].insertBefore(a[s], this[t].childNodes[0]);
          else this[t].insertBefore(a, this[t].childNodes[0]);
          return this
        },
        insertBefore: function(e) {
          for (var t = a(e), s = 0; s < this.length; s++)
            if (1 === t.length) t[0].parentNode.insertBefore(this[s], t[0]);
            else if (t.length > 1)
            for (var i = 0; i < t.length; i++) t[i].parentNode.insertBefore(this[s].cloneNode(!0), t[i])
        },
        insertAfter: function(e) {
          for (var t = a(e), s = 0; s < this.length; s++)
            if (1 === t.length) t[0].parentNode.insertBefore(this[s], t[0].nextSibling);
            else if (t.length > 1)
            for (var i = 0; i < t.length; i++) t[i].parentNode.insertBefore(this[s].cloneNode(!0), t[i].nextSibling)
        },
        next: function(t) {
          return new e(this.length > 0 ? t ? this[0].nextElementSibling && a(this[0].nextElementSibling).is(t) ? [this[0].nextElementSibling] : [] : this[0].nextElementSibling ? [this[0].nextElementSibling] : [] : [])
        },
        nextAll: function(t) {
          var s = [],
            i = this[0];
          if (!i) return new e([]);
          for (; i.nextElementSibling;) {
            var r = i.nextElementSibling;
            t ? a(r).is(t) && s.push(r) : s.push(r), i = r
          }
          return new e(s)
        },
        prev: function(t) {
          return new e(this.length > 0 ? t ? this[0].previousElementSibling && a(this[0].previousElementSibling).is(t) ? [this[0].previousElementSibling] : [] : this[0].previousElementSibling ? [this[0].previousElementSibling] : [] : [])
        },
        prevAll: function(t) {
          var s = [],
            i = this[0];
          if (!i) return new e([]);
          for (; i.previousElementSibling;) {
            var r = i.previousElementSibling;
            t ? a(r).is(t) && s.push(r) : s.push(r), i = r
          }
          return new e(s)
        },
        parent: function(e) {
          for (var t = [], s = 0; s < this.length; s++) e ? a(this[s].parentNode).is(e) && t.push(this[s].parentNode) : t.push(this[s].parentNode);
          return a(a.unique(t))
        },
        parents: function(e) {
          for (var t = [], s = 0; s < this.length; s++)
            for (var i = this[s].parentNode; i;) e ? a(i).is(e) && t.push(i) : t.push(i), i = i.parentNode;
          return a(a.unique(t))
        },
        find: function(a) {
          for (var t = [], s = 0; s < this.length; s++)
            for (var i = this[s].querySelectorAll(a), r = 0; r < i.length; r++) t.push(i[r]);
          return new e(t)
        },
        children: function(t) {
          for (var s = [], i = 0; i < this.length; i++)
            for (var r = this[i].childNodes, n = 0; n < r.length; n++) t ? 1 === r[n].nodeType && a(r[n]).is(t) && s.push(r[n]) : 1 === r[n].nodeType && s.push(r[n]);
          return new e(a.unique(s))
        },
        remove: function() {
          for (var e = 0; e < this.length; e++) this[e].parentNode && this[e].parentNode.removeChild(this[e]);
          return this
        },
        add: function() {
          var e, t, s = this;
          for (e = 0; e < arguments.length; e++) {
            var i = a(arguments[e]);
            for (t = 0; t < i.length; t++) s[s.length] = i[t], s.length++
          }
          return s
        }
      }, a.fn = e.prototype, a.unique = function(e) {
        for (var a = [], t = 0; t < e.length; t++) a.indexOf(e[t]) === -1 && a.push(e[t]);
        return a
      }, a
    }()), i = ["jQuery", "Zepto", "Dom7"], r = 0; r < i.length; r++) window[i[r]] && e(window[i[r]]);
  var n;
  n = "undefined" == typeof s ? window.Dom7 || window.Zepto || window.jQuery : s, n && ("transitionEnd" in n.fn || (n.fn.transitionEnd = function(e) {
    function a(r) {
      if (r.target === this)
        for (e.call(this, r), t = 0; t < s.length; t++) i.off(s[t], a)
    }
    var t, s = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"],
      i = this;
    if (e)
      for (t = 0; t < s.length; t++) i.on(s[t], a);
    return this
  }), "transform" in n.fn || (n.fn.transform = function(e) {
    for (var a = 0; a < this.length; a++) {
      var t = this[a].style;
      t.webkitTransform = t.MsTransform = t.msTransform = t.MozTransform = t.OTransform = t.transform = e
    }
    return this
  }), "transition" in n.fn || (n.fn.transition = function(e) {
    "string" != typeof e && (e += "ms");
    for (var a = 0; a < this.length; a++) {
      var t = this[a].style;
      t.webkitTransitionDuration = t.MsTransitionDuration = t.msTransitionDuration = t.MozTransitionDuration = t.OTransitionDuration = t.transitionDuration = e
    }
    return this
  }), "outerWidth" in n.fn || (n.fn.outerWidth = function(e) {
    return this.length > 0 ? e ? this[0].offsetWidth + parseFloat(this.css("margin-right")) + parseFloat(this.css("margin-left")) : this[0].offsetWidth : null
  })), window.Swiper = t
}(), "undefined" != typeof module ? module.exports = window.Swiper : "function" == typeof define && define.amd && define([], function() {
  "use strict";
  return window.Swiper
});
//# sourceMappingURL=maps/swiper.min.js.map

/*------- Swiper Slider -------*/
var swiper = new Swiper('.swiper-container', {
  pagination: '.swiper-pagination',
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  paginationClickable: true,
  centeredSlides: true,
  autoplay: 3500,
  speed: 1500,
  loop: true,
  autoplayDisableOnInteraction: false
});






/* ========================================================================
 * ScrollPos-Styler v0.6
 * https://github.com/acch/scrollpos-styler
 * ========================================================================
 * Copyright 2015 Achim Christ
 * Licensed under MIT (https://github.com/acch/scrollpos-styler/blob/master/LICENSE)
 * ======================================================================== */

// JSHint directives
/* exported ScrollPosStyler */

var ScrollPosStyler = (function(document, window) {
  "use strict";

  /* ====================
   * private variables
   * ==================== */
  var scrollPosY = 0,
    busy = false,
    onTop = true,

    // toggle style / class when scrolling below this position (in px)
    scrollOffsetY = 1,

    // choose elements to apply style / class to
    elements = document.getElementsByClassName("sps");


  /* ====================
   * private funcion to check scroll position
   * ==================== */
  function onScroll() {
    // ensure that events don't stack
    if (!busy) {
      // get current scroll position from window
      scrollPosY = window.pageYOffset;

      // if we were above, and are now below scroll position...
      if (onTop && scrollPosY > scrollOffsetY) {
        // suspend accepting scroll events
        busy = true;

        // remember that we are below scroll position
        onTop = false;

        // asynchronuously add style / class to elements
        window.requestAnimationFrame(belowScrollPos);

        // if we were below, and are now above scroll position...
      } else if (!onTop && scrollPosY <= scrollOffsetY) {
        // suspend accepting scroll events
        busy = true;

        // remember that we are above scroll position
        onTop = true;

        // asynchronuously add style / class to elements
        window.requestAnimationFrame(aboveScrollPos);
      }
    }
  }


  /* ====================
   * private function to style elements when above scroll position
   * ==================== */
  function aboveScrollPos() {
    // iterate over elements
    // for (var elem of elements) {
    for (var i = 0; elements[i]; ++i) { // chrome workaround
      // add style / class to element
      elements[i].classList.add("sps--abv");
      elements[i].classList.remove("sps--blw");
    }

    // resume accepting scroll events
    busy = false;
  }

  /* ====================
   * private function to style elements when below scroll position
   * ==================== */
  function belowScrollPos() {
    // iterate over elements
    // for (var elem of elements) {
    for (var i = 0; elements[i]; ++i) { // chrome workaround
      // add style / class to element
      elements[i].classList.add("sps--blw");
      elements[i].classList.remove("sps--abv");
    }

    // resume accepting scroll events
    busy = false;
  }


  /* ====================
   * public function to initially style elements based on scroll position
   * ==================== */
  var pub = {
    init: function() {
      // suspend accepting scroll events
      busy = true;

      // get current scroll position from window
      scrollPosY = window.pageYOffset;

      // if we are below scroll position...
      if (scrollPosY > scrollOffsetY) {
        // remember that we are below scroll position
        onTop = false;

        // asynchronuously add style / class to elements
        window.requestAnimationFrame(belowScrollPos);

        // if we are above scroll position...
      } else { // (scrollPosY <= scrollOffsetY)
        // remember that we are above scroll position
        onTop = true;

        // asynchronuously add style / class to elements
        window.requestAnimationFrame(aboveScrollPos);
      }
    }
  };


  /* ====================
   * main initialization
   * ==================== */
  // add initial style / class to elements when DOM is ready
  document.addEventListener("DOMContentLoaded", function() {
    // defer initialization to allow browser to restore scroll position
    window.setTimeout(pub.init, 1);
  });

  // register for window scroll events
  window.addEventListener("scroll", onScroll);


  return pub;
})(document, window);

//**************************************************ALUMNI********************************************************************

window.addEventListener('load', function(){
  new Glider(document.querySelector('.glider'), {
    slidesToShow: 2,
    slidesToScroll: 1,
    duration: 1.5,
    rewind: true,
    draggable: true,
    dots: '.dots',
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    },
    responsive: [
    {

      breakpoint: 990,
      settings: {

        slidesToShow: 4,
        slidesToScroll: 1,
        duration: 1.5
      }
    },
    {
      breakpoint: 700,
      settings: {

        slidesToShow: 3,
        slidesToScroll: 1,
        duration: 1.5
    }
  },
  ]

  })
});
