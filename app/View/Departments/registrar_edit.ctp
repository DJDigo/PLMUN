<div class="panel-title">
  <h3>EDIT DEAN</h3>
</div>
<?php echo $this->Session->flash(); ?>
<div class="panel-container">
  <div class="panel-content">
    <?php echo $this->Form->create('Registrar') ?>
        <div class="form-content">
            <div class="form-list">
                <label class="form-label">Name:</label>
                <?php echo $this->Form->input('title', [
                    'type'  => 'text',
                    'div'   => false,
                    'label' => false,
                    'class' => 'form-input'
                ]); ?>
            </div>
            <div class="form-list">
                <label class="form-label">Description:</label>
                <?php echo $this->Form->input('description', [
                    'type'  => 'textarea',
                    'div'   => false,
                    'label' => false,
                    'class' => 'form-input form-textarea'
                ]); ?> 
            </div>
            <?php echo $this->Form->input('department_id', ['type' => 'hidden']); ?>
            <div class="form-list-button">
                <input type="submit" class="form-button">
            </div>
        </div>
    <?php echo $this->Form->end(); ?>
  </div>
</div>