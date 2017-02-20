<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo Personnel::count() . ' ' . $this->i('titles.personnel'); ?></h1>
      <div id="page_actions">
        <?php echo $this->link_to($this->i('actions.new').$this->icon('plus'), '/personnel/new'); ?>
      </div>
    </div>
    <?php if (isset($facts)): ?>
      <div id="page_stats">
        <?php foreach ($facts as $fact): ?>
          <p><?php echo $fact; ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</div>


<div id="page_body">
  <?php $this->render('pagination', ['records' => $personnels, 'offset' => $offset, 'total_records' => $total_records]); ?>

  <table class="index_table">
    <thead>
      <tr>
        <th> <?php echo $this->i('table_headings.id'); ?></th>
        <th> <?php echo $this->i('table_headings.name'); ?></th>
        <th> <?php echo $this->i('table_headings.email'); ?></th>
        <th> <?php echo $this->i('table_headings.telephone_number'); ?></th>
        <th> <?php echo $this->i('table_headings.job_title'); ?></th>
        <th> <?php echo $this->i('table_headings.department_id'); ?></th>
        <th> <?php echo $this->i('table_headings.branch_id'); ?></th>
        <th class="narrow_column"> <?php echo $this->i('actions.edit'); ?></th>
        <th class="narrow_column"> <?php echo $this->i('actions.delete'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($personnels as $personnel): ?>
        <tr>
          <td><?php echo $personnel->personnel_identifier; ?></td>
          <td><?php echo $personnel->name; ?></td>
          <td><?php echo $personnel->email; ?></td>
          <td><?php echo $personnel->telephone_number; ?></td>
          <td><?php echo $personnel->job_title; ?></td>
          <td><?php echo $personnel->department()->name; ?></td>
          <td><?php echo $personnel->branch()->name; ?></td>
          <td><?php echo $this->link_to($this->icon('pencil-square-o'), "/personnel/$personnel->id/edit"); ?></td>
          <td><?php echo $this->link_to($this->icon('trash-o'), "/personnel/$personnel->id", ['method'=>'DELETE']); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
