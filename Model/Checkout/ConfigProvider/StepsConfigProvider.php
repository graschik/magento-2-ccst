<?php
declare(strict_types=1);

namespace Grasch\Ccst\Model\Checkout\ConfigProvider;

use Grasch\Ccst\Helper\Data;
use Magento\Checkout\Model\ConfigProviderInterface;

class StepsConfigProvider implements ConfigProviderInterface
{
    /**
     * @var Data
     */
    private Data $data;

    /**
     * @param Data $data
     */
    public function __construct(
        Data $data
    ) {
        $this->data = $data;
    }

    /**
     * @inheritDoc
     */
    public function getConfig(): array
    {
        $config['stepsConfig'] = [
            'isCustomTitlesEnabled' => $this->data->isCustomTitlesEnabled(),
            'stepsTitle' => $this->data->getStepsTitle()
        ];

        return $config;
    }
}
