<?php

class __Mustache_d963fab46f2edfc085b68760d1e279e5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('istrackeduser');
        $buffer .= $this->section837fb3a09b2b002d6924a9e8d4dcba01($context, $indent, $value);
        $value = $context->find('istrackeduser');
        if (empty($value)) {
            
            $buffer .= $indent . '    <button class="btn btn-outline-secondary btn-sm text-nowrap" disabled>
';
            $buffer .= $indent . '        ';
            $value = $context->find('str');
            $buffer .= $this->section448e18140949629a4c17dbabe7973cbe($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </button>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section69a568a86edbde42a3787f5075bc56a6($context, $indent, $value);

        return $buffer;
    }

    private function section9585d79f2064844c36246dac1d81a2a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $buffer .= 'aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1415cb41a4d751af24109d3b9d9f3694(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_manual:aria:done, course, {{activityname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion_manual:aria:done, course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD996515ef1e1973f114653f57c3beaa6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completion_manual:done, core_course ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completion_manual:done, core_course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section474ee1d73b51e3bcc45c4f869fd00e01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button class="btn btn-success btn-sm text-nowrap" data-action="toggle-manual-completion" data-toggletype="manual:undo" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}>
            <i class="fa fa-check" aria-hidden="true"></i> {{#str}} completion_manual:done, core_course {{/str}}
        </button>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <button class="btn btn-success btn-sm text-nowrap" data-action="toggle-manual-completion" data-toggletype="manual:undo" data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-activityname="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-withavailability="';
                $value = $this->resolveValue($context->find('withavailability'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('accessibledescription');
                $buffer .= $this->section9585d79f2064844c36246dac1d81a2a2($context, $indent, $value);
                $value = $context->find('accessibledescription');
                if (empty($value)) {
                    
                    $buffer .= 'title="';
                    $value = $context->find('str');
                    $buffer .= $this->section1415cb41a4d751af24109d3b9d9f3694($context, $indent, $value);
                    $buffer .= '" ';
                    $buffer .= 'aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->section1415cb41a4d751af24109d3b9d9f3694($context, $indent, $value);
                    $buffer .= '" ';
                }
                $buffer .= '>
';
                $buffer .= $indent . '            <i class="fa fa-check" aria-hidden="true"></i> ';
                $value = $context->find('str');
                $buffer .= $this->sectionD996515ef1e1973f114653f57c3beaa6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e716ec6364ba26d1c17de9b2a71fdf0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_manual:aria:markdone, course, {{activityname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion_manual:aria:markdone, course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section448e18140949629a4c17dbabe7973cbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completion_manual:markdone, core_course ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completion_manual:markdone, core_course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1754d54d5e2bddd7c8dd7c3e644b432b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button class="btn btn-outline-secondary btn-sm text-nowrap" data-action="toggle-manual-completion" data-toggletype="manual:mark-done" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}>
            {{#str}} completion_manual:markdone, core_course {{/str}}
        </button>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <button class="btn btn-outline-secondary btn-sm text-nowrap" data-action="toggle-manual-completion" data-toggletype="manual:mark-done" data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-activityname="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-withavailability="';
                $value = $this->resolveValue($context->find('withavailability'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('accessibledescription');
                $buffer .= $this->section9585d79f2064844c36246dac1d81a2a2($context, $indent, $value);
                $value = $context->find('accessibledescription');
                if (empty($value)) {
                    
                    $buffer .= 'title="';
                    $value = $context->find('str');
                    $buffer .= $this->section7e716ec6364ba26d1c17de9b2a71fdf0($context, $indent, $value);
                    $buffer .= '" ';
                    $buffer .= 'aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->section7e716ec6364ba26d1c17de9b2a71fdf0($context, $indent, $value);
                    $buffer .= '" ';
                }
                $buffer .= '>
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section448e18140949629a4c17dbabe7973cbe($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section837fb3a09b2b002d6924a9e8d4dcba01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#overallcomplete}}
        <button class="btn btn-success btn-sm text-nowrap" data-action="toggle-manual-completion" data-toggletype="manual:undo" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}>
            <i class="fa fa-check" aria-hidden="true"></i> {{#str}} completion_manual:done, core_course {{/str}}
        </button>
    {{/overallcomplete}}
    {{#overallincomplete}}
        <button class="btn btn-outline-secondary btn-sm text-nowrap" data-action="toggle-manual-completion" data-toggletype="manual:mark-done" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}>
            {{#str}} completion_manual:markdone, core_course {{/str}}
        </button>
    {{/overallincomplete}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('overallcomplete');
                $buffer .= $this->section474ee1d73b51e3bcc45c4f869fd00e01($context, $indent, $value);
                $value = $context->find('overallincomplete');
                $buffer .= $this->section1754d54d5e2bddd7c8dd7c3e644b432b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69a568a86edbde42a3787f5075bc56a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_course/manual_completion_toggle\'], toggle => {
    toggle.init()
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_course/manual_completion_toggle\'], toggle => {
';
                $buffer .= $indent . '    toggle.init()
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
