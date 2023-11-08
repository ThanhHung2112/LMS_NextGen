<?php

class __Mustache_21e451a7b5c684201a008af51c442af4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="form-group ';
        $value = $context->find('error');
        $buffer .= $this->section4d4b829e8a762a460d7710f0a2273a46($context, $indent, $value);
        $buffer .= ' fitem ';
        $value = $context->find('advanced');
        $buffer .= $this->sectionB2a3879159edb3a7a33a1d8394a2c556($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->findDot('element.extraclasses'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" ';
        $value = $context->findDot('element.groupname');
        $buffer .= $this->sectionE32dd8819580c2040e2441120199ff04($context, $indent, $value);
        $buffer .= '>
';
        $value = $context->find('label');
        $buffer .= $this->sectionC128c2213872d1f0c961ef9a794f906b($context, $indent, $value);
        $buffer .= $indent . '    <span data-fieldtype="';
        $value = $this->resolveValue($context->findDot('element.type'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $blockFunction = $context->findInBlock('element');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '            <!-- Element goes here -->
';
        }
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '    <div class="form-control-feedback invalid-feedback" id="';
        $value = $this->resolveValue($context->findDot('element.iderror'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('error');
        $buffer .= $this->section89151e805fdb13289dd93afb50acb5df($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('error'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section92f77f3c24cb338291205bea4165cbad($context, $indent, $value);

        return $buffer;
    }

    private function section4d4b829e8a762a460d7710f0a2273a46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-danger';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-danger';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2a3879159edb3a7a33a1d8394a2c556(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'advanced';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'advanced';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE32dd8819580c2040e2441120199ff04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-groupname="{{.}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-groupname="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd3e0eae730f027ebaa2c5d8144fd11d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sr-only';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sr-only';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC128c2213872d1f0c961ef9a794f906b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <label class="col-form-label {{#element.hiddenlabel}}sr-only{{/element.hiddenlabel}}" for="{{element.id}}">
            {{{label}}}
        </label>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <label class="col-form-label ';
                $value = $context->findDot('element.hiddenlabel');
                $buffer .= $this->sectionBd3e0eae730f027ebaa2c5d8144fd11d($context, $indent, $value);
                $buffer .= '" for="';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </label>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89151e805fdb13289dd93afb50acb5df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="display: block;"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="display: block;"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD51d59cf174abfd59abe29508608fc20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{element.id}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92f77f3c24cb338291205bea4165cbad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/form-display-errors\'], function(module) {
    module.enhance({{#quote}}{{element.id}}{{/quote}});
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/form-display-errors\'], function(module) {
';
                $buffer .= $indent . '    module.enhance(';
                $value = $context->find('quote');
                $buffer .= $this->sectionD51d59cf174abfd59abe29508608fc20($context, $indent, $value);
                $buffer .= ');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
