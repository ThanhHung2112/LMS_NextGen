<?php

class __Mustache_e9fce01ed9af732b51335a8635e28f6b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

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
        $buffer .= $indent . '        border: none;
';
        $buffer .= $indent . '        outline: none;
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
        $buffer .= $indent . '    /* Style submission */
';
        $buffer .= $indent . '    .ml-content.ml-content-submission {
';
        $buffer .= $indent . '        padding: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-submission-title {
';
        $buffer .= $indent . '        font-size: 26px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-submission-text {
';
        $buffer .= $indent . '        margin-top: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-submission-text-title {
';
        $buffer .= $indent . '        font-size: 18px;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '        margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-submission-text-input {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        height: 250px;
';
        $buffer .= $indent . '        padding: 10px;
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        border: 2px solid #ccc;
';
        $buffer .= $indent . '        border-radius: 20px;
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '        color: #333;
';
        $buffer .= $indent . '        resize: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-submission-file {
';
        $buffer .= $indent . '        margin-top: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-submission-file-title {
';
        $buffer .= $indent . '        font-size: 18px;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '        margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-control {
';
        $buffer .= $indent . '        margin-top: 50px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /* Form for AI question generator */
';
        $buffer .= $indent . '    .ml-submit-ai-form {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-submit-ai-group {
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '        flex-direction: column;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-submit-ai-question {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-submit-ai-input {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        height: 100px;
';
        $buffer .= $indent . '        padding: 10px;
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        border: 2px solid #ccc;
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '        color: #333;
';
        $buffer .= $indent . '        resize: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-button-group {
';
        $buffer .= $indent . '        margin-top: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="ml-wrapper">
';
        $buffer .= $indent . '    <!--  Describe assignment-->
';
        $buffer .= $indent . '    <div class="ml-content ml-content-assign">
';
        $buffer .= $indent . '        <div class="ml-assign-status">
';
        $buffer .= $indent . '            <span class="ml-assign-status-content">
';
        $buffer .= $indent . '                Pending
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <hr>
';
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
        $buffer .= $indent . '        <div class="ml-assign-description">
';
        $value = $context->find('manual_assign');
        $buffer .= $this->sectionC2d410c9c399d01b23699615d480f1f8($context, $indent, $value);
        $buffer .= $indent . '            <!--  For AI question generation   -->
';
        $value = $context->find('ai_assign');
        $buffer .= $this->section46b5087afe966c82c5b37b848bb0631b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!--  Add submission  -->
';
        $buffer .= $indent . '    <div class="ml-content ml-content-submission">
';
        $buffer .= $indent . '        <h2 class="ml-submission-title">
';
        $buffer .= $indent . '            Add submission
';
        $buffer .= $indent . '        </h2>
';
        $buffer .= $indent . '        <!--   Form for submitting AI question -->
';
        $value = $context->find('ai_assign');
        $buffer .= $this->section40507a4b293e98a649cacbbe138f3b02($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!--   Form for submitting manual question -->
';
        $value = $context->find('manual_assign');
        $buffer .= $this->section1cd0cdef2e6ccb1f6a585ee13191a690($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('vietnamese_assign');
        $buffer .= $this->sectionC297a90a3a908861f60ae7e71c13ef6d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
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
        $buffer .= $indent . '    function removeLeadingTrailingSpaces(textarea) {
';
        $buffer .= $indent . '        textarea.value = textarea.value.trim();
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Xử lý khoảng trống của textarea
';
        $buffer .= $indent . '    let aiInputs = document.querySelectorAll(\'.ml-submit-ai-input\')
';
        $buffer .= $indent . '    console.log(aiInputs)
';
        $buffer .= $indent . '    aiInputs.forEach(input => {
';
        $buffer .= $indent . '        removeLeadingTrailingSpaces(input)
';
        $buffer .= $indent . '    })
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    let manualInput = document.querySelector(\'.ml-submission-text-input\')
';
        $buffer .= $indent . '    removeLeadingTrailingSpaces(manualInput)
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    function onPageLoad() {
';
        $buffer .= $indent . '        let textareas = document.querySelectorAll(\'.ml-submit-ai-input\')
';
        $buffer .= $indent . '        Array.from(textareas).forEach(textarea => {
';
        $buffer .= $indent . '            removeLeadingTrailingSpaces(textarea);
';
        $buffer .= $indent . '        })
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Gắn hàm onPageLoad vào sự kiện tải trang (DOMContentLoaded)
';
        $buffer .= $indent . '    document.addEventListener("DOMContentLoaded", onPageLoad);
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function sectionC2d410c9c399d01b23699615d480f1f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="ml-assign-description">
                    <h2 class="ml-assign-description-title">Description</h2>
                    <p class="ml-assign-description-content">
                        {{ question }}
                    </p>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="ml-assign-description">
';
                $buffer .= $indent . '                    <h2 class="ml-assign-description-title">Description</h2>
';
                $buffer .= $indent . '                    <p class="ml-assign-description-content">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </p>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11f562901d44dbebd4846f4b100cda71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="ml-assign-question">{{ question }}</li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="ml-assign-question">';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46b5087afe966c82c5b37b848bb0631b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="ml-assign-description">
                    <h2 class="ml-assign-description-title">Description</h2>

                    <p class="ml-assign-file-title">Read the following file and answer the questions below:</p>
                    <a class="ml-assign-file" href="{{ file_path }}" target="_blank">
                        <i class=\'ml-assign-file-icon bx bx-file\'></i>
                        {{ file_name }}
                    </a>

                    <p class="ml-assign-question-title">Questions</p>
                    <ol class="ml-assign-question-list">
                        {{# generated_questions }}
                            <li class="ml-assign-question">{{ question }}</li>
                        {{/generated_questions }}
                    </ol>

                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="ml-assign-description">
';
                $buffer .= $indent . '                    <h2 class="ml-assign-description-title">Description</h2>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <p class="ml-assign-file-title">Read the following file and answer the questions below:</p>
';
                $buffer .= $indent . '                    <a class="ml-assign-file" href="';
                $value = $this->resolveValue($context->find('file_path'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank">
';
                $buffer .= $indent . '                        <i class=\'ml-assign-file-icon bx bx-file\'></i>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('file_name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <p class="ml-assign-question-title">Questions</p>
';
                $buffer .= $indent . '                    <ol class="ml-assign-question-list">
';
                $value = $context->find('generated_questions');
                $buffer .= $this->section11f562901d44dbebd4846f4b100cda71($context, $indent, $value);
                $buffer .= $indent . '                    </ol>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e324fc7b7f500c7ae872b66af13bac2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
             <div class="ml-submit-ai-group">
                 <label for="question{{ id }}" class="ml-submit-ai-question">{{ id }}. {{ question }}</label>
                 <textarea onfocusin="removeLeadingTrailingSpaces(this);"
                           name="question{{ id }}" class="ml-submit-ai-input" type="text" id="question{{ id }}">
                     {{ answer }}
                 </textarea>
             </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '             <div class="ml-submit-ai-group">
';
                $buffer .= $indent . '                 <label for="question';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="ml-submit-ai-question">';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '. ';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>
';
                $buffer .= $indent . '                 <textarea onfocusin="removeLeadingTrailingSpaces(this);"
';
                $buffer .= $indent . '                           name="question';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="ml-submit-ai-input" type="text" id="question';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                     ';
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                 </textarea>
';
                $buffer .= $indent . '             </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40507a4b293e98a649cacbbe138f3b02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <form action="" class="ml-submit-ai-form" method="POST">
            {{# generated_questions }}
             <div class="ml-submit-ai-group">
                 <label for="question{{ id }}" class="ml-submit-ai-question">{{ id }}. {{ question }}</label>
                 <textarea onfocusin="removeLeadingTrailingSpaces(this);"
                           name="question{{ id }}" class="ml-submit-ai-input" type="text" id="question{{ id }}">
                     {{ answer }}
                 </textarea>
             </div>
            {{/generated_questions}}
            <div class="ml-button-group">
                <button class="ml-button ml-button--edit">Save changes</button>
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}"
                class="ml-button">Cancel</a>
            </div>

        </form>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <form action="" class="ml-submit-ai-form" method="POST">
';
                $value = $context->find('generated_questions');
                $buffer .= $this->section5e324fc7b7f500c7ae872b66af13bac2($context, $indent, $value);
                $buffer .= $indent . '            <div class="ml-button-group">
';
                $buffer .= $indent . '                <button class="ml-button ml-button--edit">Save changes</button>
';
                $buffer .= $indent . '                <a href="http://localhost/mod/demo/view.php?id=';
                $value = $this->resolveValue($context->find('course_id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                class="ml-button">Cancel</a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cd0cdef2e6ccb1f6a585ee13191a690(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ml-submission-text">
            <h3 class="ml-submission-text-title">
                Online text
            </h3>
            <form action="" method="post" enctype="multipart/form-data">
                <textarea onfocusin="removeLeadingTrailingSpaces(this);"
                          name="answer" id="" cols="30" rows="10" class="ml-submission-text-input">
                    {{ answer }}
                </textarea>

                <div class="ml-button-group">
                    <button class="ml-button ml-button--edit">Save changes</button>
                    <a href="http://localhost/mod/demo/view.php?id={{ course_id }}"
                    class="ml-button">Cancel</a>
                </div>
            </form>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ml-submission-text">
';
                $buffer .= $indent . '            <h3 class="ml-submission-text-title">
';
                $buffer .= $indent . '                Online text
';
                $buffer .= $indent . '            </h3>
';
                $buffer .= $indent . '            <form action="" method="post" enctype="multipart/form-data">
';
                $buffer .= $indent . '                <textarea onfocusin="removeLeadingTrailingSpaces(this);"
';
                $buffer .= $indent . '                          name="answer" id="" cols="30" rows="10" class="ml-submission-text-input">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </textarea>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="ml-button-group">
';
                $buffer .= $indent . '                    <button class="ml-button ml-button--edit">Save changes</button>
';
                $buffer .= $indent . '                    <a href="http://localhost/mod/demo/view.php?id=';
                $value = $this->resolveValue($context->find('course_id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    class="ml-button">Cancel</a>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </form>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03f77080c0ed9f73e80b51d295d5c63e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
             <div class="ml-submit-ai-group">
                 <label for="question{{ id }}" class="ml-submit-ai-question">{{ id }}. {{ question }}</label>
                 <textarea onfocusin="removeLeadingTrailingSpaces(this);"
                           name="question{{ id }}" class="ml-submit-ai-input" type="text" id="question{{ id }}">
                    {{ answer }}
                 </textarea>
             </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '             <div class="ml-submit-ai-group">
';
                $buffer .= $indent . '                 <label for="question';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="ml-submit-ai-question">';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '. ';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>
';
                $buffer .= $indent . '                 <textarea onfocusin="removeLeadingTrailingSpaces(this);"
';
                $buffer .= $indent . '                           name="question';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="ml-submit-ai-input" type="text" id="question';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                 </textarea>
';
                $buffer .= $indent . '             </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC297a90a3a908861f60ae7e71c13ef6d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <form action="" class="ml-submit-ai-form" method="POST">
            {{# vietnamese_questions }}
             <div class="ml-submit-ai-group">
                 <label for="question{{ id }}" class="ml-submit-ai-question">{{ id }}. {{ question }}</label>
                 <textarea onfocusin="removeLeadingTrailingSpaces(this);"
                           name="question{{ id }}" class="ml-submit-ai-input" type="text" id="question{{ id }}">
                    {{ answer }}
                 </textarea>
             </div>
            {{/vietnamese_questions}}
            <div class="ml-button-group">
                <button class="ml-button ml-button--edit">Save changes</button>
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}"
                class="ml-button">Cancel</a>
            </div>

        </form>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <form action="" class="ml-submit-ai-form" method="POST">
';
                $value = $context->find('vietnamese_questions');
                $buffer .= $this->section03f77080c0ed9f73e80b51d295d5c63e($context, $indent, $value);
                $buffer .= $indent . '            <div class="ml-button-group">
';
                $buffer .= $indent . '                <button class="ml-button ml-button--edit">Save changes</button>
';
                $buffer .= $indent . '                <a href="http://localhost/mod/demo/view.php?id=';
                $value = $this->resolveValue($context->find('course_id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                class="ml-button">Cancel</a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
