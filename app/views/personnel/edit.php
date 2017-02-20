<div class="page_actions">
  <h1><?php echo $this->i('form.edit_personnel'); ?></h1>
</div>

<?php $this->form_for($personnel, '/personnel;', ['class'=>'narrow_form']); ?>

  <?php $this->render('form_errors', ['record'=>$personnel]); ?>

  <div class="field">
    <label for="name_field"><?php echo $this->i('table_headings.name'); ?></label>
    <input type="text" id="name_field" name="user[name]" value="">
  </div>

  <div class="field">
    <label for="email_field"><?php echo $this->i('table_headings.email'); ?></label>
    <input type="text" id="email_field" name="user[email]" value="">
  </div>

<div class="field">
  <label for="telephone_number_field"><?php echo $this->i('table_headings.telephone_number'); ?></label>
  <input type="text" id="telephone_number_field" name="personnel[telephone_number]" value="0531234122">
</div>
  <?php $this->text_field($personnel, 'job_title'); ?>

  <div class="field">
    <label for="personnel_branch_id"><?php echo $this->i('table_headings.branch_id'); ?></label>
    <select id="personnel_branch_id" name="personnel[branch_id]" data-personnel-selector='true'>
      <option value=""><?php echo $this->i('form.select'); ?></option>
      <?php foreach (Branch::all()->order('name ASC')->results() as $branch): ?>
        <?php if ($personnel->branch_id == $branch->id()): ?>
          <option value="<?php echo $branch->id(); ?>"><?php echo $branch->name; ?></option>
        <?php else: ?>
          <option value="<?php echo $branch->id(); ?>"><?php echo $branch->name; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="field">
    <label for="personnel_department_id"><?php echo $this->i('table_headings.department_id'); ?></label>
    <select id="personnel_department_id" name="personnel[branch_id]" data-personnel-selector='true'>
      <option value=""><?php echo $this->i('form.select'); ?></option>
      <?php foreach (Department::all()->order('name ASC')->results() as $department): ?>
        <?php if ($personnel->department_id == $department->id()): ?>
          <option value="<?php echo $department->id(); ?>"><?php echo $department->name; ?></option>
        <?php else: ?>
          <option value="<?php echo $department->id(); ?>"><?php echo $department->name; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="actions">
    <?php $this->submit_button($this->i('form.edit_personnel')); ?>
  </div>
</form>
