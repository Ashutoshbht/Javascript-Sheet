//using  call(), an object can use method belongs to another object

// object 1:
const object1 = {
    fullname : function()
    {
        return this.firstname + " " + this.lastname
    }
}
const object2 = {
    firstname : "Edwad",
    lastname : "newgate"
}
// the call() will call the object 2 with object 1
console.log(object1.fullname.call(object2))

// call() can also take argument
const object3 = {
    fullname : function(city,country)
    {
        return this.firstname+ " " +this.lastname+ "\n" + city+ "\n" + country
    }
}
const object4 = {
    firstname : "Akagami",
    lastname : "shanks"
}

console.log(object3.fullname.call(object4, "MOHALI", "INDIA"))