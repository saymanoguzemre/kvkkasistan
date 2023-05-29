$(function() {
    $('#tel_no').mask('(000) 000 0000');
    $('#verification_code').mask('000000');
})

window.addEventListener('gotopayment', function(e) {
    setTimeout(function() {
        window.location.href = e.detail.paymenturl;
    }, 3000);
});
