<?php

class __Mustache_1dd00749b359d135a2b30a18f375476a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-reactive-debugpanel" class="py-1">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section4689b219f4d8216ed45c6a3d4249953c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span data-for="loaders">
';
        $buffer .= $indent . '            <span data-for="noinstances">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionE5920496fe2337f037b1f14f91604593($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-for="subpanel">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section7bf9d692703c163d20295d2154f863e9($context, $indent, $value);

        return $buffer;
    }

    private function section4689b219f4d8216ed45c6a3d4249953c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reactive_instances , core_debug ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reactive_instances , core_debug ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5920496fe2337f037b1f14f91604593(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reactive_noinstances , core_debug ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reactive_noinstances , core_debug ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7bf9d692703c163d20295d2154f863e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/local/reactive/debugpanel\'], function(component) {
    component.init(\'{{uniqid}}-reactive-debugpanel\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core/local/reactive/debugpanel\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-reactive-debugpanel\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
