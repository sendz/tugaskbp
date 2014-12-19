<!DOCTYPE html>
<html>
<head>
<title><?php echo $this->config->item('app_title'); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/css/style.css">
  <script type="text/javascript" src="<?php echo base_url();?>style/js/modernizr.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>style/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>style/js/script.js"></script>
</head>
<body>
<div class="jumbotron">
  <div class="container">
    <h1><?php echo $this->config->item('app_name'); ?></h1>
  </div>
</div>
  <div class="col-xs-4 col-xs-offset-4">
<h1><?php echo lang('login_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>
    <?php echo form_input($identity,'','class="form-control" placeholder="email"');?>
    <?php echo form_input($password,'','class="form-control" placeholder="password"');?>
    <?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-primary pull-right"');?>
<?php echo form_close();?>
<div class="clearfix"></div>
<a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
  </div>
</body>
</html>