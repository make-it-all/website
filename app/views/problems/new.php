<div class="page_actions">
  <h1>Create Problem</h1>
</div>

<?php $this->form_for($problem, '/problems', ['class'=>'narrow_form']); ?>

  <?php $this->render('form_errors', ['record'=>$problem]); ?>

  <?php $this->text_field($problem, 'call_id'); ?>
  <?php $this->text_field($problem, 'subject'); ?>
  <?php $this->text_field($problem, 'keywords'); ?>
  <?php $this->text_field($problem, 'description'); ?>
  <?php
    if ($problem->assigned_to !== null) {
      $this->text_field($problem, 'assigned_to', '');
    } else {
      $this->text_field($problem, 'assigned_to');
    } ?>
  <?php $this->text_field($problem, 'solution_id'); ?>
  <div class="actions">
    <?php $this->submit_button('Create Problem'); ?>
  </div>

</form>
