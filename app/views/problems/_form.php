<h1><?php echo $edit_type ?> Problem</h1>
<div class="actions">
  <input type="button" name="cancel" value="Cancel">
</div>

<?php $this->form_for($problem, '/problems', ['class'=>'with_panels']); ?>

  <?php $this->render('form_errors', ['record'=>$problem]) ?>

  <div id="main_form_panel">
    <!-- <div class="field">
       $this->text_field($problem, 'submitted_by');
    </div> -->
    <!-- <div class="field">
       $this->text_field($problem, 'call_id');
    </div> -->
    <!-- <div class="field">
       $this->text_field($problem, 'assigned_to'); ?>
    </div> -->
    <div class="field">
      <?php $this->checkbox_field($problem, 'worked_on'); ?>
    </div>
    <div class="actions">
      <?php $this->submit_button($edit_type.' Problem'); ?>
    </div>
  </div>
  <div id="side_form_panel">


    <div class="tabs_container">
      <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
      <input type="radio" class="tab_controller" name="tab" id="tab_2" >
      <input type="radio" class="tab_controller" name="tab" id="tab_3" >
      <input type="radio" class="tab_controller" name="tab" id="tab_4" >
      <div class="tab_heads_container">
        <label for="tab_1">Description</label>
        <label for="tab_2">Hardware/Software</label>
        <label for="tab_3">Specialization</label>
        <label for="tab_4">Solution</label>
      </div>
      <div class="tab_panels_container">
        <div class="tab_panel">
          <fieldset>
            <input type="text" name="descripion" value="Description">
          </fieldset>
        </div>
        <div class="tab_panel">
          <div class="field">
            <label for="problem_hardware">Hardware</label>
            <select id="problem_hardware" name="problem[hardware_id]">
              <option value="">-- Please Select --</option>
              <?php foreach(Hardware::all()->results() as $hardware): ?>
                <?php $value = "$hardware->manufacturer - $hardware->model"; ?>
                <option value="<?php echo "$hardware->id()" ?>"><?php echo $value; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="field">
            <label for="problem_software">Software</label>
            <select id="problem_software" name="problem[software_id]">
              <option value="">-- Please Select --</option>
              <?php foreach(Software::all()->results() as $software): ?>
                <option value="<?php echo "$software->id()" ?>"><?php echo $software->name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="tab_panel">
          <div class="field">
            <label for="problem_specialization">Specialization Needed</label>
            <select id="problem_specialization" name="problem[specialization_id]">
              <option value="">-- Please Select --</option>
              <?php foreach(Specialization::all()->results() as $specialization): ?>
                <option value="<?php echo "$specialization->id()" ?>"><?php echo $specialization->name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="tab_panel">
          <div class="field">
            <?php $this->text_field($problem, 'solution_id'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
