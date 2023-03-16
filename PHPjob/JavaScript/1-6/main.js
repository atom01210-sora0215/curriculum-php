let scores = [50, 60, 70, 80, 90];
console.log(scores);
console.log(scores[2]);
console.log(scores.length);
for (let i = 0; i < 5; i++) {
    console.log("得点は" + scores[i] + "点です");
}
//scores.length で「5」が取得されるので、i < 5 と同じ意味になります。
for (let i = 0; i < scores.length; i++) {
    console.log("得点は" + scores[i] + "点です");
}



let scores1 = [10, 15, 20, 25];
for (let i = 0; i < scores.length; i++) {
    if (scores1[i] % 2 === 0){
        console.log (scores1[i] + "は偶数です");
    }
}

let car = {
    gass: 20.5,
    num: 1234
}
console.log(car);