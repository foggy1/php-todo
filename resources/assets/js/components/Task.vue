<template>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <div class="input-group">
        <span class="input-group-addon">
          <input @change="update" v-model="task.status" type="checkbox" aria-label="...">
        </span>
      <input :class="{completed: isCompleted}" v-model="task.description" type="text" class="form-control" aria-label="..." :disabled="isCompleted">
    <span class="input-group-btn">
      <button @click="update" class="btn btn-warning" type="button">
        <i class="glyphicon glyphicon-pencil"></i>
      </button>
    </span>
    <span class="input-group-btn">
      <button v-show="isCompleted" @click="destroy" class="btn btn-danger" type="button">
        <i class="glyphicon glyphicon-remove"></i>
      </button>
    </span>
    </div>
  </div>
</template>

<script>
    export default {
        props: ['task', 'listId', 'key'],

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
            update(e) {
              if (e.target.type === "checkbox") {
                  this.isCompleted = !this.isCompleted;
                  var check = 'check';
              } else {
                var check = 'not check';
              };
              $.ajax({
                  method: "PUT",
                  url: "/list/" + this.listId + "/tasks/" + this.task.id,
                  data: {'task': this.task, 'check': check}
              })
              .done(function(response){
                // console.log(response)
              })
              .fail(function(e){
                  console.log(e.responseText);
              })
                 
            },
            destroy() {
              this.$emit('remove', this.task.id);
            }
        }
    };
</script>