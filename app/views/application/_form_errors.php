<?php if ($record->errors()->any()): ?>
  <div class="form_errors">
    <?php foreach ($record->errors()->full_messages() as $msg): ?>
      <div class="error"><?php echo $msg; ?></div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
