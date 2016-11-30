<template>
  <div :id="task.id" class="input-group input-group-lg checkbox">
          <span style="width:100%;" class="input-group-addon">
          
          <label :class="{completed: isCompleted}"><input type="checkbox" value="" :checked="isCompleted">{{ task.description }}</label>
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
        props: ['task'],

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

        }
    };
</script>