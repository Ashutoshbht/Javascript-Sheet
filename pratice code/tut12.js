// getter
// get() method

const person = {
    name : "abhishek",
    age : 27,
    language : "english",
    city : "Delhi",
    get lan(){
        return this.name;
    }
}
console.log(person.lan)

// setter 
// set() method

const person2 = {
    name : "geeta",
    age : 25,
    language : " ",
    set lan2(value){
        this.language=value
    }
}
person2.lan2="hindi"
console.log(person2.language)