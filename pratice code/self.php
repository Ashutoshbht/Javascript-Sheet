<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS to initially hide the <p> element */
        #doneMessage {
            display: none;
        }
    </style>
</head>
<body>
    <button type="button" id="demo">Click here</button>
    <!-- <p> element to display "done" message -->
    <p id="doneMessage">Done</p>
    <script>
        var button = document.getElementById('demo');
        var doneMessage = document.getElementById('doneMessage');
        
        // Adding an event listener for the 'click' event on the button
        button.addEventListener('click', function() {
            console.log('Button clicked');
            
            // Show the "done" message after the button is clicked
            doneMessage.style.display = 'block';
        });
    </script>
</body>
</html>
