// Coverting String to an array
let str = "a,b,c,d,e,f,g";
console.log(str)
// to convert string into array split() is used

let str1 = str.split("");
console.log(str1[5])

// slpit()
let str2 = "hello world";
let arr = str2.split("|");
str = "";
for(let i=0;i<arr.length;i++)
{
    str +=arr[i];
}
console.log(str2);

// match() method
let OriginalString = "The rain in SPAIN stays mainly in the plain";
let MatchString = OriginalString.match(/ain/g);
if (MatchString !== null) {
    console.log(MatchString.length);
} else {
    console.log("No match found.");
}


// include() method
console.log(OriginalString.includes("plain")) //print true because plain is exits in OriginaString 
console.log(OriginalString.includes("make"))  //print false because make does not exits in OriginaString
console.log(OriginalString.startsWith("rain",4))

