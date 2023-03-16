Vue.component('pocket-money', {
    template: `<h1>{{ money }}円もらいました</h1>`,
    props: ['money']
})
var app = new Vue({
    el: '#app',
    data: {

    }
})