<div class="feedback">
    <?php echo $this->Session->Flash();?>
    <div class="admin" id="admin-page" data-aos="fade-up" data-aos-duration="2000">
        <div class="admin-container">
            <div class="admin-course-description">
                <span class="admin-course-title"> <?php echo $registrar['Registrar']['title'] ?> </span>
                <span class="admin-course-department"><?php echo strtoupper($department[$registrar['Registrar']['department_id']]) ?></span>
                <p><?php echo $registrar['Registrar']['description'] ?></p>
                <a class="show-modal">Add Feedback</a>
            </div>
        </div>
    </div>
<div>
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

    <form class="admin-feedback-form" autocomplete="off" method="POST">
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
        <input type="hidden" name="department_id" value="<?php echo $id ?>">
        <input type="hidden" name="type" value="<?php echo $type['registrar'] ?>">
        <div class="admin-feedback-msg">
            <textarea class="admin-feedback-textarea" placeholder="write your suggestions/feedback..." name="suggestion"></textarea>
            <span class="admin-feedback-error"></span>
            <a class="button-close">Close</a>
            <button class="button-publish" id="submit">Submit</button>
        </div>
    </form>
</div>
<div class="backdrop"></div>
<script>

    AOS.init({
        easing: 'ease-in-out-sine'
    });

    $('.show-modal').on('click', function() {
        $('.admin-course-feedback, .backdrop').show();
    })

    $('.button-close').on('click', function() {
        $('.admin-course-feedback, .backdrop').hide();
    })
</script>