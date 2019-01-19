<div class="top-message" id="welcome-message">
<?php echo $this->Session->flash();?>
  <span>Welcome to</span>
  <span>Pamantasan Ng Lungsod ng Muntinlupa</span>
  <span>Feedback Portal</span>
    <div class="top-message-description">
        <p>College is a great experience and exposes you to a lot of things you might no otherwise learn or experience. You learn to evaluate things, think for yourself, and become a more indenpendent person.Even if you decide not to use your specific degree, college can never be a waste of money if you get something important out of it. You degree is like money in the bank; it opens up a lot of opportunities for you.</p>
    </div>
</div>

<div class="admin" id="admin-page">
  <div class="admin-container">
    <div class="admin-course-description">
      <span class="admin-course-title"></span>
      <span class="admin-course-department"></span>
      <p></p>
    </div>
    <div class="admin-course-feedback">
      <div class="admin-feedback-title">
        <span>Feedback Form</span>
        <span class="admin-feedback-note">
          Thank you for visiting our office. It was a great pleasure to serve you. Please rate our service.
        </span>
        <div class="admin-feeback-guidelines">
          <span class="admin-guidelines-list">5 - Excellent</span>
          <span class="admin-guidelines-list">4 - Very Satisfactory</span>
          <span class="admin-guidelines-list">3 - Satisfactory</span>
          <span class="admin-guidelines-list">2 - Need Improvement</span>
          <span class="admin-guidelines-list">1 - Fail</span>
        </div>
      </div>

      <form class="admin-feedback-form" autocomplete="off">
        <ul>
          <li class="admin-feedback-form-item">
            <div class="admin-input-wrapper">
              <select class="admin-feedback-selectbox" name="rating_1">
                <option>5</option>
                <option>4</option>
                <option>3</option>
                <option>2</option>
                <option>1</option>
              </select>
              <label class="admin-feedback-label-rate">
                1. Courteous & Accomodating
              </label>
            </div>
          </li>
          <li class="admin-feedback-form-item">
              <div class="admin-input-wrapper">
                <select class="admin-feedback-selectbox" name="rating_2">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
                <label class="admin-feedback-label-rate">
                  2. Professional
                </label>
              </div>
            </li>
            <li class="admin-feedback-form-item">
              <div class="admin-input-wrapper">
                <select class="admin-feedback-selectbox" name="rating_3">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
                <label class="admin-feedback-label-rate">
                  3. Treated Fairly   
                </label>
              </div>
            </li>
            <li class="admin-feedback-form-item">
              <div class="admin-input-wrapper">
                <select class="admin-feedback-selectbox" name="rating_4">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
                <label class="admin-feedback-label-rate">
                  4. Provide accurate and adequate information
                </label>
              </div>
            </li>
            <li class="admin-feedback-form-item">
              <div class="admin-input-wrapper">
                <select class="admin-feedback-selectbox" name="rating_5">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
                <label class="admin-feedback-label-rate">
                  5. Provide Prompt service
                </label>
              </div>
            </li>
            <li class="admin-feedback-form-item">
              <div class="admin-input-wrapper">
                <select class="admin-feedback-selectbox" name="rating_6">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
                <label class="admin-feedback-label-rate">
                  6. With Clear instructions & Procedures
                </label>
              </div>
            </li>
            <li class="admin-feedback-form-item">
              <div class="admin-input-wrapper">
                <select class="admin-feedback-selectbox" name="rating_7">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
                <label class="admin-feedback-label-rate">
                  7. Has Adequate facilities/equipment
                </label>
              </div>
            </li>
            <li class="admin-feedback-form-item">
              <div class="admin-input-wrapper">
                <select class="admin-feedback-selectbox" name="rating_8">
                  <option>5</option>
                  <option>4</option>
                  <option>3</option>
                  <option>2</option>
                  <option>1</option>
                </select>
                <label class="admin-feedback-label-rate">
                  8. I am satisfied with the service i received.
                </label>
              </div>
            </li>
          </ul>
          <div class="admin-feedback-emai">
            <label class="admin-feedback-label">Email Address: <span class="required">*</span></label>
            <input type="email" class="admin-feedback-input" placeholder="Email Address" name="email">
            <span class="admin-feedback-error" id="email"></span>
          </div>

          <div class="admin-feedback-msg">
            <textarea class="admin-feedback-textarea" placeholder="write your suggestions/feedback..." name="suggestion"></textarea>
            <span class="admin-feedback-error"></span>
            <button class="button-publish" id="submit">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>
<input type="hidden" value="<?php echo !empty($category[0]) ? $category[0] : '' ?>" id="getDepartment">
<input type="hidden" value="<?php echo !empty($category[1]) ? $category[1] : '' ?>" id="getDepartmentAdmin">

<script>
  
  $(function() {
    handleDashboard();
    handleOnSubmitFeedback();
  });

  function handleDashboard() {
    let getDepartment = $("#getDepartment").val();
    let getDepartmentAdmin = $("#getDepartmentAdmin").val();

    if (getDepartment != '' && getDepartmentAdmin != '') {
      $('#admin-page').show();
      $('#welcome-message').hide();
      handleShowListOfCourses( getDepartment, getDepartmentAdmin );  
    }

    $('.navigation-link').on('click', function() {
      $.ajax({
        type: 'POST',
        url: 'pages/save_url_session',
        data: {category: $(this).data('category')},
        dataType: 'JSON',
        success: function (res) {
        }
      });
    });

    $('.header-logo').on('click', function () {
      $.ajax({
        type: 'POST',
        url: 'pages/delete_session',
        success: function (res) {
          window.location.reload();
        }
      });
    }); 
  }

  function handleOnSubmitFeedback() {
    $('#submit').on('click', function(e) {
      e.preventDefault();
      let categories = $('form').attr('id');
      let serialize_data = $('form').serializeArray();
      let split_categories = categories.split('-');
      let department_name = split_categories[0];
      let url = "";
      
      if (split_categories[1] === "faculty") {
          url = "faculty_feedbacks/add"
      }
      if (split_categories[1] === "dean") {
          url = "dean_feedbacks/add"
      }
      $.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: url,
        data: {serialize_data, 'department_name': department_name},
        success : function (res) {
          if (res['error'] != '') {
            $('span#email').text(res['error']);
          } 
          if (res['success']) {
            window.location.reload();
          }
        }
      });
    });
  }
</script>