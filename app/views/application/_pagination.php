<?php $total = $records->class::count(); ?>

<div id="pagination">
    <div id="pagination_links">
      <?php
        if ($total > 10) {
          if ($total % 10 == 0) {
            $total = ($total % 10)+1;
          } else {
            $total = (intdiv($total, 10)+1);
          }

          for ($i=0; $i < $total; $i++) {
            echo $this->link_to($i+1, Application::$request->path.'?page=' . ($i+1), ['class'=>]);
          }
        }
      ?>
    </div>
  <div id="pagination_results">
    <?php if ($offset+10 > ($records->class::count()-1)) {?>
      <p> <?php echo $this->i('pagination.showing_text', ['low'=>($offset+1), 'high'=>$total_records, 'total'=>$total_records]);?> </p>
    <?php } else{?>
      <p> <?php echo $this->i('pagination.showing_text', ['low'=>($offset+1), 'high'=>($offset+10), 'total'=>$total_records]);?> </p>
    <?php }?>
  </div>
</div>
