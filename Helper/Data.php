<?php
declare(strict_types=1);

namespace Grasch\Ccst\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Serialize\SerializerInterface;

class Data extends AbstractHelper
{
    public const IS_CUSTOM_TITLES_ENABLED = 'checkout/options/steps_config/is_custom_titles_enabled';
    public const STEPS_TITLE              = 'checkout/options/steps_config/steps_title';

    /**
     * @var SerializerInterface
     */
    private SerializerInterface $serializer;

    /**
     * @param Context $context
     * @param SerializerInterface $serializer
     */
    public function __construct(
        Context $context,
        SerializerInterface $serializer
    ) {
        parent::__construct($context);

        $this->serializer = $serializer;
    }

    /**
     * Is custom titles enabled
     *
     * @return bool
     */
    public function isCustomTitlesEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::IS_CUSTOM_TITLES_ENABLED);
    }

    /**
     * Get steps title
     *
     * @return array
     */
    public function getStepsTitle(): array
    {
        $stepsTitle = $this->scopeConfig->getValue(self::STEPS_TITLE);
        if (is_array($stepsTitle)) {
            return $stepsTitle;
        }

        try {
            return $this->serializer->unserialize($stepsTitle);
        } catch (\Exception $e) {
            return [];
        }
    }
}
