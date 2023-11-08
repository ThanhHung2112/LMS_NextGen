<?php

class __Mustache_adb539259a17ad4e084808b0325a3218 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('showskiplink');
        $buffer .= $this->section8e9909ef7d51ed0087767606695526c3($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<section id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '     class="';
        $value = $context->find('hidden');
        $buffer .= $this->section9a7fc588e5e2ac7453379d33a752316e($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' ';
        $value = $context->find('hascontrols');
        $buffer .= $this->section12f3cb4be977f05616300fd1301c564b($context, $indent, $value);
        $buffer .= ' card mb-3"
';
        $buffer .= $indent . '     role="';
        $value = $this->resolveValue($context->find('ariarole'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '     data-block="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '     data-instance-id="';
        $value = $this->resolveValue($context->find('blockinstanceid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $value = $context->find('arialabel');
        $buffer .= $this->section1b49b82ba1deac4ce6e9fcb952d06c0e($context, $indent, $value);
        $value = $context->find('arialabel');
        if (empty($value)) {
            
            $value = $context->find('title');
            $buffer .= $this->sectionC269b13bd61323d840390fdebc65599f($context, $indent, $value);
            $buffer .= $indent . '     ';
        }
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="card-body p-3">
';
        $buffer .= $indent . '
';
        $value = $context->find('title');
        $buffer .= $this->section64d2be56c8b11e90a885213a241abf3a($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hascontrols');
        $buffer .= $this->section5a5909604e239109867594e5190d0101($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="card-text content mt-3">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <div class="footer">';
        $value = $this->resolveValue($context->find('footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('annotation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '
';
        $value = $context->find('showskiplink');
        $buffer .= $this->sectionA989e574ef58b1a9ea39526a28938789($context, $indent, $value);

        return $buffer;
    }

    private function sectionBe3d023555afc33fa231c38a8a50c680(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'skipa, access, {{{title}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'skipa, access, ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e9909ef7d51ed0087767606695526c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <a href="#sb-{{skipid}}" class="sr-only sr-only-focusable">{{#str}}skipa, access, {{{title}}}{{/str}}</a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <a href="#sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="sr-only sr-only-focusable">';
                $value = $context->find('str');
                $buffer .= $this->sectionBe3d023555afc33fa231c38a8a50c680($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a7fc588e5e2ac7453379d33a752316e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12f3cb4be977f05616300fd1301c564b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block_with_controls';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'block_with_controls';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b49b82ba1deac4ce6e9fcb952d06c0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        aria-label="{{arialabel}}"
     ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        aria-label="';
                $value = $this->resolveValue($context->find('arialabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC269b13bd61323d840390fdebc65599f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          aria-labelledby="instance-{{blockinstanceid}}-header"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          aria-labelledby="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-header"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64d2be56c8b11e90a885213a241abf3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h5 id="instance-{{blockinstanceid}}-header" class="card-title d-inline">{{{title}}}</h5>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h5 id="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-header" class="card-title d-inline">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a5909604e239109867594e5190d0101(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="block-controls float-right header">
                {{{controls}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="block-controls float-right header">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('controls'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA989e574ef58b1a9ea39526a28938789(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <span id="sb-{{skipid}}"></span>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <span id="sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
