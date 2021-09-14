<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XPay\XPaymentsCloud\Module\XC\ProductComparison\View;

/**
 * Add to cart widget
 *
 * @Decorator\Depend("XC\ProductComparison")
 */
 class AddToCart extends \XLite\Module\XC\ProductComparison\View\AddToCartAbstract implements \XLite\Base\IDecorator
{
    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return !$this->getProduct()->isNotAllowedXpaymentsSubscription() && parent::isVisible();
    }

}
