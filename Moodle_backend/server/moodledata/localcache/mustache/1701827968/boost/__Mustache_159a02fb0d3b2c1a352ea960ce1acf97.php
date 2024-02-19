<?php

class __Mustache_159a02fb0d3b2c1a352ea960ce1acf97 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section')) {
            $context->pushBlockContext(array(
                'region' => array($this, 'block20c51b28057bc9faaeafe6f632069c2d'),
                'title' => array($this, 'block01a8220b04c9439c6d4c02009e742d49'),
                'placeholder' => array($this, 'blockE9b23ea6ffe7cff2e099ad2c26b6072a'),
                'emptymessage' => array($this, 'blockE011e188ceaa9618551b43089319265f'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section0e294840ed8efb1916cf4e3c314868bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' groupconversations, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' groupconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5914da41773e98b58b47f202d261c9b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nogroupconversations, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nogroupconversations, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block20c51b28057bc9faaeafe6f632069c2d($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'view-overview-group-messages';
    
        return $buffer;
    }

    public function block01a8220b04c9439c6d4c02009e742d49($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section0e294840ed8efb1916cf4e3c314868bd($context, $indent, $value);
    
        return $buffer;
    }

    public function blockE9b23ea6ffe7cff2e099ad2c26b6072a($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <div class="text-center py-2">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
    
        return $buffer;
    }

    public function blockE011e188ceaa9618551b43089319265f($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <p class="text-muted mt-2">';
        $value = $context->find('str');
        $buffer .= $this->section5914da41773e98b58b47f202d261c9b8($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }
}
