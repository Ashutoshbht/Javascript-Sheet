// add two numbers using ${}
let x = 10;
let y = 20;
let z = `"The result is: " ${x}${y}`; //add as a string
let k = `"The result is: " ${x+y}`;  //add as a number

console.log(z)
console.log(k)

// Add string and number
console.log("Result is :"+x+y) //add as a string
console.log("Result is :"+(x+y)) //add as a number

// NaN = NOT A NUMBER
console.log(100/"apple") //Output: NaN
console.log(isNaN(100/"apple")) //Output: true  (isNaN print true is given number is not a number else false)

console.log(Date());

// parseInt
console.log(typeof(1));
console.log(typeof("ashu"));
console.log(typeof(parseInt("ashu")));
console.log(parseInt("ashu"));
console.log(typeof(parseFloat("1")));