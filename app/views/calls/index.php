<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $calls->count() . ' ' . $this->i('titles.calls'); ?></h1>
      <div id="page_actions">
        <?php echo $this->link_to($this->i('actions.new').$this->icon('plus'), '/calls/new'); ?>
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
  <div id="page_filter">
    <div class="search_bar">
      <?php $this->render('search_form'); ?>
    </div>
  </div>
</div>

<div id="page_body">
  <?php $this->render('pagination', ['records' => $calls, 'offset' => $offset,'total_records' => $total_records]); ?>

  <table class="index_table">
    <thead>
      <tr>
        <th> <?php echo $this->i('table_headings.operator_id'); ?></th>
        <th> <?php echo $this->i('table_headings.caller_id'); ?></th>
        <th> <?php echo $this->i('table_headings.updated_by'); ?></th>
        <th> <?php echo $this->i('table_headings.description'); ?></th>
        <th class="narrow_column"> <?php echo $this->i('actions.edit'); ?></th>
        <th class="narrow_column"> <?php echo $this->i('actions.delete'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($calls as $call): ?>
        <tr>
          <td><?php echo $call->operator()->name; ?></td>
          <td><?php echo $call->caller()->name; ?></td>
          <td><?php echo $call->operator()->name; ?></td>
          <td><?php echo $call->description; ?></td>
          <td><?php echo $this->link_to($this->icon('pencil-square-o'), "/calls/$call->id/edit"); ?></td>
          <td><?php echo $this->link_to($this->icon('trash-o'), "/calls/$call->id", 'DELETE'); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
