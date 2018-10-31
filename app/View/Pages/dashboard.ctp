<div class="top-message" id="welcome-message">
    <span>Welcome to</span>
    <span>Pamantasan Ng Lungsod ng Muntinlupa</span>
    <span>Feedback Portal</span>

    <div class="top-message-description">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero esse quaerat optio veniam, consequuntur fugit amet explicabo ea officia molestiae? Vitae perspiciatis, reiciendis adipisci repudiandae non saepe modi repellat est?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero esse quaerat optio veniam, consequuntur fugit amet explicabo ea officia molestiae? Vitae perspiciatis, reiciendis adipisci repudiandae non saepe modi repellat est?</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero esse quaerat optio veniam, consequuntur fugit amet explicabo ea officia molestiae? Vitae perspiciatis, reiciendis adipisci repudiandae non saepe modi repellat est?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero esse quaerat optio veniam, consequuntur fugit amet explicabo ea officia molestiae? Vitae perspiciatis, reiciendis adipisci repudiandae non saepe modi repellat est?</p>
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