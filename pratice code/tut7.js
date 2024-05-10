//array in js

// create an array
let arr = ["abc", "def", "ghi", "jkl"];
// console.log(arr);

arr[4] = "mno";
arr[5] = "pqr";
arr[6] = "stu";
arr[7] = "vwxyz";
console.log(arr);

console.log(arr.length);
console.log(arr.length-1);


//  add an element in array
let fruits = ["apple", "banana", "mango"]
console.log(fruits+"\n")
fruits.push("lemon");
console.log(fruits)

const fruit = ["Banana", "Orange", "Apple"];
fruit[6] = "Lemon";

let fLen = fruit.length;
let text = "";
for (i = 0; i < fLen; i++) {
  text +=fruit[i]+"\n"
}
console.log(text)
console.log(typeof(fruits))

// push() is used to insert data in array

let NewArray = ["PHP","JAVASCRIPT","LARAVEL","SQL"];
console.log(NewArray)
NewArray.push("HTML/CSS")
console.log(NewArray);

// pop() is used to remove the last element from an array

NewArray.pop()
console.log(NewArray)

// shift() remove the first element and shift other elements left to right

NewArray.shift()
console.log(NewArray)

// comcat() is used to add array
let arr1 = ["MCA", "BCA", "BTECH"];
let arr2 = ["PHP", "JAVASCRIPT", "SQL"]

let arr3 = arr1.concat(arr2)
console.log(arr3)


