<?php

class __Mustache_9e8c1ab370dec53dd492627f72e54a51 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="course-content">
';
        $value = $context->find('showsettings');
        $buffer .= $this->sectionE72f6e3ae217785772a33fc69cac942b($context, $indent, $value);
        $buffer .= $indent . '    <div class="sitetopic">
';
        $buffer .= $indent . '        <ul class="topics frontpage">
';
        $value = $context->find('sections');
        $buffer .= $this->sectionE906d22505faf08ef6e8ee3eb1fbd5a6($context, $indent, $value);
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0ec33275aee18d3609cf6b0c1ea68c99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editsummary ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' editsummary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3d14e92c8bb3fd5847999ca0b5a4254(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/edit, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/edit, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE72f6e3ae217785772a33fc69cac942b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="mb-2">
        <a href="{{{settingsurl}}}" title="{{#str}} editsummary {{/str}}" aria-label="{{#str}} editsummary {{/str}}">
            {{#pix}} t/edit, moodle {{/pix}}
        </a>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="mb-2">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('settingsurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section0ec33275aee18d3609cf6b0c1ea68c99($context, $indent, $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section0ec33275aee18d3609cf6b0c1ea68c99($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionA3d14e92c8bb3fd5847999ca0b5a4254($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE906d22505faf08ef6e8ee3eb1fbd5a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core_courseformat/local/content/section }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
