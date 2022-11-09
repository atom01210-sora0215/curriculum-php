//問1
let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
for (let i = 0; i < numbers.length; i++) {
    let num = numbers[i];
    if (num % 2 == 0){
        function isEven() {
            console.log(num + 'は偶数です');
        } 
    }
    isEven();
}

//問2
class car {
    constructor (gas, number){
        this.gas = gas;
        this.number = number;
    }
    getNumGas(){
        console.log(`ガソリンは${this.gas}です。ナンバーは${this.number}です`);
    }
}
let example = new car(123,4567);
example.getNumGas();
