// console.log("Hello welcome to jQuery" );

 // Show/Hide Password Functionality
 $('#showPassword').on('change', function() {
    const passwordField = $('#password');
    const type = $(this).is(':checked') ? 'text' : 'password';
    passwordField.attr('type', type);
});

// On Button Click - Alert Submitted Data
$('#loginForm').on('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    const email = $('#email').val();
    const password = $('#password').val();

    alert('Submitted Data:\nEmail: ' + email + '\nPassword: ' + password);
});
