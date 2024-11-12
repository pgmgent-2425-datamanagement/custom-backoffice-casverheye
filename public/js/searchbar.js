const searchBar = document.getElementById('searchBar');
const licensePlateSearchBar = document.getElementById('licensePlateSearchBar');
const tableRows = document.querySelectorAll('#vehicleTableBody tr');

function showAllVehicles() {
    tableRows.forEach(row => {
        row.style.display = '';
    });
}

function searchTable(query, columnSelector) {
    query = query.toLowerCase();
    
    if (query === '') {
        showAllVehicles();
    } else {
        tableRows.forEach(row => {
            const columnValue = row.querySelector(columnSelector).textContent.toLowerCase();

            if (columnValue.includes(query)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }
}

searchBar.addEventListener('input', () => {
    searchTable(searchBar.value, '.make, .model');
});

licensePlateSearchBar.addEventListener('input', () => {
    searchTable(licensePlateSearchBar.value, '.license_plate');
});
