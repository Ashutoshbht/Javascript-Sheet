<!-- javascript for loop -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="demo"></p>
    <script>
       let fruits = ["apple","banana","graps","mango"];
       let fLen = fruits.length;
       let text = "<ul>";
       for(let i=0;i<fLen;i++)
        {
            text +="<li>" +fruits[i]+ "</li>";
        } 
        text +="</ul>";
        document.getElementById('demo').innerHTML=text;

        // for each loop
        
    </script>
</body>
</html>