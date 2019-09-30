<?php
namespace Ranium\OrderItem\Model\Source;

class Status implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => 'Processing', 'value' => 'processing'];
        $options[] = ['label' => 'Closed', 'value' => 'closed'];
        $options[] = ['label' => 'Pending', 'value' => 'pending'];
        return $options;
    }
}
