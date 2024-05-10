<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d0297db965.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div>
            <p>Advanced Search</p>
        </div>
    </section>
    <nav>
        <div class="nav_div" >
           <p class="searchset">&nbsp;&nbsp;&nbsp;&nbsp;Search Area</p> <br>
            <input type="text" id="searchArea" name="searchArea" placeholder="Enter Location">
        </div><div class="line"></div>
        <div class="nav_div" >
            Search Radius <br>
            <div id="search_radius" onclick="showSibling_Search_radius(this)">
                <input list="searchrd" id="searchRadius" class="search_text" placeholder="This Area Only">
                <span id="arrow_dwn">
                    <i class="fa-solid fa-chevron-down fa-2xs"></i>
                </span>
            </div>
        </div><div class="line"></div>

        <div class="nav_div">
            Type <br>
            <div id="search_radius" onclick="showSibling_type(this)">
            <input type="text" id="searchTypes" class="search_text" placeholder="All">
                <span id="arrow_dwn">
                    <i class="fa-solid fa-chevron-down fa-2xs"></i>
                </span>
            </div>
        </div><div class="line"></div>

        <div class="nav_div">
            Tenure Type <br>
            <div id="tenure_radius" onclick="showSibling_tenure_type(this)">
            <input type="text" id="searchTenure" class="search_text" placeholder="All">
                <span id="arrow_dwn">
                    <i class="fa-solid fa-chevron-down fa-2xs"></i>
                </span>
            </div>
        </div><div class="line"></div>

        <div class="nav_div" onclick="showSibling_Price(this)">
            Price <br>
            <div id="price" >
            <input type="text" id="searchPrice" class="search_text" placeholder="Select Price">
                <span id="arrow_dwn">
                    <i class="fa-solid fa-chevron-down fa-2xs"></i>
                </span>
            </div>
        </div><div class="line"></div>

        <div class="nav_div">
            Space <br>
            <div id="price" >
            <input type="text" id="searchSpace" class="search_text" placeholder="Select Space">
                <span id="arrow_dwn">
                    <i class="fa-solid fa-chevron-down fa-2xs"></i>
                </span>
            </div>
        </div><div class="line"></div>

        <div class="nav_div"><button>Search</button>&nbsp;&nbsp;</div>
    </nav>

    <!-- below are the values of above nav_divs -->

    <div class="nav_values search_radius">
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>This Area Only</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>+0.25 miles</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>+0.5 miles</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>+3 miles</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>+5 miles</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>+10 miles</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>+15 miles</p>
    </div>

    <div class="nav_values type">
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>All</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>Development</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>Industrial</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>Investment</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>leisure</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>Land</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>office</p>
    </div>

    <div class="nav_values tenure_type">
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>All</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>freehold</p>
        <p class="check"><span><i class="fa-solid fa-check check-icon"></i></span>leasehold</p>
    </div>
    
    <div class="nav_values price_nav_bar">
        <div class="nav_div">
            Min Price <br>
            <select name="" id="min_range">
                <option value="">No Min Price</option>
                <option value="">$10,000</option>
                <option value="">$15,000</option>
                <option value="">$20,000</option>
                <option value="">$25,000</option>
                <option value="">$30,000</option>
                <option value="">$35,000</option>
                <option value="">$40,000</option>
            </select>
        </div><div class="line"></div>
        <div class="nav_div">
            Max Price <br>
            <select name="" id="max_range">
                <option value="">No Max Price</option>
                <option value="">$1,00,000</option>
                <option value="">$90,000</option>
                <option value="">$85,000</option>
                <option value="">$80,000</option>
                <option value="">$75,000</option>
                <option value="">$70,000</option>
                <option value="">$65,000</option>
                <option value="">$60,000</option>
            </select>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>