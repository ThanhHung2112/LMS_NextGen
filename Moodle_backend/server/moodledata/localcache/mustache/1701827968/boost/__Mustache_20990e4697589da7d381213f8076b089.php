<?php

class __Mustache_20990e4697589da7d381213f8076b089 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<p class="mb-1">
';
        $buffer .= $indent . '    ';
        $value = $context->find('str');
        $buffer .= $this->sectionC42978d344ae7cd356640ca4356c2657($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</p>
';
        $buffer .= $indent . '<ul>
';
        $value = $context->find('licenses');
        $buffer .= $this->section43b8c49404fd2717ad7ae7fe8bcfdca9($context, $indent, $value);
        $value = $context->find('licenses');
        if (empty($value)) {
            
            $buffer .= $indent . '    <li>
';
            $buffer .= $indent . '        ';
            $value = $context->find('str');
            $buffer .= $this->section73efe928fc20f9e7c2c524606e0568b3($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </li>
';
        }
        $buffer .= $indent . '</ul>
';

        return $buffer;
    }

    private function sectionC42978d344ae7cd356640ca4356c2657(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'chooselicense_help, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'chooselicense_help, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section43b8c49404fd2717ad7ae7fe8bcfdca9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li>
        <a href="{{source}}" target="_blank">{{fullname}}</a>
    </li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <li>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('source'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73efe928fc20f9e7c2c524606e0568b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nolicenses, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nolicenses, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
