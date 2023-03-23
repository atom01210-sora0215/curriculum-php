// btnに対してイベントは一つだけしか設定できない
//後に書いた方が優先される、最初の背景色を変える方は消された。
//box要素とbtn要素を取得
// let box = document.getElementById('box');
const btn1 = document.getElementById("btn1");
//ボタンがクリックされたら、背景色を変える
// btn.onclick = function() {
//     box.style.backgroundColor = 'red';
// };
//ボタンがクリックされたら、アラートを出す
// btn1.onclick = function () {
//   alert("ボタンが押されました");
// };

//addEventListenerを使用すると、同じ要素（今回だと btn ）に同じ種類のイベント（今回だと onclick）をいくつでも設定することができます。
//要素.addEventListener(何かが起きたら, 何かをする, false);
// let box = document.getElementById('box');
// let btn1 = document.getElementById("btn1");
//ボタンが押されたら、背景色を赤にする
// btn1.addEventListener('click', function() {
//     box.style.backgroundColor = 'red';
// }, false);
//ボタンが押されたら、アラートを出す
btn1.addEventListener(
  "click",
  function () {
    alert("ボタンが押されました");
  },
  false
);
