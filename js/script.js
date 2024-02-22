console.log('Vue on', Vue)

const { createApp } = Vue;

const endpoint = 'http://localhost:8888/boolean/php-todo-list-json/api/index.php/';

const app = createApp({
    data: () => ({
        tasks: []
    }),
    created() {
        axios.get(endpoint).then(res => {
            this.tasks = res.data;
        })
    }
})

app.mount('#app');