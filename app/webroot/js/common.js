$(function() {
    handleFeedbackModal();
    handleLikeAndDislike();
});

// SHOW SUGGESTIONS AND FEEDBACK MODAL
function handleFeedbackModal() {
    $('.feedback-results').on('click',function() {
        $('.modal').fadeIn(300);
    }); 

    $('.close-modal').on('click', function() {
        $('.modal').fadeOut(300);
    })
}

function handleLikeAndDislike() {
    $('.course-like').on('click',function(){
        let a = $(this).find('.course-like-rate').text();
        if ( $(this).hasClass('course-like-voted') == false ) {
            let c = +a + 1;
            $(this).find('.course-like-rate').text(c);
            $(this).addClass('course-like-voted');
        } else {
            let c = +a - 1;
            $(this).find('.course-like-rate').text(c);
            $(this).removeClass('course-like-voted');
        }
    });

    $('.course-dislike').on('click',function(){
        let a = $(this).find('.course-dislike-rate').text();
        if ( $(this).hasClass('course-dislike-voted') == 0 ) {
            let c = +a + 1;
            $(this).find('.course-dislike-rate').text(c);
            $(this).addClass('course-dislike-voted')            
        } else {
            let c = +a - 1;
            $(this).find('.course-dislike-rate').text(c);
            $(this).removeClass('course-dislike-voted')
        }
    });
            
}