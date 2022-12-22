<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Gaiterjones\InstantPage\Plugin\Magento\Theme\Block\Html;

class Topmenu
{

    public function afterGetHtml(
        \Magento\Theme\Block\Html\Topmenu $subject,
        $result,
        $outermostClass = '',
        $childrenWrapClass = '',
        $limit = 0
    ) {

        $result=str_replace('href=','data-instant href=',$result);
        return $result;
    }
}
