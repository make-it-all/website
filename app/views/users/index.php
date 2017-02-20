<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo $users->count() . ' ' . $this->i('titles.users'); ?></h1>
      <div id="page_actions">
        <?php echo $this->link_to($this->i('actions.new'), '/users/new'); ?>
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
  <?php $this->render('pagination', ['records' => $users, 'offset' => $offset, 'total_records' => $total_records]); ?>

  <table class="index_table">
    <thead>
      <tr>
        <th> <?php echo $this->i('table_headings.name'); ?></th>
        <th> <?php echo $this->i('table_headings.email'); ?></th>
        <th> <?php echo $this->i('table_headings.role'); ?></th>
        <th>Manage</th>
        <th> <?php echo $this->i('actions.delete'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user): ?>
        <tr>
          <td>
            <?php if ($user->personnel() !== null) { echo $user->personnel()->personnel_identifier; } ?>
          </td>
          <td><?php echo $user->name; ?></td>
          <td><?php echo $user->email; ?></td>
          <td><?php echo implode(', ', $user->roles()); ?></td>
          <td><?php echo $this->link_to('manage', "/users/$user->id/edit"); ?></td>
            <td><?php echo $this->link_to('delete', "/users/$user->id", 'DELETE'); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
