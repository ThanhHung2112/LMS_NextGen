<?php

class __Mustache_a4f865467c8f6d5356a70de4ea321729 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-select')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
