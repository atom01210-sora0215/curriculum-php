Vue.component('count-component', {
    template: `<button v-on:click="countBtn">+1</button>`,
    methods: {
        countBtn: function() {
            this.$emit('increment')
        }
    }
})
var app = new Vue({
    el:'#app',
    data: {
        total: 0
    },
    methods: {
        incrementTotal: function() {
            this.total++;
        }
    }
})