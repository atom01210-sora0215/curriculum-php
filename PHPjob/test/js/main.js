// //document.getElementsByName、nameで'box'要素を探す
// //('elem'は取得しない。＝コンソールに表示されない)
// let boxs = document.getElementsByName("box");
// for (let i = 0; i < boxs.length; i++) {
//   console.log(boxs[i]);
// }

// //document.getElementsByClassName、Class名から要素を取得
// let boxs2 = document.getElementsByClassName("box");
// //for文を使っても良いのですが、ここでは単純に一つずつ出力しています。
// console.log(boxs2[0]);
// console.log(boxs2[1]);
// console.log(boxs2[2]);

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
