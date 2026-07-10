// Simple Form Validation - Dattatray Bhosale
function validateForm() {
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    
    if (!email.includes('@')) {
        alert('Please enter a valid email');
        return false;
    }
    if (phone.length !== 10) {
        alert('Phone number should be 10 digits');
        return false;
    }
    alert('Form submitted successfully!');
    return true;
}
