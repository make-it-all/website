<?php $this->image_tag('logo'); ?>
<h1>Sign In</h1>
<?php echo $error ?? ''; ?>
<form action="/login" method="POST" id="login_form">
  <?php $this->email_field('session', 'email', $email ?? ''); ?>
  <?php $this->password_field('session', 'password', ''); ?>
  <div class="actions">
    <?php $this->submit_button('login'); ?>
  </div>
</form>
<div id="language_bar">
 <a href="https://make-it-all-demo.herokuapp.com">English</a>
 <a href="https://make-it-all-demo-german.herokuapp.com">Deutsch</a>
 <a href="https://make-it-all-demo-chinese.herokuapp.com">中文(简体)</a>
 <a href="https://make-it-all-demo-arabic.herokuapp.com">العربية</a>
</div>
