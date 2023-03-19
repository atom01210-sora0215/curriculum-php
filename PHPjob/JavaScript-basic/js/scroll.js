/*
|--------------------------------------------------------------------------
| スクロール量に合わせてボタンの表示・非表示を切り替え
|--------------------------------------------------------------------------
| ある程度下にスクロールしたときに、非表示にしていた「TOPに戻る」ボタンを表示させる
| window.addEventListener('scroll', () => {
| HTML要素.addEventListener('イベントの種類', 関数);
*/
// back-btnというidを持つHTML要素を取得し、定数に代入する
const backBtn = document.getElementById("back-btn");

// 画面がスクロールされたときにイベント処理を実行する
window.addEventListener("scroll", () => {
  // 画面のスクロール量をpx（ピクセル）数で取得する
  const scrollValue = document.scrollingElement.scrollTop;

  // 画面のスクロール量が300px以上であれば、「TOPに戻る」ボタンを表示する
  if (scrollValue >= 300) {
    backBtn.style.display = "inline";
  }
  // 画面のスクロール量がそれ以外（300px未満）であれば、「TOPに戻る」ボタンを非表示にする
  else {
    backBtn.style.display = "none";
  }
});
