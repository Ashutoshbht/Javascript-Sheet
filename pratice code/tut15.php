<!-- closures -->
<!-- create a button that will increment +1 when it got pressed -->
<!-- A closures is a function that have access of parent scope, even after the parent function has closed -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>closures</title>
</head>
<body>
    <button type="button" onclick="myfun()">Count!</button>
    <p id="demo">0</p>
    <script>
        const add = (function()
    {
        let counter = 0;
        return function()
        {
            counter +=1
            return counter
        }
    })();
    function myfun()
    {
        document.getElementById('demo').innerHTML=add()
    }
    </script>
</body>
</html>