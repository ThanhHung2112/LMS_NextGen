<?php

class __Mustache_f39bb065632653d9d6a4056017b12beb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('showemojipicker');
        $buffer .= $this->section07a791af5c174fd3e3f291519e22aecc($context, $indent, $value);
        $buffer .= $indent . '<div class="d-flex mt-sm-1">
';
        $buffer .= $indent . '    <textarea
';
        $buffer .= $indent . '        dir="auto"
';
        $buffer .= $indent . '        data-region="send-message-txt"
';
        $buffer .= $indent . '        class="form-control bg-light"
';
        $buffer .= $indent . '        rows="3"
';
        $buffer .= $indent . '        data-auto-rows
';
        $buffer .= $indent . '        data-min-rows="3"
';
        $buffer .= $indent . '        data-max-rows="5"
';
        $buffer .= $indent . '        aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section2244054c2b8c2f0af84a759e802290d0($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section2244054c2b8c2f0af84a759e802290d0($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        style="resize: none"
';
        $buffer .= $indent . '        maxlength="';
        $value = $this->resolveValue($context->find('messagemaxlength'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    ></textarea>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="position-relative d-flex flex-column">
';
        $value = $context->find('showemojipicker');
        $buffer .= $this->sectionA9041a1c004ee30ec407386a04abc638($context, $indent, $value);
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto"
';
        $buffer .= $indent . '            aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionAb824786c8682f6171ef8d2596f84a5d($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            data-action="send-message"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            <span data-region="send-icon-container">';
        $value = $context->find('pix');
        $buffer .= $this->sectionB8de6adc8a0c753970767678630ae6df($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            <span class="hidden" data-region="loading-icon-container">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section07a791af5c174fd3e3f291519e22aecc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div
        class="emoji-auto-complete-container w-100 hidden"
        data-region="emoji-auto-complete-container"
        aria-live="polite"
        aria-hidden="true"
    >
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div
';
                $buffer .= $indent . '        class="emoji-auto-complete-container w-100 hidden"
';
                $buffer .= $indent . '        data-region="emoji-auto-complete-container"
';
                $buffer .= $indent . '        aria-live="polite"
';
                $buffer .= $indent . '        aria-hidden="true"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2244054c2b8c2f0af84a759e802290d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' writeamessage, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' writeamessage, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5df971d582457358a4ccf481abd0509f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' toggleemojipicker, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' toggleemojipicker, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35672aca6eed52b4e7f1f578f80a0ee6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' e/emoticons, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' e/emoticons, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9041a1c004ee30ec407386a04abc638(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div
                data-region="emoji-picker-container"
                class="emoji-picker-container hidden"
                aria-hidden="true"
            >
                {{> core/emoji/picker }}
            </div>
            <button
                class="btn btn-link btn-icon icon-size-3 ml-1"
                aria-label="{{#str}} toggleemojipicker, core {{/str}}"
                data-action="toggle-emoji-picker"
            >
                {{#pix}} e/emoticons, core{{/pix}}
            </button>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div
';
                $buffer .= $indent . '                data-region="emoji-picker-container"
';
                $buffer .= $indent . '                class="emoji-picker-container hidden"
';
                $buffer .= $indent . '                aria-hidden="true"
';
                $buffer .= $indent . '            >
';
                if ($partial = $this->mustache->loadPartial('core/emoji/picker')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <button
';
                $buffer .= $indent . '                class="btn btn-link btn-icon icon-size-3 ml-1"
';
                $buffer .= $indent . '                aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section5df971d582457358a4ccf481abd0509f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                data-action="toggle-emoji-picker"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section35672aca6eed52b4e7f1f578f80a0ee6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb824786c8682f6171ef8d2596f84a5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sendmessage, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sendmessage, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8de6adc8a0c753970767678630ae6df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/sendmessage, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/sendmessage, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
