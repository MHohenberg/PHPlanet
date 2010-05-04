<?php /* Smarty version 2.6.26, created on 2010-05-03 21:40:17
         compiled from header.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'header.tpl.html', 4, false),)), $this); ?>
<html>
<head>
<link href="templates/styles.css" type="text/css" rel="Stylesheet">
<title><?php echo ((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Welcome') : smarty_modifier_default($_tmp, 'Welcome')); ?>
 :: <?php echo ((is_array($_tmp=@$this->_tpl_vars['sitetitle'])) ? $this->_run_mod_handler('default', true, $_tmp, 'PHPlanet') : smarty_modifier_default($_tmp, 'PHPlanet')); ?>
</title>
</head>
<body>