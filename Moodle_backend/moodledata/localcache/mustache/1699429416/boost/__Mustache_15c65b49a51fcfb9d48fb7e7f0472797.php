<?php

class __Mustache_15c65b49a51fcfb9d48fb7e7f0472797 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container">
';
        $buffer .= $indent . '    <div tabindex="0" class="file-picker fp-generallayout row" role="dialog" aria-live="assertive">
';
        $buffer .= $indent . '        <div class="fp-repo-area col-md-3 pr-2 nav nav-pills flex-column" role="tablist">
';
        $buffer .= $indent . '                <div class="fp-repo nav-item" role="tab" aria-selected="false" tabindex="-1">
';
        $buffer .= $indent . '                    <a href="#" class="nav-link" tabindex="-1"><img class="fp-repo-icon" alt=" " width="16" height="16" />&nbsp;<span class="fp-repo-name"></span></a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-9 p-0">
';
        $buffer .= $indent . '            <div class="fp-repo-items" tabindex="0">
';
        $buffer .= $indent . '                <div class="fp-navbar bg-faded card mb-0 clearfix icon-no-spacing">
';
        $buffer .= $indent . '                    <div>
';
        $buffer .= $indent . '                        <div class="fp-toolbar">
';
        $buffer .= $indent . '                            <div class="fp-tb-back">
';
        $buffer .= $indent . '                                <a href="#" class="btn btn-secondary btn-sm">';
        $value = $context->find('str');
        $buffer .= $this->section989182df874090b1d11afb2cecf2e6d2($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="fp-tb-search">
';
        $buffer .= $indent . '                                <form></form>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="fp-tb-refresh">
';
        $buffer .= $indent . '                                <a title="';
        $value = $context->find('str');
        $buffer .= $this->sectionD3b22f5f9e6d0172d596a230b766ecf6($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary btn-sm" href="#">
';
        $buffer .= $indent . '                                    ';
        $value = $context->find('pix');
        $buffer .= $this->section4e37a1eb87408452fec2644ec72edec8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </a>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="fp-tb-logout">
';
        $buffer .= $indent . '                                <a title="';
        $value = $context->find('str');
        $buffer .= $this->sectionDb599925a8d148af393cd4473b130b89($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary btn-sm" href="#">
';
        $buffer .= $indent . '                                    ';
        $value = $context->find('pix');
        $buffer .= $this->section3dd313d11e6d1186fc550133deda51d9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </a>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="fp-tb-manage">
';
        $buffer .= $indent . '                                <a title="';
        $value = $context->find('str');
        $buffer .= $this->sectionFc85716b31799f2e3f077bb11406263b($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary btn-sm" href="#">
';
        $buffer .= $indent . '                                    ';
        $value = $context->find('pix');
        $buffer .= $this->sectionD67c133f8f36e56f6c2fa39b3da60e01($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </a>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="fp-tb-help">
';
        $buffer .= $indent . '                                <a title="';
        $value = $context->find('str');
        $buffer .= $this->section36b987a1ed6e8cc5076d973376c404d2($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary btn-sm" href="#">
';
        $buffer .= $indent . '                                    ';
        $value = $context->find('pix');
        $buffer .= $this->section94dec821acc1e377e62b767f107c3c0e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </a>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            <div class="fp-tb-message"></div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="fp-viewbar btn-group float-sm-right">
';
        $buffer .= $indent . '                            <a role="button" title="';
        $value = $context->find('str');
        $buffer .= $this->section8d897e2029e0713d9863f86d172c49e7($context, $indent, $value);
        $buffer .= '" class="fp-vb-icons btn btn-secondary btn-sm" href="#">
';
        $buffer .= $indent . '                                ';
        $value = $context->find('pix');
        $buffer .= $this->sectionE2c9e83168c3408c7e8ab4c9d39bdb4d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </a>
';
        $buffer .= $indent . '                            <a role="button" title="';
        $value = $context->find('str');
        $buffer .= $this->section913e83f954c7f484e98975f529e8af70($context, $indent, $value);
        $buffer .= '" class="fp-vb-details btn btn-secondary btn-sm" href="#">
';
        $buffer .= $indent . '                                ';
        $value = $context->find('pix');
        $buffer .= $this->section4e5ebba53c0f316c901a963a7021ffaa($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </a>
';
        $buffer .= $indent . '                            <a role="button" title="';
        $value = $context->find('str');
        $buffer .= $this->section90ef4b20fa82eba65cbf016de97c3b30($context, $indent, $value);
        $buffer .= '" class="fp-vb-tree btn btn-secondary btn-sm" href="#">
';
        $buffer .= $indent . '                                ';
        $value = $context->find('pix');
        $buffer .= $this->section3b33cadecc547c8bec32c013e75e121e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </a>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="fp-clear-left"></div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="fp-pathbar">
';
        $buffer .= $indent . '                        <span class="fp-path-folder"><a class="fp-path-folder-name aalink" href="#"></a></span>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-content card"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section989182df874090b1d11afb2cecf2e6d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'back, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'back, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3b22f5f9e6d0172d596a230b766ecf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'refresh, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'refresh, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e37a1eb87408452fec2644ec72edec8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'a/refresh';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'a/refresh';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb599925a8d148af393cd4473b130b89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'logout, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'logout, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3dd313d11e6d1186fc550133deda51d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'a/logout';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'a/logout';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc85716b31799f2e3f077bb11406263b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'manageurl, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'manageurl, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD67c133f8f36e56f6c2fa39b3da60e01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'a/setting';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'a/setting';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36b987a1ed6e8cc5076d973376c404d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'help, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'help, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94dec821acc1e377e62b767f107c3c0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'a/help';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'a/help';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d897e2029e0713d9863f86d172c49e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'displayicons, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'displayicons, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2c9e83168c3408c7e8ab4c9d39bdb4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fp/view_icon_active, theme';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fp/view_icon_active, theme';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section913e83f954c7f484e98975f529e8af70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'displaydetails, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'displaydetails, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e5ebba53c0f316c901a963a7021ffaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fp/view_list_active, theme';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fp/view_list_active, theme';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90ef4b20fa82eba65cbf016de97c3b30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'displaytree, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'displaytree, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b33cadecc547c8bec32c013e75e121e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fp/view_tree_active, theme';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fp/view_tree_active, theme';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
