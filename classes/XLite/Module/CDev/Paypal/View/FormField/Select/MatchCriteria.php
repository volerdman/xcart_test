<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\View\FormField\Select;

/**
 * MatchCriteria selector (used in Paypal Adaptive Payments only for now)
 */
class MatchCriteria extends \XLite\View\FormField\Select\Regular
{
    /**
     * Get default options
     *
     * @return array
     */
    protected function getDefaultOptions()
    {
        return array(
            'name'      => static::t('MATCH_CRITERIA_NAME'),
            'none'      => static::t('MATCH_CRITERIA_NONE'),
            'disabled'  => static::t('MATCH_CRITERIA_DISABLED'),
        );
    }
}
