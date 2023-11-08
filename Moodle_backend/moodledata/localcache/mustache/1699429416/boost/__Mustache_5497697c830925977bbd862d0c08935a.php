<?php

class __Mustache_5497697c830925977bbd862d0c08935a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-filterregion="filter">
';
        $buffer .= $indent . '    <fieldset>
';
        $buffer .= $indent . '        <legend class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionC38b7577ae9c48fc9169509398ea3286($context, $indent, $value);
        $buffer .= '</legend>
';
        $buffer .= $indent . '        <div class="border-radius my-2 p-2 bg-white border d-flex flex-column flex-md-row align-items-md-start">
';
        $buffer .= $indent . '            <div class="d-flex flex-column flex-md-row align-items-md-center">
';
        $buffer .= $indent . '                <label for="core-filter_row-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="mr-md-2 mb-md-0">';
        $value = $context->find('str');
        $buffer .= $this->section043761c7993201193b2b1d79ec0dd03a($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <select class="custom-select mb-1 mb-md-0 mr-md-2" data-filterfield="join" id="core-filter_row-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                    <option value="0">';
        $value = $context->find('str');
        $buffer .= $this->section3c3ca954d361e33d388cf608d356b919($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                    <option selected=selected value="1">';
        $value = $context->find('str');
        $buffer .= $this->section38c54db526fff004e0d5a32f5c4dc410($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                    <option value="2">';
        $value = $context->find('str');
        $buffer .= $this->section80d34145344e498ce4a9c8a1badc3408($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                </select>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <label class="sr-only pt-2" for="core-filter_row-filtertype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section5f6ca2fd16741bcfc52dd9f230e3c315($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <select class="custom-select mb-1 mb-md-0 mr-md-2" data-filterfield="type" id="core-filter_row-filtertype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <option value="">';
        $value = $context->find('str');
        $buffer .= $this->sectionA0aa696ff5b0d4bc233752f56169be02($context, $indent, $value);
        $buffer .= '</option>
';
        $value = $context->find('filtertypes');
        $buffer .= $this->section0533dc21b1554df3447fa17be93b8481($context, $indent, $value);
        $buffer .= $indent . '            </select>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div data-filterregion="value" class="d-md-block flex-column align-items-start flex-lg-row"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <button data-filteraction="remove" class="ml-auto icon-no-margin icon-size-4 btn text-reset" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section7322d93883170f13f43200ab4b579446($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        $value = $context->find('pix');
        $buffer .= $this->section11fb538056e4511ec85f55ee0bdd240d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div data-filterregion="joinadverb" class="pl-1 text-uppercase font-weight-bold">
';
        $buffer .= $indent . '            <div data-filterverbfor="0">';
        $value = $context->find('str');
        $buffer .= $this->sectionDb561ede0d6315d86e2a74342cf7bda9($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            <div data-filterverbfor="1">';
        $value = $context->find('str');
        $buffer .= $this->section85f4b05df5694e4989051b27c526157a($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            <div data-filterverbfor="2">';
        $value = $context->find('str');
        $buffer .= $this->section79c87d1fccb51ca1d85542c068d4cbbc($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </fieldset>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionC38b7577ae9c48fc9169509398ea3286(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filterrowlegend, core, {{rownumber}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filterrowlegend, core, ';
                $value = $this->resolveValue($context->find('rownumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section043761c7993201193b2b1d79ec0dd03a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'match';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'match';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c3ca954d361e33d388cf608d356b919(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'none';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'none';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38c54db526fff004e0d5a32f5c4dc410(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'any';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'any';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80d34145344e498ce4a9c8a1badc3408(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'all';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'all';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f6ca2fd16741bcfc52dd9f230e3c315(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filtertype';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filtertype';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0aa696ff5b0d4bc233752f56169be02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectfiltertype';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selectfiltertype';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0533dc21b1554df3447fa17be93b8481(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option value="{{name}}">{{title}}</option>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <option value="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7322d93883170f13f43200ab4b579446(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearfilterrow';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearfilterrow';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11fb538056e4511ec85f55ee0bdd240d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/cancel_solid_circle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/cancel_solid_circle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb561ede0d6315d86e2a74342cf7bda9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'operator_andnot';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'operator_andnot';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85f4b05df5694e4989051b27c526157a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'operator_or';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'operator_or';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79c87d1fccb51ca1d85542c068d4cbbc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'operator_and';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'operator_and';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
