<template>
  <div class="row">
    <div class="col-lg-6">
      <div class="input-group">
        <input v-model="task.description" type="text" class="form-control" aria-label="...">
        <span class="input-group-btn">
          <button @click="store" class="btn btn-success" type="button">
            <i class="glyphicon glyphicon-pencil"></i>
          </button>
        </span>
    </div>
  </div>
</template>

<script>
    export default {
        props: ['listId'],
        data(){
            return {
              task: {
                description: '',
                todo_list_id: this.listId
              }
            }
        },

        mounted() {

        },

        computed: {

        },

        methods: {
            store() {
              this.$emit('add', this.task);
              this.task.description = '';
            }
        }
    };
</script>