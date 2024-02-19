<?php

class __Mustache_720401049dad7d96f0a3ccdccfe12d78 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span class="loading-icon icon-no-margin">';
        $value = $context->find('pix');
        $buffer .= $this->sectionD524f4f8010ec3fbac9ccd264856052a($context, $indent, $value);
        $buffer .= '</span>
';

        return $buffer;
    }

    private function section201a1e0d87e2bf754decb79303412b27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loading ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loading ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD524f4f8010ec3fbac9ccd264856052a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/loading, core, {{#str}} loading {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/loading, core, ';
                $value = $context->find('str');
                $buffer .= $this->section201a1e0d87e2bf754decb79303412b27($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
