<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2014 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

require_once CLASS_REALDIR . 'pages/admin/LC_Page_Admin_Home.php';

/**
 * 管理画面ホーム のページクラス(拡張).
 *
 * LC_Page_Admin_Home をカスタマイズする場合はこのクラスを編集する.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id$
 */
class LC_Page_Admin_Home_Ex extends LC_Page_Admin_Home
{
    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init()
    {
        parent::init();
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process()
    {
        parent::process();
    }
	
	public function action()
    {
        // DBバージョンの取得
        $this->db_version = $this->lfGetDBVersion();

        // PHPバージョンの取得
        $this->php_version = $this->lfGetPHPVersion();

        // 現在の会員数
        $this->customer_cnt = $this->lfGetCustomerCnt();

        // 昨日の売上高
        $this->order_yesterday_amount = $this->lfGetOrderYesterday('SUM');

        // 昨日の売上件数
        $this->order_yesterday_cnt = $this->lfGetOrderYesterday('COUNT');

        // 今月の売上高
        $this->order_month_amount = $this->lfGetOrderMonth('SUM');

        // 今月の売上件数
        $this->order_month_cnt = $this->lfGetOrderMonth('COUNT');

        // 会員の累計ポイント
        $this->customer_point = $this->lfGetTotalCustomerPoint();

        //昨日のレビュー書き込み数
        $this->review_yesterday_cnt = $this->lfGetReviewYesterday();

        //レビュー書き込み非表示数
        $this->review_nondisp_cnt = $this->lfGetReviewNonDisp();

        // 品切れ商品
        $this->arrSoldout = $this->lfGetSoldOut();

        // 新規受付一覧
        $this->arrNewOrder = $this->lfGetNewOrder();

        // お知らせ一覧の取得
        //$this->arrInfo = $this->lfGetInfo();
    }
}
