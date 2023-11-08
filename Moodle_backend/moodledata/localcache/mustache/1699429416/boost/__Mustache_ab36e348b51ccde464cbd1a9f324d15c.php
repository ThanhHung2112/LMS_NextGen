<?php

class __Mustache_ab36e348b51ccde464cbd1a9f324d15c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="loading-placeholder-content" aria-hidden="true" id="course-index-placeholder">
';
        $buffer .= $indent . '    <ul class="media-list">
';
        $buffer .= $indent . '        <li class="media">
';
        $buffer .= $indent . '            <div class="media-body col-md-6 p-0 d-flex align-items-center">
';
        $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2"></div>
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-100"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="media">
';
        $buffer .= $indent . '            <div class="media-body col-md-6 p-0 d-flex align-items-center">
';
        $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2"></div>
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-100"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="media">
';
        $buffer .= $indent . '            <div class="media-body col-md-6 p-0 d-flex align-items-center">
';
        $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2"></div>
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-100"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="media">
';
        $buffer .= $indent . '            <div class="media-body col-md-6 p-0 d-flex align-items-center">
';
        $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2"></div>
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-100"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionF8b1d4880dc14439f1e05a03e792f4e0($context, $indent, $value);

        return $buffer;
    }

    private function sectionF8b1d4880dc14439f1e05a03e792f4e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_courseformat/local/courseindex/placeholder\'], function(component) {
    component.init(\'course-index-placeholder\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_courseformat/local/courseindex/placeholder\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'course-index-placeholder\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
