<?php

class __Mustache_f269d5ab087b2517e6d30947bae021a3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="p-3 bg-white">
';
        $buffer .= $indent . '    <p class="text-muted" data-region="text">';
        $value = $context->find('str');
        $buffer .= $this->section89a32bc0a45ac29a661c18d10215849e($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
';
        $buffer .= $indent . '        <span data-region="dialogue-button-text">';
        $value = $context->find('str');
        $buffer .= $this->section800b515fafac96516c4b3273c607fadc($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="hidden" data-region="loading-icon-container">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section89a32bc0a45ac29a661c18d10215849e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' youhaveblockeduser, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' youhaveblockeduser, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section800b515fafac96516c4b3273c607fadc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unblockuser, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' unblockuser, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
