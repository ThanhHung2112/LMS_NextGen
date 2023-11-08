<?php

class __Mustache_b94d9719b19c35c8006fc750adcec3e8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="initialbar ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' d-flex flex-wrap justify-content-center justify-content-md-start">
';
        $buffer .= $indent . '    <span class="initialbarlabel mr-2">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <nav class="initialbargroups d-flex flex-wrap justify-content-center justify-content-md-start">
';
        $buffer .= $indent . '        <ul class="pagination pagination-sm">
';
        $buffer .= $indent . '            <li class="initialbarall page-item';
        $value = $context->find('current');
        if (empty($value)) {
            
            $buffer .= ' active';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                <a data-initial="" class="page-link" href="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $value = $context->find('current');
        if (empty($value)) {
            
            $buffer .= ' aria-current="true"';
        }
        $buffer .= '>';
        $value = $this->resolveValue($context->find('all'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '        </ul>
';
        $value = $context->find('group');
        $buffer .= $this->sectionC5a9f910cd1bfc2d45471082d8c6917b($context, $indent, $value);
        $buffer .= $indent . '    </nav>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3ff98c1deac347d8c4a99550583d4940(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d2531a9bf9666cc7364f9dd9122736e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-current="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section943d5100a7e36743dfacada77051bb5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li data-initial="{{name}}" class="page-item {{name}}{{#selected}} active{{/selected}}">
                        <a class="page-link" href="{{url}}"{{#selected}} aria-current="true"{{/selected}}>{{name}}</a>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li data-initial="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-item ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $value = $context->find('selected');
                $buffer .= $this->section3ff98c1deac347d8c4a99550583d4940($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <a class="page-link" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $value = $context->find('selected');
                $buffer .= $this->section6d2531a9bf9666cc7364f9dd9122736e($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5a9f910cd1bfc2d45471082d8c6917b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul class="pagination pagination-sm">
                {{#letter}}
                    <li data-initial="{{name}}" class="page-item {{name}}{{#selected}} active{{/selected}}">
                        <a class="page-link" href="{{url}}"{{#selected}} aria-current="true"{{/selected}}>{{name}}</a>
                    </li>
                {{/letter}}
            </ul>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <ul class="pagination pagination-sm">
';
                $value = $context->find('letter');
                $buffer .= $this->section943d5100a7e36743dfacada77051bb5c($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
