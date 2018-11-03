<div class="modal" id="showModal">
    <div class="modal-container">
        <button class="close-modal" title="close the modal">x</button>
        <div class="modal-course-description">
            <span class="modal-course-title">INFORMATION TECHNOLOGY</span>
            <span class="modal-course-department">CITCS</span>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus sapiente culpa totam voluptatum commodi corporis deserunt sit amet quo laborum vel, repudiandae molestiae quaerat id consectetur at voluptate placeat eaque?
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus sapiente culpa totam voluptatum commodi corporis deserunt sit amet quo laborum vel, repudiandae molestiae quaerat id consectetur at voluptate placeat eaque?
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus sapiente culpa totam voluptatum commodi corporis deserunt sit amet quo laborum vel, repudiandae molestiae quaerat id consectetur at voluptate placeat eaque?
            </p>
        </div>
        <div class="modal-course-feedback">
            <div class="modal-feedback-title">
                <span>Feedback Form</span>
                <span class="modal-feedback-note">
                    Thank you for visiting our office. It was a great pleasure to serve you. Please rate our service.
                </span>
                <div class="modal-feeback-guidelines">
                    <span class="modal-guidelines-list">5 - Excellent</span>
                    <span class="modal-guidelines-list">4 - Very Satisfactory</span>
                    <span class="modal-guidelines-list">3 - Satisfactory</span>
                    <span class="modal-guidelines-list">2 - Need Improvement</span>
                    <span class="modal-guidelines-list">1 - Fail</span>
                </div>
            </div>

            <form class="modal-feedback-form" autocomplete="off">
                <ul>
                    <li class="modal-feedback-form-item">
                        <div class="modal-input-wrapper">
                            <select class="modal-feedback-selectbox" name="rating_1">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                            <label class="modal-feedback-label-rate">
                                1. Courteous & Accomodating
                            </label>
                        </div>
                    </li>
                    <li class="modal-feedback-form-item">
                        <div class="modal-input-wrapper">
                            <select class="modal-feedback-selectbox" name="rating_2">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                            <label class="modal-feedback-label-rate">
                                2. Professional
                            </label>
                        </div>
                    </li>
                    <li class="modal-feedback-form-item">
                        <div class="modal-input-wrapper">
                            <select class="modal-feedback-selectbox" name="rating_3">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                            <label class="modal-feedback-label-rate">
                                3. Treated Fairly   
                            </label>
                        </div>
                    </li>
                    <li class="modal-feedback-form-item">
                        <div class="modal-input-wrapper">
                            <select class="modal-feedback-selectbox" name="rating_4">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                            <label class="modal-feedback-label-rate">
                                4. Provide accurate and adequate information
                            </label>
                        </div>
                    </li>
                    <li class="modal-feedback-form-item">
                        <div class="modal-input-wrapper">
                            <select class="modal-feedback-selectbox" name="rating_5">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                            <label class="modal-feedback-label-rate">
                                5. Provide Prompt service
                            </label>
                        </div>
                    </li>
                    <li class="modal-feedback-form-item">
                        <div class="modal-input-wrapper">
                            <select class="modal-feedback-selectbox" name="rating_6">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                            <label class="modal-feedback-label-rate">
                                6. With Clear instructions & Procedures
                            </label>
                        </div>
                    </li>
                    <li class="modal-feedback-form-item">
                        <div class="modal-input-wrapper">
                            <select class="modal-feedback-selectbox" name="rating_7">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                            <label class="modal-feedback-label-rate">
                                7. Has Adequate facilities/equipment
                            </label>
                        </div>
                    </li>
                    <li class="modal-feedback-form-item">
                        <div class="modal-input-wrapper">
                            <select class="modal-feedback-selectbox" name="rating_8">
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                            <label class="modal-feedback-label-rate">
                                8. I am satisfied with the service i received.
                            </label>
                        </div>
                    </li>
                </ul>
                <div class="modal-feedback-emai">
                    <label class="modal-feedback-label">Email Address: <span class="required">*</span></label>
                    <input type="email" class="modal-feedback-input" placeholder="Email Address" name="email">
                    <span class="modal-feedback-error" id="email"></span>
                </div>

                <div class="modal-feedback-msg">
                    <textarea class="modal-feedback-textarea" placeholder="write your suggestions/feedback..." name="suggestion"></textarea>
                    <span class="modal-feedback-error"></span>
                    <button class="button-publish" id="submit">Publish</button>
                </div>
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
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
    });
</script>