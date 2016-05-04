<?php /* Smarty version 2.6.27, created on 2016-04-02 16:06:25
         compiled from contents/csv_sql.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'contents/csv_sql.tpl', 44, false),array('modifier', 'h', 'contents/csv_sql.tpl', 46, false),array('function', 'html_options', 'contents/csv_sql.tpl', 110, false),)), $this); ?>

<script type="text/javascript">
<!--
// SQL確認画面起動
function doPreview(){
    document.form1.mode.value="preview"
    document.form1.target = "_blank";
    document.form1.submit();
}

// formのターゲットを自分に戻す
function fnTargetSelf(){
    document.form1.target = "_self";
}

//-->
</script>


<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
    <input type="hidden" name="mode" value="confirm" />
    <input type="hidden" name="sql_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['sql_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
    <input type="hidden" name="csv_output_id" value="" />
    <input type="hidden" name="select_table" value="" />
    <div id="admin-contents" class="contents-main">
        <h2>SQL一覧</h2>

        <?php if (((is_array($_tmp=$this->_tpl_vars['arrSqlList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
            <table id="contents-csv-sqllist" class="list center">
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrSqlList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                    <tr style="background-color:<?php if (((is_array($_tmp=$this->_tpl_vars['item']['sql_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrForm']['sql_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ((is_array($_tmp=@SELECT_RGB)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php else: ?>#ffffff<?php endif; ?>;">
                        <td>
                            <a href="?sql_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sql_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['sql_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</a>
                        </td>
                        <td>
                            <div class="btn">
                                <a class="btn-normal" href="javascript:;" name='csv' onclick="fnTargetSelf(); eccube.fnFormModeSubmit('form1','csv_output','csv_output_id',<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sql_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;"><span>CSV出力</span></a>
                                <a class="btn-normal" href="javascript:;" name='del' onclick="fnTargetSelf(); eccube.fnFormModeSubmit('form1','delete','sql_id',<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sql_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;"><span>削除</span></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
            </table>
        <?php endif; ?>

        <div class="btn addnew">
            <a class="btn-normal" href="javascript:;" name='subm' onclick="fnTargetSelf(); eccube.fnFormModeSubmit('form1','new_page','',''); return false;"><span>SQLを新規入力</span></a>
        </div>


        <h2>SQL設定<?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['sql_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>(編集中:<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['sql_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
)<?php else: ?>(新規入力)<?php endif; ?></h2>
        <table id="contents-csv-sqlset" class="form">
            <tr>
                <th>名称<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['sql_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <input type="text" name="sql_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['sql_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>" size="60" class="box60" />
                    <span class="attention"> (上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字)</span>
                </td>
            </tr>
            <tr>
                <th align="center">SQL文<span class="attention"> *</span><br /> (最初のSELECTは記述しないでください。)</td>
                <td align="left">
                    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['csv_sql'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                    <div>
                        <textarea name="csv_sql" cols=50 rows=20 align="left" wrap=off style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['csv_sql'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;<?php endif; ?>"><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['csv_sql'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                    </div>
                </td>
            </tr>
        </table>

        <div class="btn">
            <a class="btn-normal" href="javascript:;" name="subm" onclick="doPreview(); return false;"><span>構文エラーを確認する</span></a>
        </div>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" name="subm" onclick="fnTargetSelf(); eccube.fnFormModeSubmit('form1', 'confirm', '', '')"><span class="btn-next">この内容で登録する</span></a></li>
            </ul>
        </div>



        <div id="contents-csv-sqltbl">
            <h3>テーブル一覧</h3>
            <select name="arrTableList[]" size="20" style="width:325px; height:300px;" onChange="mode.value=''; select_table.value=this.value; submit();" onDblClick="csv_sql.value = csv_sql.value +' , ' + this.value;">
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrTableList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['select_table'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </select>
        </div>
        <div id="contents-csv-sqlcol">
            <h3>項目一覧</h3>
            <select name="arrColList[]" size="20" style="width:325px; height:300px;" onDblClick="csv_sql.value = csv_sql.value +' , ' + this.value;">
                <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrColList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

            </select>
        </div>

    </div>
</form>


</script>