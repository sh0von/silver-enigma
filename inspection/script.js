


function factorial(n) {
    if (n === 0) {
        return 1;
    } else {
        return n * factorial(n - 1);
    }
}


const result = factorial(5);
console.log(`Factorial of 5 is ${result}`);


const numbers = [1, 2, 3, 4, 5];


const squaredNumbers = [];
for (let i = 0; i < numbers.length; i++) {
    squaredNumbers.push(numbers[i] ** 2);
}


console.log("Squared Numbers:", squaredNumbers);


const person = {
    firstName: "John",
    lastName: "Doe",
    age: 30,
    isStudent: false,
};


console.log("Person:", person);


class Rectangle {
    constructor(width, height) {
        this.width = width;
        this.height = height;
    }

    area() {
        return this.width * this.height;
    }
}

// last part of the flag : _st3p}

const rect = new Rectangle(5, 10);


console.log("Rectangle Area:", rect.area());


const add = (a, b) => a + b;


const sum = add(7, 3);
console.log("Sum of 7 and 3:", sum);


const names = ["Alice", "Bob", "Charlie", "David"];


names.forEach((name, index) => {
    console.log(`Name ${index + 1}: ${name}`);
});


const delay = (ms) => new Promise((resolve) => setTimeout(resolve, ms));


const asyncDemo = async () => {
    console.log("Start of async function");
    await delay(2000);
    console.log("After 2 seconds");
};


asyncDemo();
