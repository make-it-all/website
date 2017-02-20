<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $problems->count() . ' ' . $this->i('titles.problems'); ?></h1>
      <div id="page_actions">
        <?php echo $this->link_to($this->i('actions.new').$this->icon('plus'), '/problems/new'); ?>
      </div>
    </div>
  </div>
  <div id="page_filter">
    <div class="filter">
      <h4><?php echo $this->i('table_headings.type'); ?></h4>
      <div class="filter_button">
        <?php echo $this->link_to($this->i('titles.hardware') . $this->icon('desktop'),'#'); ?>
      </div>
      <div class="filter_button">
        <?php echo $this->link_to($this->i('titles.software') . $this->icon('file-code-o'),'#'); ?>
      </div>
    </div>
      <div class="search_bar">
        <?php $this->render('search_form'); ?>
      </div>
  </div>
</div>
<div id="page_body">
  <?php $this->render('pagination', ['records' => $problems, 'offset' => $offset, 'total_records' => $total_records]); ?>

  <table class="index_table">
    <thead>
      <tr>
        <th><?php echo $this->i('table_headings.subject'); ?></th>
        <th><?php echo $this->i('table_headings.keywords'); ?></th>
        <th><?php echo $this->i('table_headings.description'); ?></th>
        <th><?php echo $this->i('table_headings.assigned_to'); ?></th>
        <th><?php echo $this->i('table_headings.solution_id'); ?></th>
        <th class="narrow_column"><?php echo $this->i('actions.edit'); ?></th>
        <th class="narrow_column"><?php echo $this->i('actions.delete'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($problems as $problem): ?>
        <tr>
          <td><?php echo $problem->subject; ?></td>
          <td><?php echo $problem->keywords; ?></td>
          <td><?php echo $problem->description; ?></td>
          <td>
            <?php
              if ($problem->assigned_to !== null) {
                echo $problem->assigned_to->name;
              }
            ?>
          </td>
          <td><?php echo $problem->solution_id; ?></td>
          <td><?php echo $this->link_to($this->icon('pencil-square-o'), "/problems/$problem->id/edit"); ?></td>
          <td><?php echo $this->link_to($this->icon('trash-o'), "/problems/$problem->id", ['method'=>'DELETE']); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
