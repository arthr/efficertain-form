$(function () {
    /* Materialize Select initialize */
    $('select').formSelect();
    /* maskMoney initialize */
    $('input[data-money=true]').maskMoney({
        "allowZero": true
    });

    /* Telephone/Mobile inputMask initialize */
    $('#telephone, #mobile').inputmask({
        "mask": "999 999 9999",
        "placeholder": ""
    });

    /* Loading effect */
    var elLoading = $('#loading');
    var elMessage = elLoading.find('span.loading-message');

    $('form').on('submit', function (e) {
        elLoading.delay(300).fadeIn(function () {
            generateDocument();
        });
        e.preventDefault();
    });
    $('#loading').on('click', function () {
        $(this).fadeOut();
    });

    /* Ajax Request */
    function generateDocument() {
        console.log('generating file');
    }
});