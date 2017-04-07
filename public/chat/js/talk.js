$(document).ready(function () {

    // Set CSRF Headers
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Display bottom of message list (most recent messages) by default when page is loaded.
    $('#chat-history').scrollTop($('#chat-history')[0].scrollHeight);

    // When message is sent, scroll to the bottom of the message list when new message is added.
    $( "#talkSendMessage" ).submit(function( event ) {
        setTimeout((function() {
            $('#chat-history').scrollTop($('#chat-history')[0].scrollHeight);
        }), 2000);
    });


    // When send button is clicked, submit message contents and sender info using ajax.
    $('#talkSendMessage').on('submit', function(e) {
        e.preventDefault();
        var url, request, tag, data;
        tag = $(this);
        url = __baseUrl + '/ajax/message/send';
        data = tag.serialize();

        request = $.ajax({
            method: "post",
            url: url,
            data: data
        });

        request.done(function (response) {
            if (response.status == 'success') {
                $('#talkMessages').append(response.html);
                tag[0].reset();
            }
        });

    });


    // Delete message
    $('body').on('click', '.talkDeleteMessage', function (e) {
        e.preventDefault();
        var tag, url, id, request;

        tag = $(this);
        id = tag.data('message-id');
        url = __baseUrl + '/ajax/message/delete/' + id;

        if(!confirm('Are you sure you want to delete this message?')) {
            return false;
        }

        request = $.ajax({
            method: "post",
            url: url,
            data: {"_method": "DELETE"}
        });

        request.done(function(response) {
           if (response.status == 'success') {
                $('#message-' + id).hide(500, function () {
                    $(this).remove();
                });
           }
        });
    })
});
