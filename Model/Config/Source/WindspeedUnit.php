<?php

namespace CristianScheid\WeatherWidget\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class WindspeedUnit implements ArrayInterface
{
    /**
     * Retrieve an array of options for wind speed units.
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'kmh', 'label' => __('Km/h')],
            ['value' => 'ms', 'label' => __('m/s')],
            ['value' => 'mph', 'label' => __('Mph')],
            ['value' => 'kn', 'label' => __('Knots')]
        ];
    }
}
