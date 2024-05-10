// async and await
// async and await make promises easier to write
// async makes function return promise
// await makes function wait for the promise

function main_function()
{
    let first_promis = new Promise((resolve,reject)=>
    resolve("Hello"));
    let second_promise = new Promise((resolve,reject)=>
{
    setTimeout(() => {
        resolve("Everyone");
    }, 1000);
});
    let combine_promise = new Promise.all([first_promis,second_promise]);
    return combine_promise;
}
 async function display()
 {
    let display_promise = await main_function();
 }
 display();
 

 function asynchronous_operational_method() {
    let first_promise = 
        new Promise((resolve, reject) => resolve("Hello"));
    let second_promise = 
        new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve(" GeeksforGeeks..");
        }, 1000);
    });
    let combined_promise = 
        Promise.all([first_promise, second_promise]);
    return combined_promise;
}
 
async function display() {
    let data = await asynchronous_operational_method();
    console.log(data);
}
 
display();
