var app = new Vue({
    //delimiters: ['[[', ']]'],
    el: '#app',
    data: {
        counter: 0,
        unrelated: 0,
        isActive: false,
        color: "",
    },
    
    //算出プロパティ
    computed: {
        lessThanThree: function() {
            console.log('算出プロパティのlessThanThree起動');
            return this.counter > 3 ? '3以上' : '3以下';
        },
        customColor: function() {
            return this.color.toUpperCase();
        }
    },
    
    //メソッド
    methods: {
        counterBtn: function() {
            this.counter++;
        },

        lessThanThreeMethod: function() {
            console.log('メソッドのlessThanThreeMethod起動');
            return this.counter > 3 ? '3以上' : '3以下';
        },

        unrelatedBtn: function() {
            this.unrelated++;
        },

        active: function(){
            this.isActive = !this.isActive
        }
    }
});