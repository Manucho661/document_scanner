document.addEventListener('DOMContentLoaded', function () {
    const documentLinks = document.querySelectorAll('.document-link');
    
    documentLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const documentId = this.getAttribute('data-id');

            // Fetch the document content via AJAX
            fetch(`/admin/documents/${documentId}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('document-display').innerHTML = html;
                })
                .catch(error => console.error('Error fetching document:', error));
        });
    });
});
