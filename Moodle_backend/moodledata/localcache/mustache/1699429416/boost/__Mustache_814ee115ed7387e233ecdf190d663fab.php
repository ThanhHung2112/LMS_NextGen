<?php

class __Mustache_814ee115ed7387e233ecdf190d663fab extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-group')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block5b54128a52345f52b44c68e7e2fe97d0'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section824159bf173c99d5bf6c5a0c8ab402bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{separator}}}
                {{{html}}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('separator'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block5b54128a52345f52b44c68e7e2fe97d0($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <fieldset data-fieldtype="date_time" class="m-0 p-0 border-0" id="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            <legend class="sr-only">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</legend>
';
        $buffer .= $indent . '            <div class="fdate_time_selector d-flex flex-wrap align-items-center">
';
        $value = $context->findDot('element.elements');
        $buffer .= $this->section824159bf173c99d5bf6c5a0c8ab402bf($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </fieldset>
';
    
        return $buffer;
    }
}
