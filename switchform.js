function validateLoginForm() {
    var loginEmail = document.getElementById('loginEmail').value;
    var loginPassword = document.getElementById('loginPassword').value;
    var loginErrorMessage = document.getElementById('loginErrorMessage');

    // Add your login form validation logic here

    // Example: Simple validation for demonstration purposes
    if (loginEmail === "" || loginPassword === "") {
        loginErrorMessage.textContent = "Please enter both email and password.";
    } else {
        // Clear error message
        loginErrorMessage.textContent = "";

        // Add your login logic here (e.g., make an AJAX request to authenticate)
    }
}

function validateRegisterForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    var registerErrorMessage = document.getElementById('registerErrorMessage');

    // Add your register form validation logic here

    // Example: Simple validation for demonstration purposes
    if (name === "" || email === "" || password === "" || confirmPassword === "") {
        registerErrorMessage.textContent = "Please fill in all fields.";
    } else if (password.length < 6) {
        registerErrorMessage.textContent = "Password should be at least 6 characters.";
    } else if (confirmPassword !== password) {
        registerErrorMessage.textContent = "Passwords do not match.";
    } else {
        // Clear error message
        registerErrorMessage.textContent = "";

        // Add your register logic here (e.g., make an AJAX request to create an account)
    }
}

function showRegisterForm() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("registerForm").style.display = "block";
}
function showLoginForm() {
    document.getElementById("loginForm").style.display = "block";
    document.getElementById("registerForm").style.display = "none";
}