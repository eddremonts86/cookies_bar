$(document).ready(function () {
    function get_additional_domains() {
        a = document.createElement("a");
        a.href = window.location.href;
        return a.hostname.replace(/^www/, '');
    }

    let dataslidervalue = null;
    let cookieTypeAgree = 'GDPR_OPTIN';
    let cookie_value = Cookies.get(cookieTypeAgree);
    let additional_domain = get_additional_domains();


    switch(cookie_value) {
        case 'no':
            dataslidervalue = 1;
            break;

        default:
            dataslidervalue = 2;
    }

    $('#ex19').bootstrapSlider();
    $('#ex19').bootstrapSlider('setValue', dataslidervalue);
    $('#aggree').on( "click",function() {
        let agreeType  = $('#ex19').val();
        switch(agreeType) {
            case '1':
                $.each(Cookies.get(), function(key, value) {
                    Cookies.remove(key);
                    Cookies.remove(key, { 'domain': additional_domain });
                })
                Cookies.set(cookieTypeAgree, 'no');
                break;

            default:
                Cookies.set(cookieTypeAgree, 'yes');

        }
    })
});
