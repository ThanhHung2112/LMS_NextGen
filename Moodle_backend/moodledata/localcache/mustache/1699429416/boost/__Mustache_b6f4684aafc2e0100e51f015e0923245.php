<?php

class __Mustache_b6f4684aafc2e0100e51f015e0923245 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/notification_base')) {
            $context->pushBlockContext(array(
                'alertclass' => array($this, 'block68b4d9f1b5bacc23245e13158c6e456c'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block68b4d9f1b5bacc23245e13158c6e456c($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'alert-success';
    
        return $buffer;
    }
}
