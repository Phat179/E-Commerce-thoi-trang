// login 
function validateForm(event) {
    event.preventDefault();

    var email = document.getElementById('emailInput').value;
    var password = document.getElementById('passwordInput').value;

    if (email.trim() !== '' && password.trim() !== '') {
        window.location.href = 'loggedindex.php';
    } else {
        alert('Please fill in both email and password fields.');
    }
}