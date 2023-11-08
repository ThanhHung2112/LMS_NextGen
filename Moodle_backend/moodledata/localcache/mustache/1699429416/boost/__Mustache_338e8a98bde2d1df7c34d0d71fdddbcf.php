<?php

class __Mustache_338e8a98bde2d1df7c34d0d71fdddbcf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="icon-back-in-drawer">
';
        $buffer .= $indent . '    <span class="dir-rtl-hide">';
        $value = $context->find('pix');
        $buffer .= $this->section5e443b3f3fc6a26f93a9c6994805b986($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    <span class="dir-ltr-hide">';
        $value = $context->find('pix');
        $buffer .= $this->sectionDa462c4f96b5089cd26ce12c5added68($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="icon-back-in-app">
';
        $buffer .= $indent . '    <span class="dir-rtl-hide">';
        $value = $context->find('pix');
        $buffer .= $this->section01a1cb688132d57fc41f0070a1ef998d($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section5e443b3f3fc6a26f93a9c6994805b986(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/previous, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/previous, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa462c4f96b5089cd26ce12c5added68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/next, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/next, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01a1cb688132d57fc41f0070a1ef998d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' e/cancel, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' e/cancel, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
