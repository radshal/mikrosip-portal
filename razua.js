$(document).ready(function(){

    $('.username').each(function(data) {
        var username = $(this).html().replace('.voucher@razua.net', '');
        $(this).html(username);
    });
    
});