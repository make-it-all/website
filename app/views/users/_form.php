<h1><?php echo $edit_type ?> User</h1>
<div class="actions">
  <input type="button" name="cancel" value="Cancel" href="/users/">
</div>
<?php $this->form_for($user, '/users/new', ['class'=>'with_panels']); ?>

    <?php if ($user->errors()->any()): ?>
      <ul>
        <?php foreach ($user->errors()->full_messages() as $msg): ?>
          <li><?php echo $msg; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div id="main_form_panel">

      <?php $this->text_field($user, 'name'); ?>
      <?php $this->text_field($user, 'email'); ?>
      <?php $this->password_field($user, 'password', ''); ?>
      <div class="actions">
        <?php $this->submit_button($edit_type.' User'); ?>
      </div>
    </div>
  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
      <div class="tab_heads_container">
        <label for="tab_1">Specializations</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <fieldset>
            <legend>Role</legend>
            <?php $this->checkbox_field($user, 'is_operator'); ?>
            <?php $this->checkbox_field($user, 'is_specialist'); ?>
            <?php $this->checkbox_field($user, 'is_admin'); ?>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</form>
