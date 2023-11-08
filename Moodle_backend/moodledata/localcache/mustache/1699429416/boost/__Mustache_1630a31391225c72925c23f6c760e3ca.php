<?php

class __Mustache_1630a31391225c72925c23f6c760e3ca extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<legend class="sr-only">';
        $value = $this->resolveValue($context->find('header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</legend>
';
        $buffer .= $indent . '<div class="d-flex align-items-center mb-2">
';
        $buffer .= $indent . '    <div class="position-relative d-flex ftoggler align-items-center position-relative mr-1">
';
        $value = $context->find('collapseable');
        $buffer .= $this->sectionBc9ccf575af5b249f6c4c6b4e5bf9d75($context, $indent, $value);
        $buffer .= $indent . '        <h3 class="d-flex align-self-stretch align-items-center mb-0" aria-hidden="true">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </h3>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('helpbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= 'container" class="fcontainer ';
        $value = $context->find('collapseable');
        $buffer .= $this->sectionFf0fe0910fea799e597d74360fc85a68($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('collapsed');
        if (empty($value)) {
            
            $buffer .= 'show';
        }
        $buffer .= '">
';

        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7df0e231697f3a9dfdd1138e1b79a2b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapsed';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapsed';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ac795c23146489fad8f951c23f9a92a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapse, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEce766800de4730c5a948801df414738(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/expandedchevron, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/expandedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b5765485c94c190bf567731edb08c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expand, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expand, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a8ae941fd79f459323bea8528b0311c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedchevron, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99c846dfb5f618178bca670626f33c8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedchevron_rtl, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsedchevron_rtl, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc9ccf575af5b249f6c4c6b4e5bf9d75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a data-toggle="collapse"
               href="#{{id}}container"
               role="button"
               aria-expanded="{{#collapsed}}false{{/collapsed}}{{^collapsed}}true{{/collapsed}}"
               aria-controls="{{id}}container"
               class="btn btn-icon mr-1 icons-collapse-expand stretched-link fheader {{#collapsed}}collapsed{{/collapsed}}"
            >
                <span class="expanded-icon icon-no-margin p-2" title="{{#str}} collapse, core {{/str}}">
                    {{#pix}} t/expandedchevron, core {{/pix}}
                </span>
                <span class="collapsed-icon icon-no-margin p-2" title="{{#str}} expand, core {{/str}}">
                    <span class="dir-rtl-hide">{{#pix}} t/collapsedchevron, core {{/pix}}</span>
                    <span class="dir-ltr-hide">{{#pix}} t/collapsedchevron_rtl, core {{/pix}}</span>
                </span>
                <span class="sr-only">{{{header}}}</span>
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a data-toggle="collapse"
';
                $buffer .= $indent . '               href="#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= 'container"
';
                $buffer .= $indent . '               role="button"
';
                $buffer .= $indent . '               aria-expanded="';
                $value = $context->find('collapsed');
                $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
                $value = $context->find('collapsed');
                if (empty($value)) {
                    
                    $buffer .= 'true';
                }
                $buffer .= '"
';
                $buffer .= $indent . '               aria-controls="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= 'container"
';
                $buffer .= $indent . '               class="btn btn-icon mr-1 icons-collapse-expand stretched-link fheader ';
                $value = $context->find('collapsed');
                $buffer .= $this->section7df0e231697f3a9dfdd1138e1b79a2b0($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '                <span class="expanded-icon icon-no-margin p-2" title="';
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->sectionEce766800de4730c5a948801df414738($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '                <span class="collapsed-icon icon-no-margin p-2" title="';
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section8a8ae941fd79f459323bea8528b0311c($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section99c846dfb5f618178bca670626f33c8b($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '                <span class="sr-only">';
                $value = $this->resolveValue($context->find('header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf0fe0910fea799e597d74360fc85a68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapseable collapse ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapseable collapse ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
