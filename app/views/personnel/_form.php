<h1><?php echo $edit_type ?> Personnel</h1>
<div class="actions">
  <input type="button" name="cancel" value="Cancel">
</div>

<?php $this->form_for($personnel, '/personnel/new', ['class'=>'with_panels']); ?>

  <?php if ($personnel->errors()->any()): ?>
    <ul>
      <?php foreach ($personnel->errors()->full_messages() as $msg): ?>
        <li><?php echo $msg; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <div id="main_form_panel">
    <div class="field">
      <?php $this->text_field($personnel, 'name'); ?>
    </div>
    <div class="field">
      <?php $this->text_field($personnel, 'email'); ?>
    </div>
    <div class="field">
      <?php $this->text_field($personnel, 'job_title'); ?>
    </div>
    <div class="field">
      <?php $this->text_field($personnel, 'personnel_identifier'); ?>
    </div>
    <div class="actions">
      <?php $this->submit_button($edit_type.' Personnel'); ?>
    </div>
  </div>
  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
      <div class="tab_heads_container">
        <label for="tab_1">Details</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <div class="field">
            <?php $this->text_field($personnel, 'telephone_number'); ?>
          </div>
          <div class="field">
            <?php $this->text_field($personnel, 'department_id'); ?>
          </div>
          <div class="field">
            <?php $this->text_field($personnel, 'branch_id'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
