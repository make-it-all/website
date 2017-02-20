<!-- <div class="page_actions">
  <h1>Create User</h1>
</div> -->
<div id="form_page_head">
  <div id="page_title">
    <h1><?php echo $this->i('form.create_user'); ?></h1>
  </div>
  <?php if (!$user->personnel_id === null): ?>
    <a href="/personnel/<?php echo $user->personnel_id; ?>"></a>
  <?php endif; ?>
</div>


<?php $this->form_for($user, '/users', ['class'=>'narrow_form']); ?>

  <?php $this->render('form_errors', ['record'=>$user]); ?>

  <div class="field">
    <label for="user_personnel_id"><?php echo $this->i('titles.personnel'); ?></label>
    <select id="user_personnel_id" name="user[personnel_id]" data-personnel-selector='true'>
      <option value=""><?php echo $this->i('form.select'); ?></option>
      <?php foreach (Personnel::without_user()->order('name ASC')->results() as $personnel): ?>
        <?php if ($user->personnel_id == $personnel->id()): ?>
          <option value="<?php echo $personnel->id(); ?>" selected data-email="<?php echo $personnel->email; ?>"><?php echo $personnel->name; ?></option>
        <?php else: ?>
          <option value="<?php echo $personnel->id(); ?>" data-email="<?php echo $personnel->email; ?>"><?php echo $personnel->name; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="field">
    <label for="name_field"><?php echo $this->i('table_headings.name'); ?></label>
    <input type="text" id="name_field" name="user[name]" value="">
  </div>

  <div class="field">
    <label for="email_field"><?php echo $this->i('table_headings.email'); ?></label>
    <input type="text" id="email_field" name="user[email]" value="">
  </div>

<div class="field">
  <label for="password_field"><?php echo $this->i('login.password'); ?></label>
  <input type="password" id="password_field" name="user[password]" value="">
</div>

<div class="field">
  <label for="role_field"><?php echo $this->i('table_headings.role'); ?></label>
  <input type="text" id="role_field" name="user[role]" value="">
</div>

  <div class="actions">
    <?php $this->submit_button($this->i('form.create_user')); ?>
  </div>

</form>
