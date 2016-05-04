<?php
/**
 * プラグイン の情報クラス.
 *
 * @package SortOrderList
 * @author Daisy Inc.
 * @version $Id: $
 */
class plugin_info{
    static $PLUGIN_CODE       = "SortOrderList";
    static $PLUGIN_NAME       = "受注一覧並び替え機能";
    static $CLASS_NAME        = "SortOrderList";
    static $PLUGIN_VERSION     = "1.0.fix1";
    static $COMPLIANT_VERSION  = "2.12.0, 2.12.1, 2.12.2";
    static $AUTHOR            = "Daisy inc.";
    static $DESCRIPTION       = "受注管理での検索結果の並び順を変更する機能を追加します。";
    static $PLUGIN_SITE_URL    = "http://www.ec-cube.net/owners/index.php";
    static $AUTHOR_SITE_URL    = "http://www.daisy.link/";
    static $HOOK_POINTS       = array(
        array("LC_Page_Admin_Order_action_before", 'init'),
        array("LC_Page_Admin_Order_action_after", 'reCreateList'),
        array("prefilterTransform", 'prefilterTransform'));
    static $LICENSE          = "LGPL";
}