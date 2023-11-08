<?php

class __Mustache_bd93f7e7fc237cf9ce4a261bf0c86917 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    data-region="view-search"
';
        $buffer .= $indent . '    aria-hidden="true"
';
        $buffer .= $indent . '    class="h-100 hidden"
';
        $buffer .= $indent . '    data-user-id="';
        $value = $this->resolveValue($context->findDot('loggedinuser.id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-users-offset="0"
';
        $buffer .= $indent . '    data-messages-offset="0"
';
        $buffer .= $indent . '    style="overflow-y: auto"
';
        $buffer .= $indent . '    ';
        $value = $context->find('isdrawer');
        if (empty($value)) {
            
            $buffer .= 'data-in-panel="true"';
        }
        $buffer .= '
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_search_results_content')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="hidden" data-region="loading-placeholder">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_search_results_content_placeholder')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="p-3 text-center" data-region="empty-message-container">
';
        $buffer .= $indent . '        <p>';
        $value = $context->find('str');
        $buffer .= $this->section5e7310a9ac61a3b2c08c8fa5871cf10d($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section5e7310a9ac61a3b2c08c8fa5871cf10d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' searchcombined, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' searchcombined, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
