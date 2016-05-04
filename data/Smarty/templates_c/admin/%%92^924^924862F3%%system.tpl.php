<?php /* Smarty version 2.6.27, created on 2016-04-01 11:30:43
         compiled from system/system.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'system/system.tpl', 27, false),array('modifier', 'h', 'system/system.tpl', 30, false),array('modifier', 'nl2br', 'system/system.tpl', 33, false),)), $this); ?>

<h2>概要</h2>
<table border="0" cellspacing="1" cellpadding="8" summary=" ">
    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrSystemInfo'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['info']):
?>
        <tr>
            <th>
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['info']['title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </th>
            <td>
            <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['info']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

            </td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>

<h2>PHP情報</h2>
<iframe src="?mode=info&amp;<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
=<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" height="500" frameborder="0" style="width: 100%;"></iframe>