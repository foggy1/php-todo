<template>
    <div :id="listTasks.id" class="outer-container list-group todos">
        <task  v-for="task in listTasks.tasks" :task="task" :listId="listTasks.id" :key="task.id" @remove="destroyTask"></task>
    </div>
</template>

<script>
    export default {
        props: ['list'],

        data(){
            return {
                listTasks: this.list
            }
        },

        created() {

        },

        methods: {
            destroyTask(task) {
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.ajax({
                  method: "DELETE",
                  url: "/list/" + this.listTasks.id + "/tasks/" + task.task.id,
              })
              .done(response => 
                  this.listTasks.tasks = this.listTasks.tasks.filter(oldTask=> oldTask.id !== task.task.id)
              )
              .fail(function(e){
                  console.log(e.responseText);
              })
            }
        }
    };
</script>