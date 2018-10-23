$(function() {
    handleFeedbackModal();
    handleClickMenu();
});

// SHOW SUGGESTIONS AND FEEDBACK MODAL
function handleFeedbackModal() {
    $('html').delegate('.feedback-results', 'click',function() {
        $('.modal').fadeIn(300);
    }); 

    $('.close-modal').on('click', function() {
        $('.modal').fadeOut(300);
    })
}

function handleShowListOfCourses( department, departmentAdmin ) {
    $.ajax({
        type: 'POST',
        url:  './files/plmun.json',
        data: { 'courses': 10 },
        dataType: 'json',
        success: function(response) {
            response[department][0]['courses'].forEach((value,key) => {
                $('#course-department').text(value['department']);
                $('#course-list').append(
                    `<li class="courses-item">
                        <div class="courses-description">
                            <span class="course-name">`+ value['courseName'] + `</span>
                            <span class="course-department">`+ value['department'] +`</span>
                            <p>`+ value['description'] +`</p>
                        </div>
                        <a class="feedback-results">
                            <span>Comments and Suggestions (<small class="course-suggestions-rate">`+ value['numbersOfFeedback'] +`</small>)</span>
                        </a>
                    </li>`
                )
            });
        }
    })
}

function handleClickMenu() {
    $('.navigation-item-course, .navigation-link').on('click', function() {
        let getDataCategory = $(this).data('category');
        let splitDepartment = getDataCategory.split('-');
        let getDepartmentAdmin;
        let getDepartment;
        $('#course-page').fadeIn();
        $('#welcome-message').fadeOut();
        if ( $(this).hasClass('navigation-link')) {
            getDepartmentAdmin = splitDepartment[1];
        } else {
            getDepartment = splitDepartment[0];
        }
        $('#course-list').html('');
        $('#course-department').html('');
        handleShowListOfCourses( getDepartment, getDepartmentAdmin ); 
    });
}