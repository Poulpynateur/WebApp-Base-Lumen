/**
 * Will be remplace by Vuejs component interaction in the futur, with:
 * - Showing the type of error returned
 * - Highlight only concerned inputs
 */

const interface = (function() {
    return {
        form: {
            toggleLoading: function() {
                $('#login_loading').toggleClass('loading');
                $('#login_form').toggleClass('disabled');
            },
            setError: function() {
                $('#login_form').addClass('has-error');
            }
        }
    }
})();