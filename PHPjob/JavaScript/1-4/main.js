let number = 1;
while (number <= 100) {
    if ((number % 3 === 0) && (number % 5 === 0)){
        console.log("FizzBuzz!!");
    } else if (number % 3 === 0){
        console.log("Fizz!!");
    } else if (number % 5 === 0){
        console.log("Bizz!!");
    } else {
        console.log(number);
    }
    number++;
}

for (let i = 1; i <= 100; i++){
	//3と5両方の倍数の（15の倍数）なら
	if (i % 3 === 0 && i % 5 === 0){
		console.log('FizzBuzz!!');
	//3の倍数のなら
    } else if (i % 3 === 0){
        console.log('Fizz!');
	//5の倍数のなら
    } else if (i % 5 === 0){
		console.log('Bizz!');
	//上記以外
    } else {
		console.log(i);
	}
}

