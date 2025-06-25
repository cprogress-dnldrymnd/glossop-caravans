function fetch___template($location, $element) {
    fetch($location) // Path to the HTML file you want to insert
        .then(response => response.text())
        .then(data => {
            jQuery($element).html(data);
        })
        .catch(error => {
            console.error('Error fetching the HTML file:', error);
            jQuery($element).html('<p>Error loading content.</p>');
        });
}
fetch___template('_header.php', '#insert-header');