$('.text-input-chat').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        event.preventDefault();
        var val = $(this).val();
        $(this).val('');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            url:$(this).attr('data-route'),
            data:{'pattern' : val},
            type:"post",
            success: function (result) {
                $('#chat-box-body').append(result.userView);
                $('#chat-box-body').animate({scrollTop: $('#chat-box-body').prop("scrollHeight")}, 500);
                setTimeout(() => {
                    $('#chat-box-body').append(result.typing);
                    $('#chat-box-body').animate({scrollTop: $('#chat-box-body').prop("scrollHeight")}, 500);

                    setTimeout(() => {
                        $('#demand' + result.demandId).detach();
                        $('#chat-box-body').append(result.response);
                        $('#chat-box-body').animate({scrollTop: $('#chat-box-body').prop("scrollHeight")}, 500);
                    }, 2000); 

                }, 600); 
            }
        }); 
    }
});

$('#chat-circle').click(function(){
    $('#chatting-room').is(':visible') ? $('#chatting-room').fadeOut(400) : $('#chatting-room').fadeIn(400);
});