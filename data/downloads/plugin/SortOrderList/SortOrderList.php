<?php
/*
 *
 * SortOrderList
 * Copyright(c) 2015 Daisy Inc. All Rights Reserved.
 *
 * http://www.daisy.link/
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

/**
 * プラグインのメインクラス
 *
 * @package SortOrderList
 * @author Daisy Inc.
 * @version $Id: $
 */
class SortOrderList extends SC_Plugin_Base {

    /**
     * コンストラクタ
     *
     */
    public function __construct(array $arrSelfInfo) {
        parent::__construct($arrSelfInfo);
    }

    /**
     * インストール
     * installはプラグインのインストール時に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin plugin_infoを元にDBに登録されたプラグイン情報(dtb_plugin)
     * @return void
     */
    function install($arrPlugin) {

        if(copy(PLUGIN_UPLOAD_REALDIR . "SortOrderList/logo.png", PLUGIN_HTML_REALDIR . "SortOrderList/logo.png") === false);
        if(copy(PLUGIN_UPLOAD_REALDIR . "SortOrderList/sortorder.php", PLUGIN_HTML_REALDIR . "SortOrderList/sortorder.php") === false);

    }

    /**
     * アンインストール
     * uninstallはアンインストール時に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     * 
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function uninstall($arrPlugin) {
        // nop
    }
    
    /**
     * 稼働
     * enableはプラグインを有効にした際に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function enable($arrPlugin) {
        // nop
    }

    /**
     * 停止
     * disableはプラグインを無効にした際に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function disable($arrPlugin) {
        // nop
    }

    function init($objPage) {
		/*
		$objPage->arrSortOrder = array( 
            '1'=>'更新日（古い順）'
           ,'2'=>'受注日（新しい順）'
           ,'3'=>'受注日（古い順）'
           ,'4'=>'注文番号（大きい順）'
           ,'5'=>'注文番号（小さい順）'
           //,'3'=>'お名前'
           ,'6'=>'支払い方法（昇順）'
           ,'7'=>'支払い方法（降順）'
           ,'8'=>'購入金額（高い順）'
           ,'9'=>'購入金額（安い順）'
           ,'10'=>'全商品発送日（新しい順）'
           ,'11'=>'全商品発送日（古い順）'
           ,'12'=>'対応状況（昇順）'
           ,'13'=>'対応状況（降順）'
        );
  
        $objPage->arrSortOrderStr = array(
            '1'=>'update_date'
           ,'2'=>'create_date DESC'
           ,'3'=>'create_date'
           ,'4'=>'order_id DESC'
           ,'5'=>'order_id'
           //,'3'=>'order_name01 || order_name02'
           ,'6'=>'payment_id'
           ,'7'=>'payment_id DESC'
           ,'8'=>'total DESC'
           ,'9'=>'total'
           ,'10'=>'commit_date DESC'
           ,'11'=>'commit_date'
           ,'12'=>'status DESC'
           ,'13'=>'status'
        );
		*/
        $objPage->arrSortOrder = array( 
			'1'=>'注文番号（小さい順）'
			,'2'=>'注文番号（大きい順）'
           ,'3'=>'更新日（古い順）'
           ,'4'=>'受注日（新しい順）'
           ,'5'=>'受注日（古い順）'
           //,'3'=>'お名前'
           ,'6'=>'支払い方法（昇順）'
           ,'7'=>'支払い方法（降順）'
           ,'8'=>'購入金額（高い順）'
           ,'9'=>'購入金額（安い順）'
           ,'10'=>'全商品発送日（新しい順）'
           ,'11'=>'全商品発送日（古い順）'
           ,'12'=>'対応状況（昇順）'
           ,'13'=>'対応状況（降順）'
        );
  
        $objPage->arrSortOrderStr = array(
			'1'=>'order_id'
			,'2'=>'order_id DESC'
           ,'3'=>'update_date'
           ,'4'=>'create_date DESC'
           ,'5'=>'create_date'
           //,'3'=>'order_name01 || order_name02'
           ,'6'=>'payment_id'
           ,'7'=>'payment_id DESC'
           ,'8'=>'total DESC'
           ,'9'=>'total'
           ,'10'=>'commit_date DESC'
           ,'11'=>'commit_date'
           ,'12'=>'status DESC'
           ,'13'=>'status'
        );
    }

    /**
     * 一覧リストを再作成します。
     * @param LC_Page_Admin_Order_Index $objPage <管理画面>受注一覧.
     * @return void
     */
    function reCreateList($objPage) {

        $objFormParam = new SC_FormParam_Ex();
        $objPage->lfInitParam($objFormParam);
        $objFormParam->addParam('表示順', 'search_sort_order', INT_LEN, 'n', array('MAX_LENGTH_CHECK', 'NUM_CHECK'));

        $objFormParam->setParam($_POST);
        $objPage->arrHidden = $objFormParam->getSearchArray();
        $objPage->arrForm = $objFormParam->getFormParamList();

        if( $objPage->getMode() == 'search' ){

            $arrParam = $objFormParam->getHashArray();
            $objPage->arrErr = $objPage->lfCheckError($objFormParam);
            if (count($objPage->arrErr) == 0) {

                $where = 'del_flg = 0';
                $arrWhereVal = array();
                foreach ($arrParam as $key => $val) {
                    if ($val == '') {
                        continue;
                    }
	                $objPage->buildQuery($key, $where, $arrWhereVal, $objFormParam);
                }

                $sort_order = $objPage->arrHidden['search_sort_order'];
                if( $sort_order ){
                    $order = $objPage->arrSortOrderStr[$sort_order];
                }
                $order = $order ? $order : 'update_date DESC';

                // 処理を実行
                // 行数の取得
                $objPage->tpl_linemax = $objPage->getNumberOfLines($where, $arrWhereVal);
                // ページ送りの処理
                $page_max = SC_Utils_Ex::sfGetSearchPageMax($objFormParam->getValue('search_page_max'));
                // ページ送りの取得
                $objNavi = new SC_PageNavi_Ex($objPage->arrHidden['search_pageno'],
                                           $objPage->tpl_linemax, $page_max,
                                           'fnNaviSearchPage', NAVI_PMAX);
                $objPage->arrPagenavi = $objNavi->arrPagenavi;

                // 検索結果の取得
                $objPage->arrResults = $objPage->findOrders($where, $arrWhereVal,$page_max, $objNavi->start_row, $order);
            }
        }
    }

    /**
     * プレフィルタコールバック関数
     *
     * @param string &$source テンプレートのHTMLソース
     * @param LC_Page_Ex $objPage ページオブジェクト
     * @param string $filename テンプレートのファイル名
     * @return void
     */
    function prefilterTransform(&$source, LC_Page_Ex $objPage, $filename) {
        $objTransform = new SC_Helper_Transform($source);
        $template_dir = PLUGIN_UPLOAD_REALDIR . 'SortOrderList/templates/';
        switch($objPage->arrPageLayout['device_type_id']){
            case DEVICE_TYPE_MOBILE:
            case DEVICE_TYPE_SMARTPHONE:
            case DEVICE_TYPE_PC:
                break;
            case DEVICE_TYPE_ADMIN:
            default:
                // 受注一覧画面
                if (strpos($filename, 'order/index.tpl') !== false) {
                 $objTransform->select('#search_form p.page_rows')->appendChild(file_get_contents($template_dir . 'snip.admin_order_list.tpl'));
                }
                break;
        }
        $source = $objTransform->getHTML();
    }
    

    /**
     * 処理の介入箇所とコールバック関数を設定
     * registerはプラグインインスタンス生成時に実行されます
     * 
     * @param SC_Helper_Plugin $objHelperPlugin 
     * @return void
     */
/*
    function register(SC_Helper_Plugin $objHelperPlugin) {
    
        $objHelperPlugin->addAction('LC_Page_Admin_Order_action_before', array($this, 'init'));
        $objHelperPlugin->addAction('LC_Page_Admin_Order_action_after', array($this, 'reCreateList'));
        $objHelperPlugin->addAction('prefilterTransform', array(&$this, 'prefilterTransform'), 1);

    }
*/
}
?>