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

require_once CLASS_REALDIR . 'helper/SC_Helper_FPDI.php';

/**
 * FPDIのヘルパークラス(拡張).
 *
 * @package Helper
 * @version $Id:$
 */
class SC_Helper_FPDI_Ex extends SC_Helper_FPDI
{
	public function FancyTable($header, $data, $w)
    {
        $base_x = $this->x;
        // Colors, line width and bold font
        $this->SetFillColor(216, 216, 216);
        $this->SetTextColor(0);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');
        // Header
        for ($i = 0; $i < count($header); $i++) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(235, 235, 235);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = false;
        $h = 4;
        foreach ($data as $row) {
            $x = $base_x;
            $h = 5;
            $i = 0;
            // XXX この処理を消すと2ページ目以降でセルごとに改ページされる。
            $this->Cell(0, $h, '', 0, 0, '', 0, '');
            $product_width = $this->GetStringWidth($row[0]);
            if ($w[0] < $product_width) {
                $output_lines = (int)($product_width / $w[0]) + 1;
                $output_height = $output_lines * $h;
                if ($this->y + $output_height >= $this->PageBreakTrigger) {
                    $this->AddPage();
                }
            }
            foreach ($row as $col) {
                // 列位置
                $this->x = $x;
                // FIXME 汎用的ではない処理。この指定は呼び出し元で行うようにしたい。
                if ($i == 0) {
                    $align = 'L';
                } else {
                    $align = 'R';
                }
                $y_before = $this->y;
                $h = $this->SJISMultiCell($w[$i], $h, $col, 1, $align, $fill, 0);
                $h = $this->y - $y_before;
                $this->y = $y_before;
                $x += $w[$i];
                $i++;
            }
            $this->Ln();
            $fill = !$fill;
        }
        $this->SetFillColor(255);
        $this->x = $base_x;
    }
}
