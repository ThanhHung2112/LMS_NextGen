<?php

class __Mustache_46ac5e5595e2f3153dfc1f3fa70dcaf6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    data-region="emoji-picker"
';
        $buffer .= $indent . '    class="card shadow emoji-picker"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div class="card-header px-1 pt-1 pb-0 d-flex justify-content-between flex-shrink-0">
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0 selected"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="Recent"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->section0089c91366c0ad36046b67d5a53f8aa2($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->sectionD35d2f55bfdb8e79cb865fc22912a789($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="Smileys & Emotion"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->section9a54d1b9295050029d3c080c727bc236($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->sectionCdbd844aad79db0dac683fc34421a647($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="People & Body"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->section4ca2a3bd8229443d0d4bda097ea6bbdb($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->sectionA3ad4992c8da35d6435a01476ff1aae7($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="Animals & Nature"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->sectionFd297c347f4fdcb8d3553a0a98d9f2e5($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->sectionE8ccc2276e8da44c52880ae105abc980($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="Food & Drink"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->section88c4973ac15328e218fae13d5d1ee661($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section0b8667687a05ee52dc4e3bda45cd2d3c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="Travel & Places"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->sectionFa7969974bee721e45064d6ae45ad128($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section788d3778c9964ffae31c2c143c41018c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="Activities"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->section7ec2c54c9dcef8e196dccd6663dac9a2($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section9f4674e678410c7a2684642c50965c41($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="Objects"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->sectionC33feecea39359764f3917025190b557($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section0ee028c0e2448d7ae787ce929146c699($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="Symbols"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->sectionE5d4779af11e10604dfc9358a966e432($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section4f2d8a6c59d7313bbe5036ad10ecb27a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button
';
        $buffer .= $indent . '            class="btn btn-outline-secondary icon-no-margin category-button rounded-0"
';
        $buffer .= $indent . '            data-action="show-category"
';
        $buffer .= $indent . '            data-category="Flags"
';
        $buffer .= $indent . '            title="';
        $value = $context->find('str');
        $buffer .= $this->section610dc18ed37ab8e01702166945534a61($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section598b58de9525539bdacbbd437601c44f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="card-body p-2 d-flex flex-column overflow-hidden">
';
        $buffer .= $indent . '        <div class="input-group mb-1 flex-shrink-0">
';
        $buffer .= $indent . '            <div class="input-group-prepend">
';
        $buffer .= $indent . '                <span class="input-group-text pr-0 bg-white text-muted">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->section238a7adab4876916478329ebf6de0cfa($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <input
';
        $buffer .= $indent . '                type="text"
';
        $buffer .= $indent . '                class="form-control border-left-0"
';
        $buffer .= $indent . '                placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                data-region="search-input"
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="flex-grow-1 overflow-auto emojis-container h-100" data-region="emojis-container">
';
        $buffer .= $indent . '            <div class="position-relative" data-region="row-container"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="flex-grow-1 overflow-auto search-results-container h-100 hidden" data-region="search-results-container">
';
        $buffer .= $indent . '            <div class="position-relative" data-region="row-container"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="card-footer d-flex flex-shrink-0"
';
        $buffer .= $indent . '        data-region="footer"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <div class="emoji-preview" data-region="emoji-preview"></div>
';
        $buffer .= $indent . '        <div data-region="emoji-short-name" class="emoji-short-name text-muted text-wrap ml-2"></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0089c91366c0ad36046b67d5a53f8aa2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategoryrecent, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategoryrecent, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD35d2f55bfdb8e79cb865fc22912a789(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategoryrecent, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategoryrecent, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a54d1b9295050029d3c080c727bc236(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategorysmileysemotion, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategorysmileysemotion, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCdbd844aad79db0dac683fc34421a647(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategorysmileysemotion, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategorysmileysemotion, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ca2a3bd8229443d0d4bda097ea6bbdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategorypeoplebody, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategorypeoplebody, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3ad4992c8da35d6435a01476ff1aae7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategorypeoplebody, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategorypeoplebody, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd297c347f4fdcb8d3553a0a98d9f2e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategoryanimalsnature, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategoryanimalsnature, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8ccc2276e8da44c52880ae105abc980(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategoryanimalsnature, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategoryanimalsnature, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88c4973ac15328e218fae13d5d1ee661(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategoryfooddrink, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategoryfooddrink, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b8667687a05ee52dc4e3bda45cd2d3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategoryfooddrink, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategoryfooddrink, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa7969974bee721e45064d6ae45ad128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategorytravelplaces, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategorytravelplaces, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section788d3778c9964ffae31c2c143c41018c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategorytravelplaces, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategorytravelplaces, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ec2c54c9dcef8e196dccd6663dac9a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategoryactivities, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategoryactivities, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f4674e678410c7a2684642c50965c41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategoryactivities, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategoryactivities, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC33feecea39359764f3917025190b557(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategoryobjects, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategoryobjects, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ee028c0e2448d7ae787ce929146c699(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategoryobjects, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategoryobjects, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5d4779af11e10604dfc9358a966e432(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategorysymbols, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategorysymbols, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f2d8a6c59d7313bbe5036ad10ecb27a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategorysymbols, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategorysymbols, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section610dc18ed37ab8e01702166945534a61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emojicategoryflags, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emojicategoryflags, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section598b58de9525539bdacbbd437601c44f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/emojicategoryflags, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/emojicategoryflags, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section238a7adab4876916478329ebf6de0cfa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/search, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dbf37a0f544ff636ac78cdadec0a0c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
