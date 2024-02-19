<?php

class __Mustache_e1e7baba81940435db80cb990e6ef050 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<link href=\'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\' rel=\'stylesheet\'>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '    .icon.activityicon.nofilter {
';
        $buffer .= $indent . '        width: 50px !important;
';
        $buffer .= $indent . '        height: 50px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .activity-header {
';
        $buffer .= $indent . '        display: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-wrapper {
';
        $buffer .= $indent . '        max-width: 830px;
';
        $buffer .= $indent . '        margin: 0 auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content {
';
        $buffer .= $indent . '        margin-top: 30px;
';
        $buffer .= $indent . '        padding: 20px 15px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-assign {
';
        $buffer .= $indent . '        background-color: #F8F9FA;
';
        $buffer .= $indent . '        border-radius: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-control {
';
        $buffer .= $indent . '        padding: 0px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-summary {
';
        $buffer .= $indent . '        margin-top: 40px;
';
        $buffer .= $indent . '        padding: 0px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-status {
';
        $buffer .= $indent . '        margin-bottom: 30px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-status-content {
';
        $buffer .= $indent . '        border: 1px solid #888;
';
        $buffer .= $indent . '        font-size: 14px;
';
        $buffer .= $indent . '        background-color: #F8F9FA;
';
        $buffer .= $indent . '        color: #B6BBBF;
';
        $buffer .= $indent . '        padding: 6px 15px;
';
        $buffer .= $indent . '        border-radius: 5px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    /*For done status*/
';
        $buffer .= $indent . '    .ml-assign-status-content.ml-assign-status-content--done {
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '        background-color: #509b39;
';
        $buffer .= $indent . '        border: 1px solid #509b39;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-time-value {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-description-title {
';
        $buffer .= $indent . '        font-size: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-description-content {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-button {
';
        $buffer .= $indent . '        text-decoration: none;
';
        $buffer .= $indent . '        color: #333;
';
        $buffer .= $indent . '        background-color: #CED4DA;
';
        $buffer .= $indent . '        padding: 8px 10px;
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '        margin-right: 10px;
';
        $buffer .= $indent . '        cursor: pointer;
';
        $buffer .= $indent . '        transition: opacity linear 0.2s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-button:hover {
';
        $buffer .= $indent . '        text-decoration: none;
';
        $buffer .= $indent . '        color: #333;
';
        $buffer .= $indent . '        opacity: 0.8;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-button.ml-button--edit {
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '        background-color: #0F6CBF;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-summary-title {
';
        $buffer .= $indent . '        font-size: 28px;
';
        $buffer .= $indent . '        margin-bottom: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-summary-table {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-summary-table td {
';
        $buffer .= $indent . '        padding: 5px 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-summary-table td {
';
        $buffer .= $indent . '        border: 1px solid #DFE3E6;
';
        $buffer .= $indent . '        color: #555;
';
        $buffer .= $indent . '        background-color: #F7F7F7;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-summary-table tr:nth-child(2) td{
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-summary-table tr td:nth-child(1) {
';
        $buffer .= $indent . '        width: 30%;
';
        $buffer .= $indent . '        font-weight: 700;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /* Question Generator CSS  */
';
        $buffer .= $indent . '    .ml-assign-file-title {
';
        $buffer .= $indent . '        margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    .ml-assign-question-title {
';
        $buffer .= $indent . '        font-size: 18px;
';
        $buffer .= $indent . '        margin-top: 10px;
';
        $buffer .= $indent . '        margin-bottom: 10px;
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-question {
';
        $buffer .= $indent . '        margin-bottom: 0px;
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-question-summary {
';
        $buffer .= $indent . '        margin-top: 5px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-question-list {
';
        $buffer .= $indent . '        margin-top: 5px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /* Xử lý khi user không có assignment*/
';
        $buffer .= $indent . '    .ml-content.ml-content-none {
';
        $buffer .= $indent . '        margin: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-none {
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '        color: #888;
';
        $buffer .= $indent . '        font-size: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /* Xử lý khi admin không có assignment*/
';
        $buffer .= $indent . '    .ml-create-assignment {
';
        $buffer .= $indent . '        margin-bottom: 20px;
';
        $buffer .= $indent . '        font-size: 25px;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '        color: #333;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-button-group {
';
        $buffer .= $indent . '        margin-top: 40px;
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-edit {
';
        $buffer .= $indent . '        margin-left: auto;  
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '        box-shadow: 0 1px 8px -3px rgb(0 0 0 / 16%),0 0 24px -16px rgb(0 0 0 / 16%);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-assign-edit-icon {
';
        $buffer .= $indent . '        font-size: 18px;
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="ml-wrapper">
';
        $value = $context->find('has_assign');
        $buffer .= $this->sectionC05a38be942842fb5ce867bafd9724fa($context, $indent, $value);
        $buffer .= $indent . '    <!-- Control assignment -->
';
        $buffer .= $indent . '    <!--  Display when has assign (admin + user)  -->
';
        $value = $context->find('has_assign');
        $buffer .= $this->section2d76486331dfdc2359d49ed5279b70c0($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('has_assign');
        if (empty($value)) {
            
            $buffer .= $indent . '        <!-- Không có assign và là admin       -->
';
            $value = $context->find('is_admin');
            $buffer .= $this->sectionAe02f7bfdfc5222ac912706b91072d7a($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '        <!-- Không có assign và là participant   -->
';
            $value = $context->find('is_admin');
            if (empty($value)) {
                
                $buffer .= $indent . '            <div class="ml-content ml-content-none">
';
                $buffer .= $indent . '                <h3 class="ml-none">Wait for the teacher to create the assignment!</h3>
';
                $buffer .= $indent . '            </div>
';
            }
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '    // Change icon AI Assignment
';
        $buffer .= $indent . '    let img = document.querySelector(\'.icon.activityicon.nofilter\')
';
        $buffer .= $indent . '    img.src = "https://thumbs.dreamstime.com/b/artificial-intelligence-ai-processor-chip-vector-icon-symbol-graphic-design-logo-web-site-social-media-mobile-app-ui-158205566.jpg"
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Change module Name
';
        $buffer .= $indent . '    let moduleName = document.querySelector(\'.active.active_tree_node.nav-link\')
';
        $buffer .= $indent . '    moduleName.innerText = \'AI Assignment\'
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function section3f016477827c1aa0c2cd6cb7de25e658(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ml-assign-status-content--done';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ml-assign-status-content--done';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56d2378520fcf478a9d99d8e52259a6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'Done';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'Done';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81c451e7a050714f0c5e1457d85a0fd7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ml-assign-description">
            <h2 class="ml-assign-description-title">Description</h2>
            <p class="ml-assign-description-content">
               {{ assign }}
            </p>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ml-assign-description">
';
                $buffer .= $indent . '            <h2 class="ml-assign-description-title">Description</h2>
';
                $buffer .= $indent . '            <p class="ml-assign-description-content">
';
                $buffer .= $indent . '               ';
                $value = $this->resolveValue($context->find('assign'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '            </p>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ad6520bb8070205cd045321323102e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p class="ml-assign-question-summary"><b>Summary:</b> {{ summary }}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p class="ml-assign-question-summary"><b>Summary:</b> ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA70c17248c28ed6061861fdbf3995a0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p class="ml-assign-question">{{ id }}. {{ question }}</p>
            {{# is_admin }}
            <p class="ml-assign-question-summary"><b>Summary:</b> {{ summary }}</p>
            {{/ is_admin }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p class="ml-assign-question">';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '. ';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $value = $context->find('is_admin');
                $buffer .= $this->section9ad6520bb8070205cd045321323102e7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a70635eda30ba22504dcf4fea88dcd5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="ml-assign-button-group">
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=editAIquestion&id-ass={{ id_assign}}"
                    class="ml-button ml-assign-edit">
                    <i class=\'bx bx-edit ml-assign-edit-icon\'></i>
                    Edit AI question
                </a>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="ml-assign-button-group">
';
                $buffer .= $indent . '                <a href="http://localhost/mod/demo/view.php?id=';
                $value = $this->resolveValue($context->find('course_id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&action=editAIquestion&id-ass=';
                $value = $this->resolveValue($context->find('id_assign'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    class="ml-button ml-assign-edit">
';
                $buffer .= $indent . '                    <i class=\'bx bx-edit ml-assign-edit-icon\'></i>
';
                $buffer .= $indent . '                    Edit AI question
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe3b9b6dba3473e21610f99cf24cb0d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p class="ml-assign-question-summary"><b>Corrected Answer:</b> {{ answer }}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p class="ml-assign-question-summary"><b>Corrected Answer:</b> ';
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa61d9106920e9eaacd554bf519cabdc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p class="ml-assign-question">{{ id }}. {{ question }}</p>
            {{# is_admin }}
            <p class="ml-assign-question-summary"><b>Corrected Answer:</b> {{ answer }}</p>
            {{/ is_admin }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p class="ml-assign-question">';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '. ';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $value = $context->find('is_admin');
                $buffer .= $this->sectionBe3b9b6dba3473e21610f99cf24cb0d4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1f95f1dd29deca47fcabf128176d3a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ml-assign-description">
            <h2 class="ml-assign-description-title">Description</h2>
            <p class="ml-assign-file-title">Answer the questions below:</p>

        </div>
        
            <p class="ml-assign-question-title">Questions</p>
            {{# vietnamese_questions }}
            <p class="ml-assign-question">{{ id }}. {{ question }}</p>
            {{# is_admin }}
            <p class="ml-assign-question-summary"><b>Corrected Answer:</b> {{ answer }}</p>
            {{/ is_admin }}
            {{/vietnamese_questions }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ml-assign-description">
';
                $buffer .= $indent . '            <h2 class="ml-assign-description-title">Description</h2>
';
                $buffer .= $indent . '            <p class="ml-assign-file-title">Answer the questions below:</p>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '            <p class="ml-assign-question-title">Questions</p>
';
                $value = $context->find('vietnamese_questions');
                $buffer .= $this->sectionDa61d9106920e9eaacd554bf519cabdc($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC05a38be942842fb5ce867bafd9724fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!--  Describe assignment-->
    <div class="ml-content ml-content-assign">
        {{^ is_admin }}
        <div class="ml-assign-status">
            <span class="ml-assign-status-content {{# has_submission }}ml-assign-status-content--done{{/has_submission}}">
                {{# has_submission }}Done{{/has_submission}}
                {{^ has_submission }}Pending{{/has_submission}}
            </span>
        </div>
        <hr>
        {{/is_admin}}
        <div class="ml-assign-time">
            <p class="ml-assign-time-value">
                <b>Opened: </b>Thursday, 12 October 2023, 12:00 AM
            </p>
            <p class="ml-assign-time-value">
                <b>Due: </b>Thursday, 19 October 2023, 12:00 AM
            </p>
        </div>
        <hr>
        <!--  For create question manually  -->
        {{^ vietname_assign}}
        {{# type_assign}}
        <div class="ml-assign-description">
            <h2 class="ml-assign-description-title">Description</h2>
            <p class="ml-assign-description-content">
               {{ assign }}
            </p>
        </div>
        {{/ type_assign}}
        <!--  For AI question generation   -->
        {{^ type_assign}}
        <div class="ml-assign-description">
            <h2 class="ml-assign-description-title">Description</h2>

            <p class="ml-assign-file-title">Read the following file and answer the questions below:</p>
            <a class="ml-assign-file" href="{{ file_path }}" target="_blank">
                <i class=\'ml-assign-file-icon bx bx-file\'></i>
                {{ file_name }}
            </a>

            <p class="ml-assign-question-title">Questions</p>
            {{# generated_questions }}
            <p class="ml-assign-question">{{ id }}. {{ question }}</p>
            {{# is_admin }}
            <p class="ml-assign-question-summary"><b>Summary:</b> {{ summary }}</p>
            {{/ is_admin }}
            {{/generated_questions }}

            {{# is_admin }}
            <div class="ml-assign-button-group">
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=editAIquestion&id-ass={{ id_assign}}"
                    class="ml-button ml-assign-edit">
                    <i class=\'bx bx-edit ml-assign-edit-icon\'></i>
                    Edit AI question
                </a>
            </div>
            {{/ is_admin }}
        </div>
        {{/type_assign}}
        {{/ vietname_assign }}
        
        {{# vietname_assign }}
        <div class="ml-assign-description">
            <h2 class="ml-assign-description-title">Description</h2>
            <p class="ml-assign-file-title">Answer the questions below:</p>

        </div>
        
            <p class="ml-assign-question-title">Questions</p>
            {{# vietnamese_questions }}
            <p class="ml-assign-question">{{ id }}. {{ question }}</p>
            {{# is_admin }}
            <p class="ml-assign-question-summary"><b>Corrected Answer:</b> {{ answer }}</p>
            {{/ is_admin }}
            {{/vietnamese_questions }}
        {{/ vietname_assign }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<!--  Describe assignment-->
';
                $buffer .= $indent . '    <div class="ml-content ml-content-assign">
';
                $value = $context->find('is_admin');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div class="ml-assign-status">
';
                    $buffer .= $indent . '            <span class="ml-assign-status-content ';
                    $value = $context->find('has_submission');
                    $buffer .= $this->section3f016477827c1aa0c2cd6cb7de25e658($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                ';
                    $value = $context->find('has_submission');
                    $buffer .= $this->section56d2378520fcf478a9d99d8e52259a6e($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                ';
                    $value = $context->find('has_submission');
                    if (empty($value)) {
                        
                        $buffer .= 'Pending';
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '            </span>
';
                    $buffer .= $indent . '        </div>
';
                    $buffer .= $indent . '        <hr>
';
                }
                $buffer .= $indent . '        <div class="ml-assign-time">
';
                $buffer .= $indent . '            <p class="ml-assign-time-value">
';
                $buffer .= $indent . '                <b>Opened: </b>Thursday, 12 October 2023, 12:00 AM
';
                $buffer .= $indent . '            </p>
';
                $buffer .= $indent . '            <p class="ml-assign-time-value">
';
                $buffer .= $indent . '                <b>Due: </b>Thursday, 19 October 2023, 12:00 AM
';
                $buffer .= $indent . '            </p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <hr>
';
                $buffer .= $indent . '        <!--  For create question manually  -->
';
                $value = $context->find('vietname_assign');
                if (empty($value)) {
                    
                    $value = $context->find('type_assign');
                    $buffer .= $this->section81c451e7a050714f0c5e1457d85a0fd7($context, $indent, $value);
                    $buffer .= $indent . '        <!--  For AI question generation   -->
';
                    $value = $context->find('type_assign');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '        <div class="ml-assign-description">
';
                        $buffer .= $indent . '            <h2 class="ml-assign-description-title">Description</h2>
';
                        $buffer .= $indent . '
';
                        $buffer .= $indent . '            <p class="ml-assign-file-title">Read the following file and answer the questions below:</p>
';
                        $buffer .= $indent . '            <a class="ml-assign-file" href="';
                        $value = $this->resolveValue($context->find('file_path'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '" target="_blank">
';
                        $buffer .= $indent . '                <i class=\'ml-assign-file-icon bx bx-file\'></i>
';
                        $buffer .= $indent . '                ';
                        $value = $this->resolveValue($context->find('file_name'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '
';
                        $buffer .= $indent . '            </a>
';
                        $buffer .= $indent . '
';
                        $buffer .= $indent . '            <p class="ml-assign-question-title">Questions</p>
';
                        $value = $context->find('generated_questions');
                        $buffer .= $this->sectionA70c17248c28ed6061861fdbf3995a0e($context, $indent, $value);
                        $buffer .= $indent . '
';
                        $value = $context->find('is_admin');
                        $buffer .= $this->section0a70635eda30ba22504dcf4fea88dcd5($context, $indent, $value);
                        $buffer .= $indent . '        </div>
';
                    }
                }
                $buffer .= $indent . '        
';
                $value = $context->find('vietname_assign');
                $buffer .= $this->sectionC1f95f1dd29deca47fcabf128176d3a5($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66f033716dff11b628a6bd4c62d9b257(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ml-content ml-content-control">
            <div class="ml-button-group">
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=viewsub"
                   class="ml-button">View all submissions</a>
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=createassign&edit=true"
                   class="ml-button ml-button--edit">Edit Assignment</a>
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ml-content ml-content-control">
';
                $buffer .= $indent . '            <div class="ml-button-group">
';
                $buffer .= $indent . '                <a href="http://localhost/mod/demo/view.php?id=';
                $value = $this->resolveValue($context->find('course_id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&action=viewsub"
';
                $buffer .= $indent . '                   class="ml-button">View all submissions</a>
';
                $buffer .= $indent . '                <a href="http://localhost/mod/demo/view.php?id=';
                $value = $this->resolveValue($context->find('course_id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&action=createassign&edit=true"
';
                $buffer .= $indent . '                   class="ml-button ml-button--edit">Edit Assignment</a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12ea833de0208c65dc8ee76522731b36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{^ grade }}
                    <div class="ml-button-group">
                        <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=editsubmission"
                        class="ml-button ml-button--edit">Edit submission</a>
                    </div>
                    {{/ grade }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('grade');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <div class="ml-button-group">
';
                    $buffer .= $indent . '                        <a href="http://localhost/mod/demo/view.php?id=';
                    $value = $this->resolveValue($context->find('course_id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '&action=editsubmission"
';
                    $buffer .= $indent . '                        class="ml-button ml-button--edit">Edit submission</a>
';
                    $buffer .= $indent . '                    </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb2f229d21a848244fbac3a891a3b3f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="ml-content ml-content-summary">
                <div class="ml-summary">
                    <h2 class="ml-summary-title">
                        Grading Summary
                    </h2>

                    <table class="ml-summary-table">
                        <tr>
                            <td>Participants</td>
                            <td>{{ participants_num }}</td>
                        </tr>
                        <tr>
                            <td>Submitted</td>
                            <td>{{ submited_num }}</td>
                        </tr>
                        <tr>
                            <td>Needs grading</td>
                            <td>{{ need_grading_num }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="ml-content ml-content-summary">
';
                $buffer .= $indent . '                <div class="ml-summary">
';
                $buffer .= $indent . '                    <h2 class="ml-summary-title">
';
                $buffer .= $indent . '                        Grading Summary
';
                $buffer .= $indent . '                    </h2>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <table class="ml-summary-table">
';
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td>Participants</td>
';
                $buffer .= $indent . '                            <td>';
                $value = $this->resolveValue($context->find('participants_num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td>Submitted</td>
';
                $buffer .= $indent . '                            <td>';
                $value = $this->resolveValue($context->find('submited_num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td>Needs grading</td>
';
                $buffer .= $indent . '                            <td>';
                $value = $this->resolveValue($context->find('need_grading_num'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                        </tr>
';
                $buffer .= $indent . '                    </table>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2dacf18c0afb8c9f36897da3fd59414b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'Submitted';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'Submitted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE626660a76ba51f99c93ced75b9f4182(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'Graded ({{grade}}/100)';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'Graded (';
                $value = $this->resolveValue($context->find('grade'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/100)';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f1411a429c8350d9ae6ae62fa3a805c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'From Teacher: {{ comment }} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'From Teacher: ';
                $value = $this->resolveValue($context->find('comment'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d76486331dfdc2359d49ed5279b70c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{# is_admin }}
        <div class="ml-content ml-content-control">
            <div class="ml-button-group">
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=viewsub"
                   class="ml-button">View all submissions</a>
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=createassign&edit=true"
                   class="ml-button ml-button--edit">Edit Assignment</a>
            </div>
        </div>
        {{/ is_admin }}
        <!--  Control assignment for participants  -->
        {{^ is_admin }}
            <div class="ml-content ml-content-control">
                <!-- Handle if have submission   -->
                {{# has_submission }}
                    {{^ grade }}
                    <div class="ml-button-group">
                        <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=editsubmission"
                        class="ml-button ml-button--edit">Edit submission</a>
                    </div>
                    {{/ grade }}
                {{/ has_submission }}

                {{^ has_submission }}
                    <div class="ml-button-group">
                        <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=addsubmission"
                        class="ml-button ml-button--edit">Add submission</a>
                    </div>
                {{/ has_submission }}

            </div>
        {{/ is_admin }}
        <!-- Summary assignment-->
        <!-- Summary assignment for admin-->
        {{# is_admin }}
            <div class="ml-content ml-content-summary">
                <div class="ml-summary">
                    <h2 class="ml-summary-title">
                        Grading Summary
                    </h2>

                    <table class="ml-summary-table">
                        <tr>
                            <td>Participants</td>
                            <td>{{ participants_num }}</td>
                        </tr>
                        <tr>
                            <td>Submitted</td>
                            <td>{{ submited_num }}</td>
                        </tr>
                        <tr>
                            <td>Needs grading</td>
                            <td>{{ need_grading_num }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        {{/ is_admin }}
        <!-- Summary assignment for participants-->
        {{^ is_admin }}
            <div class="ml-content ml-content-summary">
                <div class="ml-summary">
                    <h2 class="ml-summary-title">
                        Submission status
                    </h2>
                    <table class="ml-summary-table">
                        <tr>
                            <td>Submission status</td>
                            <td>
                                {{# has_submission }}Submitted{{/has_submission}}
                                {{^ has_submission }}No submissions have been made yet{{/has_submission}}
                            </td>
                        </tr>
                        <tr>
                            <td>Grading status</td>
                            <td>
                                {{# grade }}Graded ({{grade}}/100){{/ grade }}
                                {{^ grade }}Not graded{{/ grade }}
                            </td>
                        </tr>
                        <tr>
                            <td>Submission comments</td>
                            <td>
                                {{# comment }}From Teacher: {{ comment }} {{/ comment }}
                                {{^ comment }}No comment{{/ comment }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        {{/ is_admin }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('is_admin');
                $buffer .= $this->section66f033716dff11b628a6bd4c62d9b257($context, $indent, $value);
                $buffer .= $indent . '        <!--  Control assignment for participants  -->
';
                $value = $context->find('is_admin');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="ml-content ml-content-control">
';
                    $buffer .= $indent . '                <!-- Handle if have submission   -->
';
                    $value = $context->find('has_submission');
                    $buffer .= $this->section12ea833de0208c65dc8ee76522731b36($context, $indent, $value);
                    $buffer .= $indent . '
';
                    $value = $context->find('has_submission');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                    <div class="ml-button-group">
';
                        $buffer .= $indent . '                        <a href="http://localhost/mod/demo/view.php?id=';
                        $value = $this->resolveValue($context->find('course_id'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '&action=addsubmission"
';
                        $buffer .= $indent . '                        class="ml-button ml-button--edit">Add submission</a>
';
                        $buffer .= $indent . '                    </div>
';
                    }
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '            </div>
';
                }
                $buffer .= $indent . '        <!-- Summary assignment-->
';
                $buffer .= $indent . '        <!-- Summary assignment for admin-->
';
                $value = $context->find('is_admin');
                $buffer .= $this->sectionCb2f229d21a848244fbac3a891a3b3f8($context, $indent, $value);
                $buffer .= $indent . '        <!-- Summary assignment for participants-->
';
                $value = $context->find('is_admin');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="ml-content ml-content-summary">
';
                    $buffer .= $indent . '                <div class="ml-summary">
';
                    $buffer .= $indent . '                    <h2 class="ml-summary-title">
';
                    $buffer .= $indent . '                        Submission status
';
                    $buffer .= $indent . '                    </h2>
';
                    $buffer .= $indent . '                    <table class="ml-summary-table">
';
                    $buffer .= $indent . '                        <tr>
';
                    $buffer .= $indent . '                            <td>Submission status</td>
';
                    $buffer .= $indent . '                            <td>
';
                    $buffer .= $indent . '                                ';
                    $value = $context->find('has_submission');
                    $buffer .= $this->section2dacf18c0afb8c9f36897da3fd59414b($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                ';
                    $value = $context->find('has_submission');
                    if (empty($value)) {
                        
                        $buffer .= 'No submissions have been made yet';
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '                            </td>
';
                    $buffer .= $indent . '                        </tr>
';
                    $buffer .= $indent . '                        <tr>
';
                    $buffer .= $indent . '                            <td>Grading status</td>
';
                    $buffer .= $indent . '                            <td>
';
                    $buffer .= $indent . '                                ';
                    $value = $context->find('grade');
                    $buffer .= $this->sectionE626660a76ba51f99c93ced75b9f4182($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                ';
                    $value = $context->find('grade');
                    if (empty($value)) {
                        
                        $buffer .= 'Not graded';
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '                            </td>
';
                    $buffer .= $indent . '                        </tr>
';
                    $buffer .= $indent . '                        <tr>
';
                    $buffer .= $indent . '                            <td>Submission comments</td>
';
                    $buffer .= $indent . '                            <td>
';
                    $buffer .= $indent . '                                ';
                    $value = $context->find('comment');
                    $buffer .= $this->section3f1411a429c8350d9ae6ae62fa3a805c($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                ';
                    $value = $context->find('comment');
                    if (empty($value)) {
                        
                        $buffer .= 'No comment';
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '                            </td>
';
                    $buffer .= $indent . '                        </tr>
';
                    $buffer .= $indent . '                    </table>
';
                    $buffer .= $indent . '                </div>
';
                    $buffer .= $indent . '            </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe02f7bfdfc5222ac912706b91072d7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ml-content ml-content-control">
            <h3 class="ml-create-assignment">Create a assignment for participants</h3>
            <div class="ml-button-group">
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}&action=createassign"
                   class="ml-button ml-button--edit">Create Assignment</a>
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ml-content ml-content-control">
';
                $buffer .= $indent . '            <h3 class="ml-create-assignment">Create a assignment for participants</h3>
';
                $buffer .= $indent . '            <div class="ml-button-group">
';
                $buffer .= $indent . '                <a href="http://localhost/mod/demo/view.php?id=';
                $value = $this->resolveValue($context->find('course_id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&action=createassign"
';
                $buffer .= $indent . '                   class="ml-button ml-button--edit">Create Assignment</a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
