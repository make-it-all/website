<div class="page_actions">
  <h1><?php echo $this->i('form.new_call'); ?></h1>
</div>

<?php $this->form_for($call, '/calls', ['class'=>'narrow_form']); ?>

  <?php $this->render('form_errors', ['record'=>$call]); ?>

  <div class="field">
    <label for="call_operator_id"><?php echo $this->i('roles.operator'); ?></label>
    <select id="call_operator_id" name="call[operator_id]">
      <option value=""><?php echo $this->i('form.select'); ?></option>
      <?php foreach (User::all()->order('name ASC')->results() as $operator): ?>
        <?php if ($call->operator_id == $operator->id()): ?>
          <option value="<?php echo $operator->id(); ?>" selected><?php echo $operator->name; ?></option>
        <?php else: ?>
          <option value="<?php echo $operator->id(); ?>"><?php echo $operator->name; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="field">
    <label for="call_caller_id"><?php echo $this->i('table_headings.caller_id'); ?></label>
    <select id="call_caller_id" name="call[caller_id]">
      <option value=""><?php echo $this->i('form.select'); ?></option>
      <?php foreach (Personnel::all()->order('name ASC')->results() as $personnel): ?>
        <?php if ($call->caller_id == $personnel->id()): ?>
          <option value="<?php echo $personnel->id(); ?>" selected><?php echo $personnel->name; ?></option>
        <?php else: ?>
          <option value="<?php echo $personnel->id(); ?>"><?php echo $personnel->name; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>

<div class="field">
  <label for="description_field"><?php echo $this->i('table_headings.description'); ?></label>
  <textarea name="call[description]"></textarea>
</div>

  <div class="actions">
    <?php $this->submit_button($this->i('form.new_call')); ?>
  </div>

</form>
