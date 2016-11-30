
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
Vue.component('todo-list', require('./components/TodoList.vue'));
Vue.component('task', require('./components/Task.vue'));

const app = new Vue({
    el: '#app'
});

$(function() {
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    // $(".todos").on("click", "input", function(e) {
    //     var id = Number(e.target.closest(".checkbox").id);
    //     var list_id = Number(e.target.closest(".todos").id);
    //     var that = e.target;
    //     $.ajax({
    //         method: "PUT",
    //         url: "/list/" + list_id + "/tasks/" + id
    //     })
    //     .done(function(response){
    //         response === "1" ? $(that).parent("label").css("text-decoration", "line-through") : $(that).parent("label").css("text-decoration", "none");
    //     })
    //     .fail(function(e){
    //         console.log(e.responseText);
    //     })
    // });
});
