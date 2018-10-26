$(function() {
  handleFeedbackModal();
  handleClickMenu();
});


// SHOW SUGGESTIONS AND FEEDBACK MODAL
function handleFeedbackModal() {
  $('html').delegate('.feedback-results', 'click',function() {
    $('.modal').fadeIn(300);
    $('.modal-course-title').text($(this).parents('.courses-item').find('.course-name').text());
    $('.modal-course-department').text($(this).parents('.courses-item').find('.course-department').text());
  }); 

  $('.close-modal').on('click', function() {
    $('.modal').fadeOut(300);
  })
}


// DISPLAY THE COURSES OR ADMINS 
function handleShowListOfCourses( department, departmentAdmin ) {
  $.ajax({
    type: 'POST',
    url:  './files/plmun.json',
    data: { 'courses': 10 },
    dataType: 'json',
    success: function(response) {
      response[department][0][departmentAdmin].forEach((value,key) => {
        if (departmentAdmin == 'dean') {
          $('#course-department').text(value['department'] + " Dean " + value['facultyName']);
        } else {
          $('#course-department').text(value['department'] + " " + value['facultyName']);
        }
        $('#course-list').append(
          `<li class="courses-item">
            <div class="courses-description">
              <span class="course-name">`+ value['facultyName'] + `</span>
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

// GET THE HEADER MENU ID WHEN CLICK
function handleClickMenu() {
  $('.navigation-link').on('click', function() {
    let getDataCategory = $(this).data('category');
    let splitDepartment = getDataCategory.split('-');
    $('#course-page').fadeIn(300);
    $('#welcome-message').fadeOut();
    let getDepartmentAdmin = splitDepartment[1];
    let getDepartment = splitDepartment[0];
  
    $('#course-list, #course-department').html('');
    handleShowListOfCourses( getDepartment, getDepartmentAdmin ); 
  });
}