$('#notifcation-btn').click(function(){
    $('#notification-room').is(':visible') ? $('#notification-room').fadeOut(300) : $('#notification-room').fadeIn(300);
});

$(document).click(function(event) {
    var container = $("#notification-room");
    if (!container.is(event.target) && !container.has(event.target).length && event.target.id !== 'notifcation-btn') {
        container.is(':visible') && container.fadeOut(300);
    }
});