// main.js
// ＜formタグの中にあるクラス名がboxのもの全て＞
let elemsA = document.querySelectorAll("form > .box");
for (let i = 0; i < elemsA.length; i++) {
  console.log(elemsA[i]);
}

// ＜input要素のtype属性がradioの要素を全て＞
let elemsB = document.querySelectorAll("input[type=radio]");
for (let i = 0; i < elemsB.length; i++) {
  console.log(elemsB[i]);
}
