$(document).ready(function() {
    fetchDataFromJSON();
});

function fetchDataFromJSON() {

    let $listPhones = [];

    $.getJSON('phones.json', function (data) {
        $.each(data, function (key, val) {

            $listPhones.push(val.phone);
        });
    });

    $("#phone_submit").click(function(event) {
        event.preventDefault();

        let $valueForm = $("#phone_phone").val();

        console.log(parseInt($valueForm));
        console.log($listPhones.indexOf(parseInt($valueForm)));

        if ($listPhones.indexOf(parseInt($valueForm)) !== -1) {

            location = window.location.href + "contacto";
        } else {
            errorPhone();
        }
    });
}

function errorPhone() {
    $('#error').addClass('error-active');

    $("#error").click(function(event) {
        $('#error').removeClass('error-active');
    });

}
