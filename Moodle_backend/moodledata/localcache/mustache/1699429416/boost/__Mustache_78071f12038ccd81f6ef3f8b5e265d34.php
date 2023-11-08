<?php

class __Mustache_78071f12038ccd81f6ef3f8b5e265d34 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="d-flex p-3 justify-content-end">
';
        $buffer .= $indent . '    <button
';
        $buffer .= $indent . '        class="btn btn-link btn-icon my-1 icon-size-4"
';
        $buffer .= $indent . '        data-action="delete-selected-messages"
';
        $buffer .= $indent . '        data-toggle="tooltip"
';
        $buffer .= $indent . '        data-placement="top"
';
        $buffer .= $indent . '        title="';
        $value = $context->find('str');
        $buffer .= $this->section6910e05b9a1417486b5764734b1a6842($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <span data-region="icon-container">';
        $value = $context->find('pix');
        $buffer .= $this->section5db487840f03aab04401ab4522889c84($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="hidden" data-region="loading-icon-container">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section6910e05b9a1417486b5764734b1a6842($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section6910e05b9a1417486b5764734b1a6842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' deleteselectedmessages, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' deleteselectedmessages, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5db487840f03aab04401ab4522889c84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/delete, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/delete, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
