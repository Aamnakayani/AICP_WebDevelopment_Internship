document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners for form submissions
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(loginForm);
            fetch('login.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Handle login response
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }

    const signupForm = document.getElementById('signupForm');
    if (signupForm) {
        signupForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(signupForm);
            fetch('signup.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Handle signup response
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }

    const addBookForm = document.getElementById('addBookForm');
    if (addBookForm) {
        addBookForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(addBookForm);
            fetch('add_book.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Handle add book response
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }

    const requestBookForm = document.getElementById('requestBookForm');
    if (requestBookForm) {
        requestBookForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(requestBookForm);
            fetch('request_book.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Handle request book response
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }
});
