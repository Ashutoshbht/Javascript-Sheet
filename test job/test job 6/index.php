<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Cursor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="carousel-container">
  <div class="carousel-slide">
    <img src="image1.jpg" alt="Image 1">
    <img src="image2.jpg" alt="Image 2">
    <img src="image3.jpg" alt="Image 3">
    <img src="image4.jpg" alt="Image 4">
    <img src="image5.jpg" alt="Image 5">
  </div>
  <div class="controls">
    <button id="prevBtn">&lt; Prev</button>
    <div id="pageNumbers">
      <span class="page" onclick="changePage(1)">1</span>
      <span class="page" onclick="changePage(2)">2</span>
      <span class="page" onclick="changePage(3)">3</span>
      <span class="page" onclick="changePage(4)">4</span>
      <span class="page" onclick="changePage(5)">5</span>
    </div>
    <button id="nextBtn">Next &gt;</button>
  </div>
</div>


<script src="script.js"></script>
</body>
</html>