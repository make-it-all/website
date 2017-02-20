<div id="side_bar">
  <section>
    <?php echo $this->link_to($this->i('titles.calls'), '/calls'); ?>
    </section>
    <section>
    <?php echo $this->link_to($this->i('titles.problems'), '/problems'); ?>
    </section>
    <section>
    <?php echo $this->link_to($this->i('titles.personnel'), '/personnel'); ?>
    </section>
    <section>
    <?php echo $this->link_to($this->i('titles.users'), '/users'); ?>
  </section>
  <div id="language_selector">
    <input type="checkbox" class="dropdown_controller" id="language_dropdown"/>
    <div class="dropdown_content">
      <div class="dropdown_content"><a href="#"><?php echo $this->image_tag('arabic-flag'); ?>العربية</a></div>
      <div class="dropdown_content"><a href="#"><?php echo $this->image_tag('chinese-flag'); ?>中文</a></div>
      <div class="dropdown_content"><a href="#"><?php echo $this->image_tag('german-flag'); ?>Deutsch</a></div>
    </div>
    <label for="language_dropdown"><?php echo $this->image_tag('uk-flag'); ?>English</label>
  </div>
</div>
