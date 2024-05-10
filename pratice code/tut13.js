// JS functions
// this keyword

const person =
    {
        firstname : "john",
        lastname : "Wick",
        age : 30,
        gender : "male",
        fullname : function()
        {
            return this.firstname+ " " +this.lastname
        }
    }
console.log(person.fullname())

// this keyword refers to an object
// this keyword refers to different objects depending on how it used
