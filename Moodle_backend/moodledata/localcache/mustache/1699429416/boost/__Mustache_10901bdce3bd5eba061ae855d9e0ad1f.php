<?php

class __Mustache_10901bdce3bd5eba061ae855d9e0ad1f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="text-center pt-3 icon-size-4">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';

        return $buffer;
    }
}
