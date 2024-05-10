<!DOCTYPE html>
<html>
    <style>
        #myball{
            width: 20%;
            height: 20%;
        }
        img{
            width: 20%;
            height: 20%;
        }
    </style>
<body>

<h2>What Can JavaScript Do?</h2>

<p>JavaScript can change HTML attribute values.</p>

<p>In this case JavaScript changes the value of the src (source) attribute of an image.</p>

<button type="button" onclick='document.getElementById("myball").src="red.png"'>Red ball</button>
<img id="myball" src="red.png" alt="">
<button type="button" onclick="document.getElementById('myball').src='green.jpg'">Green ball</button>

</body>
</html>
