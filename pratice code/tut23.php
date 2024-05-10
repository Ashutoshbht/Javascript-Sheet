<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d0297db965.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}
body{
    width: 100%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgb(2, 2, 59);
}
section div{
    margin: 10px;
}
section div p{
    margin: 10px;
    font-size: xx-large;
    font-weight: bolder;  
}
nav{
    margin: 10px;
    padding: 5px;
    height: 50px;
    border: 2px solid rgb(2, 2, 59);
    border-radius: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav div{
    margin:0 auto;
}
nav .line{
    height: 2px;
    width: 30px;
    background-color: rgb(253, 2, 2);
    transform: rotate(90deg); 
}
nav div button{
    height: 30px;
    width: 100px;
    border: none;
    border-radius: 40px;
    background-color: rgb(2, 2, 59);
    color: white;
}
nav div select{
    width: 100%;
    border: none;
}
nav div #price{
    height: 20px;
    width: 100px;
    background-color: aqua; 
    border: 1px solid rgb(2, 2, 59);
    color: black;
}
nav div #price #arrow_dwn{
    float: right;
}

/*Select price nav bar*/
.nav_values{
    border: 2px solid rgb(2, 2, 59);
    padding: 5px;
    border-radius: 15px;
    width: 150px;
    align-items: center;
}
.nav_values p{
    float: center;
    position: relative;
    left: 5px;
}
.nav_values p i{
    margin: 0 10px;
    display: flex;
}
.check-icon{
    transform: scale(0);
}
.check.checked .check-icon{
    transform: scale(1);
}

.search_radius{
    position: absolute;
    left: 220px;
    display: none;
}
.type{
    position: absolute;
    left: 440px;
    display: none;
}
.tenure_type{
    position: absolute;
    left: 630px;
    display: none;
}
.price_nav_bar{
    position: absolute;
    left: 850px;
    width: 260px;
    justify-content: center;
    display: none;
}
.price_nav_bar .line{
    height: 2px;
    width: 30px;
    background-color: rgb(253, 2, 2);
    transform: rotate(90deg); 
}
.open_price_list{
    display: flex;
}
.open_list{
    display: block;
}
    </style>
</head>
<body>
    <section>
        <div>
            <p>Advanced Search</p>
        </div>
    </section>
    <nav>
        <div class="nav_div" >
            &nbsp;&nbsp;&nbsp;&nbsp;Search Area <br>
        </div><div class="line"></div>
        <div class="nav_div" >
            Search Radius <br>
            <div id="search_radius" onclick="showSibling_Search_radius(this)">
                <span class="search_text">
                    Hello
                </span>
                <span id="arrow_dwn">
                    <i class="fa-solid fa-chevron-down fa-2xs"></i>
                </span>
            </div>
        </div><div class="line"></div>

        <div class="nav_div">
            Type <br>
            <div id="search_radius" onclick="showSibling_type(this)">
                <span class="type_text">
                    Hello
                </span>
                <span id="arrow_dwn">
                    <i class="fa-solid fa-chevron-down fa-2xs"></i>
                </span>
            </div>
        </div><div class="line"></div>

        <div class="nav_div">
            Tenure Type <br>
            <div id="tenure_radius" onclick="showSibling_tenure_type(this)">
                <span class="price_text">
                    Hello
                </span>
                <span id="arrow_dwn">
                    <i class="fa-solid fa-chevron-down fa-2xs"></i>
                </span>
            </div>
        </div><div class="line"></div>

        <div class="nav_div" onclick="showSibling_Price(this)">
            Price <br>
            <div id="price" >
                <span class="price_text">
                    Hello
                </span>
                <span id="arrow_dwn">
                    <i class="fa-solid fa-chevron-down fa-2xs"></i>
                </span>
            </div>
        </div><div class="line"></div>

        <div class="nav_div">
            Space <br>
            <div id="price" >
                <span class="price_text">
                    Hello
                </span>
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
    <script>
        function showSibling_Search_radius(clickedDiv) {
            const siblingDiv = document.querySelector(".search_radius");
            siblingDiv.classList.toggle("open_list");
        }

        function showSibling_type(clickedDiv) {
            const siblingDiv = document.querySelector(".type");
            siblingDiv.classList.toggle("open_list");
        }

        function showSibling_tenure_type(clickedDiv) {
            const siblingDiv = document.querySelector(".tenure_type");
            siblingDiv.classList.toggle("open_list");
        }

        function showSibling_Price(clickedDiv) {
            const siblingDiv = document.querySelector(".price_nav_bar");
            siblingDiv.classList.toggle("open_price_list");
        }

        // function show_check(clickedcheck){
        //     const show_this_check = document.querySelector(".fa-check");
        //     show_this_check.style.display = 'flex';
        // }

        items = document.querySelectorAll(".check");
        items.forEach(items => {
            items.addEventListener("click", ()=>{
                    items.classList.toggle("checked");
            })
        })
    </script>
</body>
</html>