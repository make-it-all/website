<?php echo $this->image_tag('logo'); ?>
<h1><?php echo $this->i('login.sign_in')?></h1>
<?php echo $error ?? ''; ?>
<form action="/login" method="POST" id="login_form">

<div class="field">
  <label for="email_field"><?php echo $this->i('table_headings.email'); ?></label>
  <input type="email" id="email_field" name="session[email]" value="">
</div>

<div class="field">
  <label for="password_field"><?php echo $this->i('login.password'); ?></label>
  <input type="password" id="password_field" name="session[password]" value="">
</div>

  <div class="actions">
    <?php $this->submit_button($this->i('login.login')); ?>
  </div>
</form>
