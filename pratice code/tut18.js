//  callback function in js
// A callback function is a function which passed an argument in another function
// This technique allows a function to call another function

function myfun(some)
{
    console.log(some);
}
function firstfun()
{
    myfun('hello');
}
function secondfun()
{
    myfun('world');
}
firstfun();
secondfun();

// example 2

// Function that takes 
function doSomethingAsync(callback) {
    // Simulating an asynchronous operation (
    setTimeout(function() {
      // After the asynchronous operation com
      callback("Data retrieved successfully");
    }, 2000); 
  }
  
  // Callback function to be execute
  function handleData(data){
    console.log("Handling data:", data);
  }
  
  // Calling the function with the callback
  console.log("Start");
  doSomethingAsync(handleData);
  console.log("End");