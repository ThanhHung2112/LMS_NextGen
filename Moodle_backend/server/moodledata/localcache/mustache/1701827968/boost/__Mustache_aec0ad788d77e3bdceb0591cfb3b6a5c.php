<?php

class __Mustache_aec0ad788d77e3bdceb0591cfb3b6a5c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="add_block_button">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('link'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="addblock-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="btn btn-link block-add text-left mb-3" data-key="addblock" data-url="';
        $value = $this->resolveValue($context->find('escapedlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <i class="fa fa-plus py-2 mr-3" aria-hidden="true"></i>';
        $value = $context->find('str');
        $buffer .= $this->section01c4df664c89cfcff5e9a8f2e1bca393($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionC6c87a4c323a5bf276367b7da2d0fce1($context, $indent, $value);

        return $buffer;
    }

    private function section01c4df664c89cfcff5e9a8f2e1bca393(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addblock';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addblock';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6c87a4c323a5bf276367b7da2d0fce1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    // Initialise the JS for the modal window which displays the blocks available to add.
    require([\'core/addblockmodal\'], function(addBlockModal) {
        addBlockModal.init(\'{{pageType}}\', \'{{pageLayout}}\', null, \'{{subPage}}\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    // Initialise the JS for the modal window which displays the blocks available to add.
';
                $buffer .= $indent . '    require([\'core/addblockmodal\'], function(addBlockModal) {
';
                $buffer .= $indent . '        addBlockModal.init(\'';
                $value = $this->resolveValue($context->find('pageType'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', \'';
                $value = $this->resolveValue($context->find('pageLayout'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', null, \'';
                $value = $this->resolveValue($context->find('subPage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
