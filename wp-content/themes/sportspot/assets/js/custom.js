/**
 * Custom JS for theme elements
 */

/**
 *
 *  ADDED DELAY TO LIST ITEMS
 *
 */


let sportSpottime = 0.1;

let sportSpotcontent = document.querySelectorAll('.wp-block-navigation__container,.wp-block-page-list');
sportSpotcontent.forEach((item) => {
  let sportSpotfirstChild = item.childNodes /* Target every single child node of content element */
  sportSpotfirstChild.forEach(item => {
    let sportSpotlastChild = item.lastChild;
    let sportSpotul = 'wp-block-navigation__submenu-container';
    if (sportSpotlastChild.classList.contains(sportSpotul)) {   /* Check whether last child contains ul or not */
      sportSpotlastChild.classList.add('main-list')
      let sportSpotnestedChild = sportSpotlastChild.children;
      Array.from(sportSpotnestedChild).forEach((item, index) => {
        item.setAttribute("style", `transition-delay: ${sportSpottime * index}s`);
      })
    }
  })
})


// SHOW SEARCH FOR WHILE CLICK SEARCH ICON

const sportSpotsearchInput = document.querySelector('.right-section .search-product input[type="search"]');
const sportSpotmobileIcon = document.querySelector('.wp-mobile-icon-menu');
const sportSpotsearchCont = document.querySelectorAll('.right-section');
const sportSpotsearchDummy = document.querySelector('.dummy-icon .wp-block-search__button');
const sportSpotsearchWrap = document.querySelector('.right-section .search-product');
const sportSpotShowHandler = (e) => {
  e.preventDefault();
  let sportSpotbody = document.body;
  sportSpotbody.classList.toggle('search-toggle');
}
if (sportSpotsearchCont !== null) {
  sportSpotsearchCont.forEach((item) => {
    let sportSpotsearchBtn = document.querySelectorAll('.dummy-icon .wp-block-search__button')
    sportSpotsearchBtn.forEach((btn) => {
      btn.addEventListener('click', sportSpotShowHandler)
    })
  })
  if (sportSpotmobileIcon !== null && sportSpotsearchDummy !== null && sportSpotsearchWrap !== null) {
    document.addEventListener('click', function (e) {
      if (!sportSpotsearchWrap.contains(e.target) && !sportSpotsearchDummy.contains(e.target) && !sportSpotmobileIcon.contains(e.target)) {
        let sportSpotbody = document.body;
        sportSpotbody.classList.remove('search-toggle')

      }
    }
    )
  }
}

window.addEventListener('load', function () {
  let sportSpotheaderImage = document.querySelector('.header-image');
  if (sportSpotheaderImage !== null) {
    sportSpotheaderImage.setAttribute('style', `transform: translateX(0)`)
    sportSpotheaderImage.style.opacity = 1
    let sportSpotmediaTitles = document.querySelectorAll('.media-content .wp-block-heading')
    let sportSpotmediaContent = document.querySelector('.media-content p')
    let sportSpotmediaButtons = document.querySelectorAll('.media-content .wp-block-button')
    sportSpotmediaButtons.forEach((button) => {
      button.setAttribute('style', `transform: translateY(0)`)
      button.style.opacity = 1;
      button.style.clipPath = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)'

    })
    sportSpotmediaContent.setAttribute('style', `transform: translateY(0)`)
    sportSpotmediaContent.style.opacity = 1;
    sportSpotmediaContent.style.clipPath = 'polygon(0 0, 100% 0, 99% 100%, 0 100%)'
    sportSpotmediaTitles.forEach((title) => {
      title.setAttribute('style', `transform: translateY(0)`)
      title.style.opacity = 1;
      title.style.clipPath = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)'

    })
  }
})

/**
 * Scroll to JS for scroll and drag  horizontal on scroller sections
 *
 *
 */

const sportSpotSellerSection = document.querySelectorAll(".best-seller-price-section .wc-block-grid__products");

if (sportSpotSellerSection !== null) {
  let sportSpotisDown = false;
  let sportSpotstartX;
  let sportSpotscrollLeft;
  sportSpotSellerSection.forEach((item) => {


    item.addEventListener("mousedown", (e) => {
      sportSpotisDown = true;
      item.classList.add("active");
      sportSpotstartX = e.pageX - item.offsetLeft;
      sportSpotscrollLeft = item.scrollLeft;
    });
    item.addEventListener("mouseleave", () => {
      sportSpotisDown = false;
      item.classList.remove("active");
    });
    item.addEventListener("mouseup", () => {
      sportSpotisDown = false;
      item.classList.remove("active");
    });
    item.addEventListener("mousemove", (e) => {
      if (!sportSpotisDown) return;

      e.preventDefault();

      let sportSpotsportSpotx = e.pageX - item.offsetLeft;
      let sportSpotwalk = (sportSpotsportSpotx - sportSpotstartX) * 3; //scroll-fast

      item.scrollLeft = sportSpotscrollLeft - sportSpotwalk;
    });
  })
}


/**
 *
 *  CREATE ELEMENT DIV TO WRAP EXISTING ELEM
 *
 */


window.addEventListener('DOMContentLoaded', function () {

  let sportSpotdivWrapper = document.querySelector('.tnp-subscription-minimal form');

  if (sportSpotdivWrapper !== null) {
    let sportSpotappendIcon = document.querySelector('.tnp-subscription-minimal .tnp-submit');
    let sportSpotnewElem = document.createElement('div')
    sportSpotnewElem.classList.add('input-wrap');
    sportSpotdivWrapper.appendChild(sportSpotnewElem)
  }
})


/**
 *
 *  ADD CLASS WHILE SECTION IS IN VIEWPORT
 *
 */

let sportSpotisInViewport = function (elem) {
  let sportSpotdistance = elem.getBoundingClientRect();
  let sportSpotwindowHeight = window.innerHeight || document.documentElement.clientHeight;
  // Calculate the middle of the element
  let sportSpotelementMiddle = sportSpotdistance.top + sportSpotdistance.height / 5 || sportSpotdistance.top + sportSpotdistance.height / 2;
  return (
    sportSpotelementMiddle >= 0 &&
    sportSpotelementMiddle <= sportSpotwindowHeight
  );
};
let sportSpotsections = document.querySelectorAll('.wp-block-section');
if (sportSpotsections !== null) {
  window.addEventListener('scroll', function (event) {
    // add event on scroll
    sportSpotsections.forEach(element => {
      //for each .thisisatest
      if (sportSpotisInViewport(element)) {
        //if in Viewport
        element.classList.add("transition-element");
      }
    });
  }, false);
}

/**
 *
 *  Image Move while mouseMove
 *
 */

let sportSpotpromoSection = document.querySelector('.promotional-section')
if (sportSpotpromoSection !== null) {
  sportSpotpromoSection.addEventListener('mousemove', function (e) {
    let sportSpotxValue = e.clientX;
    let sportSpotyValue = e.clientY;
    let sportSpotpromoImage = document.querySelector('.promo-image img');
    sportSpotpromoImage.style.transform = `translate(-${sportSpotxValue / 50}px, -${sportSpotyValue / 50}px)`

  })
}


/*
*
*
// SHOW TRANSPARENT HEADER WHILE SCROLL UP
*
*/

const sportSpotheader = document.querySelector('.wp-mobile-icon-menu');
if (sportSpotheader !== null) {
  // Variable to store the previous scroll position
  let sportSpotpreviousScrollPos = window.pageYOffset || document.documentElement.scrollTop;

  // Function to check the scroll direction
  function handleScroll() {
    if (window.innerWidth < 1200) {
      const sportSpotcurrentScrollPos = window.pageYOffset || document.documentElement.scrollTop;

      if (sportSpotcurrentScrollPos <= sportSpotpreviousScrollPos) {
        // Scrolling up
        sportSpotheader.style.transform = 'none';
      } else {
        // Scrolling down or no movement
        sportSpotheader.style.transform = 'translateY(100%)';
      }

      // Update the previous scroll position
      sportSpotpreviousScrollPos = sportSpotcurrentScrollPos;
    } else {
      sportSpotheader.style.transform = 'none';
    }

    // Listen for the scroll event
  }
}

window.addEventListener('scroll', handleScroll);
window.addEventListener('load', handleScroll);
window.addEventListener('resize', handleScroll);

const sportSpotcalculateHeight = () => {
  let sportSpottransparentHeader = document.querySelectorAll('.transparent-header');
  let sportSpotbannerOffset = document.querySelector('.banner .wp-block-cover');
  if (sportSpotbannerOffset !== null) {
    sportSpottransparentHeader.forEach((absHeader) => {
      let sportSpottransparentHeaderHeight = absHeader.clientHeight;
      sportSpotbannerOffset.setAttribute('style', `padding-top: ${sportSpottransparentHeaderHeight}px`);
    })
  }
};


window.addEventListener('resize', sportSpotcalculateHeight)
window.addEventListener('load', sportSpotcalculateHeight())