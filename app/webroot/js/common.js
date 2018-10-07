$(function() {
    handleFeedbackModal();
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