<?php

class __Mustache_dfd9affc4090849cc857a55d98ce272e extends Mustache_Template
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
                'region' => array($this, 'block0c83240d17276ef449a0f70a9941867a'),
                'title' => array($this, 'blockE45f1a96020b269c4cf5bd35e5284ce8'),
                'placeholder' => array($this, 'blockE9b23ea6ffe7cff2e099ad2c26b6072a'),
                'emptymessage' => array($this, 'block31633cd457c9ae287e1b2537e4b2e63b'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionF7558f374c4ffa9cd2c6759ea660f7e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' favourites ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' favourites ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section916501edc8941102f320cc739ac0bc50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nofavourites, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nofavourites, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block0c83240d17276ef449a0f70a9941867a($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'view-overview-favourites';
    
        return $buffer;
    }

    public function blockE45f1a96020b269c4cf5bd35e5284ce8($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionF7558f374c4ffa9cd2c6759ea660f7e8($context, $indent, $value);
    
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

    public function block31633cd457c9ae287e1b2537e4b2e63b($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <p class="text-muted mt-2">';
        $value = $context->find('str');
        $buffer .= $this->section916501edc8941102f320cc739ac0bc50($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }
}
