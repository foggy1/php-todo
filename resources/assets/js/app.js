
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".todos").on("click", "input", function(e) {
        var id = Number(e.target.id);
        var list_id = Number(e.target.closest(".todos").id);
        $.ajax({
            method: "PUT",
            url: "/list/" + list_id + "/tasks/" + id
        })
        .done(function(response){
            debugger;
        })
        .fail(function(e){
            console.log(e.responseText);
        })
    });
});
