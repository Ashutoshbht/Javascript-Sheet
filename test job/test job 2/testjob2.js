var fruitsDb = ["apple", "banana", "pineapple", "grapes", "avocado", "strawberry"];

function filterFruits(arr) {
    var filteredArray = [];
    for (var i = 0; i < arr.length; i++) {
        var item = arr[i];
        if (fruitsDb.includes(item)) {
            filteredArray.push(item);
        }
    }
    return filteredArray;
}
var arrayToFilter = ["banana", "orange", "kiwi", "grapes"];
var filteredArray = filterFruits(arrayToFilter);
console.log(filteredArray); 
