// Function to toggle visibility of search radius dropdown
function showSibling_Search_radius(clickedDiv) {
    const siblingDiv = document.querySelector(".nav_values.search_radius"); // Updated selector
    siblingDiv.classList.toggle("open_list");
}


// Function to toggle visibility of type dropdown
function showSibling_type(clickedDiv) {
    const siblingDiv = document.querySelector(".type");
    siblingDiv.classList.toggle("open_list");
}

// Function to toggle visibility of tenure type dropdown
function showSibling_tenure_type(clickedDiv) {
    const siblingDiv = document.querySelector(".tenure_type");
    siblingDiv.classList.toggle("open_list");
}

// Function to toggle visibility of price dropdown
function showSibling_Price(clickedDiv) {
    const siblingDiv = document.querySelector(".price_nav_bar");
    siblingDiv.classList.toggle("open_price_list");
}

// Event listener to toggle the checked state of items
const items = document.querySelectorAll(".check");
items.forEach(item => {
    item.addEventListener("click", () => {
        item.classList.toggle("checked");
    });
});

