<?php if ($record->errors()->any()): ?>
  <h4>Sorry, errors prevented this form from saving.</h4>
  <ul class="form_errors">
    <?php foreach ($record->errors()->full_messages() as $msg): ?>
      <li class="error"><?php echo $msg; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
