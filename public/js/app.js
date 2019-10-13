$('#login_submit').click(function() {
    auth.sendForm(
        $('#login_form').find("[name='username']").first().val(),
        $('#login_form').find("[name='password']").first().val()
    );
});