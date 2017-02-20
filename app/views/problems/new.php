<div class="page_actions">
  <h1><?php echo $this->i('form.new_problem'); ?></h1>
</div>

<?php $this->form_for($problem, '/problems', ['class'=>'narrow_form']); ?>

  <?php $this->render('form_errors', ['record'=>$problem]); ?>

  <div class="field">
    <label for="call_id_field"><?php echo $this->i('table_headings.caller_id'); ?></label>
    <input type="text" id="call_id_field" name="problem[call_id]" value="">
  </div>

  <div class="field">
    <label for="specializations"><?php echo $this->i('table_headings.specializations'); ?></label>
    <select id="specializations" name="specializations" data-personnel-selector='true'>
      <option value=""><?php echo $this->i('form.select'); ?></option>
      <?php foreach (Specialization::all()->order('name ASC')->results() as $specialization): ?>
        <?php if ($problem->specializations == $specialization->id()): ?>
          <option value="<?php echo $specialization->id(); ?>"><?php echo $specialization->name; ?></option>
        <?php else: ?>
          <option value="<?php echo $specialization->id(); ?>"><?php echo $specialization->name; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>

<div class="field">
  <label for="keywords_field"><?php echo $this->i('table_headings.keywords'); ?></label>
  <input type="text" id="keywords_field" name="problem[keywords]" value="">
</div>

<div class="field">
  <label for="description_field"><?php echo $this->i('table_headings.description'); ?></label>
  <input type="text" id="description_field" name="problem[description]" value="">
</div>

  <div class="field">
    <label for="problems_assigned_to"><?php echo $this->i('roles.specialists'); ?></label>
    <select id="problems_assigned_to" name="problems[assigned_to]" data-personnel-selector='true'>
      <option value=""><?php echo $this->i('form.select'); ?></option>
      <?php foreach (User::specialists()->order('name ASC')->results() as $user): ?>
        <?php if ($problem->assigned_to == $user->id()): ?>
          <option value="<?php echo $user->id(); ?>" selected data-email="<?php echo $user->email; ?>"><?php echo $user->name; ?></option>
        <?php else: ?>
          <option value="<?php echo $user->id(); ?>" data-email="<?php echo $user->email; ?>"><?php echo $user->name; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="actions">
    <?php $this->submit_button(echo $this->i('form.new_problem')); ?>
  </div>

</form>
