<div class="page_actions">
  <h1>Edit Calls</h1>
</div>

<?php $this->form_for($call, '/calls', ['class'=>'narrow_form']); ?>

  <?php $this->render('form_errors', ['record'=>$call]); ?>

  <?php
    if ($call->operator !== null) {
      $this->text_field($call, 'operator', '');
    } else {
      $this->text_field($call, 'operator');
    } ?>

  <?php $this->text_field($call, 'caller'); ?>
  <?php $this->text_field($call, 'description'); ?>
  <div class="actions">
    <?php $this->submit_button('Update Call'); ?>
  </div>

</form>
