<?php
/* Smarty version 4.3.2, created on 2024-05-23 22:15:31
  from '/home/oscar/Desktop/Informatyka/Inf_II_Stopnia/Semestr-2/net-app/laboratoria/zadania/zad-04/app/CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664fa3e3eda3c8_10749919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43d66304e41ba318b4c3b11249f6b90563974503' => 
    array (
      0 => '/home/oscar/Desktop/Informatyka/Inf_II_Stopnia/Semestr-2/net-app/laboratoria/zadania/zad-04/app/CalcView.tpl',
      1 => 1716495243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664fa3e3eda3c8_10749919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_742778718664fa3e3ed8487_08063668', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_742778718664fa3e3ed8487_08063668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_742778718664fa3e3ed8487_08063668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post" class="pure-form pure-form-stacked">
    <!--<legend>Kalkulator rat</legend>-->
	<fieldset>
	    <label for="id_x">Kwota: </label>
        <input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" /><br />
	    <label for="id_y">Oprocentowanie: </label>
	    <input id="id_y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" /><br />
	    <label for="id_z">Liczba lat: </label>
	    <input id="id_z" type="text" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
" /><br />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<h3> Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value;?>
 </h3>
<?php echo '<script'; ?>
>
    window.onload = function() {
        window.scrollTo(0, document.body.scrollHeight);
    };
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
