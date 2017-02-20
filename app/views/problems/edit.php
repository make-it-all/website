<div class="page_actions">
  <h1>Edit Problem</h1>
</div>

<?php $this->form_for($problem, '/problems', ['class'=>'narrow_form']); ?>

  <?php $this->render('form_errors', ['record'=>$problem]); ?>

  <?php $this->text_field($problem, 'call_id'); ?>
  <?php $this->text_field($problem, 'subject'); ?>
  <?php $this->text_field($problem, 'keywords'); ?>
  <?php $this->text_field($problem, 'description'); ?>
  <div class="field">
    <label for="problems_assigned_to">Specialist</label>
    <select id="problems_assigned_to" name="problems[assigned_to]" data-personnel-selector='true'>
      <option value="">-- Please Select -- </option>
      <?php foreach (User::specialists()->order('name ASC')->results() as $user): ?>
        <?php if ($problem->assigned_to == $user->id()): ?>
          <option value="<?php echo $user->id(); ?>" selected data-email="<?php echo $user->email; ?>"><?php echo $user->name; ?></option>
        <?php else: ?>
          <option value="<?php echo $user->id(); ?>" data-email="<?php echo $user->email; ?>"><?php echo $user->name; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  <div class="actions">
    <?php $this->submit_button('Update Problem'); ?>
  </div>

</form>
