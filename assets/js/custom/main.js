$(function(){

    if ($('.invitation-page').length) {
        invitationFooter();
    }

    function invitationFooter() {
        var popup_btn = $('.invitation-btns a'),
            popup_box = $('.invitation-popup'),
            popup_close = $('.popup-close')

        popup_btn.on('click', function(e){
            e.preventDefault();
            var _this = $(this)
                content = _this.data('trigger')

            popup_box.each(function(){
                $(this).removeClass('show-popup')
                if ($(this).data('popup') == content) {
                    $(this).addClass('show-popup')
                }
            })
        })

        popup_close.on('click', function(e){
            $(this).parent().parent().removeClass('show-popup')
        })
    }
})