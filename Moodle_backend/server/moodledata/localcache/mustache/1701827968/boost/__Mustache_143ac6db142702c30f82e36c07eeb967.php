<?php

class __Mustache_143ac6db142702c30f82e36c07eeb967 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<a class="btn btn-link p-0" role="button"
';
        $buffer .= $indent . '    data-container="body" data-toggle="popover"
';
        $buffer .= $indent . '    data-placement="';
        $value = $context->find('ltr');
        $buffer .= $this->section6f33152a41341e2c397de871a1796b75($context, $indent, $value);
        $value = $context->find('ltr');
        if (empty($value)) {
            
            $buffer .= 'left';
        }
        $buffer .= '" data-content="';
        $value = $this->resolveValue($context->find('text'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('completedoclink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-html="true" tabindex="0" data-trigger="focus" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC729b9f763949c5dccbfae0365cf941f($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '  ';
        $value = $context->find('pix');
        $buffer .= $this->section0cf85a5f7cf8ea38cb83cc6d8218f1b5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function section6f33152a41341e2c397de871a1796b75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC729b9f763949c5dccbfae0365cf941f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' help ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' help ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cf85a5f7cf8ea38cb83cc6d8218f1b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'help, core, {{{alt}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'help, core, ';
                $value = $this->resolveValue($context->find('alt'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
