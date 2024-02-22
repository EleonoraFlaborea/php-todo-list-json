console.log('Vue on', Vue)

const { createApp } = Vue;

const app = createApp({
    data: () => ({
        tasks: ["HTML", "CSS", "Responsive design", "Javascript"]


    })
})

app.mount('#app');