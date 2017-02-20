<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?? 'Make It All'; ?> </title>
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
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  </head>

  <body>
    <?php $this->render('header'); ?>
    <div id="main_wrapper">
      <?php $this->render('sidebar'); ?>
      <div id="page">
        <?php $this->yield(); ?>
      </div>
    </div>
  </body>

</html>
