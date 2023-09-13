<?php
/* Smarty version 4.3.1, created on 2023-07-20 04:02:32
  from 'C:\wamp64\www\smarty\template\example2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b8b1d8ef5ab2_82955587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71714d1470480766ab65346e43a5abfd8f211cfb' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty\\template\\example2.tpl',
      1 => 1689824820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b8b1d8ef5ab2_82955587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['myOption']->value,'selected'=>$_smarty_tpl->tpl_vars['myOption']->value),$_smarty_tpl);?>

<br>

<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['str']->value, ENT_QUOTES, 'UTF-8', true);?>

<br>

<?php echo ($_smarty_tpl->tpl_vars['str2']->value).(" Concatenation");?>

<br>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['our_culture']->value, 'ar');
$_smarty_tpl->tpl_vars['ar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ar']->value) {
$_smarty_tpl->tpl_vars['ar']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ar']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
<ul><li><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</li></ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<br>

<?php }
}
