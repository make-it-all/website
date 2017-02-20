<h1><?php echo $edit_type ?> Call</h1>
<div class="actions">
  <input type="button" name="cancel" value="Cancel">
</div>

<?php $this->form_for($call, '/calls/new', ['class'=>'with_panels']); ?>

  <?php $this->render('form_errors', ['record'=>$call]); ?>

  <div id="main_form_panel">
    <div class="field">
      <label for="caller_id_field">Caller</label>
      <select name="call[caller_id]">
        <option value="">-- Please Select --</option>
        <?php foreach(Personnel::all()->results() as $personnel): ?>
          <?php $value = "($personnel->personnel_identifier) $personnel->name"; ?>
          <option value="<?php echo "$personnel->id()" ?>"><?php echo $value ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="actions">
      <?php $this->submit_button($edit_type.'Call'); ?>
    </div>
  </div>
  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_2" checked>
      <input type="radio" class="tab_controller" name="tab" id="tab_1">
      <div class="tab_heads_container">
        <label for="tab_2">Problems</label>
        <label for="tab_1">Description</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <fieldset>
            <legend>Add Problem</legend>
            <a href="#">Add from existing</a>
            <select name="problems[existing][]">
              <?php $problems = Problem::all()->results(); ?>
              <?php foreach ($problems as $problem): ?>
                <option value="<?php $problem->id(); ?>"><?php echo $problem->identifier(); ?></option>
              <?php endforeach; ?>
              options
            </select>
            <a href="#">Add New</a>
            
          </fieldset>
        </div>
        <div class="tab_panel">
          <textarea name="calls[description]" placeholder="The call is about..."></textarea>
        </div>
      </div>
    </div>
  </div>
</form>
