<?php

class __Mustache_9d49b19b4c384ee7e994a4f126d811a6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="col-form-label form-control-label px-0 ';
        $value = $context->find('columns');
        $buffer .= $this->section4a08761e3df9e8ebcfbb911ec9593c81($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <label for="choose-license-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section56c60baa62b965c8ddfac2882a15ac40($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </label>
';
        $buffer .= $indent . '    ';
        $value = $context->find('licensehelpicon');
        $buffer .= $this->sectionF799ccb794eb5635625696ee8944adc6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div ';
        $value = $context->find('columns');
        $buffer .= $this->sectionF6a6a7a111957fce8e29d60cba30ac17($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <select id="choose-license-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="form-control"></select>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section4a08761e3df9e8ebcfbb911ec9593c81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-4';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'col-4';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56c60baa62b965c8ddfac2882a15ac40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chooselicense, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'chooselicense, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF799ccb794eb5635625696ee8944adc6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>core/help_icon}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6a6a7a111957fce8e29d60cba30ac17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="col-8"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="col-8"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
