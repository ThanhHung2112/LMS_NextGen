<?php

class __Mustache_eabfa31f3dc450c5e99a535e1de76699 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/notification_base')) {
            $context->pushBlockContext(array(
                'alertclass' => array($this, 'block70374e40d8af9fc27e052400cb31cbe8'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block70374e40d8af9fc27e052400cb31cbe8($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'alert-danger';
    
        return $buffer;
    }
}
