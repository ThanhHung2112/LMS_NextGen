<?php

class __Mustache_c556a33073cba20e6ef200aeec4ab6f1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="d-flex flex-column">
';
        $buffer .= $indent . '    <div class="mb-3 bg-white" data-region="all-contacts-container">
';
        $buffer .= $indent . '        <div data-region="contacts-container"  class="pt-2">
';
        $buffer .= $indent . '            <h4 class="h6 px-2">';
        $value = $context->find('str');
        $buffer .= $this->sectionAe27671d8d1750e9af3adcc5df1cbf0d($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <div class="list-group" data-region="list"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div data-region="non-contacts-container" class="pt-2 border-top">
';
        $buffer .= $indent . '            <h4 class="h6 px-2">';
        $value = $context->find('str');
        $buffer .= $this->section7c04418fb1ac10c2f8bbc38e19a7e6f3($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <div class="list-group" data-region="list"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="text-right">
';
        $buffer .= $indent . '            <button class="btn btn-link text-primary" data-action="load-more-users">
';
        $buffer .= $indent . '                <span data-region="button-text">';
        $value = $context->find('str');
        $buffer .= $this->section64bd7db84b8533b07dee79cd437a0887($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span data-region="loading-icon-container" class="hidden">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="bg-white" data-region="messages-container">
';
        $buffer .= $indent . '        <h4 class="h6 px-2 pt-2">';
        $value = $context->find('str');
        $buffer .= $this->sectionD01943ab4af9e11b8162452fa104dec4($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '        <div class="list-group" data-region="list"></div>
';
        $buffer .= $indent . '        <div class="text-right">
';
        $buffer .= $indent . '            <button class="btn btn-link text-primary" data-action="load-more-messages">
';
        $buffer .= $indent . '                <span data-region="button-text">';
        $value = $context->find('str');
        $buffer .= $this->section64bd7db84b8533b07dee79cd437a0887($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span data-region="loading-icon-container" class="hidden">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <p class="hidden p-3 text-center" data-region="no-results-container">';
        $value = $context->find('str');
        $buffer .= $this->section4fff29ce050a3086d17820b3f0d560b4($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionAe27671d8d1750e9af3adcc5df1cbf0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contacts, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contacts, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c04418fb1ac10c2f8bbc38e19a7e6f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noncontacts, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noncontacts, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64bd7db84b8533b07dee79cd437a0887(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loadmore, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loadmore, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD01943ab4af9e11b8162452fa104dec4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' messages, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' messages, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fff29ce050a3086d17820b3f0d560b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noresults, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noresults, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
