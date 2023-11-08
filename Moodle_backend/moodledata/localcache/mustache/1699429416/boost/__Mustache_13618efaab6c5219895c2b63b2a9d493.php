<?php

class __Mustache_13618efaab6c5219895c2b63b2a9d493 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-filterregion="filtermatch" class="hidden">
';
        $buffer .= $indent . '    <label for="core-filter-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="my-0" aria-hidden="true">
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section043761c7993201193b2b1d79ec0dd03a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </label>
';
        $buffer .= $indent . '    <select class="custom-select" data-filterfield="join" id="core-filter-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '            aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section12da01e8dae8fc2280ef3d5b98cea4ed($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <option value="0">';
        $value = $context->find('str');
        $buffer .= $this->section3c3ca954d361e33d388cf608d356b919($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '        <option value="1">';
        $value = $context->find('str');
        $buffer .= $this->section38c54db526fff004e0d5a32f5c4dc410($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '        <option value="2" selected>';
        $value = $context->find('str');
        $buffer .= $this->section80d34145344e498ce4a9c8a1badc3408($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '    </select>
';
        $buffer .= $indent . '    <span aria-hidden="true">';
        $value = $context->find('str');
        $buffer .= $this->section2ef3f48643124ec28d577b488e918a57($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section043761c7993201193b2b1d79ec0dd03a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'match';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'match';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12da01e8dae8fc2280ef3d5b98cea4ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filtersetmatchdescription';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filtersetmatchdescription';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c3ca954d361e33d388cf608d356b919(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'none';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'none';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38c54db526fff004e0d5a32f5c4dc410(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'any';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'any';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80d34145344e498ce4a9c8a1badc3408(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'all';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'all';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ef3f48643124ec28d577b488e918a57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'matchofthefollowing';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'matchofthefollowing';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
