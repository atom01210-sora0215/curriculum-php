// 問1は以下のように先に関数定義をした方が、繰り返し定義しないのでメモリの浪費もせずにすみます。
// 問1;
let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven(num) {
  console.log(num + "は偶数です");
}

for (let i = 0; i < numbers.length; i++) {
  let num = numbers[i];
  if (num % 2 == 0) {
    isEven(num);
  }
}

// //問1
// let numbers = [2, 5, 12, 13, 15, 18, 22];
// //ここに答えを実装してください。↓↓↓
// function isEven(num) {
//     for(let i =0; i<numbers.length; i++){
//         let num=numbers[i];
//         if(num%2===0){
//             console.log(num + 'は偶数です'); 
//         }   
//     }
// }
// isEven();

// let numbers = [2, 5, 12, 13, 15, 18, 22];
// //ここに答えを実装してください。↓↓↓
// function isEven(num) {
//     //答えを格納する配列を定義する
//     let ans = [];
//     for (let i = 0; i < num.length; i++) {
//         if (num[i] % 2 == 0){
//             //答えの配列に偶数を追加
//             ans.push(num[i]);
//         }
//         console.log(ans + 'は偶数です');
//     }
// }

// //問1
// let number = [2,5,12,13,15,18,22];
// function isEven(array1){
//     for(let i = 0;i < array1.length; i++)
//     if(i % 2 === 0){
//         console.log(array1[i] + '偶数です');
//     }

// }
// console.log(isEven(number));

// //問1
// let numbers = [2, 5, 12, 13, 15, 18, 22];
// //ここに答えを実装してください。↓↓↓
// for (let i = 0; i < numbers.length; i++) {
//     let num = numbers[i];
//     if (num % 2 == 0){
//         function isEven() {
//             console.log(num + 'は偶数です');
//         }
//     }
//     isEven();
// }

//問2
class car {
  constructor(gas, number) {
    this.gas = gas;
    this.number = number;
  }
  getNumGas() {
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.number}です`);
  }
}
let example = new car(123, 4567);
example.getNumGas();
