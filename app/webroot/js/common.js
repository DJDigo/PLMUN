$(function() {
  handleClickMenu();
});

// DISPLAY THE COURSES OR ADMINS 
function handleShowListOfCourses( department, departmentAdmin ) {
  $.ajax({
    type: 'POST',
    url:  './files/plmun.json',
    data: { 'department': 10 },
    dataType: 'json',
    success: function(response) {
      response[department][0][departmentAdmin].forEach((value,key) => {
        setTimeout(function(){
          $('.admin-course-title').text(value['facultyName']);
          $('.admin-course-department').text(value['department']);
          $('.admin-course-description p').html(value['description']);
          $('.admin-feedback-form').attr('id',department +'-'+departmentAdmin);
        },300)
      });
    }
  })
}

// GET THE HEADER MENU ID WHEN CLICK
function handleClickMenu() {
  $('.navigation-link').on('click', function() {
    let getDataCategory = $(this).data('category');
    let splitDepartment = getDataCategory.split('-');
    $('.admin').fadeOut(300);
    $('.admin-feedback-selectbox').val(5);
    $('.admin-feedback-input, .admin-feedback-textarea').val('');

    setTimeout(function(){
      $('.admin').fadeIn(300);
    },100)

    $('#welcome-message').fadeOut();
    let getDepartmentAdmin = splitDepartment[1];
    let getDepartment = splitDepartment[0];
    handleShowListOfCourses( getDepartment, getDepartmentAdmin ); 
  });
}