//関数を定義
function japanese() {
  console.log("おはよう");
  console.log("こんにちは");
  console.log("こんばんは");
  console.log("日本語は時間帯によって挨拶が変わります");
  console.log("ひらがな");
  console.log("カタカナ");
  console.log("漢字");
  console.log("３種類も文字があります");
}
//関数を呼び出す
japanese();

// //①関数名を適切なものに変えてください
// //②仮引数を適切なものに変えてください
// function createJuice(fruits) {
//   //③「〇〇を受け取りました。ジュースにして返します」と出力
//   console.log(fruits + "を受けとりました。ジュースにして返します。");
//   //④受け取った果物にジュースという文字列を結合して、呼び出し元に返す
//   Juice = fruits + "ジュース";
//   return Juice;
// }
// //⑤関数の実行：「みかん」を渡して、結果を受け取れるように適当な変数（orangeJuice）を用意
// let orangeJuice = createJuice("みかん");
// //⑥返ってきた変数を利用して「〇〇が届きました」と出力する
// console.log(orangeJuice + "が届きました");

function createJuice(fruits) {
  console.log(`${fruits}を受け取りました。ジュースにして返します`);
  return fruits + "ジュース";
}
// createJuice('みかん');
let orangeJuice = createJuice("みかん");
console.log(`${orangeJuice}が届きました。`);

//７章チェックテスト
//問1
let scores = [10, 15, 20, 25];
//ここに答えを実装してください。↓↓↓
// for (let i = 0; i < scores.length; i++) {
//     if (scores[i] % 2 === 0){
//         console.log (scores[i] + "は偶数です4");
//     }
// }
function isEven(num) {
  console.log(num + "は偶数です");
}
for (let i = 0; i < scores.length; i++) {
  let num = scores[i];
  if (num % 2 == 0) {
    isEven(num);
  }
}

//問2
let Car2 = {
  carGasoline2: "20.5",
  carNumber2: 1234,
};
//値を取得
console.log(`ガソリンは${Car2.carGasoline2}です`);
console.log(`ナンバーは${Car2.carNumber2}です`);

class Car {
  constructor(carGasoline, carNumber) {
    this.carGasoline = carGasoline;
    this.carNumber = carNumber;
  }

  getNumGas() {
    console.log(`ガソリンは${this.carGasoline}です`);
    console.log(`ナンバーは${this.carNumber}です`);
  }
}
let example = new Car(20.5, 1234);
example.getNumGas();
