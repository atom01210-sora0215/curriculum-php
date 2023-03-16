var app = new Vue({
    el: '#app',
    data: {
        list: [
            // {text: 'サンプル1'},
            // {text: 'サンプル2'},
            // {text: 'サンプル3'},
        ],
        addText: '',
    },
    //watchでlistの変更を監視
    watch: {
        list: {
            handler: function() {
                //localStorageにデータを保存
                localStorage.setItem("list", JSON.stringify(this.list));
            },
            deep: true
        }
    },
    //マウントされた時にlocalStorageからデータを取得
    mounted: function() {
        this.list = JSON.parse(localStorage.getItem("list")) || [];
    },
    methods: {
        addToDo: function() {
			//if文で分岐
			if (this.addText !== '') {
                this.list.push({
                    text: this.addText,
                    isChecked: false,
                });
			}
            this.addText = '';
        },
        deleteBtn: function() {
            this.list = this.list.filter(function(todo) {
                return !todo.isChecked;
            });
        }
    }
});
