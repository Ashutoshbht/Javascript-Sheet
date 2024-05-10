// // asynchronous in JS
// // A function running parallel to other functions is called asynchronous
// // setTimeOut is a good example of asynchronous

// function callback(something)
// {
//     console.log(something)
// }

// function myfun(num1,num2,result)
// {
//     var sum = num1 +num2;
//     result(sum);
// }
// myfun(100,5,callback);  //I used callback as an argument in a function called myfun, i,e. callback function property

// // setTimeOut()
// // setTimeout is used to run a function after a specied amount of time delay

// setTimeout(() => {
//     console.log('hi')
// }, 2000);

// // setInterval()
// // setInterval is used to execute the code repeatly until clearInterval() is called

// setInterval(newFun,1000);

// function newFun()
// {
//     var d = new Date();
//     console.log(d.getHours()+ ":" + d.getMinutes()+ ":" + d.getSeconds())
// }

// Instead of console.log, we use process.stdout.write to write to the standard output (stdout).
// \r is a carriage return character. When written to the console, it moves the cursor to the beginning of the line without advancing to the next line.
// This effectively overwrites the previous time with the new one, giving the appearance of the time being displayed on the same line.


function newFun3()
{
    var dt = new Date();
    process.stdout.write("\r" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds());
}
setInterval(newFun3,1000);