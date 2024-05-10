<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Date Difference Calculator</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <h2>Date Difference Calculator</h2>

<form action="index.php" method="post">
    <label for="first_date">Choose Date 1:</label>
    <input type="date" id="first_date" name="first_date" value="" required><br><br>
    <label for="second_date">Choose Date 2:</label>
    <input type="date" id="second_date" name="second_date" value="" required><br><br>
    <input type="submit" value="Calculate Difference" name="submit">
</form>
<div id="result"></div>
</div>
<script src="script.js"></script>

</body>
</html>
