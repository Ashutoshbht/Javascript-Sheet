


// toUpperCase()
function myFun1()
{
    let text =document.getElementById('demo1').innerHTML; 
    document.getElementById('demo1').innerHTML = text.toUpperCase();
}

// toLowerCase()

function myFun2()
{
    let text2 = document.getElementById('demo2').innerHTML;
    document.getElementById('demo2').innerHTML = text2.toLowerCase();
}

// combine both case
function myFun3()
{
    let text3 = document.getElementById('demo3').innerHTML;
    if(text3 == text3.toLowerCase())
    {
        document.getElementById('demo3').innerHTML = text3.toUpperCase();
    }
    else
    {
        document.getElementById('demo3').innerHTML = text3.toLowerCase();
    }
}

// concat() used to combine two strings
let string1 = "Ashutosh";
let string2 = "Bhatt";
let String3 = string1.concat(" ",string2);
console.log(String3);

// All string method returns new string, they don't modify original string.
// String are immutable, they can not be changed, only modify.

// repaet()
    let string4 = "Hello World ";
    console.log(string4.repeat(4));

// replace()
let string5 = "My name is ASHUTOSH";
console.log(string5);
console.log(string5.replace("ASHUTOSH","ashu"));

