// JavaScript Template Strings

// 1.Back-Tics Syntax
// Template Strings use back-ticks (``) rather than the quotes ("") to define a string:

console.log(`He's the son of former "PRESIDENT"`)

// back-ticks `` allow multline string
console.log(`
My name is "Monkey D Luffy"
and 
I am gonna be 
"King of the pirates"
`)

// Interpolation
// Template String provide an easy way to interpolate variables and expressions into strings. The method is called string interpolation.
// The syntax is: ${...} 
let firstname = "John"
let lastname = "Carten";
console.log(`Hello "${firstname} ${lastname}"`);  

// print 5 table using `${}`
let n=5;
for(let i=1 ; i<= 10; i++)
{
    console.log(`${n} * ${i} = ${i*n}`)
}
// pattern print
let num = 5;
for(let k=0 ; k<=num; k++)
{
    let star = "* ";
    console.log(star.repeat(k))
}

