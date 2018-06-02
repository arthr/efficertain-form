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

    /* Form Validation */
    var form = $('form[name=lender]');
    form.on('submit', function (e) {
        var emptyfields = $(this).hasBlankValueFields(function (els) {
            if (els.length > 0) {
                alert('All fields must be filled.');
                $(els).eq(0).focus();
            }
        });

        if (emptyfields) {
            elLoading.delay(300).fadeIn(function () {
                generateDocument(form.serialize());
            });
        }
        e.preventDefault();
    });

    /* Ajax Request Method */
    function generateDocument(formData) {
        $.ajax({
            url: 'test.php',
            type: 'POST',
            dataType: 'json',
            data: formData,
            statusCode: {
                500: () => console.log('=> Server Error!!'),
                200: data => {
                    let loading = $('#loading');
                    let message = loading.find('span.loading-message');
                    let wheel = loading.find('div.loading-wheel');

                    if (data.id) {
                        /* Start File Download */
                        loading.fadeOut();
                    } else {
                        message.fadeOut(() => {
                            message.text('Oops... Something bad happened, please try again :(');
                            message.animate({
                                marginLeft: -(message.width() / 2),
                            }, 'fast');
                            message.fadeIn(() => {
                                loading.append($('<a href="./" class="loading-link btn waves-effect waves-light blue darken-1">Reload Page</a>').hide().fadeIn(600));
                            }); 
                        });
                    }
                }
            }
        });
    }

    /* Form Validation Method */
    $.fn.hasBlankValueFields = function (callback) {
        var hasblank = false;
        var blankfields = [];
        $(this).find('input, select').each(function (i, el) {
            if ($(el).val() === '' || $(el).val() === undefined || $(el).val() === null || $(el).val() === 'null') {
                hasblank = true;
                blankfields.push(el);
            }

        });
        if (typeof callback === 'function')
            callback(blankfields);
        return hasblank;
    }
});