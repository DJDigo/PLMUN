<div class="panel-title">
  <h3>View Review</h3>
</div>

<div class="panel-container">
  <div class="panel-content">
    <form>
        <div class="form-content">
            <div class="form-list">
                <label class="review-label">Department Name:</label>
                <span class="review-span">CITCS</span>
            </div>
            <div class="form-list">
                <label class="review-label">Department C/O:</label>
                <span class="review-span">Faculty</span>
            </div>
            <div class="form-list">
                <label class="review-label">Ratings: </label>
                <ul class="review-list">
                    <li class="review-item">
                        <span class="<?php echo $feedback['Feedback']['rating_1'] <= 2 ? 'negative' : '' ?>"> <?php echo $feedback['Feedback']['rating_1'] ?> ~ </span>
                        <span>Courteous & Accomodating</span>
                    </li>
                    <li class="review-item">
                        <span class="<?php echo $feedback['Feedback']['rating_2'] <= 2 ? 'negative' : '' ?>"> <?php echo $feedback['Feedback']['rating_2'] ?> ~ </span>
                        <span>Professional</span>
                    </li>
                    <li class="review-item">
                        <span class="<?php echo $feedback['Feedback']['rating_3'] <= 2 ? 'negative' : '' ?>"> <?php echo $feedback['Feedback']['rating_3'] ?> ~ </span>
                        <span>Treated Fairly</span>
                    </li>
                    <li class="review-item">
                        <span class="<?php echo $feedback['Feedback']['rating_4'] <= 2 ? 'negative' : '' ?>"> <?php echo $feedback['Feedback']['rating_4'] ?> ~ </span>
                        <span>Provide accurate and adequate information</span>
                    </li>
                    <li class="review-item">
                        <span class="<?php echo $feedback['Feedback']['rating_5'] <= 2 ? 'negative' : '' ?>"> <?php echo $feedback['Feedback']['rating_5'] ?> ~ </span>
                        <span>Provide Prompt service</span>
                    </li>
                    <li class="review-item">
                        <span class="<?php echo $feedback['Feedback']['rating_6'] <= 2 ? 'negative' : '' ?>"> <?php echo $feedback['Feedback']['rating_6'] ?> ~ </span>
                        <span>With Clear instructions & Procedures</span>
                    </li>
                    <li class="review-item">
                        <span class="<?php echo $feedback['Feedback']['rating_7'] <= 2 ? 'negative' : '' ?>"> <?php echo $feedback['Feedback']['rating_7'] ?> ~ </span>
                        <span>Has Adequate facilities/equipment</span>
                    </li>
                    <li class="review-item">
                        <span class="<?php echo $feedback['Feedback']['rating_8'] <= 2 ? 'negative' : '' ?>"> <?php echo $feedback['Feedback']['rating_8'] ?> ~ </span>
                        <span>I am satisfied with the service i received.</span>
                    </li>
                </ul>
            </div>
            <div class="form-list">
                <label class="review-label">Comment: </label>
                <p class="comments"><?php echo $feedback['Feedback']['suggestion'] ?></p> 
            </div>
            <div class="form-list-button">
                <a href="<?php echo $url.'superadmin/reviews' ?>" class="back-button"> BACK </a>
            </div>
        </div>
    </form>
  </div>
</div>