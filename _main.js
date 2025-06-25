function fetch___template(location, elementSelector) {
    fetch(location) // Path to the HTML file you want to insert
        .then(response => {
            if (!response.ok) {
                // Throw an error if the response status is not OK (e.g., 404, 500)
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.text();
        })
        .then(data => {
            const targetElement = document.querySelector(elementSelector);
            if (targetElement) {
                targetElement.innerHTML = data;
            } else {
                console.warn(`Element with selector "${elementSelector}" not found.`);
            }
        })
        .catch(error => {
            console.error('Error fetching or inserting the HTML:', error);
            const targetElement = document.querySelector(elementSelector);
            if (targetElement) {
                targetElement.innerHTML = '<p>Error loading content.</p>';
            }
        });
}
fetch___template('_header.php', '#insert-header');
fetch___template('_footer.php', '#insert-footer');