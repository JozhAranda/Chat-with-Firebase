var fireBaseRef = new Firebase("https://chatfirebaseprb.firebaseio.com/");

$("#submit-btn").bind("click", function() {

    var comment  = $("#comments");
    
    var usr_name = ($.cookie('name') === undefined) ? 'undefined' : $.cookie('name');
    
    var commentValue = $.trim(comment.val());
    
    if (commentValue.length === 0) {
        
        alert('Comentario es requerido!');

    } else {

        fireBaseRef.push({comment: commentValue, name: usr_name}, function(error) {
                    
            if (error !== null) {

                alert('No habilitado para comentarios!');
            }
        });

        comment.val("");
    }

    return false;
});

fireBaseRef.on('child_added', function(snapshot) {
    
    var uniqName = ($.cookie('name') === undefined) ? snapshot.name() : snapshot.val().name;
    var comment  = snapshot.val().comment;
    var commentsContainer = $('#comments-container');
        
    $('<div/>', {class: 'comment-container'})
        .html('<span class="label label-default">Comment ' 
            + uniqName + '</span>' + comment).appendTo(commentsContainer);
        
    commentsContainer.scrollTop(commentsContainer.prop('scrollHeight'));
});