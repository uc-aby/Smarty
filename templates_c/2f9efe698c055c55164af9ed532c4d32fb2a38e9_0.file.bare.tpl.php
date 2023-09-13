<?php
/* Smarty version 4.3.1, created on 2023-07-19 09:51:01
  from 'C:\wamp64\www\smarty\template\bare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b7b205a2f6b3_57572199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f9efe698c055c55164af9ed532c4d32fb2a38e9' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty\\template\\bare.tpl',
      1 => 1689758157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b7b205a2f6b3_57572199 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>

<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>

        <?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[0]['department'];?>
 </br>
    <?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[1]['department'];?>
 </br>
    <?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['department'];?>
 </br>
    <?php echo $_smarty_tpl->tpl_vars['user_list']->value[3]['name'];?>
 => <?php echo $_smarty_tpl->tpl_vars['user_list']->value[2]['department'];?>
 </br>

        <?php echo json_encode($_smarty_tpl->tpl_vars['user_list']->value);?>
</br>

        <table>
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


        <table>
        <tr>
            <th>Name</th>
            <th>Department</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_list']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
$__foreach_user_0_saved = $_smarty_tpl->tpl_vars['user'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['department'];?>
</td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved;
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

</body>

</html><?php }
}
