<?php

class __Mustache_2cb3018eea6432434a4b42afed9d19ba extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="file-picker fp-select">
';
        $buffer .= $indent . '    <div class="fp-select-loading">
';
        $buffer .= $indent . '        <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section2d03965ea53b60ac982e741c28cc2332($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        ';
        $value = $context->find('pix');
        $buffer .= $this->section17dced043cf1f9973e8ce8dcb3301054($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <form>
';
        $buffer .= $indent . '            <fieldset class="form-group row flex-column">
';
        $buffer .= $indent . '                <div class="form-check fp-linktype-2">
';
        $buffer .= $indent . '                    <label class="form-check-label">
';
        $buffer .= $indent . '                        <input class="form-check-input" type="radio">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section138cb6f5f895f3f2505b606eb4326b1b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-check fp-linktype-1">
';
        $buffer .= $indent . '                    <label class="form-check-label">
';
        $buffer .= $indent . '                        <input class="form-check-input" type="radio">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section6d8c94c2a0f941cb449ca32e5896d53c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-check fp-linktype-4">
';
        $buffer .= $indent . '                    <label class="form-check-label">
';
        $buffer .= $indent . '                        <input class="form-check-input" type="radio">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section1779e048b12c344235a36a361246b66d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-check fp-linktype-8">
';
        $buffer .= $indent . '                    <label class="form-check-label">
';
        $buffer .= $indent . '                        <input class="form-check-input" type="radio">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section03be6ed2da61d2dfc3bd107eb3c80a92($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </fieldset>
';
        $buffer .= $indent . '            <div class="fp-saveas form-group row">
';
        $buffer .= $indent . '                <label class="col-form-label">';
        $value = $context->find('str');
        $buffer .= $this->sectionC83d1eff67053c68bf40e50b3499273e($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <input class="form-control" type="text">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="fp-setauthor form-group row">
';
        $buffer .= $indent . '                <label class="col-form-label">';
        $value = $context->find('str');
        $buffer .= $this->section38331830086571e8a6cab1fc3e99f002($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <input class="form-control" type="text">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="fp-setlicense form-group row">
';
        if ($partial = $this->mustache->loadPartial('core/filemanager_chooselicense')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="form-group row">
';
        $buffer .= $indent . '                <div class="fp-select-buttons">
';
        $buffer .= $indent . '                    <button class="fp-select-confirm btn-primary btn">';
        $value = $context->find('str');
        $buffer .= $this->section8d1e8b5df863535233c5ae53c44b0cca($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                    <button class="fp-select-cancel btn-secondary btn">';
        $value = $context->find('str');
        $buffer .= $this->section96a04e644c61b56b5f76ae597e76c7fb($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </form>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="fp-info clearfix">
';
        $buffer .= $indent . '        <hr>
';
        $buffer .= $indent . '        <p class="fp-thumbnail"></p>
';
        $buffer .= $indent . '        <div class="fp-fileinfo">
';
        $buffer .= $indent . '            <div class="fp-datemodified">';
        $value = $context->find('str');
        $buffer .= $this->sectionA952921a53c6a683948f9263ac628367($context, $indent, $value);
        $buffer .= '<span class="fp-value"></span></div>
';
        $buffer .= $indent . '            <div class="fp-datecreated">';
        $value = $context->find('str');
        $buffer .= $this->section354774ed3b5072eae1916c31ef69e9d1($context, $indent, $value);
        $buffer .= '<span class="fp-value"></span></div>
';
        $buffer .= $indent . '            <div class="fp-size">';
        $value = $context->find('str');
        $buffer .= $this->sectionFf84160216bbfff3c9781f707a5a609b($context, $indent, $value);
        $buffer .= '<span class="fp-value"></span></div>
';
        $buffer .= $indent . '            <div class="fp-license">';
        $value = $context->find('str');
        $buffer .= $this->sectionF56322876b792ceb41c801f4476eedc2($context, $indent, $value);
        $buffer .= '<span class="fp-value"></span></div>
';
        $buffer .= $indent . '            <div class="fp-author">';
        $value = $context->find('str');
        $buffer .= $this->section38331830086571e8a6cab1fc3e99f002($context, $indent, $value);
        $buffer .= '<span class="fp-value"></span></div>
';
        $buffer .= $indent . '            <div class="fp-dimensions">';
        $value = $context->find('str');
        $buffer .= $this->section457e300d70549c75a2a39f37e433234a($context, $indent, $value);
        $buffer .= '<span class="fp-value" dir="ltr"></span></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2d03965ea53b60ac982e741c28cc2332(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loadinghelp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loadinghelp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17dced043cf1f9973e8ce8dcb3301054(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/loading_small';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/loading_small';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section138cb6f5f895f3f2505b606eb4326b1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'makefileinternal, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'makefileinternal, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d8c94c2a0f941cb449ca32e5896d53c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'makefilelink, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'makefilelink, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1779e048b12c344235a36a361246b66d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'makefilereference, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'makefilereference, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03be6ed2da61d2dfc3bd107eb3c80a92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'makefilecontrolledlink, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'makefilecontrolledlink, repository';
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

    private function section8d1e8b5df863535233c5ae53c44b0cca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'getfile, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'getfile, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96a04e644c61b56b5f76ae597e76c7fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancel';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA952921a53c6a683948f9263ac628367(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lastmodified, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'lastmodified, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section354774ed3b5072eae1916c31ef69e9d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'datecreated, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'datecreated, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf84160216bbfff3c9781f707a5a609b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'size, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'size, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF56322876b792ceb41c801f4476eedc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'license, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'license, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section457e300d70549c75a2a39f37e433234a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dimensions, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dimensions, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
