$(function() {
  handleFeedbackModal();
  handleClickMenu();
});


// SHOW SUGGESTIONS AND FEEDBACK MODAL
function handleFeedbackModal() {
  $('html').delegate('.feedback-results', 'click',function() {
    $('.modal').fadeIn(300);
    $('.modal-course-title').text($(this).parents('.admin-item').find('.admin-name').text());
    $('.modal-course-department').text($(this).parents('.admin-item').find('.admin-department').text());
    $('.modal-feedback-form').attr('id',$(this).parents('.admin-item').data('category'));
  }); 

  $('.close-modal').on('click', function() {
    $('.modal').fadeOut(300);
    $('.modal-course-title, .modal-course-department').text('');
    $('.modal-feedback-form').attr('id','');
    $('.modal-feedback-input, .modal-feedback-textarea').val('');
    $('.modal-feedback-selectbox').val(5)
  })
}


// DISPLAY THE COURSES OR ADMINS 
function handleShowListOfCourses( department, departmentAdmin ) {
  $.ajax({
    type: 'POST',
    url:  './files/plmun.json',
    data: { 'department': 10 },
    dataType: 'json',
    success: function(response) {
      response[department][0][departmentAdmin].forEach((value,key) => {
        if (departmentAdmin == 'dean') {
          $('#department-admin').text(value['department'] + " Dean " + value['facultyName']);
        } else {
          $('#department-admin').text(value['department'] + " " + value['facultyName']);
        }
        $('#admin-list').append(
          `<li class="admin-item" data-category="`+ department + '-' + departmentAdmin +`">
            <div class="admin-description">
              <span class="admin-name">`+ value['facultyName'] + `</span>
              <span class="admin-department">`+ value['department'] +`</span>
              <p>`+ value['description'] +`</p>
            </div>
            <a class="feedback-results">
              <span>Comments and Suggestions (<small class="admin-suggestions-rate">`+ value['numbersOfFeedback'] +`</small>)</span>
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
    $('#admin-page').fadeIn(300);
    $('#welcome-message').fadeOut();
    let getDepartmentAdmin = splitDepartment[1];
    let getDepartment = splitDepartment[0];
  
    $('#admin-list, #department-admin').html('');
    handleShowListOfCourses( getDepartment, getDepartmentAdmin ); 
  });
}