<?php

class __Mustache_955d424a9358a544a5099a35663e2afa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="activity-item ';
        $value = $context->find('modstealth');
        $buffer .= $this->section814a15334b0fb146a25cc098588d4305($context, $indent, $value);
        $value = $context->find('modhiddenfromstudents');
        $buffer .= $this->section814a15334b0fb146a25cc098588d4305($context, $indent, $value);
        $value = $context->find('modinline');
        $buffer .= $this->sectionF4430bb1912fef25dc28340642a01da8($context, $indent, $value);
        $buffer .= '" data-activityname="';
        $value = $this->resolveValue($context->find('activityname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $blockFunction = $context->findInBlock('core_courseformat/local/content/cm/activity');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/activity')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section814a15334b0fb146a25cc098588d4305(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenactivity';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4430bb1912fef25dc28340642a01da8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activityinline';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activityinline';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
