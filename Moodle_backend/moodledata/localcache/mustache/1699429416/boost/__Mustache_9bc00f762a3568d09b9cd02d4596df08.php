<?php

class __Mustache_9bc00f762a3568d09b9cd02d4596df08 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="fp-upload-form">
';
        $buffer .= $indent . '    <div class="fp-content-center">
';
        $buffer .= $indent . '        <form enctype="multipart/form-data" method="POST" class="form">
';
        $buffer .= $indent . '            <div class="fp-formset">
';
        $buffer .= $indent . '                <div class="fp-file form-group">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->section872a4223a4245f21e0b8201af390916e($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <div class="px-3">
';
        $buffer .= $indent . '                        <input  type="file"/>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-saveas form-group">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionC83d1eff67053c68bf40e50b3499273e($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <input type="text" class="form-control"/>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-setauthor form-group">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->section38331830086571e8a6cab1fc3e99f002($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <input type="text" class="form-control"/>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-setlicense form-group">
';
        if ($partial = $this->mustache->loadPartial('core/filemanager_chooselicense')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </form>
';
        $buffer .= $indent . '        <div class="mdl-align">
';
        $buffer .= $indent . '            <button class="fp-upload-btn btn-primary btn">';
        $value = $context->find('str');
        $buffer .= $this->section14782d43c01ab50c668337d62e82a6a6($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section872a4223a4245f21e0b8201af390916e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'attachment, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'attachment, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC83d1eff67053c68bf40e50b3499273e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'saveas, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'saveas, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38331830086571e8a6cab1fc3e99f002(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'author, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'author, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14782d43c01ab50c668337d62e82a6a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'upload, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'upload, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
