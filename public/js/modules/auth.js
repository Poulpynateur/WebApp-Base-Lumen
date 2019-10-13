const auth = (function() {
    return {
        sendForm: function(username, password) {
            interface.form.toggleLoading();
            $.ajax({
                type: "POST",
                url: "/auth/login",
                data: JSON.stringify({ username: username, password: password }),
                contentType: "application/json",
                dataType: "json",

                success:function(data, status) {
                    localStorage.setItem('token', data.token);
                    interface.form.toggleLoading();
                },
                error: function(response, status, erreur) {
                    interface.form.setError();
                    interface.form.toggleLoading();
                }
            });
        }
    }
})();