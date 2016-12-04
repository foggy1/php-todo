<template>
    <div :id="listId" class="outer-container list-group todos">
        <task-maker :listId="listId" @add="addTask"></task-maker>
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
            destroyTask(taskId) {

              $.ajax({
                  method: "DELETE",
                  url: "/list/" + this.listId + "/tasks/" + taskId,
              })
              .done(response => {
                  this.tasks = response.reverse();
                }
              )
              .fail(function(e){
                  console.log(e.responseText);
              })
            },
            addTask(task) {
              $.ajax({
                  method: "POST",
                  url: "/list/" + this.listId + "/tasks/",
                  data: {'task': task}
              })
              .done(response => {
                  this.tasks = response.reverse();
              }
              )
              .fail(function(e){
                  console.log(e.responseText);
              })

            }
        }
    };
</script>