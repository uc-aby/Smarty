<?php
/* Smarty version 4.3.1, created on 2023-09-13 07:15:59
  from 'C:\xampp\htdocs\smarty\template\example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6501458fbbc9e7_95024917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0322e2c736417a6a3215e7f294037af3459f308e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\template\\example.tpl',
      1 => 1694582157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6501458fbbc9e7_95024917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config/foo.conf', null, 0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>
</title>
</head>

<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>

    <p> showing array data key by key </p>
    <?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['department'];?>
 </br>
    <?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['department'];?>
 </br>
   
   
    <p> Showing the data of an array in tabular form </p>
    <table border="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBorderSize');?>
">
        <tr>
            <th>Name</th>
            <th>Department</th>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['department'];?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['department'];?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['department'];?>
</td>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[3]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_list']->value[3]['department'];?>
</td>
        </tr>
    </table>


    <p> Creating the table using loop </p>
    <table border="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBorderSize');?>
">
        <tr>
            <th>Name</th>
            <th>Department</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_list']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['department'];?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

   

    <?php $_smarty_tpl->_assignInScope('name', 2);?>
    <?php if ($_smarty_tpl->tpl_vars['name']->value == 1) {?>
        Smarty is a good language.
    <?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 2) {?>
        smarty is an average language.
    <?php } else { ?>
        smarty is a bad language.
    <?php }?>



    
    <?php echo $_smarty_tpl->tpl_vars['hello']->value;?>



    <p>Perform on string : </p>
    <p>In Lower Case : </p>
    <?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['string1']->value, 'UTF-8');?>
<br>
    <?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['string2']->value, 'UTF-8');?>

    <p>Replacing : </p>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string1']->value,'ucertify','uCertify');?>
 <br>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string2']->value,'ucertify','uCertify');?>

    <p>Wraps : </p>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string1']->value,30,"\n",false);?>
 <br>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string2']->value,30,"\n",false);?>

    <p>Merge</p>
    <?php $_smarty_tpl->_assignInScope('merge', ((string)$_smarty_tpl->tpl_vars['string1']->value).((string)$_smarty_tpl->tpl_vars['string2']->value));?>
    <?php echo $_smarty_tpl->tpl_vars['merge']->value;?>

<br>
<br>
    <p>Select option</p>
    <?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['myOption']->value,'selected'=>$_smarty_tpl->tpl_vars['myOption']->value),$_smarty_tpl);?>

<br>

<p>2. Example of Escape</p>
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['str']->value, ENT_QUOTES, 'UTF-8', true);?>

<br>

<p>Example of Concatenation</p>
<?php echo ($_smarty_tpl->tpl_vars['str2']->value).(" Concatenation");?>

<br>



  <p>Number operations on : <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
 </p>

   rem:<br>
   <?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['num']->value)."%2"),$_smarty_tpl);?>
<br>

   <?php ob_start();
echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['num']->value)."%2"),$_smarty_tpl);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == '0') {?>
   num is even<br>

   <?php } else { ?>
   num is odd <br>

   <?php }?>
   table:<br>
   <?php
$_smarty_tpl->tpl_vars['new'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['new']->step = 1;$_smarty_tpl->tpl_vars['new']->total = (int) ceil(($_smarty_tpl->tpl_vars['new']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['new']->step));
if ($_smarty_tpl->tpl_vars['new']->total > 0) {
for ($_smarty_tpl->tpl_vars['new']->value = 1, $_smarty_tpl->tpl_vars['new']->iteration = 1;$_smarty_tpl->tpl_vars['new']->iteration <= $_smarty_tpl->tpl_vars['new']->total;$_smarty_tpl->tpl_vars['new']->value += $_smarty_tpl->tpl_vars['new']->step, $_smarty_tpl->tpl_vars['new']->iteration++) {
$_smarty_tpl->tpl_vars['new']->first = $_smarty_tpl->tpl_vars['new']->iteration === 1;$_smarty_tpl->tpl_vars['new']->last = $_smarty_tpl->tpl_vars['new']->iteration === $_smarty_tpl->tpl_vars['new']->total;?>
   <?php echo smarty_function_math(array('equation'=>((string)$_smarty_tpl->tpl_vars['num']->value)."*".((string)$_smarty_tpl->tpl_vars['new']->value)),$_smarty_tpl);?>
<br>
    <?php }
}
?>

<p>mail attributes</p>
<?php echo smarty_function_mailto(array('address'=>"abhay.gupta@ucertify.com"),$_smarty_tpl);?>


<p>Date format</p>
<?php echo smarty_modifier_date_format(time());?>
 
<br>
<?php echo smarty_modifier_date_format(time(),"%D");?>

<br>


</body>

</html><?php }
}
