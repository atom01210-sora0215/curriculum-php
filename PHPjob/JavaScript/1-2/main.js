// 変数
const myname = "hoge";
let number = 10;
let price = 100;

console.log(myname);
console.log("myname");

const yourname = "池田";
console.log(yourname);
console.log(yourname + "くん");
console.log(`${yourname}くんは${number}月生まれです`);

console.log(number * 3);
console.log(price * 2);

price = 500;
console.log(price * 2);

//num1とnum2の計算した結果をresultに入れるためにそれぞれ変数を用意します。
let num1 = 10;
let num2 = 4;
let result;
//足し算
result = num1 + num2;
console.log(result);
//引き算
result = num1 - num2;
console.log(result);
//掛け算
result = num1 * num2;
console.log(result);
//割り算
result = num1 / num2;
console.log(result);
//剰余
result = num1 % num2;
console.log(result);

//文字列の結合の例
//HelloとWorldに空白を入れたいときは、Helloの直後か、Worldの直前にスペースを入れてください
console.log("Hello " + "World");
//変数の結合の例
let lastName = "田中";
let firstName = "一郎";
let fullName = lastName + firstName;

console.log(fullName);

//15」が出力--->条件がtrue
let A = 15;
if (A >= 10 && A <= 20) {
  console.log(A);
}

let a = 10;
let b = 15;
//偶数の条件式
if (a % 2 === 0) {
  console.log(a);
}
//奇数の条件式
if (b % 2 !== 0) {
  console.log(b);
}

let Price = 100;
console.log(Price * 2);

Price = 500;
console.log(Price * 2);
