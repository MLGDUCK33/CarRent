/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

});

function scrollBanner() {
    var scrollPos;
    var headerText = document.querySelector('.caption');
    scrollPos = window.scrollY;

    if (scrollPos <= 600) {
        headerText.style.transform = "translateY(" + (scrollPos / 3) + "px" + ")";
        headerText.style.opacity = 1 + (scrollPos / 600);
    }
}

$(document).ready(function () {
    AOS.init();
    $("#testimonial-slider").owlCarousel({
        items: 3,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        },
    });
    $("#featured-slider").owlCarousel({
        items: 1,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3,
                loop: false
            }
        }
    });

});


window.addEventListener('scroll', scrollBanner);
