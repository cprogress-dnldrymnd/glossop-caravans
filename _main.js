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
fetch___template('_header_footer.php', '#insert-footer-header');

window.onload = function () {
    setTimeout(function () {
        const mainContent = document.getElementById('main-content');
        const mainFooter = document.querySelector('#main-content-insert');
        console.log('xxxx');
        if (mainContent && mainFooter) {
            mainFooter.parentNode.insertBefore(mainContent, mainFooter);
        }
    }, 1000);


};