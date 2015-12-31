<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Souq Anshar| Shop</title>
    <!--link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">-->
    

    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/font-awesome.min.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/prettyPhoto.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/price-range.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/animate.css" >
  <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/main.css" >
  <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/responsive.css" >
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script type="text/javascript">
    function checkForm(form)
    {
    if(form.itemname.value == "")
    {
      alert(" Please enter items that you are looking for");
      form.itemname.focus();
      return false;
    }
    if(form.sub_cat.value == "Select Your Category")
    {
      alert(" Please choose your category");
      form.sub_cat.focus();
      return false;
    }
    }   
    </script>

    <style type="text/css">

    #footerwrap 
    {
    background: #000;
    width: 100%;
    bottom: 0;
    position: fixed;
    z-index: 10000;
    _position: absolute;
    _top: expression(eval(document.documentElement.scrollTop+ (document.documentElement.clientHeight-this.offsetHeight)));
    height: 40px;
    }

    </style>

</head><!--/head-->