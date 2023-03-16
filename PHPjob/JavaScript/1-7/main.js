// class Taiyaki {
//     constructor (contents){
//         this.contents = contents;
//     }
// }
// let anko = new Taiyaki ('あんこ');
// console.log(`中身は${anko.contents}です`);
// let cream = new Taiyaki ('クリーム');
// console.log(`中身は${cream.contents}です`);
// let cheese = new Taiyaki ('チーズ');
// console.log(`中身は${cheese.contents}です`);

// class Taiyaki {
//     constructor (contents){
//         this.contents = contents;
//     }
//     output() {
//         console.log(`中身は${this.contents}です`);
//     }
// }
// let anko1 = new Taiyaki ('あんこ');
// anko1.output();
// let cream1 = new Taiyaki ('クリーム');
// cream1.output();
// let cheese1 = new Taiyaki ('チーズ');
// cheese1.output();


class Taiyaki {
    constructor (contents){
        this.contents = contents;
    }
    output() {
            console.log(`中身は${this.contents}です`);
    }
}

// let contents = {
//     anko: 'あんこ',
//     cream: 'クリーム',
//     cheese: 'チーズ',
// };
let anko = new Taiyaki ('あんこ');
let cream = new Taiyaki ('クリーム');
let cheese = new Taiyaki ('チーズ');

let contents = [anko, cream, cheese];
for (let i = 0; i < contents.length; i++) {
    contents[i].output();
}