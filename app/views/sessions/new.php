<?php echo $this->image_tag('logo'); ?>
<h1>Sign In</h1>
<?php echo $error ?? ''; ?>
<form action="/login" method="POST" id="login_form">
  <?php $this->email_field('session', 'email', $email ?? ''); ?>
  <?php $this->password_field('session', 'password', ''); ?>
  <div class="actions">
    <?php $this->submit_button('login'); ?>
  </div>
</form>
