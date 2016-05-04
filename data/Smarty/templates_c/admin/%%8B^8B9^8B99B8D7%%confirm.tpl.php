<?php /* Smarty version 2.6.27, created on 2016-04-04 08:57:11
         compiled from basis/confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'basis/confirm.tpl', 4, false),array('modifier', 'h', 'basis/confirm.tpl', 10, false),)), $this); ?>
<div id="basis" class="contents-main">

<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="complete" />

<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrForm'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'regular_holiday_ids'): ?>
        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrForm']['regular_holiday_ids'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['holiday_key'] => $this->_tpl_vars['holiday_id']):
?>
            <input type="hidden" name="regular_holiday_ids[<?php echo ((is_array($_tmp=$this->_tpl_vars['holiday_key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['holiday_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <?php endforeach; endif; unset($_from); ?>
    <?php else: ?>
        <input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

	<h2>基本情報</h2>
    <table>
        <tr>
            <th>会社名</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['company_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
        <tr>
            <th>会社名(フリガナ)</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['company_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
        <tr>
            <th>店名</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
        <tr>
            <th>店名(フリガナ)</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['shop_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
		<tr>
            <th>店名(英語表記)</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['shop_name_eng'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
        <tr>
            <th>郵便番号</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
        <tr>
            <th>SHOP所在地</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrPref'][$this->_tpl_vars['arrForm']['pref']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
		<tr>
            <th>TEL</th>
            <td><?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tel03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php else: ?>未登録<?php endif; ?></td>
        </tr>
        <tr>
            <th>FAX</th>
            <td><?php if (strlen ( ((is_array($_tmp=$this->_tpl_vars['arrForm']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 - <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
<?php else: ?>未登録<?php endif; ?></td>
        </tr>
        <tr>
            <th>店舗営業時間</th>
            <td>
            	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['business_hour'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
		<tr>
            <th>商品注文受付<br />メールアドレス</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
        <tr>
            <th>問い合わせ受付<br />メールアドレス</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

 	        </td>
        </tr>
        <tr>
            <th>メール送信元<br />メールアドレス</th>
            <td>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
        <tr>
            <th>送信エラー受付<br />メールアドレス</th>
            <td>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email04'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
		<tr>
            <th>取扱商品</th>
            <td>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['good_traded'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['message'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

            </td>
        </tr>
    </table>

	<h2>定休日設定</h2>
	<table>
		<tr>
			<th>定休日</th>
			<td>
			    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrForm']['regular_holiday_ids'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRegularHoliday'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
　
			    <?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
	</table>

	<h2>SHOP機能</h2>
	<table>
		<tr>
			<th>送料無料条件</th>
			<td>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['free_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

			</td>
		</tr>
		<tr>
			<th>ダウンロード可能日数</th>
			<td>
				<?php if (((is_array($_tmp=$this->_tpl_vars['arrForm']['downloadable_days_unlimited'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
				無制限
				<?php else: ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['downloadable_days'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
日間有効
				<?php endif; ?>
			</td>
		</tr>
	</table>

	<h2>地図設定</h2>
	<table>
		<tr>
			<th>緯度</th>
			<td>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['latitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

			</td>
		</tr>
		<tr>
			<th>経度</th>
			<td>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['longitude'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

			</td>
		</tr>
	</table>

    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="eccube.setModeAndSubmit('return','',''); return false;"><span class="btn-prev">前のページに戻る</span></a></li>
            <li><a class="btn-action" href="javascript:;" onclick="eccube.submitForm(); return false;"><span class="btn-next">この内容で登録する</span></a></li>
        </ul>
    </div>

</div>