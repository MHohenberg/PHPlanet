<?php /* Smarty version 2.6.26, created on 2010-05-03 21:36:49
         compiled from index.tpl.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
<div class="entry">
<h2><a href="<?php echo $this->_tpl_vars['entry']['url']; ?>
" rel=""><?php echo $this->_tpl_vars['entry']['title']; ?>
</a></h2>
<?php echo $this->_tpl_vars['entry']['content']; ?>
	
</div>
<?php endforeach; else: ?>

<div class="entry">
<h2>A barren, dead planet in a space full of life</h2>
No signs of activity on this planet, captain. May I suggest you 
add some RSS feeds to terraform it to a new, thriving ecosystem?
</div>
<?php endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>