document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
  
    searchForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission
  
      const searchTerm = searchInput.value.trim();
      if (searchTerm !== '') {
        // You can perform your search operation here
        // For demonstration, let's just display the search term
        searchResults.innerHTML = `<p>Search results for: <strong>${searchTerm}</strong></p>`;
      } else {
        searchResults.innerHTML = '<p>Please enter a search term.</p>';
      }
    });
  });
  