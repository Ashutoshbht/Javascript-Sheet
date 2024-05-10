<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance Search (Test Job 7)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Advance Search</h1><br>
        <nav class="nav-box">
            <!-- Search filter options -->
            <div class="search-option1">
                <label for="searchArea">Search Area</label><br> <br>
                <input type="text" id="searchArea" name="searchArea" placeholder="Enter Location">
            </div>

            <!-- line break -->
            <div class="vertical-line"></div>


            <!-- search option 2  -->
            <div class="search-option2">
                <label for="searchRadius">Search Radius</label><br><br>
                <input list="radius" placeholder="This area only">
            </div>

            <!-- line break -->
            <div class="vertical-line"></div>

            <!-- search option 3 -->
            <div class="search-option3">
                <label for="searchType">Type</label><br><br>
                <input list="type" placeholder="All">
            </div>

            <!-- line break -->
            <div class="vertical-line"></div>

            <!-- search option 4 -->
            <div class="search-option4">
                <label for="tenureType">Tenure Type</label><br><br>
                <input list="tenure" placeholder="All">
            </div> 

            <!-- line break -->
            <div class="vertical-line"></div>

            <!-- search option 5 ($ Set price) -->
            <div class="search-option5">
            <label for="priceType">Price Type</label><br><br>
            <input dropzone="" id="SetPrice" placeholder="Select price"><br>
            </div>
          

           <!-- line break -->
           <div class="vertical-line"></div>

            <!-- search option 6 -->
            <div class="search-option6">
                <label for="spaceType">Space Type</label><br><br>
                <input type="text" placeholder="Search Space">
            </div>

            <!-- Search Button -->
            <!-- <div class="search-btn">
                <button id="search-btn">Search</button>
            </div> -->
        </nav>

        <!-- second box of values -->
        <div class="nav_values">
            <p class="check"> <span> <i class="fa-solid fa-check check-icon"></i> </span> This Area Only </p>
        </div>


        
        <!-- drop down min max -->


        
        <!-- <div class="min-data">
            <input list="minPrice">
        </div>
        <div class="max-data">
            <input list="maxPrice">
        </div>
        <datalist id="minPrice">
                <option value="No min"></option>
                <option value="$100"></option>
                <option value="$200"></option>
                <option value="$300"></option>
                <option value="$400"></option>
                <option value="$500"></option>
                
                <option value="$600"></option>
                <option value="$700"></option>
                <option value="$800"></option>
                <option value="$900"></option>
                <option value="$1000"></option>
            </datalist>
            <datalist id="maxPrice">
                <option value="No max"></option>,
                <option value="$11000"></option>
                <option value="$12000"></option>
                <option value="$13000"></option>
                <option value="$14000"></option>
                <option value="$15000"></option>
                <option value="$16000"></option>
                <option value="$17000"></option>
                <option value="$18000"></option>
                <option value="$19000"></option>
                <option value="$20000"></option>
            </datalist> -->
            
            
    </div>    
            <script src="script.js"></script>
        </body>
        </html>
