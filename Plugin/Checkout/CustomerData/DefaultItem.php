<?php
/**
 * Excellence Magento blog
 *
 * @category     Excellence
 * @package      Magento_Blog
 * @author       Excellence Team
 */
namespace Excellence\Minicart\Plugin\Checkout\CustomerData;
class DefaultItem
{
    public function aroundGetItemData(
        \Magento\Checkout\CustomerData\AbstractItem $subject,
        \Closure $proceed,
        \Magento\Quote\Model\Quote\Item $item
    ) {
        $data = $proceed($item);
        $result['country_of_manufacture'] = $item->getProduct()->getAttributeText('country_of_manufacture');
        return \array_merge(
            $result,
            $data
        );
    }
}