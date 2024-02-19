<?php

class __Mustache_b5f7b05ab83713829bc47f2dc3ed8c6a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="divider border-left h-75 align-self-center ml-1 mr-3"></div>
';
        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('legacyseturl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" method="post" class="d-flex align-items-center editmode-switch-form">
';
        $buffer .= $indent . '    <div class="input-group">
';
        $buffer .= $indent . '        <label class="mr-2 mb-0 ';
        $value = $context->find('checked');
        $buffer .= $this->section5fa6691bbd0b5caf3b13e18ede787532($context, $indent, $value);
        $buffer .= '" for="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-editingswitch">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section8eb26301b7adb5b471f5b42058e0700c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <div class="custom-control custom-switch">
';
        $buffer .= $indent . '            <input type="checkbox"';
        $buffer .= ' name="setmode"';
        $value = $context->find('checked');
        $buffer .= $this->sectionA225a3fb23a21bec1e3c559600c6be53($context, $indent, $value);
        $buffer .= ' class="custom-control-input"';
        $buffer .= ' id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-editingswitch"';
        $buffer .= ' data-context="';
        $value = $this->resolveValue($context->find('pagecontextid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"';
        $buffer .= ' data-pageurl="';
        $value = $this->resolveValue($context->find('pageurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"';
        $buffer .= '>
';
        $buffer .= $indent . '            <span class="custom-control-label">&nbsp;</span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="pageurl" value="';
        $value = $this->resolveValue($context->find('pageurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="context" value="';
        $value = $this->resolveValue($context->find('pagecontextid'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <noscript>
';
        $buffer .= $indent . '        <input type="submit" value="';
        $value = $context->find('str');
        $buffer .= $this->section784055b0413ba2959bcc3ebc23efe456($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    </noscript>
';
        $buffer .= $indent . '</form>
';
        $value = $context->find('js');
        $buffer .= $this->sectionA0ac314ac3090eb4fbe5862ab9f2b412($context, $indent, $value);

        return $buffer;
    }

    private function section5fa6691bbd0b5caf3b13e18ede787532(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-primary';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text-primary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8eb26301b7adb5b471f5b42058e0700c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editmode ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' editmode ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA225a3fb23a21bec1e3c559600c6be53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                    }} checked{{!
                }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section784055b0413ba2959bcc3ebc23efe456(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'setmode, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'setmode, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0ac314ac3090eb4fbe5862ab9f2b412(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/edit_switch\'], function(editSwitch) {
    editSwitch.init(\'{{uniqid}}-editingswitch\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core/edit_switch\'], function(editSwitch) {
';
                $buffer .= $indent . '    editSwitch.init(\'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-editingswitch\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
