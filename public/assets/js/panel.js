(function () {
    $('input[name=employed]').change(function () {
        if ($(this).val() === 'no') {
            $('.employed-definition').hide();
            $('.unemployed-definition').show();
        }
        else {
            $('.employed-definition').show();
            $('.unemployed-definition').hide();
        }
    });
})();