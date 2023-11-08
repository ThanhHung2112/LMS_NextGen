<?php

class __Mustache_34325ae015310167be71ab48ed0af58b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span>
';
        $value = $context->findDot('element.valuechars');
        $buffer .= $this->section12880359b6255648d320f78445aca3bd($context, $indent, $value);
        $buffer .= '
';
        $value = $context->findDot('element.valuechars');
        if (empty($value)) {
            
            $buffer .= $indent . '<em>';
            $value = $context->findDot('element.frozen');
            if (empty($value)) {
                
                $value = $context->find('str');
                $buffer .= $this->section466534d911ffa36659aacd22ec6ab4f0($context, $indent, $value);
            }
            $value = $context->findDot('element.frozen');
            $buffer .= $this->section3224f7486d9b9e79b241f6aeb1ac98a5($context, $indent, $value);
            $buffer .= '</em>';
        }
        $buffer .= '
';
        $buffer .= $indent . '</span>
';

        return $buffer;
    }

    private function section12880359b6255648d320f78445aca3bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '&bull;';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '&bull;';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section466534d911ffa36659aacd22ec6ab4f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' novalueclicktoset, form ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' novalueclicktoset, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAaef2b0b0a50abacb094d4dfd000d018(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' novalue, form ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' novalue, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3224f7486d9b9e79b241f6aeb1ac98a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{# str }} novalue, form {{/ str }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionAaef2b0b0a50abacb094d4dfd000d018($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
