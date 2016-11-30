<template>
    <div :id="listy.id" class="outer-container list-group todos">
        <task v-for="task in tasky" :task="task" :listId="listy.id"></task>
    </div>
</template>

<script>
    export default {
        props: ['list', 'tasks'],

        data(){
            return {
                listy: this.list,
                tasky: this.tasks
            }
        },

        created() {

        },

        methods: {
            destroyTask(task) {
            Vue.delete(this.tasky, task.task); 
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.ajax({
                  method: "DELETE",
                  url: "/list/" + this.list.id + "/tasks/" + task.task.id,
              })
              .done(function(response) {

              })
              .fail(function(e){
                  console.log(e.responseText);
              })
            }
        }
    };
</script>