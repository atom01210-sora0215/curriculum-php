//アロー関数を使って書き換える
/*
書き換え前：	let sum = function(a, b, c) {
①functionを削除：	let sum = (a, b, c) {
②=> をつける：	let sum = (a, b, c) => {
処理の中身がreturnだけの場合③へ：	処理の中身がreturnだけの場合③へ
③{}; と returnを削除：	let sum = (a, b, c) => a + b + c;
さらに引数が一つの場合④へ：	さらに引数が一つの場合④へ
④引数の () を削除：	let sum = a => a + b + c;
*/

let sum = function(a, b, c) {
    return a + b + c;
};
let total = sum(10, 20, 30);
console.log(total);

let sum2 = (a, b, c) => a + b + c;
let total2 = sum2(10, 20, 30);
console.log(total2);


//④の引数が一つの場合というのを確認するために 「値を2倍にして返す関数」 を作成して確認してみましょう。
let double = function(a) {
    return a * 2;
};
let result = double(10);
console.log(result);

let double2 = a => a * 2;
let result2 = double2(10);
console.log(result2);


//アロー関数では処理が1行の場合に限り{ }で囲む必要が無
//「引数」が1つだけの場合は( )を書く必要もありません。
//ただし、引数が1つも無い場合には( )だけを記述する必要がある
var myFunc = function(name) {
    name = "taro";
    console.log(name);
}
myFunc();

var myFunc2 = (name2) => {
    name2 = "taro";
    console.log(name2);
}
myFunc2();

var myFunc3 = (name3) => console.log(name3);

var myFunc4 = name4 => console.log(name4);

var myFunc5 = () => console.log('太郎');






//functionの引数にコールバック関数を設定
//関数の処理が終了したあとに引数へ設定した関数を実行
//順番に実行したい関数を記述することが可能で、例えば時間の掛かるサーバーからの情報を取得したあとに別の処理をしたい場合などに便利
function testFunc(callback) {
    setTimeout(function() {
        console.log('testFuncが実行されました');
        callback();
    }, 2000)
}






//関数
/*
//関数宣言
function 関数名(仮引数, 仮引数) {
    処理...
    return;
}
*/
function hoge(x,y){
    return x+y;
}
var result1 = hoge(1,2)

//関数式： 変数に関数を代入する 
var myfun = function hoge(x,y){
    return x+y;
}
var result_2 = myfun(1,2)


/*
無名関数について:https://www.sejuku.net/blog/60321
//一回しか使用しない関数の為に名前を考える作業や、グローバルオブジェクトの汚染などを防ぐ為に使用されます。
let 変数名 = function(仮引数, 仮引数) {
    処理...
    return;
};
*/
var myfun2 = function(x,y){
    return x+y;
}
var result3 = myfun2(1,2)