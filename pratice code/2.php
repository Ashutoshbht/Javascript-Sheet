<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
    <script>
        function MyFunction()
        {
            document.getElementById('demo').innerHTML="This is Paragraph TWO ";
        }
        window.alert("This is demo page");
    </script>
</head>
<body>
    <p id="demo">This is paragraph one</p>
    <button  type="button" onclick="MyFunction()">Click here</button>
</body>
</html>