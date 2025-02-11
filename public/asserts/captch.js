function refreshCaptcha() {
    console.log('gee')
    var captcha = document.querySelector('img[alt="CAPTCHA"]');
    captcha.src = '{{ captcha_src() }}' + '?' + Math.random();
}
