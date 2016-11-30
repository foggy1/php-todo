<template>
  <div :id="task.id" class="input-group input-group-lg checkbox">
          <span style="width:100%;" class="input-group-addon">
          
          <label :class="{completed: isCompleted}"><input @change="update" type="checkbox" value="" v-model="task.status">{{ task.description }}</label>
          </span>
          <span class="input-group-btn">
            <button class="btn btn-warning" type="button">
              <i class="glyphicon glyphicon-pencil"></i>
            </button>
          </span>
          <span class="input-group-btn">
            <button v-show="isCompleted" @click="destroy" class="btn btn-danger" type="button">
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
              isCompleted: this.task.status === 1
            }
        },

        mounted() {

        },

        computed: {

        },

        methods: {
            update() {
              this.isCompleted = !this.isCompleted
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
                 
            },
            destroy() {
              this.$parent.destroyTask(this);
            }
        }
    };
</script>