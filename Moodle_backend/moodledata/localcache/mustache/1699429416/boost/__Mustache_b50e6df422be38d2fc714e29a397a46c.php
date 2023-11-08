<?php

class __Mustache_b50e6df422be38d2fc714e29a397a46c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="loginform">
';
        $value = $context->find('logourl');
        $buffer .= $this->sectionF8e3318e541407e9f88f8ee60e140c36($context, $indent, $value);
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '        <h1 class="login-heading mb-4">';
            $value = $context->find('str');
            $buffer .= $this->section80a4d1690ff171d23b2097c3acda60e4($context, $indent, $value);
            $buffer .= '</h1>
';
        }
        $value = $context->find('maintenance');
        $buffer .= $this->sectionEf717f60864e507396cb776f401fd613($context, $indent, $value);
        $value = $context->find('error');
        $buffer .= $this->sectionDea885df3a2b159065f90dc48715ef6e($context, $indent, $value);
        $value = $context->find('cansignup');
        $buffer .= $this->section1c8136ffd464f3892d830bcaebb53fe2($context, $indent, $value);
        $buffer .= $indent . '    <form class="login-form" action="';
        $value = $this->resolveValue($context->find('loginurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" method="post" id="login">
';
        $buffer .= $indent . '        <input id="anchor" type="hidden" name="anchor" value="">
';
        $buffer .= $indent . '        <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
        $buffer .= $indent . '        <input type="hidden" name="logintoken" value="';
        $value = $this->resolveValue($context->find('logintoken'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="login-form-username form-group">
';
        $buffer .= $indent . '            <label for="username" class="sr-only">
';
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $buffer .= $indent . '                    ';
            $value = $context->find('str');
            $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
            $buffer .= '
';
        }
        $value = $context->find('canloginbyemail');
        $buffer .= $this->sectionFecc44d36b1d26bcf00eabac676276bd($context, $indent, $value);
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '            <input type="text" name="username" id="username" ';
        $buffer .= 'class="form-control form-control-lg" ';
        $buffer .= 'value="';
        $value = $this->resolveValue($context->find('username'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= 'placeholder="';
        $value = $context->find('canloginbyemail');
        if (empty($value)) {
            
            $value = $context->find('cleanstr');
            $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
        }
        $value = $context->find('canloginbyemail');
        $buffer .= $this->section118ece6c412804f669c845b43ecc9a01($context, $indent, $value);
        $buffer .= '" ';
        $buffer .= 'autocomplete="username">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="login-form-password form-group">
';
        $buffer .= $indent . '            <label for="password" class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <input type="password" name="password" id="password" value="" ';
        $buffer .= 'class="form-control form-control-lg" ';
        $buffer .= 'placeholder="';
        $value = $context->find('cleanstr');
        $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
        $buffer .= '" ';
        $buffer .= 'autocomplete="current-password">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="login-form-submit form-group">
';
        $buffer .= $indent . '            <button class="btn btn-primary btn-lg" type="submit" id="loginbtn">';
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="login-form-forgotpassword form-group">
';
        $buffer .= $indent . '            <a href="';
        $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->sectionE3afea308016df7243ba8871f7081e79($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $value = $context->find('hasidentityproviders');
        $buffer .= $this->sectionB385a441b943139d2018b871287325b4($context, $indent, $value);
        $value = $context->find('hasinstructions');
        $buffer .= $this->section1fd1e109e7812e5cb00b8bce6643df1e($context, $indent, $value);
        $value = $context->find('cansignup');
        $buffer .= $this->section0f8ea48f1d09139d01d4915494762b5c($context, $indent, $value);
        $value = $context->find('canloginasguest');
        $buffer .= $this->section1faef9a844056a70147fca150bb39cc7($context, $indent, $value);
        $buffer .= $indent . '    <div class="login-divider"></div>
';
        $buffer .= $indent . '    <div class="d-flex">
';
        $value = $context->find('languagemenu');
        $buffer .= $this->sectionB2b26cbe232e55998ab9287dad8d1c31($context, $indent, $value);
        $buffer .= $indent . '        <button type="button" class="btn btn-secondary" ';
        $buffer .= ' data-modal="alert"';
        $buffer .= ' data-modal-title-str=\'["cookiesenabled", "core"]\' ';
        $buffer .= ' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'';
        $buffer .= '>';
        $value = $context->find('str');
        $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section09809d8efd02426f89327b1e00eb5c27($context, $indent, $value);

        return $buffer;
    }

    private function section80a4d1690ff171d23b2097c3acda60e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loginto, core, {{sitename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loginto, core, ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8e3318e541407e9f88f8ee60e140c36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="loginlogo" class="login-logo">
            <img id="logoimage" src="{{logourl}}" class="img-fluid" alt="{{sitename}}"/>
            <h1 class="login-heading sr-only">{{#str}} loginto, core, {{sitename}} {{/str}}</h1>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div id="loginlogo" class="login-logo">
';
                $buffer .= $indent . '            <img id="logoimage" src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="img-fluid" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"/>
';
                $buffer .= $indent . '            <h1 class="login-heading sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section80a4d1690ff171d23b2097c3acda60e4($context, $indent, $value);
                $buffer .= '</h1>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf717f60864e507396cb776f401fd613(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="alert alert-danger login-maintenance">
            {{{maintenance}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="alert alert-danger login-maintenance">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('maintenance'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDea885df3a2b159065f90dc48715ef6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="#" id="loginerrormessage" class="sr-only">{{error}}</a>
        <div class="alert alert-danger" role="alert">{{error}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="#" id="loginerrormessage" class="sr-only">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '        <div class="alert alert-danger" role="alert">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c8136ffd464f3892d830bcaebb53fe2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{signupurl}}" class="sr-only">{{#str}} tocreatenewaccount {{/str}}</a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFecc44d36b1d26bcf00eabac676276bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#str}} usernameemail {{/str}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118ece6c412804f669c845b43ecc9a01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#cleanstr}}usernameemail{{/cleanstr}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('cleanstr');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3afea308016df7243ba8871f7081e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotaccount';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'forgotaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE384f0e9b1fcc321a1a78dba1d43f63f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, auth ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' potentialidps, auth ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c1913f34a9d992bcfe262e1b5bf92b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e00d644d27fe35a6238fc6e05e6b759(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="btn login-identityprovider-btn btn-block" href="{{url}}">
                    {{#iconurl}}
                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                    {{/iconurl}}
                    {{name}}
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="btn login-identityprovider-btn btn-block" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('iconurl');
                $buffer .= $this->section1c1913f34a9d992bcfe262e1b5bf92b1($context, $indent, $value);
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB385a441b943139d2018b871287325b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="login-divider"></div>
        <div class="login-identityproviders">
            <h2 class="login-heading">{{#str}} potentialidps, auth {{/str}}</h2>
            {{#identityproviders}}
                <a class="btn login-identityprovider-btn btn-block" href="{{url}}">
                    {{#iconurl}}
                        <img src="{{iconurl}}" alt="" width="24" height="24"/>
                    {{/iconurl}}
                    {{name}}
                </a>
            {{/identityproviders}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="login-divider"></div>
';
                $buffer .= $indent . '        <div class="login-identityproviders">
';
                $buffer .= $indent . '            <h2 class="login-heading">';
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h2>
';
                $value = $context->find('identityproviders');
                $buffer .= $this->section6e00d644d27fe35a6238fc6e05e6b759($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf2e3defecc35d84a091ece31c5fc7e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mb-3';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'mb-3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB681534bda1faeeb31506c30e72ff16e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firsttime';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'firsttime';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1fd1e109e7812e5cb00b8bce6643df1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="login-divider"></div>
        <div class="login-instructions {{#cansignup}}mb-3{{/cansignup}}">
            <h2 class="login-heading">{{#str}}firsttime{{/str}}</h2>
            {{{instructions}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="login-divider"></div>
';
                $buffer .= $indent . '        <div class="login-instructions ';
                $value = $context->find('cansignup');
                $buffer .= $this->sectionEf2e3defecc35d84a091ece31c5fc7e0($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <h2 class="login-heading">';
                $value = $context->find('str');
                $buffer .= $this->sectionB681534bda1faeeb31506c30e72ff16e($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f8ea48f1d09139d01d4915494762b5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="login-signup">
            <a class="btn btn-secondary" href="{{signupurl}}">{{#str}}startsignup{{/str}}</a>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="login-signup">
';
                $buffer .= $indent . '            <a class="btn btn-secondary" href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93e4b62aaf677bf7878b06c5ac540671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'someallowguest';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'someallowguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1faef9a844056a70147fca150bb39cc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="login-divider"></div>
        <h2 class="login-heading">{{#str}}someallowguest{{/str}}</h2>
        <form action="{{loginurl}}" method="post" id="guestlogin">
            <input type="hidden" name="logintoken" value="{{logintoken}}">
            <input type="hidden" name="username" value="guest" />
            <input type="hidden" name="password" value="guest" />
            <button class="btn btn-secondary" type="submit" id="loginguestbtn">{{#str}}loginguest{{/str}}</button>
        </form>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="login-divider"></div>
';
                $buffer .= $indent . '        <h2 class="login-heading">';
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '        <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '            <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '            <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '            <button class="btn btn-secondary" type="submit" id="loginguestbtn">';
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '        </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2b26cbe232e55998ab9287dad8d1c31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="login-languagemenu">
                {{>core/action_menu}}
            </div>
            <div class="divider border-left align-self-center mx-3"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="login-languagemenu">
';
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="divider border-left align-self-center mx-3"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb729cc74d31bce5e3746aa60b79a2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cookiesnotice';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cookiesnotice';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section691cc2f9954bba7bfc6c89b209875ecc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            var userNameField = document.getElementById(\'username\');
            if (userNameField.value.length == 0) {
                userNameField.focus();
            } else {
                document.getElementById(\'password\').focus();
            }
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            var userNameField = document.getElementById(\'username\');
';
                $buffer .= $indent . '            if (userNameField.value.length == 0) {
';
                $buffer .= $indent . '                userNameField.focus();
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                document.getElementById(\'password\').focus();
';
                $buffer .= $indent . '            }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb31e0a905855a4df03d13e2bbd239e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        document.getElementById(\'loginerrormessage\').focus();
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        document.getElementById(\'loginerrormessage\').focus();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF134befbc907907019eac63cfee377f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            Submit.init("loginguestbtn");
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            Submit.init("loginguestbtn");
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09809d8efd02426f89327b1e00eb5c27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^error}}
        {{#autofocusform}}
            var userNameField = document.getElementById(\'username\');
            if (userNameField.value.length == 0) {
                userNameField.focus();
            } else {
                document.getElementById(\'password\').focus();
            }
        {{/autofocusform}}
    {{/error}}
    {{#error}}
        document.getElementById(\'loginerrormessage\').focus();
    {{/error}}
    require([\'core_form/submit\'], function(Submit) {
        Submit.init("loginbtn");
        {{#canloginasguest}}
            Submit.init("loginguestbtn");
        {{/canloginasguest}}
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('error');
                if (empty($value)) {
                    
                    $value = $context->find('autofocusform');
                    $buffer .= $this->section691cc2f9954bba7bfc6c89b209875ecc($context, $indent, $value);
                }
                $value = $context->find('error');
                $buffer .= $this->sectionEb31e0a905855a4df03d13e2bbd239e8($context, $indent, $value);
                $buffer .= $indent . '    require([\'core_form/submit\'], function(Submit) {
';
                $buffer .= $indent . '        Submit.init("loginbtn");
';
                $value = $context->find('canloginasguest');
                $buffer .= $this->sectionF134befbc907907019eac63cfee377f3($context, $indent, $value);
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
