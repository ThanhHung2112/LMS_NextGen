<?php

class __Mustache_35a0dfa7c197bfcc1b61839e3102e3dc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('haschildren');
        $buffer .= $this->section9f6c4bc94330dddef64d72e6f0c6e5f8($context, $indent, $value);
        $value = $context->find('haschildren');
        if (empty($value)) {
            
            $buffer .= $indent . '    <li data-key="';
            $value = $this->resolveValue($context->find('key'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="nav-item" role="none" data-forceintomoremenu="';
            $value = $context->find('forceintomoremenu');
            $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
            $value = $context->find('forceintomoremenu');
            if (empty($value)) {
                
                $buffer .= 'false';
            }
            $buffer .= '">
';
            $value = $context->find('istablist');
            $buffer .= $this->section7e0904848bbb60ebcabf38aee277ddd3($context, $indent, $value);
            $value = $context->find('istablist');
            if (empty($value)) {
                
                $value = $context->find('is_action_link');
                $buffer .= $this->sectionE5d03f1406ab459709a17afeeaffe5ff($context, $indent, $value);
                $value = $context->find('is_action_link');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <a role="menuitem" class="nav-link ';
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $context->find('classes');
                    $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                    href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('title');
                    $buffer .= $this->sectionCb30325ba4e5065f061652102e745487($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('isactive');
                    $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('isactive');
                    if (empty($value)) {
                        
                        $buffer .= 'tabindex="-1"';
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '                >
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                </a>
';
                }
            }
            $buffer .= $indent . '    </li>
';
        }

        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e96ec75439305fc88c78e77946e47bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb30325ba4e5065f061652102e745487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{.}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6805fd502f1e55bd3a63b02c625bf221(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07d251a7ffeeced77bf47b8d72b494d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> core/actions }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/actions')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ee715c754f865a16945c723dfc0c6aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a class="dropdown-item" role="menuitem" {{#actionattributes}}{{name}}="{{value}}" {{/actionattributes}} href="{{{url}}}{{{action}}}"
                            {{#title}}title="{{.}}"{{/title}}
                            data-disableactive="true" tabindex="-1"
                        >
                            {{{text}}}
                        </a>
                        {{#action_link_actions}}
                            {{> core/actions }}
                        {{/action_link_actions}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a class="dropdown-item" role="menuitem" ';
                $value = $context->find('actionattributes');
                $buffer .= $this->section6805fd502f1e55bd3a63b02c625bf221($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            ';
                $value = $context->find('title');
                $buffer .= $this->sectionCb30325ba4e5065f061652102e745487($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            data-disableactive="true" tabindex="-1"
';
                $buffer .= $indent . '                        >
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $value = $context->find('action_link_actions');
                $buffer .= $this->section07d251a7ffeeced77bf47b8d72b494d6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8754538c7bd3704980215db1258c2074(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dropdown-divider"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="dropdown-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ad55755fc020ce903dca0c268016627(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{^divider}}
                    {{#is_action_link}}
                        <a class="dropdown-item" role="menuitem" {{#actionattributes}}{{name}}="{{value}}" {{/actionattributes}} href="{{{url}}}{{{action}}}"
                            {{#title}}title="{{.}}"{{/title}}
                            data-disableactive="true" tabindex="-1"
                        >
                            {{{text}}}
                        </a>
                        {{#action_link_actions}}
                            {{> core/actions }}
                        {{/action_link_actions}}
                    {{/is_action_link}}
                    {{^is_action_link}}
                        <a class="dropdown-item" role="menuitem" href="{{{url}}}{{{action}}}" {{#isactive}}aria-current="true"{{/isactive}} tabindex="-1"
                            {{#title}}title="{{.}}"{{/title}}
                        >
                            {{{text}}}
                        </a>
                    {{/is_action_link}}
                {{/divider}}
                {{#divider}}
                    <div class="dropdown-divider"></div>
                {{/divider}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    $value = $context->find('is_action_link');
                    $buffer .= $this->section3ee715c754f865a16945c723dfc0c6aa($context, $indent, $value);
                    $value = $context->find('is_action_link');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                        <a class="dropdown-item" role="menuitem" href="';
                        $value = $this->resolveValue($context->find('url'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $value = $this->resolveValue($context->find('action'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '" ';
                        $value = $context->find('isactive');
                        $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                        $buffer .= ' tabindex="-1"
';
                        $buffer .= $indent . '                            ';
                        $value = $context->find('title');
                        $buffer .= $this->sectionCb30325ba4e5065f061652102e745487($context, $indent, $value);
                        $buffer .= '
';
                        $buffer .= $indent . '                        >
';
                        $buffer .= $indent . '                            ';
                        $value = $this->resolveValue($context->find('text'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '
';
                        $buffer .= $indent . '                        </a>
';
                    }
                }
                $value = $context->find('divider');
                $buffer .= $this->section8754538c7bd3704980215db1258c2074($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f6c4bc94330dddef64d72e6f0c6e5f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="dropdown nav-item" role="none" data-forceintomoremenu="{{#forceintomoremenu}}true{{/forceintomoremenu}}{{^forceintomoremenu}}false{{/forceintomoremenu}}">
        <a class="dropdown-toggle nav-link {{#isactive}}active{{/isactive}} {{#classes}}{{.}} {{/classes}}" id="drop-down-{{moremenuid}}" role="menuitem" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-{{moremenuid}}"
            {{#title}}title="{{.}}"{{/title}}
            {{#isactive}}aria-current="true"{{/isactive}}
            {{^isactive}}tabindex="-1"{{/isactive}}
        >
            {{{text}}}
        </a>
        <div class="dropdown-menu" role="menu" id="drop-down-menu-{{moremenuid}}" aria-labelledby="drop-down-{{moremenuid}}">
            {{#children}}
                {{^divider}}
                    {{#is_action_link}}
                        <a class="dropdown-item" role="menuitem" {{#actionattributes}}{{name}}="{{value}}" {{/actionattributes}} href="{{{url}}}{{{action}}}"
                            {{#title}}title="{{.}}"{{/title}}
                            data-disableactive="true" tabindex="-1"
                        >
                            {{{text}}}
                        </a>
                        {{#action_link_actions}}
                            {{> core/actions }}
                        {{/action_link_actions}}
                    {{/is_action_link}}
                    {{^is_action_link}}
                        <a class="dropdown-item" role="menuitem" href="{{{url}}}{{{action}}}" {{#isactive}}aria-current="true"{{/isactive}} tabindex="-1"
                            {{#title}}title="{{.}}"{{/title}}
                        >
                            {{{text}}}
                        </a>
                    {{/is_action_link}}
                {{/divider}}
                {{#divider}}
                    <div class="dropdown-divider"></div>
                {{/divider}}
            {{/children}}
        </div>
    </li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <li class="dropdown nav-item" role="none" data-forceintomoremenu="';
                $value = $context->find('forceintomoremenu');
                $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
                $value = $context->find('forceintomoremenu');
                if (empty($value)) {
                    
                    $buffer .= 'false';
                }
                $buffer .= '">
';
                $buffer .= $indent . '        <a class="dropdown-toggle nav-link ';
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('classes');
                $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                $buffer .= '" id="drop-down-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="menuitem" data-toggle="dropdown"
';
                $buffer .= $indent . '            aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '            ';
                $value = $context->find('title');
                $buffer .= $this->sectionCb30325ba4e5065f061652102e745487($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $context->find('isactive');
                $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $context->find('isactive');
                if (empty($value)) {
                    
                    $buffer .= 'tabindex="-1"';
                }
                $buffer .= '
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        <div class="dropdown-menu" role="menu" id="drop-down-menu-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-labelledby="drop-down-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('children');
                $buffer .= $this->section3ad55755fc020ce903dca0c268016627($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section987df7e610a2cfd3294b5eacfb9fa51b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/actions }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/actions')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3b0d7f38826f6983ed78ed6e9558423(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a role="tab" class="nav-link {{#classes}}{{.}} {{/classes}}" href="{{tab}}" data-toggle="tab" data-text="{{{text}}}" data-disableactive="true" tabindex="-1"
                    {{#title}}title="{{.}}"{{/title}}
                >
                    {{{text}}}
                </a>
                {{#action_link_actions}}
                    {{> core/actions }}
                {{/action_link_actions}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a role="tab" class="nav-link ';
                $value = $context->find('classes');
                $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('tab'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-toggle="tab" data-text="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-disableactive="true" tabindex="-1"
';
                $buffer .= $indent . '                    ';
                $value = $context->find('title');
                $buffer .= $this->sectionCb30325ba4e5065f061652102e745487($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $value = $context->find('action_link_actions');
                $buffer .= $this->section987df7e610a2cfd3294b5eacfb9fa51b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe04cacc15f032e9e9f826b761c9b814(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-selected="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-selected="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e0904848bbb60ebcabf38aee277ddd3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#is_action_link}}
                <a role="tab" class="nav-link {{#classes}}{{.}} {{/classes}}" href="{{tab}}" data-toggle="tab" data-text="{{{text}}}" data-disableactive="true" tabindex="-1"
                    {{#title}}title="{{.}}"{{/title}}
                >
                    {{{text}}}
                </a>
                {{#action_link_actions}}
                    {{> core/actions }}
                {{/action_link_actions}}
            {{/is_action_link}}
            {{^is_action_link}}
                <a role="tab" class="nav-link {{#isactive}}active{{/isactive}} {{#classes}}{{.}} {{/classes}}"
                    href="{{tab}}" data-toggle="tab" data-text="{{{text}}}"
                    {{#title}}title="{{.}}"{{/title}}
                    {{#isactive}}aria-selected="true"{{/isactive}}
                    {{^isactive}}tabindex="-1"{{/isactive}}
                >
                    {{{text}}}
                </a>
            {{/is_action_link}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('is_action_link');
                $buffer .= $this->sectionA3b0d7f38826f6983ed78ed6e9558423($context, $indent, $value);
                $value = $context->find('is_action_link');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <a role="tab" class="nav-link ';
                    $value = $context->find('isactive');
                    $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $context->find('classes');
                    $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                    href="';
                    $value = $this->resolveValue($context->find('tab'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-toggle="tab" data-text="';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('title');
                    $buffer .= $this->sectionCb30325ba4e5065f061652102e745487($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('isactive');
                    $buffer .= $this->sectionCe04cacc15f032e9e9f826b761c9b814($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('isactive');
                    if (empty($value)) {
                        
                        $buffer .= 'tabindex="-1"';
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '                >
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5d03f1406ab459709a17afeeaffe5ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a role="menuitem" class="nav-link {{#classes}}{{.}} {{/classes}}" {{#actionattributes}}{{name}}="{{value}}" {{/actionattributes}} href="{{{url}}}{{{action}}}"
                    {{#title}}title="{{.}}"{{/title}}
                    data-disableactive="true" tabindex="-1"
                >
                    {{{text}}}
                </a>
                {{#action_link_actions}}
                    {{> core/actions }}
                {{/action_link_actions}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a role="menuitem" class="nav-link ';
                $value = $context->find('classes');
                $buffer .= $this->section5e96ec75439305fc88c78e77946e47bb($context, $indent, $value);
                $buffer .= '" ';
                $value = $context->find('actionattributes');
                $buffer .= $this->section6805fd502f1e55bd3a63b02c625bf221($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                    ';
                $value = $context->find('title');
                $buffer .= $this->sectionCb30325ba4e5065f061652102e745487($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    data-disableactive="true" tabindex="-1"
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $value = $context->find('action_link_actions');
                $buffer .= $this->section987df7e610a2cfd3294b5eacfb9fa51b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
