// ---------Responsive-navbar-active-animation-----------
function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px",
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px",
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});




// Add active class on another page linked
// ==========================================
// $(window).on('load',function () {
//     var current = location.pathname;
//     console.log(current);
//     $('#navbarSupportedContent ul li a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.parent().addClass('active');
//             $this.parents('.menu-submenu').addClass('show-dropdown');
//             $this.parents('.menu-submenu').parent().addClass('active');
//         }else{
//             $this.parent().removeClass('active');
//         }
//     })
// });

/**
 *  Utility functions
 */
function utils() {
    /**
     * Returns max height value for a nodelist
     * @param {NodeList} nodeList The node list to calculate max height of
     */
    const calcMaxHeight = function (items) {
        let maxHeight = 0;

        items.forEach(item => {
            const h = item.clientHeight;
            maxHeight = h > maxHeight ? h : maxHeight;
        });
        return maxHeight;
    }

    /**
     * Removes Classes from NodeList
     * @param {NodeList} nodeList The node list to remove classes from
     * @param {Array} cssClasses Array of CSS classes to be removed
     */
    function removeClasses(nodeList, cssClasses) {
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].classList.remove(...cssClasses);
        }
    }

    /**
     * Adds Classes from NodeList
     * @param {NodeList} nodeList The node list to add classes to
     * @param {Array} cssClasses Array of CSS classes to be added
     */
    function addClasses(nodeList, cssClasses) {
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].classList.add(...cssClasses);
        }
    }

    /**
     * Behaves the same as setInterval except uses requestAnimationFrame() where possible for better performance
     * @param {function} fn The callback function
     * @param {int} delay The delay in milliseconds
     */
    const requestInterval = function (fn, delay) {
        const requestAnimFrame = (function () {
            return window.requestAnimationFrame || function (callback, element) {
                window.setTimeout(callback, 1000 / 60);
            };
        })();

        let start = new Date().getTime(),
            handle = {};

        function loop() {
            const current = new Date().getTime(),
                delta = current - start;

            if (delta >= delay) {
                fn.call();
                start = new Date().getTime();
            }

            handle.value = requestAnimFrame(loop);
        }

        handle.value = requestAnimFrame(loop);
        return handle;
    };

    /**
     * Behaves the same as clearInterval except uses cancelRequestAnimationFrame() where possible for better performance
     * @param {int|object} handle The callback function
     */
    const clearRequestInterval = function (handle) {
        window.cancelAnimationFrame ? window.cancelAnimationFrame(handle.value) :
            clearInterval(handle);
    };

    return {
        calcMaxHeight,
        removeClasses,
        addClasses,
        requestInterval,
        clearRequestInterval
    }
}


/**
 *  Main Slider function
 */
function heroSlider() {
    const slider = {
        hero: document.querySelector('#hero-slider'),
        main: document.querySelector('#slides-main'),
        aux: document.querySelector('#slides-aux'),
        current: document.querySelector('#slider-nav .current'),
        handle: null,
        idle: true,
        activeIndex: -1,
        interval: 3500
    };

    const setHeight = function (holder, items) {
        const h = utils().calcMaxHeight(items);
        holder.style.height = `${h}px`;
    }

    const leadingZero = function () {
        return arguments[1] < 10 ? '0' + arguments[1] : arguments[1];
    }

    const setCurrent = function () {
        slider.current.innerText = leadingZero `${slider.activeIndex + 1}`;
    }

    const changeSlide = function (direction) {
        slider.idle = false;
        slider.hero.classList.remove('prev', 'next');
        if (direction == 'next') {
            slider.activeIndex = (slider.activeIndex + 1) % slider.total;
            slider.hero.classList.add('next');
        } else {
            slider.activeIndex = (slider.activeIndex - 1 + slider.total) % slider.total;
            slider.hero.classList.add('prev');
        }

        //reset classes
        utils().removeClasses(slider.items, ['prev', 'active']);

        //set prev
        const prevItems = [...slider.items]
            .filter(item => {
                let prevIndex;
                if (slider.hero.classList.contains('prev')) {
                    prevIndex = slider.activeIndex == slider.total - 1 ? 0 : slider.activeIndex + 1;
                } else {
                    prevIndex = slider.activeIndex == 0 ? slider.total - 1 : slider.activeIndex - 1;
                }

                return item.dataset.index == prevIndex;
            });

        //set active
        const activeItems = [...slider.items]
            .filter(item => {
                return item.dataset.index == slider.activeIndex;
            });

        utils().addClasses(prevItems, ['prev']);
        utils().addClasses(activeItems, ['active']);
        setCurrent();

        const activeImageItem = slider.main.querySelector('.active');
        activeImageItem.addEventListener('transitionend', waitForIdle, {
            once: true
        });
    }

    const stopAutoplay = function () {
        slider.autoplay = false;
        utils().clearRequestInterval(slider.handle);
    }

    const waitForIdle = function () {
        !slider.autoplay && autoplay(false); //restart
        slider.idle = true;
    }

    const wheelControl = function () {
        slider.hero.addEventListener('wheel', e => {
            if (slider.idle) {
                const direction = e.deltaY > 0 ? 'next' : 'prev';
                stopAutoplay();
                changeSlide(direction);
            }
        });
    }

    const autoplay = function (initial) {
        slider.autoplay = true;
        slider.items = slider.hero.querySelectorAll('[data-index]');
        slider.total = slider.items.length / 2;

        const loop = () => changeSlide('next');

        initial && requestAnimationFrame(loop);
        slider.handle = utils().requestInterval(loop, slider.interval);
    }

    const loaded = function () {
        slider.hero.classList.add('loaded');
    }

    const touchControl = function () {
        const touchStart = function (e) {
            slider.ts = parseInt(e.changedTouches[0].clientX);
            window.scrollTop = 0;
        }

        const touchMove = function (e) {
            slider.tm = parseInt(e.changedTouches[0].clientX);
            const delta = slider.tm - slider.ts;
            window.scrollTop = 0;

            if (slider.idle) {
                const direction = delta < 0 ? 'next' : 'prev';
                stopAutoplay();
                changeSlide(direction);
            }
        }

        slider.hero.addEventListener('touchstart', touchStart);
        slider.hero.addEventListener('touchmove', touchMove);
    }

    const start = function () {
        autoplay(true);
        wheelControl();
        window.innerWidth <= 1024 && touchControl();
        slider.aux.addEventListener('transitionend', loaded, {
            once: true
        });
    }

    const loadingAnimation = function () {
        slider.hero.classList.add('ready');
        slider.current.addEventListener('transitionend', start, {
            once: true
        });
    }

    const init = function () {
        setHeight(slider.aux, slider.aux.querySelectorAll('.slide-title'));
        loadingAnimation();
    }

    const resize = function () {
        setHeight(slider.aux, slider.aux.querySelectorAll('.slide-title'));
    }

    return {
        init,
        resize
    }
}

window.addEventListener('load', heroSlider().init);
window.addEventListener("resize", heroSlider().resize);

// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}