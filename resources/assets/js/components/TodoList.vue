<template>
    <div :id="list.id" class="outer-container list-group todos">
        <task v-for="task in tasks" :task="task" :listId="list.id"></task>
    </div>
</template>

<script>
    export default {
        props: ['list', 'tasks'],

        data(){
            return {
            }
        },

        created() {

        },

        methods: {
            isCompleted() {

            }
        }
    };
</script>