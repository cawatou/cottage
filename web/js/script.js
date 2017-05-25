$(document).ready(function() {
    if($("input").is("#active_category")){
        var active_cat = $('#active_category').val();
        $('[data-id="'+active_cat+'"]').trigger('click');
    }

    // Отправка заявки на обратный звонок
    $('.callback_btn').on('click', function(){
        $('.modal').hide();
        $('.callback_modal').show();
    })

    $('.callback_modal .close').on('click', function(){
        $('.callback_modal').hide()
    })

    $('#callbacksend').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: '/callbacksend',
            data: $('#callbacksend').serialize(),
            success: function(res){
                if(res = 'done'){
                    $('.callback_modal').hide();
                    $('.callback_modal input[type=text]').val('');
                    alert('Ваше сообщение отправлено');
                }else if(res = 'error'){
                    alert('Произошла ошибка при отправке сообщения');
                }
            }
        })
    })

    // Отправка заявки на обратную связь с главной страницы
    $(document).on('click', '.modalmain_btn', function(e){
        console.log('click');
        e.preventDefault();
        var mail_item = $('#mail_item').val();
        if(mail_item) {
            console.log(mail_item);
            $('#item_name').val(mail_item);
        }
        $('.modal').hide();
        $('.main_modal').show();
    })

    $('.main_modal .close').on('click', function(){
        $('.main_modal').hide()
    })
})

/* Переключение слайда конопками клавиатуры */
$(document).keyup(function (e) {
    if(e.keyCode === 37) $('.arrow-left').click();
    if(e.keyCode === 39) $('.arrow-right').click();
})

// Увеличение изображений на главной при наведении
$(".carousel-item").hover(function() {
    $(this).addClass("vis-decor");
}, function() {
    $(this).removeClass("vis-decor");
});

// Увеличение иконки обратной связи при наведении
$(".modalmain_btn").hover(function() {
    $(this).addClass("glyphicons_zoom");
}, function() {
    $(this).removeClass("glyphicons_zoom");
});