// Function to calculate the difference between two dates
function getDateDifference() {
    var firstDate = new Date(document.getElementById('first_date').value);
    var secondDate = new Date(document.getElementById('second_date').value);

    // Calculate the difference in milliseconds
    var timeDifference = Math.abs(secondDate - firstDate);

    // Convert the difference to days
    var differenceInDays = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));

    // Convert days to years, months, and remaining days
    var years = Math.floor(differenceInDays / 365);
    var months = Math.floor((differenceInDays % 365) / 30);
    var days = differenceInDays % 30;

    // Build the result string
    var result = '';

    if (years > 0) {
        result += years + ' Year';
        if (years > 1) result += 's';
        if (months > 0 || days > 0) result += ', ';
    }

    if (months > 0) {
        result += months + ' Month';
        if (months > 1) result += 's';
        if (days > 0) result += ', ';
    }

    if (days > 0) {
        result += days + ' Day';
        if (days > 1) result += 's';
    }

    // Display the result
    document.getElementById('result').innerHTML = result;
}

// Attach the function to the form submit event
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    getDateDifference(); // Calculate and display the difference
});
