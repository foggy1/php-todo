<template>
  <div :id="task.id" class="input-group input-group-lg checkbox">
          <span style="width:100%;" class="input-group-addon">
          
          <label :class="{completed: task.status}"><input @change="update" type="checkbox" value="" v-model="task.status">{{ task.description }}</label>
          </span>
          <span class="input-group-btn">
            <button class="btn btn-warning" type="button">
              <i class="glyphicon glyphicon-pencil"></i>
            </button>
          </span>
          <span class="input-group-btn">
            <button class="btn btn-danger" type="button">
              <i class="glyphicon glyphicon-remove"></i>
            </button>
          </span>
  </div>
</template>

<script>
    export default {
        props: ['task', 'listId'],

        data(){
            return {
            }
        },

        created() {

        },

        computed: {
            isCompleted() {
                return this.task.status === 1
            }
        },

        methods: {
            toggle() {
              debugger;
                this.task.status === 1 ? this.task.status = 0 : this.task.status = 1
            },
            update() {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.ajax({
                  method: "PUT",
                  url: "/list/" + this.listId + "/tasks/" + this.task.id,
                  data: {'task': this.task}
              })
              .done(function(response){
              })
              .fail(function(e){
                  console.log(e.responseText);
              })
                 
            }
        }
    };
</script>