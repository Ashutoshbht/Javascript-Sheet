// method 1 using loops

var empList = [
    {
        name: 'john Doe',
        dept: 'php',
        empid: 5
    },
    {
        name: 'Paul Smith',
        dept: 'MERN',
        empid: 4
    },
    {
        name: 'Tom Smith',
        dept: 'SEO',
        empid: 7
    }
];

// Sorting the empList array by empid using loops 
for (let i = 0; i < empList.length - 1; i++) {
    for (let j = i + 1; j < empList.length; j++) {
        if (empList[i].empid > empList[j].empid) {
            // Swap elements
            let temp = empList[i];
            empList[i] = empList[j];
            empList[j] = temp;
        }
    }
}

console.log(empList);



//sample 2 using js sorting fuctions

var empList = [
    {
        name: 'john Doe',
        dept: 'php',
        empid: 5
    },
    {
        name: 'Paul Smith',
        dept: 'MERN',
        empid: 4
    },
    {
        name: 'Tom Smith',
        dept: 'SEO',
        empid: 7
    }
];

// Sorting the empList array by empid using JavaScript's sorting functions
empList.sort((a, b) => a.empid - b.empid);

console.log(empList);
