// 書き方その１：createElementで要素を追加
//① まずquerySelector で 対象のinput要素を取得
/*代入してもOK
let createBtn = document.querySelector('#createBtn');
createBtn.addEventListener...*/
//② addEventListener で「クリックされたら〜...」というイベントを追加
document.querySelector("#createBtn").addEventListener("click", function () {
  //③ createElement を使って追加したい要素の名前を 文字列 で入れる。今回は li
  //④<li></li>を作る、この時点ではまだ中身は空です
  let item = document.createElement("li");
  //⑤ textContent で 「item」 という文字列を入れる
  //<li>item</li>となる
  item.textContent = "item";
  //⑥ ul タグの子要素である li に「item」を追加するという意味で、 ul.appendChild(item) と記述する
  let ul = document.querySelector("ul");
  ul.appendChild(item);
});

// 書き方その２：HTML要素のonclick属性を使って、JavaScript側から関数を作成する
//function createBtn2() {
const createBtn2 = () => {
  let item2 = document.createElement("li");
  item2.textContent = "item2";
  let ul = document.querySelector("ul");
  ul.appendChild(item2);
};

//onload()メソッドを使った関数の呼び出し
//HTMLファイルなどのリソースがすべて読み込まれたタイミングで、任意の関数を実行する
window.onload = function () {
  console.log("Hello World");
};
//イベント処理の記述方法でも同じことが実現できます。
window.addEventListener("load", function () {
  console.log("Hello World2");
});
