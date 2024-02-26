<?php
/**
 * Copyright © Alekseon sp. z o.o.
 * http://www.alekseon.com/
 */
declare(strict_types=1);

namespace Alekseon\CustomFormsFrontend\Model\ResourceModel\FrontendView;

/**
 * Class Collection
 * @package Alekseon\CustomFormsFrontend\Model\ResourceModel\FrontendView
 */
class Collection extends \Alekseon\AlekseonEav\Model\ResourceModel\Entity\Collection
{
    /**
     * @return void
     */
    protected function _construct() // @codingStandardsIgnoreLine
    {
        $this->_init(
            'Alekseon\CustomFormsFrontend\Model\FrontendView',
            'Alekseon\CustomFormsFrontend\Model\ResourceModel\FrontendView'
        );
    }
}
