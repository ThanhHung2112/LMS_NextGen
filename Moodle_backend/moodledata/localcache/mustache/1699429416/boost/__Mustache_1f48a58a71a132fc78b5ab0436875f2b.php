<?php

class __Mustache_1f48a58a71a132fc78b5ab0436875f2b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('singleheader');
        $buffer .= $this->section71854bb38889a176f1b69901795a88e1($context, $indent, $value);
        $value = $context->find('header');
        $buffer .= $this->section71854bb38889a176f1b69901795a88e1($context, $indent, $value);
        $value = $context->find('restrictionlock');
        $buffer .= $this->section82e2f52c67d74abf9663ee117dff29d0($context, $indent, $value);
        $buffer .= $indent . '<div data-region="sectionbadges" class="sectionbadges d-flex align-items-center">
';
        $blockFunction = $context->findInBlock('core_courseformat/local/content/section/badges');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/badges')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('collapsemenu');
        $buffer .= $this->sectionE697d4d0694eba99902ec9a15772cc48($context, $indent, $value);
        $value = $context->find('controlmenu');
        $buffer .= $this->section75e00fe9dfa6a9ff02d502ce551d8830($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div id="coursecontentcollapse';
        $value = $this->resolveValue($context->find('num'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    class="content ';
        $value = $context->find('iscoursedisplaymultipage');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '        ';
            $value = $context->find('sitehome');
            if (empty($value)) {
                
                $buffer .= 'course-content-item-content collapse ';
                $value = $context->find('contentcollapsed');
                if (empty($value)) {
                    
                    $buffer .= 'show';
                }
            }
            $buffer .= '
';
            $buffer .= $indent . '    ';
        }
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="';
        $value = $context->find('hasavailability');
        $buffer .= $this->section1dee8adaf405bfc6db6cbb048fef1653($context, $indent, $value);
        $buffer .= ' my-3" data-for="sectioninfo">
';
        $value = $context->find('summary');
        $buffer .= $this->section76416bc96e1781d55654c3786cffcaa9($context, $indent, $value);
        $value = $context->find('availability');
        $buffer .= $this->sectionB5ef5c2caa473bd9e11be5b048ce655f($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('cmsummary');
        $buffer .= $this->section1a06f0302111694d291be3af57cadede($context, $indent, $value);
        $value = $context->find('cmlist');
        $buffer .= $this->section8f7bd8b64df2e22392fb6950b74f7ff8($context, $indent, $value);
        $value = $this->resolveValue($context->find('cmcontrols'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('insertafter');
        $buffer .= $this->section29643446cac8adc3a6b4dab3bd941b6b($context, $indent, $value);

        return $buffer;
    }

    private function section71854bb38889a176f1b69901795a88e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{$ core_courseformat/local/content/section/header }}
    {{> core_courseformat/local/content/section/header }}
{{/ core_courseformat/local/content/section/header }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/header');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/header')) {
                        $buffer .= $partial->renderInternal($context, $indent . '    ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b7a74ef365e2e19e174c81d3ebda570(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/unlock, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/unlock, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82e2f52c67d74abf9663ee117dff29d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="align-self-center ml-2">
        {{#pix}}t/unlock, core{{/pix}}
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="align-self-center ml-2">
';
                $buffer .= $indent . '        ';
                $value = $context->find('pix');
                $buffer .= $this->section0b7a74ef365e2e19e174c81d3ebda570($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1c5833858b6a763436e852c524f170c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapseall';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapseall';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c42c2ba118f2e9924725a2f71fafad6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expandall';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'expandall';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE697d4d0694eba99902ec9a15772cc48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="flex-fill d-flex justify-content-end mr-2 align-self-start mt-2">
    <a
        id="collapsesections"
        class="section-collapsemenu"
        href="#"
        aria-expanded="true"
        role="button"
        data-toggle="toggleall"
    >
        <span class="collapseall text-nowrap">{{#str}}collapseall{{/str}}</span>
        <span class="expandall text-nowrap">{{#str}}expandall{{/str}}</span>
    </a>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="flex-fill d-flex justify-content-end mr-2 align-self-start mt-2">
';
                $buffer .= $indent . '    <a
';
                $buffer .= $indent . '        id="collapsesections"
';
                $buffer .= $indent . '        class="section-collapsemenu"
';
                $buffer .= $indent . '        href="#"
';
                $buffer .= $indent . '        aria-expanded="true"
';
                $buffer .= $indent . '        role="button"
';
                $buffer .= $indent . '        data-toggle="toggleall"
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '        <span class="collapseall text-nowrap">';
                $value = $context->find('str');
                $buffer .= $this->sectionE1c5833858b6a763436e852c524f170c($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        <span class="expandall text-nowrap">';
                $value = $context->find('str');
                $buffer .= $this->section5c42c2ba118f2e9924725a2f71fafad6($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75e00fe9dfa6a9ff02d502ce551d8830(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{$ core_courseformat/local/content/section/controlmenu }}
        {{> core_courseformat/local/content/section/controlmenu }}
    {{/ core_courseformat/local/content/section/controlmenu }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/controlmenu');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/controlmenu')) {
                        $buffer .= $partial->renderInternal($context, $indent . '        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1dee8adaf405bfc6db6cbb048fef1653(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'description';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'description';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76416bc96e1781d55654c3786cffcaa9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$ core_courseformat/local/content/section/summary }}
            {{> core_courseformat/local/content/section/summary }}
        {{/ core_courseformat/local/content/section/summary }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/summary');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/summary')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5ef5c2caa473bd9e11be5b048ce655f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$ core_courseformat/local/content/section/availability }}
            {{> core_courseformat/local/content/section/availability }}
        {{/ core_courseformat/local/content/section/availability }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/availability');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/availability')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a06f0302111694d291be3af57cadede(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{$ core_courseformat/local/content/section/cmsummary }}
        {{> core_courseformat/local/content/section/cmsummary }}
    {{/ core_courseformat/local/content/section/cmsummary }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/cmsummary');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/cmsummary')) {
                        $buffer .= $partial->renderInternal($context, $indent . '        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f7bd8b64df2e22392fb6950b74f7ff8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{$ core_courseformat/local/content/section/cmlist }}
        {{> core_courseformat/local/content/section/cmlist }}
    {{/ core_courseformat/local/content/section/cmlist }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/cmlist');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/cmlist')) {
                        $buffer .= $partial->renderInternal($context, $indent . '        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e01fd0618fb9e53b875dff48db1ff75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$ core_courseformat/local/content/addsection}}
            {{> core_courseformat/local/content/addsection}}
        {{/ core_courseformat/local/content/addsection}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/addsection');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/addsection')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29643446cac8adc3a6b4dab3bd941b6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#numsections}}
        {{$ core_courseformat/local/content/addsection}}
            {{> core_courseformat/local/content/addsection}}
        {{/ core_courseformat/local/content/addsection}}
    {{/numsections}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('numsections');
                $buffer .= $this->section3e01fd0618fb9e53b875dff48db1ff75($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
