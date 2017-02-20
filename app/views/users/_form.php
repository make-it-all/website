<div class="page_actions">
  <h1>Create User</h1>
  <?php if (!$user->personnel_id === null): ?>
    <a href="/personnel/<?php echo $user->personnel_id; ?>"></a>
  <?php endif; ?>
</div>

<?php $this->form_for($user, '/users', ['class'=>'narrow_form']); ?>

  <?php $this->render('form_errors', ['record'=>$user]); ?>

  <div class="field">
    <label for="user_personnel_id">Personnel</label>
    <select id="user_personnel_id" name="user[personnel_id]" data-personnel-selector='true'>
      <option value="">-- Please Select -- </option>
      <?php foreach (Personnel::without_user()->order('name ASC')->results() as $personnel): ?>
        <?php if ($user->personnel_id == $personnel->id()): ?>
          <option value="<?php echo $personnel->id(); ?>" selected data-email="<?php echo $personnel->email; ?>"><?php echo $personnel->name; ?></option>
        <?php else: ?>
          <option value="<?php echo $personnel->id(); ?>" data-email="<?php echo $personnel->email; ?>"><?php echo $personnel->name; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>
  <?php $this->text_field($user, 'name'); ?>
  <?php $this->text_field($user, 'email'); ?>
  <?php $this->password_field($user, 'password', ''); ?>
  <?php $this->text_field($user, 'role'); ?>
  <div class="actions">
    <?php $this->submit_button($edit_type.' User'); ?>
  </div>

</form>
