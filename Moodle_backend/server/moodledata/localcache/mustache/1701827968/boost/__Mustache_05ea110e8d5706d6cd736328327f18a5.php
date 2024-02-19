<?php

class __Mustache_05ea110e8d5706d6cd736328327f18a5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="activity-information" data-activityname="';
        $value = $this->resolveValue($context->find('activityname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="activity-information">
';
        $buffer .= $indent . '
';
        $value = $context->find('hascompletion');
        $buffer .= $this->section3a1fb9f95a2ae29fa8b5c0971ef7a743($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasdates');
        $buffer .= $this->sectionA943df5e8d2cc26b2b7ef3ceab06a778($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB4d533f216f9622c64afd5d00c909083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completionrequirements, core_course, {{activityname}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completionrequirements, core_course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7617b97f7288900b43ce269a2dba5d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> core_course/completion_automatic }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/completion_automatic')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3e3fd7accbb2dd7b9948c179816df9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                        {{#completiondetails}}
                            {{> core_course/completion_automatic }}
                        {{/completiondetails}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionB4d533f216f9622c64afd5d00c909083($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('completiondetails');
                $buffer .= $this->sectionD7617b97f7288900b43ce269a2dba5d1($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e40cbd085cf0cdcb9a83a3f760ff857(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core_course/completion_manual }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/completion_manual')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb40c6a5fc419cd37c9ce795653a8dee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="completion-info" data-region="completion-info">
                {{#isautomatic}}
                    <div class="automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                        {{#completiondetails}}
                            {{> core_course/completion_automatic }}
                        {{/completiondetails}}
                    </div>
                {{/isautomatic}}
                {{^isautomatic}}
                    {{#showmanualcompletion}}
                        {{> core_course/completion_manual }}
                    {{/showmanualcompletion}}
                {{/isautomatic}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="completion-info" data-region="completion-info">
';
                $value = $context->find('isautomatic');
                $buffer .= $this->sectionB3e3fd7accbb2dd7b9948c179816df9b($context, $indent, $value);
                $value = $context->find('isautomatic');
                if (empty($value)) {
                    
                    $value = $context->find('showmanualcompletion');
                    $buffer .= $this->section6e40cbd085cf0cdcb9a83a3f760ff857($context, $indent, $value);
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a1fb9f95a2ae29fa8b5c0971ef7a743(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#uservisible}}
            <div class="completion-info" data-region="completion-info">
                {{#isautomatic}}
                    <div class="automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                        {{#completiondetails}}
                            {{> core_course/completion_automatic }}
                        {{/completiondetails}}
                    </div>
                {{/isautomatic}}
                {{^isautomatic}}
                    {{#showmanualcompletion}}
                        {{> core_course/completion_manual }}
                    {{/showmanualcompletion}}
                {{/isautomatic}}
            </div>
        {{/uservisible}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('uservisible');
                $buffer .= $this->sectionEb40c6a5fc419cd37c9ce795653a8dee($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2c08b13150375ae73a0e651873b29cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>core_course/activity_date}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/activity_date')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA943df5e8d2cc26b2b7ef3ceab06a778(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="activity-dates" class="activity-dates">
        <div class="description-inner">
            {{#activitydates}}
                {{>core_course/activity_date}}
            {{/activitydates}}
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div data-region="activity-dates" class="activity-dates">
';
                $buffer .= $indent . '        <div class="description-inner">
';
                $value = $context->find('activitydates');
                $buffer .= $this->sectionB2c08b13150375ae73a0e651873b29cf($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
