<?php

class __Mustache_909c1c5350cd59ce82643ff57cdaa239 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('headerdisplaymultipage');
        $buffer .= $this->section7cedcb6817f2c3a22f8706d49f3e8491($context, $indent, $value);
        $value = $context->find('headerdisplaymultipage');
        if (empty($value)) {
            
            $value = $context->find('sitehome');
            $buffer .= $this->section870988d7777f07f79c60c0fb837f2c87($context, $indent, $value);
            $value = $context->find('sitehome');
            if (empty($value)) {
                
                $buffer .= $indent . '        <div class="d-flex align-items-start position-relative">
';
                $buffer .= $indent . '            <a role="button" data-toggle="collapse"
';
                $buffer .= $indent . '               href="#coursecontentcollapse';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               id="collapssesection';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               aria-expanded="';
                $value = $context->find('contentcollapsed');
                if (empty($value)) {
                    
                    $buffer .= 'true';
                }
                $value = $context->find('contentcollapsed');
                $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '               aria-controls="coursecontentcollapse';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               class="btn btn-icon mr-1 icons-collapse-expand justify-content-center
';
                $buffer .= $indent . '                   ';
                $value = $context->find('editing');
                if (empty($value)) {
                    
                    $buffer .= ' stretched-link ';
                }
                $buffer .= '
';
                $buffer .= $indent . '                   ';
                $value = $context->find('contentcollapsed');
                $buffer .= $this->sectionE27d58bd82bf887495509fb3582d0729($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '               aria-label="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="expanded-icon icon-no-margin p-2" title="';
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->sectionEce766800de4730c5a948801df414738($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '            <span class="collapsed-icon icon-no-margin p-2" title="';
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section8a8ae941fd79f459323bea8528b0311c($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section99c846dfb5f618178bca670626f33c8b($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <h3 class="sectionname course-content-item d-flex align-self-stretch align-items-center mb-0"
';
                $buffer .= $indent . '                id="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title" data-for="section_title" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-number="';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </h3>
';
                $buffer .= $indent . '        </div>
';
            }
        }

        return $buffer;
    }

    private function section7cedcb6817f2c3a22f8706d49f3e8491(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h3 id="sectionid-{{id}}-title" class="sectionname">
        {{{title}}}
    </h3>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <h3 id="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title" class="sectionname">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section870988d7777f07f79c60c0fb837f2c87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2 id="sectionid-{{id}}-title" class="sectionname">
            {{{title}}}
        </h2>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h2 id="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-title" class="sectionname">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </h2>
';
                $context->pop();
            }
        }
    
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

    private function sectionE27d58bd82bf887495509fb3582d0729(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapsed ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapsed ';
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

}
