<?php echo $this->image_tag('logo'); ?>
<h1><?php echo $this->i('login.sign_in')?></h1>
<?php echo $error ?? ''; ?>
<form action="/login" method="POST" id="login_form">
  <?php $this->email_field('session', $this->i('table_headings.email') , $email ?? ''); ?>
  <?php $this->password_field('session', $this->i('login.password'), ''); ?>
  <div class="actions">
    <?php $this->submit_button($this->i('login.login')); ?>
  </div>
</form>
