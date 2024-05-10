//  promises in js
//  A promise is used to handle asynchronous operations in js
// A promise has 4 states : fullfilled, rejected, pending and satted.

let promise = new Promise(function(resolve,reject)
{
    const x = "xyz";
    const y = "xyz";
    if(x==y)
    {
        resolve();
    }
    else
    {
        reject();
    }
});

promise.then(function()
{
    console.log("resolve, sucess");
}).catch(function()
{
    console.log("rejected");
})