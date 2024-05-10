var arr1 = [1, 3, 6, 2, 4];
var arr2 = [2, 0, 4, 1, 2];
var arr3 = [];

// Combine corresponding elements from arr1 and arr2, then sum them up
for(i=0; i< arr1.length; i++)
{
    arr3.push(arr1[i] + arr2[i])
}
// Filter out duplicates
arr3 = arr3.filter((value,index,self)=> self.indexOf(value)===index)
console.log(arr3)