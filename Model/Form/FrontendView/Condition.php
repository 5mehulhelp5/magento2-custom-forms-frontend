<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
declare(strict_types=1);

namespace Alekseon\CustomFormsFrontend\Model\Form\FrontendView;

use Magento\Framework\Api\AttributeValueFactory;
use Magento\Framework\Api\ExtensionAttributesFactory;

/**
 *
 */
class Condition extends \Magento\Rule\Model\AbstractModel
{
    /**
     * @var Condition\CombineFactory
     */
    private $condCombineFactory;

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate
     * @param Condition\CombineFactory $condCombineFactory
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate,
        \Alekseon\CustomFormsFrontend\Model\Form\FrontendView\Condition\CombineFactory $condCombineFactory
    )
    {
        $this->condCombineFactory = $condCombineFactory;
        parent::__construct($context, $registry, $formFactory, $localeDate);
    }

    public function getActionsInstance()
    {

    }

    public function getConditionsInstance()
    {
        return $this->condCombineFactory->create();
    }
}
