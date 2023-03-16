Vue.component('alert-component', {
    template: `
    <div class="alert" v-on:click="caution">
        アラート！
    </div>
    `,
    methods: {
        caution: function() {
            alert('クリックされました');
        }
    }
});
var app = new Vue({
    el: '#app',
    data: {
    },
    //ここにコンポーネントを書いていく
    components: {
        'hello-world': {
            template: '<h1>Hello World</h1>'
        }
    }
});

//グローバルの作り方
Vue.component('hello-global', {
    template: `<h1>グローバルのコンポーネント</h1>`
})
var app1 = new Vue({
    el:'#app1',
    data: {

    }
})
//ローカルの作り方
var app2 = new Vue({
    el: '#app2',
    components: {
        'hello-local': {
            template: `<h1>ローカルのコンポーネント</h1>`
        }
    }
})