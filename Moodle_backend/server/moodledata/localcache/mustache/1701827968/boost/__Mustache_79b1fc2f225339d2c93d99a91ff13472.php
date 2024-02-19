<?php

class __Mustache_79b1fc2f225339d2c93d99a91ff13472 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav id="courseindex" class="courseindex">
';
        $buffer .= $indent . '    <div id="courseindex-content">
';
        if ($partial = $this->mustache->loadPartial('core_courseformat/local/courseindex/placeholders')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        $value = $context->find('js');
        $buffer .= $this->sectionE61304faa3bc0a0313a01cf045d12639($context, $indent, $value);

        return $buffer;
    }

    private function sectionE61304faa3bc0a0313a01cf045d12639(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_courseformat/local/courseindex/drawer\'], function(component) {
    component.init(\'courseindex\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_courseformat/local/courseindex/drawer\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'courseindex\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
