<?php
declare(strict_types=1);

namespace Grasch\Ccst\Block\Adminhtml\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

class StepTitles extends AbstractFieldArray
{
    /**
     * Prepare rendering the new field by adding all the needed columns
     */
    protected function _prepareToRender(): void
    {
        $this->addColumn('code', ['label' => __('Step Code'), 'class' => 'required-entry']);
        $this->addColumn('title', ['label' => __('Step Title'), 'class' => 'required-entry']);
        $this->_addAfter = false;
    }
}
