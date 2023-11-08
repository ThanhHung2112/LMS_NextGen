<?php

class __Mustache_4d6e2fa1ff953570e95afd1002da55cb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block4110e06f355343e08ec934e959288185'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $value = $context->find('js');
            $buffer .= $this->sectionB93d29c4458e4d78362b66c86c22b0c5($context, $indent, $value);
        }

        return $buffer;
    }

    private function sectionCc48dcea9d2838da4d0362b228628420(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'is-invalid';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'is-invalid';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68b77dad2509079f30f242612e844ca4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'multiple';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'multiple';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB837007b49426fd84d7b0ff91d1ffd2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                autofocus aria-describedby="{{element.iderror}}"
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                autofocus aria-describedby="';
                $value = $this->resolveValue($context->findDot('element.iderror'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section997964a2885c2eb4bd579fee311a1a00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{value}}" {{#selected}}selected{{/selected}}>{{{text}}}</option>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f3168613dcc8db1612ea46e7450d6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="badge badge-info">{{{text}}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="badge badge-info">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fba4193ecf697c80af9eff20b865b29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#selected}}<span class="badge badge-info">{{{text}}}</span>{{/selected}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $context->find('selected');
                $buffer .= $this->section46f3168613dcc8db1612ea46e7450d6e($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49877c3782c498ef56b350f4953b195b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#element.options}}
                {{#selected}}<span class="badge badge-info">{{{text}}}</span>{{/selected}}
            {{/element.options}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('element.options');
                $buffer .= $this->section5fba4193ecf697c80af9eff20b865b29($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA34a7eadb73bc93c086a68e3e599e707(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'managestandardtags, core_tag';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'managestandardtags, core_tag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section734cc6b7507a80e14809a27ca457101d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{element.managestandardtagsurl}}">{{#str}}managestandardtags, core_tag{{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->findDot('element.managestandardtagsurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionA34a7eadb73bc93c086a68e3e599e707($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4eefd740197eca864c800ff60b2e78a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '#{{element.id}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '#';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section813be352d53fe0b93fb1b523beb80c9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{element.ajax}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->findDot('element.ajax'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1b52fb11c4923d3a9c108f6da76a23d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{element.placeholder}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->findDot('element.placeholder'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33c1e0b2dcc3653386b6a9a0dbf15ab0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{element.noselectionstring}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->findDot('element.noselectionstring'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB93d29c4458e4d78362b66c86c22b0c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/form-autocomplete\'], function(module) {
    module.enhance({{#quote}}#{{element.id}}{{/quote}},
                   {{element.tags}},
                   {{#quote}}{{element.ajax}}{{/quote}},
                   {{#quote}}{{element.placeholder}}{{/quote}},
                   {{element.casesensitive}},
                   {{element.showsuggestions}},
                   {{#quote}}{{element.noselectionstring}}{{/quote}});
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core/form-autocomplete\'], function(module) {
';
                $buffer .= $indent . '    module.enhance(';
                $value = $context->find('quote');
                $buffer .= $this->section4eefd740197eca864c800ff60b2e78a9($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '                   ';
                $value = $this->resolveValue($context->findDot('element.tags'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',
';
                $buffer .= $indent . '                   ';
                $value = $context->find('quote');
                $buffer .= $this->section813be352d53fe0b93fb1b523beb80c9f($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '                   ';
                $value = $context->find('quote');
                $buffer .= $this->sectionE1b52fb11c4923d3a9c108f6da76a23d($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '                   ';
                $value = $this->resolveValue($context->findDot('element.casesensitive'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',
';
                $buffer .= $indent . '                   ';
                $value = $this->resolveValue($context->findDot('element.showsuggestions'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ',
';
                $buffer .= $indent . '                   ';
                $value = $context->find('quote');
                $buffer .= $this->section33c1e0b2dcc3653386b6a9a0dbf15ab0($context, $indent, $value);
                $buffer .= ');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block4110e06f355343e08ec934e959288185($context)
    {
        $indent = $buffer = '';
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '        <input type="hidden" name="';
            $value = $this->resolveValue($context->findDot('element.nameraw'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" value="_qf__force_multiselect_submission">
';
            $buffer .= $indent . '        <select class="custom-select ';
            $value = $context->find('error');
            $buffer .= $this->sectionCc48dcea9d2838da4d0362b228628420($context, $indent, $value);
            $buffer .= '" name="';
            $value = $this->resolveValue($context->findDot('element.name'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '            id="';
            $value = $this->resolveValue($context->findDot('element.id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '            ';
            $value = $context->findDot('element.multiple');
            $buffer .= $this->section68b77dad2509079f30f242612e844ca4($context, $indent, $value);
            $buffer .= '
';
            $value = $context->find('error');
            $buffer .= $this->sectionB837007b49426fd84d7b0ff91d1ffd2b($context, $indent, $value);
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->findDot('element.attributes'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ' >
';
            $value = $context->findDot('element.options');
            $buffer .= $this->section997964a2885c2eb4bd579fee311a1a00($context, $indent, $value);
            $buffer .= $indent . '        </select>
';
        }
        $value = $context->findDot('element.frozen');
        $buffer .= $this->section49877c3782c498ef56b350f4953b195b($context, $indent, $value);
        $value = $context->findDot('element.managestandardtagsurl');
        $buffer .= $this->section734cc6b7507a80e14809a27ca457101d($context, $indent, $value);
    
        return $buffer;
    }
}
