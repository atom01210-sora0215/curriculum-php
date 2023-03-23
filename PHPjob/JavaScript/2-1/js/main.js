//document.body.textContent = 'hello';
document.title = "JavaScript2-1";
//windowオブジェクトの中身をconsole.logで確認してみます。
console.log(window);

//①location.hrefでURLを取得して、変数urlに代入。
let url = window.location.href;
//②ブラウザを更新すると、URLが表示されます。
console.log(url);

//「 ボタンがクリックされたら、文字を変える 」
//function myfunc() {
const myfunc = () => {
  // ②idが「target」の要素を取得して、③変数changeに代入
  let change = document.getElementById("target");

  // ④textContentを使って「こんにちは」で書き変える
  change.textContent = "こんにちは!";
};

//document.getElementsByTagNameはタグを指定して要素を取得
//h1のタグを持っている要素を全て取得して、変数elemsに代入します。
//この時「 NodeList 」という配列に似た形で取得できます。
//厳密には配列ではないのですが、同じように添字（インデックス）を指定してアクセスすることができます。
let elems = document.getElementsByTagName("h1");
//HTMLを上から順番に探した時に、最初に見つかったh1タグが0番目の要素として取得できます。
console.log(elems[0]);
console.log(elems[1]);
// 表示結果
// <h1>Hello World!</h1>
// <h1>こんにちは！</h1>;

//document.getElementsByName、nameで'box'要素を探す
//('elem'は取得しない。＝コンソールに表示されない)
let boxs = document.getElementsByName("box");
for (let i = 0; i < boxs.length; i++) {
  console.log(boxs[i]);
}
// 表示結果
// <div name="box">BOX1</div>
// <div name="box">BOX2</div>
// <div name="box">BOX3</div>

//document.getElementsByClassName、Class名から要素を取得
let boxs2 = document.getElementsByClassName("box");
//for文を使っても良いのですが、ここでは単純に一つずつ出力しています。
console.log(boxs2[0]);
console.log(boxs2[1]);
console.log(boxs2[2]);
// 表示結果
// <div class="box">BOX1</div>
// <div class="box">BOX2</div>
// <div class="box">BOX3</div>

/*--colorBox--*/
//getElementsByClassNameはそのままでは正しく出力できません。
//すべてを出力するためにはfor文で回して出力します。
//「getElementsBy」は HTMLCollection（HTMLコレクション） を取得
//「HTMLCollection」はリアルタイム更新(常に最新の状態を取得したい要素に使用)
let boxBtn = document.getElementsByClassName("boxBtn");
console.log(boxBtn);
for (i = 0; i < boxBtn.length; i++) {
  boxBtn[i].addEventListener("click", function () {
    this.classList.toggle("isActive");
  });
}
