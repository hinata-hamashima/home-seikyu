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

require_once CLASS_REALDIR . 'helper/SC_Helper_Purchase.php';

/**
 * 商品購入関連のヘルパークラス(拡張).
 *
 * LC_Helper_Purchase をカスタマイズする場合はこのクラスを編集する.
 *
 * @package Helper
 * @author Kentaro Ohkouchi
 * @version $Id$
 */
class SC_Helper_Purchase_Ex extends SC_Helper_Purchase
{
	public $arrShippingKey = array(
        'name01', 'name02', 'kana01', 'kana02', 'company_name',
        'sex', 'home', 'care', 'zip01', 'zip02', 'country_id', 'zipcode', 'pref', 'addr01', 'addr02',
        'tel01', 'tel02', 'tel03', 'fax01', 'fax02', 'fax03',
    );
	
	/**
     * 会員情報を受注情報にコピーする.
     *
     * ユーザーがログインしていない場合は何もしない.
     * 会員情報を $dest の order_* へコピーする.
     * customer_id は強制的にコピーされる.
     *
     * @param  array       $dest        コピー先の配列
     * @param  SC_Customer $objCustomer SC_Customer インスタンス
     * @param  string      $prefix      コピー先の接頭辞. デフォルト order
     * @param  array       $keys        コピー対象のキー
     * @return void
     */
    public function copyFromCustomer(&$dest, &$objCustomer, $prefix = 'order',
        $keys = array('name01', 'name02', 'kana01', 'kana02', 'company_name',
            'sex', 'home', 'care', 'zip01', 'zip02', 'country_id', 'zipcode', 'pref', 'addr01', 'addr02',
            'tel01', 'tel02', 'tel03', 'fax01', 'fax02', 'fax03',
            'job', 'birth', 'email',
        )
    ) {
        if ($objCustomer->isLoginSuccess(true)) {
            foreach ($keys as $key) {
                if (in_array($key, $keys)) {
                    $dest[$prefix . '_' . $key] = $objCustomer->getValue($key);
                }
            }

            if ((SC_Display_Ex::detectDevice() == DEVICE_TYPE_MOBILE)
                && in_array('email', $keys)
            ) {
                $email_mobile = $objCustomer->getValue('email_mobile');
                if (empty($email_mobile)) {
                    $dest[$prefix . '_email'] = $objCustomer->getValue('email');
                } else {
                    $dest[$prefix . '_email'] = $email_mobile;
                }
            }

            $dest['customer_id'] = $objCustomer->getValue('customer_id');
            $dest['update_date'] = 'CURRENT_TIMESTAMP';
        }
    }
}
