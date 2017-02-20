<div class="page_actions">
  <h1>Create Personnel</h1>
</div>

<?php $this->form_for($personnel, '/personnel;', ['class'=>'narrow_form']); ?>

  <?php $this->render('form_errors', ['record'=>$personnel]); ?>

  <?php $this->text_field($personnel, 'name'); ?>
  <?php $this->text_field($personnel, 'email'); ?>
  <?php $this->text_field($personnel, 'telephone_number'); ?>
  <?php $this->text_field($personnel, 'job_title'); ?>
  <div class="field">
    <label for="personnel_branch_id">Branch</label>
    <select id="personnel_branch_id" name="personnel[branch_id]" data-personnel-selector='true'>
      <option value="">-- Please Select -- </option>
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
    <label for="personnel_department_id">Department</label>
    <select id="personnel_department_id" name="personnel[branch_id]" data-personnel-selector='true'>
      <option value="">-- Please Select -- </option>
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
    <?php $this->submit_button('Create Personnel'); ?>
  </div>
</form>
