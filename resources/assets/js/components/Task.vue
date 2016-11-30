<template>
  <div :id="task.id" class="input-group input-group-lg checkbox">
          <span style="width:100%;" class="input-group-addon">
          
          <label :class="{completed: task.status}"><input type="checkbox" value="" v-model="task.status">{{ task.description }}</label>
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

        },

        methods: {

        }
    };
</script>