var Interval = setInterval(() => {
    console.log("Hi dobsi")
}, 1000);

setTimeout(() => {
    clearInterval(Interval);
    console.log('Interval closed');
}, 3000);