    document.addEventListener('DOMContentLoaded', function () {
        const setPriceInput = document.getElementById('SetPrice');
        const priceDropDown = document.querySelector('.price-dropdown');
        const minData = document.getElementById('mindata');

        // Event listener for input click to toggle dropdowns
        setPriceInput.addEventListener('click', function () {
            if (priceDropDown.style.display === 'block') {
                priceDropDown.style.display = 'none';
            } else {
                priceDropDown.style.display = 'block';
            }
        });

        

        // Event listener to close dropdown when clicking outside
        document.addEventListener('click', function (event) {
            if (!event.target.matches('#SetPrice')) {
                priceDropDown.style.display = 'none';
            }
        });

        // Event listener to prevent closing dropdowns when clicking on them
        priceDropDown.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });