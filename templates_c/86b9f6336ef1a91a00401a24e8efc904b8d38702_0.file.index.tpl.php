<?php
/* Smarty version 4.3.1, created on 2023-07-20 03:51:18
  from 'C:\wamp64\www\smarty\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b8af36deefe6_64940505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86b9f6336ef1a91a00401a24e8efc904b8d38702' => 
    array (
      0 => 'C:\\wamp64\\www\\smarty\\template\\index.tpl',
      1 => 1689825034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b8af36deefe6_64940505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\smarty\\templates_c\\86b9f6336ef1a91a00401a24e8efc904b8d38702_0.file.index.tpl.php',
    'uid' => '86b9f6336ef1a91a00401a24e8efc904b8d38702',
    'call_name' => 'smarty_template_function_menu_201818690164b8af36bd3606_01927390',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),3=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),4=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),5=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),6=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\function.fetch.php','function'=>'smarty_function_fetch',),7=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),8=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),9=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),10=>array('file'=>'C:\\wamp64\\www\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>
<html>
  <head>
    <title>Practice</title>
  </head>

  <style>
    #Name {
      background-color: skyblue;
      color: #fff;
      font-size: 16px;
      text-align: center;
      font-weight: 800;
    }
  </style>

  <body>
    <pre>
        <div id="Name">
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>


<!-- comment -->

<!-- Custom fucntions -->
<?php echo smarty_function_counter(array('start'=>0,'skip'=>20),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />

<!-- FUNCTIONS, ARRAYS,LOOPS -->
<?php $_smarty_tpl->_assignInScope('foo', array(1,2,3));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
echo $_smarty_tpl->tpl_vars['f']->value;?>
<br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<!-- ATTRUBUTES -->
<?php $_smarty_tpl->_assignInScope('foo1', substr($_smarty_tpl->tpl_vars['bar']->value,2,5));
echo $_smarty_tpl->tpl_vars['foo1']->value;?>



<!-- user defined Function  -->


<!-- Calling  multiple times -->
<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array(), true);?>
   <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array(), true);?>
 


<!-- Math numbers -->
<?php $_smarty_tpl->_assignInScope('math', ((string)($_smarty_tpl->tpl_vars['code']->value+$_smarty_tpl->tpl_vars['rollno']->value)));
echo $_smarty_tpl->tpl_vars['math']->value;?>


<!-- Array call by indexes -->
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[0];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[1];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[2][0];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[2][1];?>
<br />

<!-- Javascript -->
<button onclick="foobar()">Alert</button>
<button onclick="bazzy()">Prompt</button>


<!-- variables loaded from config files -->
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'Config.conf', null, 0);
?>
 
<table border="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBorderSize');?>
" bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBgColor');?>
" style="margin: auto;">
<tr bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rowBgColor');?>
"> 
    <td >First</td>
    <td>Last</td>
    <td>Address</td>
</tr>
</table>

<!-- Reserved vaiable  -->
<?php echo smarty_modifier_date_format(time(),'%d-%m-%Y %H:%M:%S');?>

Powered by Smarty <?php echo Smarty::SMARTY_VERSION;?>


<!-- Variable emodifiers -->
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Movie2']->value);?>
 ----capitalize
<?php echo mb_strtolower((string) $_smarty_tpl->tpl_vars['Movie2']->value, 'UTF-8');?>
 ----lower
<?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['Movie2']->value ?? '', 'UTF-8');?>
  ----upper
<?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['Movie']->value, $tmp);?>
  ---count sentences
<?php echo ($_smarty_tpl->tpl_vars['Movie2']->value).("Added");?>
  ----cat
<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['Movie2']->value, $tmp);?>
 --- count_characters 
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['Movie2']->value,5);?>
  -----truncate
<?php echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['Movie2']->value);?>
  -----indent
<?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['Movie']->value,30,"\n",false);?>
  -----wordwrap


<!-- Combining modifiers -->
<?php echo smarty_modifier_spacify(mb_strtoupper((string) $_smarty_tpl->tpl_vars['Movie2']->value ?? '', 'UTF-8'));?>
 ----upper&spacify


<!-- Built in functions  -->
<!-- 1.for each loop  -->
<?php $_smarty_tpl->_assignInScope('colors', array('red','blue','green','purple'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colors']->value, 'color');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
echo $_smarty_tpl->tpl_vars['color']->value;?>
<br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<!-- 2.append -->
<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['first'] = 'Bob';
$_smarty_tpl->_assignInScope('name', $_tmp_array);?> 
<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['last'] = 'Meyer';
$_smarty_tpl->_assignInScope('name', $_tmp_array);?> 
The first name is <?php echo $_smarty_tpl->tpl_vars['name']->value['first'];?>
.<br>
The last name is <?php echo $_smarty_tpl->tpl_vars['name']->value['last'];?>
.

<!-- 3.capture  -->
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "cap");?>hello<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>I say just <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "cap");?>world<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cap']->value, 'text');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
echo $_smarty_tpl->tpl_vars['text']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<!-- 4. a)for  -->
<ul>
  <?php
$_smarty_tpl->tpl_vars['forloop'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['forloop']->step = 1;$_smarty_tpl->tpl_vars['forloop']->total = (int) ceil(($_smarty_tpl->tpl_vars['forloop']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['forloop']->step));
if ($_smarty_tpl->tpl_vars['forloop']->total > 0) {
for ($_smarty_tpl->tpl_vars['forloop']->value = 1, $_smarty_tpl->tpl_vars['forloop']->iteration = 1;$_smarty_tpl->tpl_vars['forloop']->iteration <= $_smarty_tpl->tpl_vars['forloop']->total;$_smarty_tpl->tpl_vars['forloop']->value += $_smarty_tpl->tpl_vars['forloop']->step, $_smarty_tpl->tpl_vars['forloop']->iteration++) {
$_smarty_tpl->tpl_vars['forloop']->first = $_smarty_tpl->tpl_vars['forloop']->iteration === 1;$_smarty_tpl->tpl_vars['forloop']->last = $_smarty_tpl->tpl_vars['forloop']->iteration === $_smarty_tpl->tpl_vars['forloop']->total;?>
      <li><?php echo $_smarty_tpl->tpl_vars['forloop']->value;?>
</li>
  <?php }
}
?>
  </ul>

<!-- 4. b)for else  -->
<ul>
  <?php
$_smarty_tpl->tpl_vars['frel'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['frel']->step = 1;$_smarty_tpl->tpl_vars['frel']->total = (int) ceil(($_smarty_tpl->tpl_vars['frel']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['frel']->step));
if ($_smarty_tpl->tpl_vars['frel']->total > 0) {
for ($_smarty_tpl->tpl_vars['frel']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['frel']->iteration = 1;$_smarty_tpl->tpl_vars['frel']->iteration <= $_smarty_tpl->tpl_vars['frel']->total;$_smarty_tpl->tpl_vars['frel']->value += $_smarty_tpl->tpl_vars['frel']->step, $_smarty_tpl->tpl_vars['frel']->iteration++) {
$_smarty_tpl->tpl_vars['frel']->first = $_smarty_tpl->tpl_vars['frel']->iteration === 1;$_smarty_tpl->tpl_vars['frel']->last = $_smarty_tpl->tpl_vars['frel']->iteration === $_smarty_tpl->tpl_vars['frel']->total;?>
      <li><?php echo $_smarty_tpl->tpl_vars['frel']->value;?>
</li>
  <?php }} else { ?>
    no iteration
  <?php }
?>
  </ul>

  <!-- if-else  -->
  <?php $_smarty_tpl->_assignInScope('data', array(1,2,3,4,5));?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
  <?php if ($_smarty_tpl->tpl_vars['value']->value == 2) {?>
  <?php continue 1;?>
  <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value == 4) {?>
            <?php break 1;?>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <!-- fetch -->
  <?php echo smarty_function_fetch(array('file'=>'https://www.google.com/'),$_smarty_tpl);?>


  <!-- html_checkboxes  -->
<?php echo smarty_function_html_checkboxes(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_checkboxes']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


<!-- html_options  -->
<?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>


<!-- html radio -->
<?php echo smarty_function_html_radios(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_radios']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>


<!-- html_date -->
<?php echo smarty_function_html_select_date(array('start_year'=>'-5','end_year'=>'+1'),$_smarty_tpl);?>


<!-- Chapter 14 -->
<!-- Add directory -->




 

</div>
</pre>
  </body>

  <?php echo '<script'; ?>
>
    // the following braces are ignored by Smarty
    // since they are surrounded by whitespace
    function bazzy() {
      prompt("Hello!");
    }
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="script.js"><?php echo '</script'; ?>
>
</html><?php }
/* smarty_template_function_menu_201818690164b8af36bd3606_01927390 */
if (!function_exists('smarty_template_function_menu_201818690164b8af36bd3606_01927390')) {
function smarty_template_function_menu_201818690164b8af36bd3606_01927390(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <ul>
    <li class="item1">dsjfj</li>
    <li class="item2">jksd</li>
    <li class="item3">jasb</li>
    <li class="item4">jzb</li>
    <li class="item5">jsadjks</li>
  </ul>
<?php
}}
/*/ smarty_template_function_menu_201818690164b8af36bd3606_01927390 */
}
