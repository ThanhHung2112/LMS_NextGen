<?php

class __Mustache_5c11ed8b3d1e82b1a224bc6de50d6e14 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('secondarynavigation');
        if (empty($value)) {
            
            $buffer .= $indent . '    <ul class="nav nav-tabs" role="tablist">
';
            $buffer .= $indent . '        <!-- First the top most node and immediate children -->
';
            $buffer .= $indent . '        <li class="nav-item">
';
            $buffer .= $indent . '            <a class="nav-link active" href="#link';
            $value = $this->resolveValue($context->findDot('node.key'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" data-toggle="tab" role="tab" aria-selected="true">';
            $value = $this->resolveValue($context->findDot('node.text'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</a>
';
            $buffer .= $indent . '        </li>
';
            $buffer .= $indent . '        <!-- Now the first level children with sub nodes -->
';
            $value = $context->findDot('node.children');
            $buffer .= $this->section3ec6b444648e9400078ed1673345a94f($context, $indent, $value);
            $buffer .= $indent . '    </ul>
';
        }
        $buffer .= $indent . '<div class="tab-content mt-3">
';
        $buffer .= $indent . '    <div class="tab-pane active" id="link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $context->find('secondarynavigation');
        if (empty($value)) {
            
            $buffer .= 'role="tabpanel"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '        <div class="container-fluid">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '                <div class="col-sm-3">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col">
';
        $buffer .= $indent . '                    <ul class="list-unstyled">
';
        $value = $context->findDot('node.children');
        $buffer .= $this->sectionE267c06f2090a763a8d9f5b3e72f5008($context, $indent, $value);
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $value = $context->findDot('node.children');
        $buffer .= $this->section67903123cbc15f822e0ddc78e4d3ddfd($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->findDot('node.children');
        $buffer .= $this->section8fefb9b483e9c45c6896d4af0b5a6571($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section25e708e678a90153ddf2c70b6a90e9f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{^is_short_branch}}
                        <li class="nav-item">
                            <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">{{text}}</a>
                        </li>
                    {{/is_short_branch}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('is_short_branch');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <li class="nav-item">
';
                    $buffer .= $indent . '                            <a class="nav-link" href="#link';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                        </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfc2ab05a77f9ab5f6662c004c3b99cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#display}}
                    {{^is_short_branch}}
                        <li class="nav-item">
                            <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">{{text}}</a>
                        </li>
                    {{/is_short_branch}}
                {{/display}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display');
                $buffer .= $this->section25e708e678a90153ddf2c70b6a90e9f7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ec6b444648e9400078ed1673345a94f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#children.count}}
                {{#display}}
                    {{^is_short_branch}}
                        <li class="nav-item">
                            <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">{{text}}</a>
                        </li>
                    {{/is_short_branch}}
                {{/display}}
            {{/children.count}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionCfc2ab05a77f9ab5f6662c004c3b99cb($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc392130f2bf2711ee960d73aad40d3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <li><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE267c06f2090a763a8d9f5b3e72f5008(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{^children.count}}
                                {{#display}}
                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                {{/display}}
                            {{/children.count}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    $value = $context->find('display');
                    $buffer .= $this->sectionEc392130f2bf2711ee960d73aad40d3e($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a94d8da24d2b62547a5dc6f95f3758e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4><a href="{{action}}">{{text}}</a></h4>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h4><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b906c06553db3566a6b2b7a89666b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{> core/settings_link_page_single }}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA45707198a4fb18ddb839df4a37db5a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                    {{^action}}<h4>{{text}}</h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <hr>
';
                $buffer .= $indent . '                            <div class="row">
';
                $buffer .= $indent . '                                <div class="col-sm-3">
';
                $buffer .= $indent . '                                    ';
                $value = $context->find('action');
                $buffer .= $this->section4a94d8da24d2b62547a5dc6f95f3758e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="col">
';
                $buffer .= $indent . '                                    <ul class="list-unstyled">
';
                $value = $context->find('children');
                $buffer .= $this->sectionAd3b906c06553db3566a6b2b7a89666b($context, $indent, $value);
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91051c4da86f44006b3ea8c93df04f20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#is_short_branch}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                    {{^action}}<h4>{{text}}</h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        {{/is_short_branch}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('is_short_branch');
                $buffer .= $this->sectionA45707198a4fb18ddb839df4a37db5a8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2a894a3d54281df405d43c957741954(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#children.count}}
                        {{#is_short_branch}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                    {{^action}}<h4>{{text}}</h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        {{/is_short_branch}}
                    {{/children.count}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                $buffer .= $this->section91051c4da86f44006b3ea8c93df04f20($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67903123cbc15f822e0ddc78e4d3ddfd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#display}}
                    {{#children.count}}
                        {{#is_short_branch}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                    {{^action}}<h4>{{text}}</h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        {{/is_short_branch}}
                    {{/children.count}}
                {{/display}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display');
                $buffer .= $this->sectionB2a894a3d54281df405d43c957741954($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2036dd12bd1df7c6c8d9f8331d25e4d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <li><a href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</a></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2051869608def53993eed4f4ff0eb451(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#display}}
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    {{/display}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display');
                $buffer .= $this->section2036dd12bd1df7c6c8d9f8331d25e4d0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2636ed0abcb943510fd2f38963a0af5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{> core/settings_link_page_single }}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF686948499df685bde0e653db03c25ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <hr>
';
                $buffer .= $indent . '                                <div class="row">
';
                $buffer .= $indent . '                                    <div class="col-sm-3">
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('action');
                $buffer .= $this->section4a94d8da24d2b62547a5dc6f95f3758e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        ';
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="col-sm-9">
';
                $buffer .= $indent . '                                        <ul class="list-unstyled">
';
                $value = $context->find('children');
                $buffer .= $this->sectionE2636ed0abcb943510fd2f38963a0af5($context, $indent, $value);
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF96d600828e638be47fa64955b660691(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionF686948499df685bde0e653db03c25ea($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56704c6bed3b45f54ebacadfdd1f1d1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#display}}
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        {{/display}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display');
                $buffer .= $this->sectionF96d600828e638be47fa64955b660691($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1604eb7ad82cc702e452364bfb3194c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane" id="link{{key}}" {{^secondarynavigation}}role="tabpanel"{{/secondarynavigation}}>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3">
                            {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                            {{^action}}<h4>{{text}}</h4>{{/action}}
                        </div>
                        <div class="col-sm-9">
                            <ul class="list-unstyled">
                                {{#children}}
                                    {{#display}}
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    {{/display}}
                                {{/children}}
                            </ul>
                        </div>
                    </div>
                    {{#children}}
                        {{#display}}
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        {{/display}}
                    {{/children}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="tab-pane" id="link';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('secondarynavigation');
                if (empty($value)) {
                    
                    $buffer .= 'role="tabpanel"';
                }
                $buffer .= '>
';
                $buffer .= $indent . '                <div class="container-fluid">
';
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="col-sm-3">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('action');
                $buffer .= $this->section4a94d8da24d2b62547a5dc6f95f3758e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-sm-9">
';
                $buffer .= $indent . '                            <ul class="list-unstyled">
';
                $value = $context->find('children');
                $buffer .= $this->section2051869608def53993eed4f4ff0eb451($context, $indent, $value);
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $value = $context->find('children');
                $buffer .= $this->section56704c6bed3b45f54ebacadfdd1f1d1f($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8fefb9b483e9c45c6896d4af0b5a6571(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#children.count}}
            <div class="tab-pane" id="link{{key}}" {{^secondarynavigation}}role="tabpanel"{{/secondarynavigation}}>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3">
                            {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                            {{^action}}<h4>{{text}}</h4>{{/action}}
                        </div>
                        <div class="col-sm-9">
                            <ul class="list-unstyled">
                                {{#children}}
                                    {{#display}}
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    {{/display}}
                                {{/children}}
                            </ul>
                        </div>
                    </div>
                    {{#children}}
                        {{#display}}
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        {{/display}}
                    {{/children}}
                </div>
            </div>
        {{/children.count}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionD1604eb7ad82cc702e452364bfb3194c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
