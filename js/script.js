console.log('Vue on', Vue)

const { createApp } = Vue;

const endpoint = 'http://localhost:8888/boolean/php-todo-list-json/api/index.php/';

const app = createApp({
    data: () => ({
        tasks: []
    }),
    methods: {
        addTask() {
            const data = { task: this.newTask }
            const config = {
                params: { new: 'PHP' },
                headers: { 'Content-Type': 'multipart/form-data' }
            }
            axios.post(endpoint, data, config).then(res => {
                this.tasks = res.data;
                this.newTask = '';
            })
        }
    },
    created() {
        axios.get(endpoint).then(res => {
            this.tasks = res.data;
        })
    }
})

app.mount('#app');