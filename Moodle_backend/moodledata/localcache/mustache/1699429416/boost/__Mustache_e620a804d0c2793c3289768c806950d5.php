<?php

class __Mustache_e620a804d0c2793c3289768c806950d5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/notification_base')) {
            $context->pushBlockContext(array(
                'alertclass' => array($this, 'block28846b5b98ccf00daa31c59d5af21e4e'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block28846b5b98ccf00daa31c59d5af21e4e($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'alert-warning';
    
        return $buffer;
    }
}
