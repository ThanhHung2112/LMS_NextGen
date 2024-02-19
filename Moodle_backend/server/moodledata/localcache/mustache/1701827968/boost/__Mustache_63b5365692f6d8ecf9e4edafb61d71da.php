<?php

class __Mustache_63b5365692f6d8ecf9e4edafb61d71da extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('showmovehere');
        $buffer .= $this->section92737a10595b16982d63e4082cecbb2a($context, $indent, $value);
        $buffer .= $indent . '<ul class="section m-0 p-0 img-text ';
        $value = $context->find('hascms');
        $buffer .= $this->sectionCa569640ac0eb97ec87d7a3431d80181($context, $indent, $value);
        $buffer .= '" data-for="cmlist">
';
        $value = $context->find('cms');
        $buffer .= $this->section15bcd2b1b84aa4b998b3c4bb589da7b7($context, $indent, $value);
        $value = $context->find('showmovehere');
        $buffer .= $this->section719a6649dda031770586f32a62e6e246($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';

        return $buffer;
    }

    private function section48889b9f3f273ba8c7c463afc8a04b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancel ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cancel ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92737a10595b16982d63e4082cecbb2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<p>{{movingstr}} (<a href="{{{cancelcopyurl}}}">{{#str}} cancel {{/str}}</a>)</p>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<p>';
                $value = $this->resolveValue($context->find('movingstr'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' (<a href="';
                $value = $this->resolveValue($context->find('cancelcopyurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
                $buffer .= '</a>)</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa569640ac0eb97ec87d7a3431d80181(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' d-block ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' d-block ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4aa21bbc166aca81c06c2ddab92e812(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="movehere">
        <a href="{{{moveurl}}}" title="{{strmovefull}}" class="movehere"></a>
    </li>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <li class="movehere">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('moveurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('strmovefull'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="movehere"></a>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78eb2aac857251775ca253c4f519e94f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{$ core_courseformat/local/content/section/cmitem}}
            {{> core_courseformat/local/content/section/cmitem}}
        {{/ core_courseformat/local/content/section/cmitem}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/section/cmitem');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/cmitem')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15bcd2b1b84aa4b998b3c4bb589da7b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#showmovehere}}
    <li class="movehere">
        <a href="{{{moveurl}}}" title="{{strmovefull}}" class="movehere"></a>
    </li>
    {{/showmovehere}}
    {{#cmitem}}
        {{$ core_courseformat/local/content/section/cmitem}}
            {{> core_courseformat/local/content/section/cmitem}}
        {{/ core_courseformat/local/content/section/cmitem}}
    {{/cmitem}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('showmovehere');
                $buffer .= $this->sectionF4aa21bbc166aca81c06c2ddab92e812($context, $indent, $value);
                $value = $context->find('cmitem');
                $buffer .= $this->section78eb2aac857251775ca253c4f519e94f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section719a6649dda031770586f32a62e6e246(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="movehere">
        <a href="{{{movetosectionurl}}}" title="{{strmovefull}}" class="movehere"></a>
    </li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <li class="movehere">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('movetosectionurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('strmovefull'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="movehere"></a>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
