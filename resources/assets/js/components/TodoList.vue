<template>
    <div :id="listId" class="outer-container list-group todos">
        <task  v-for="task in tasks" :task="task" :listId="listId" :key="task.id" @remove="destroyTask"></task>
    </div>
</template>

<script>
    export default {
        props: ['list'],

        data(){
            return {
                tasks: this.list.tasks.reverse(),
                listId: this.list.id
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
                  url: "/list/" + this.listId + "/tasks/" + task.task.id,
              })
              .done(response => 
                  this.tasks = this.tasks.filter(oldTask=> oldTask.id !== task.task.id)
              )
              .fail(function(e){
                  console.log(e.responseText);
              })
            }
        }
    };
</script>