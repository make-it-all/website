<div id="page_head">
  <div id="page_info">
    <div id="page_title">
      <h1><?php echo User::count() . ' ' . $this->i('titles.users'); ?></h1>
      <?php echo $this->link_to($this->i('actions.new').$this->icon('plus'), '/users/new'); ?>
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
        <th><?php echo $this->i('table_headings.personnel_identifier'); ?></th>
        <th><?php echo $this->i('table_headings.name'); ?></th>
        <th><?php echo $this->i('table_headings.email'); ?></th>
        <th><?php echo $this->i('table_headings.role'); ?></th>
        <th class="narrow_column"><?php echo $this->i('actions.edit'); ?></th>
        <th class="narrow_column"><?php echo $this->i('actions.delete'); ?></th>
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
          <td><?php echo $user->role; ?></td>
          <td><?php echo $this->link_to($this->icon('pencil-square-o'), "/users/$user->id/edit"); ?></td>
          <td><?php echo $this->link_to($this->icon('trash-o'), "/users/$user->id", ['method'=>'DELETE']); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
