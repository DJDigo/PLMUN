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
    <h2 id="department-admin"></h2>
    <ul id="admin-list">
    </ul>
</div>
<?php echo $this->element('modal'); ?>
<input type="hidden" value="<?php echo !empty($category[0]) ? $category[0] : '' ?>" id="getDepartment">
<input type="hidden" value="<?php echo !empty($category[1]) ? $category[1] : '' ?>" id="getDepartmentAdmin">
<script>    
    $(function() {
        let getDepartment = $("#getDepartment").val();
        let getDepartmentAdmin = $("#getDepartmentAdmin").val();

        if (getDepartment != '' && getDepartmentAdmin != '') {
            $('#admin-page').show();
            $('#welcome-message').hide();
            $('#admin-list, #department-admin').html('');
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
    });
</script>