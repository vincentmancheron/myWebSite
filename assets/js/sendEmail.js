function sendEmail() {
    var lastname = $("#lastname");
    var email = $("#email");
    var subject = $("#subject");
    var text = $("#text");

    if (isNotEmpty(lastname) && isNotEmpty(email) && isNotEmpty(body)) {
        $.ajax({
            url: 'controllers/form-ctrl.php',
            method: 'POST',
            dataType: 'json',
            data: {
                lastname: lastname.val(),
                email: email.val(),
                subject: subject.val(),
                body: body.val()
            },
            success: function (response) {
                $('#contactForm')[0].reset();
                $('.sent-notification').text("Message Sent Successfully.");
            }
        });
    }
}

function isNotEmpty(caller) {
    if (caller.val() == "") {
        caller.css('border', '1px solid red');
        return false;
    } else
        caller.css('border', '');

    return true;
}