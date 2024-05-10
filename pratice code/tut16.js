// Class in Javascript

class car
{
    constructor(name ,year)
    {
        this.name = name
        this.year = year
    }
    age(x)
    {
        return x - this.year;
    }
}
const date = new Date()
let year = date.getFullYear()

const mycar = new car('volvo',2018)

console.log('The age of car is '+ mycar.age(year) + ' '+ 'year old')

