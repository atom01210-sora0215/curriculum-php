//最初に出てきた1件だけ取得。（for文も不可）
//document.querySelector(.クラス名) を使用して取得
/* let box = document.querySelector('.box');
console.log(box);*/

//document.querySelector('#id') を使用して取得
/*let box2 = document.querySelector('#box');
console.log(box2);*/


// 全件取得
//「querySelectorAll」は NodeList（ノードリスト） を取得 
//「NodeList」は取得時点のまま(getElementsByClassNameと比較)
// document.querySelectorAll('〇〇 > △△') →〇〇の直接の子要素△△を全て
// document.querySelectorAll('input[type=〇〇]') →input要素のtype属性が〇〇を全て
/* let boxClass = document.querySelectorAll('.box');
for (let i = 0; i < boxClass.length; i++) {
console.log(boxClass[i]);
}*/

//「 formタグの直接の子要素であるクラス名がboxのものを全て 」
/*let elems = document.querySelectorAll('form > .box');
for (let i = 0; i < elems.length; i++) {
console.log(elems[i]);
}*/


// input要素のtype属性がradioの要素を全て
/*let elems = document.querySelectorAll('input[type=radio]');
for (let i = 0; i < elems.length; i++) {
    console.log(elems[i]);
}*/





