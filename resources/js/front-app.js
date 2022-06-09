require ('/bootstrap');

windows.axios = require('axios');
windows.axios.get('https://127.0.0.1:8000/api/posts').then(result=>{
    console.log(results);
}).catch(e=>{
    console.log(e);
})

windows.Vue = require('vue');

AppComponent = require('./AppComponent.vue').default

const app = new Vue({
    el: '#app',
    render: (h)=> h(AppComponent)
});
