<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->i('titles.title'); ?></title>
    <?php $this->include_stylesheet('normalize'); ?>
    <?php $this->include_stylesheet('application'); ?>
    <?php $this->include_stylesheet('core'); ?>
    <?php $this->include_stylesheet('header'); ?>
    <?php $this->include_stylesheet('sidebar'); ?>
    <?php $this->include_javascript('jquery'); ?>
    <?php $this->include_javascript('application'); ?>
    <?php $this->include_stylesheet('filter'); ?>
    <?php $this->include_stylesheet('table'); ?>
    <?php $this->include_stylesheet('pagination'); ?>
    <?php $this->include_stylesheet('tabs'); ?>
    <?php $this->include_stylesheet('form'); ?>
  </head>
  <body>
   <div id="page_wrapper">
     <div id="form_wrapper">
       <div id="form_panel">
         <?php $this->yield(); ?>
       </div>
     </div>
   </div>
  </body>
</html>
