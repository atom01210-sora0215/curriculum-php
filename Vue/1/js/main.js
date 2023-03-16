var app = new Vue({
    el: "#app",
    data: {
        item1: '',
        item2: ''
    },
    computed: {
        total: function() {
            return Number(this.item1) + Number(this.item2);
        }
    }
});
