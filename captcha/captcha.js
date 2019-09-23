grecaptcha.ready(function() {
    grecaptcha.execute('6LcrY7EUAAAAAAk_bNkcSaWaEt9ygPpXKPur_qir', {action: 'homepage'}).then(function(token) {
        document.getElementById('g-recaptcha-response').value=token;
       console.log(token);
    });
});
