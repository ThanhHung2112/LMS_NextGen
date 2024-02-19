<?php

class __Mustache_3e1754d6ab58755612b0ffb7165fd0ad extends Mustache_Template
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
        $buffer .= $indent . '    .ml-content.ml-grading {
';
        $buffer .= $indent . '        background-color: #F8F9FA;
';
        $buffer .= $indent . '        border-radius: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
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
        $buffer .= $indent . '        padding: 8px 15px;
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '        margin-right: 10px;
';
        $buffer .= $indent . '        cursor: pointer;
';
        $buffer .= $indent . '        transition: opacity linear 0.2s;
';
        $buffer .= $indent . '        outline: none;
';
        $buffer .= $indent . '        border: none;
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
        $buffer .= $indent . '    .ml-summary-table td, .ml-summary-table th {
';
        $buffer .= $indent . '        padding: 5px 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-summary-table th {
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
        $buffer .= $indent . '    .ml-summary-table td {
';
        $buffer .= $indent . '        border: 1px solid #DFE3E6;
';
        $buffer .= $indent . '        color: #555;
';
        $buffer .= $indent . '        background-color: #fff;
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
        $buffer .= $indent . '    /*  Grading side */
';
        $buffer .= $indent . '    .ml-grading-title {
';
        $buffer .= $indent . '        margin-bottom: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-form {
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-feedback-label {
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-form-feedback {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        height: 250px;
';
        $buffer .= $indent . '        padding: 20px;
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
        $buffer .= $indent . '        margin-bottom: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-button--extra {
';
        $buffer .= $indent . '        background-color: rgba(239, 85, 125, 0.85);
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-button--extra:hover {
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /* Loading animation  */
';
        $buffer .= $indent . '    .loading-overlay {
';
        $buffer .= $indent . '        position: fixed;
';
        $buffer .= $indent . '        top: 0;
';
        $buffer .= $indent . '        left: 0;
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        height: 100%;
';
        $buffer .= $indent . '        background-color: #fff; /* Màu nền đục */
';
        $buffer .= $indent . '        display: none;
';
        $buffer .= $indent . '        justify-content: center;
';
        $buffer .= $indent . '        align-items: center;
';
        $buffer .= $indent . '        flex-direction: column-reverse;
';
        $buffer .= $indent . '        z-index: 99; /* Đảm bảo hiển thị phía trên tất cả các phần tử khác */
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .loading-spinner {
';
        $buffer .= $indent . '        border: 4px solid #f3f3f3;
';
        $buffer .= $indent . '        border-top: 4px solid #3498db; /* Màu của vòng quay */
';
        $buffer .= $indent . '        border-radius: 50%;
';
        $buffer .= $indent . '        width: 40px;
';
        $buffer .= $indent . '        height: 40px;
';
        $buffer .= $indent . '        z-index: 100;
';
        $buffer .= $indent . '        animation: spin 2s linear infinite; /* Tạo hiệu ứng quay */
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @keyframes spin {
';
        $buffer .= $indent . '        0% { transform: rotate(0deg); }
';
        $buffer .= $indent . '        100% { transform: rotate(360deg); }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-answer-wrapper {
';
        $buffer .= $indent . '        margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-english-grammar-check {
';
        $buffer .= $indent . '        margin-top: 10px;
';
        $buffer .= $indent . '        line-height: 30px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-english-grammar-check span {
';
        $buffer .= $indent . '        padding: 2px 5px;
';
        $buffer .= $indent . '        border-radius: 5px;
';
        $buffer .= $indent . '        margin: 2px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-error-word {
';
        $buffer .= $indent . '        background-color: #FF8080;
';
        $buffer .= $indent . '        text-decoration: line-through;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-correct-word {
';
        $buffer .= $indent . '        background-color: #CDFAD5;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-factcheck-entailment {
';
        $buffer .= $indent . '        background-color: #CDFAD5;
';
        $buffer .= $indent . '        padding: 20px;
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-factcheck-neutral {
';
        $buffer .= $indent . '        background-color: #F6FDC3;
';
        $buffer .= $indent . '        padding: 20px;
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-factcheck-contradiction {
';
        $buffer .= $indent . '        background-color: #FF8080;
';
        $buffer .= $indent . '        padding: 20px;
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-ai-question {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-factcheck-available {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        margin-top: 30px;
';
        $buffer .= $indent . '        border: 1px solid #888;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-answer-label {
';
        $buffer .= $indent . '        position: absolute;
';
        $buffer .= $indent . '        left: 30px;
';
        $buffer .= $indent . '        top: -22px;
';
        $buffer .= $indent . '        padding: 0 20px;
';
        $buffer .= $indent . '        border-top-left-radius: 5px;
';
        $buffer .= $indent . '        border-top-right-radius: 5px;
';
        $buffer .= $indent . '        font-weight: 700;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        border-top-width: 1px;
';
        $buffer .= $indent . '        border-top-color: #888;
';
        $buffer .= $indent . '        border-top-style: solid;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        border-right-width: 1px;
';
        $buffer .= $indent . '        border-right-color: #888;
';
        $buffer .= $indent . '        border-right-style: solid;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        border-left-width: 1px;
';
        $buffer .= $indent . '        border-left-color: #888;
';
        $buffer .= $indent . '        border-left-style: solid;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-answer-label--entailment {
';
        $buffer .= $indent . '        background-color: #CDFAD5;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-answer-label--neutral {
';
        $buffer .= $indent . '        background-color: #F6FDC3;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-answer-label--contradiction {
';
        $buffer .= $indent . '        background-color: #FF8080;
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
        $buffer .= $indent . '    <!-- Summary assignment-->
';
        $buffer .= $indent . '    <div class="ml-content ml-content-summary">
';
        $buffer .= $indent . '        <div class="ml-summary">
';
        $buffer .= $indent . '            <h2 class="ml-summary-title">
';
        $buffer .= $indent . '                Grade Assignment
';
        $buffer .= $indent . '            </h2>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('vietnamese_assign');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="ml-content ml-content-assign">
';
            $buffer .= $indent . '        <div class="ml-assign-description">
';
            $buffer .= $indent . '            <h2 class="ml-assign-description-title">Assignment Instructions</h2>
';
            $value = $context->find('manual_assign');
            $buffer .= $this->sectionCfe4ff722073016e272001254b3485b3($context, $indent, $value);
            $value = $context->find('ai_assign');
            $buffer .= $this->section00f7cf03a9962eeb6565fc78af252677($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="ml-content ml-grading ml-content-assign">
';
        $buffer .= $indent . '        <h2 class="ml-assign-description-title ml-grading-title">Participant Submission</h2>
';
        $value = $context->find('manual_assign');
        $buffer .= $this->section92ae7eb967cc8ea237f1c3bfcbfaeccd($context, $indent, $value);
        $value = $context->find('ai_assign');
        $buffer .= $this->section0d9987d03fefe58d00ddf1ad6dfe278d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('vietnamese_assign');
        $buffer .= $this->sectionD52ad241437c134df67edc2169380807($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $value = $context->find('manual_assign');
        $buffer .= $this->section1675763ac27cadea0063e3271b98a092($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="ml-content ml-form">
';
        $buffer .= $indent . '        <h2 class="ml-assign-description-title ml-grading-title">Grade</h2>
';
        $buffer .= $indent . '        <form class="ml-form-form" action="" method="POST">
';
        $buffer .= $indent . '            <div class="ml-form-group">
';
        $buffer .= $indent . '                <label for="grade">Grade out of 100: </label>
';
        $buffer .= $indent . '                <input class="ml-form-grade" type="text" name="grade" id="grade"
';
        $buffer .= $indent . '                    ';
        $value = $context->find('old_grade');
        $buffer .= $this->section91b6b58a9de9d2f28ee9379829e3ccf5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                >
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="ml-form-group">
';
        $buffer .= $indent . '                <label class="ml-feedback-label" for="feedback">Feedback comments</label>
';
        $buffer .= $indent . '                <textarea class="ml-form-feedback" onfocusin="removeLeadingTrailingSpaces(this);"
';
        $buffer .= $indent . '                          name="feedback" id="feedback" cols="30" rows="10" class="ml-0">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('old_feedback');
        $buffer .= $this->sectionF98ed8771616c1b1191d252129a55c8b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </textarea>
';
        $buffer .= $indent . '                <textarea style="display: none" class="ml-factcheck"
';
        $buffer .= $indent . '                          name="factcheck" id="" cols="30" rows="10"
';
        $buffer .= $indent . '                          data-factcheck="';
        $value = $this->resolveValue($context->find('is_factcheck'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                >
';
        $buffer .= $indent . '                </textarea>
';
        $buffer .= $indent . '                <input style="display: none" type="text" name="is-factcheck" class="ml-is-factcheck">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="ml-form-group">
';
        $buffer .= $indent . '                <a href="http://localhost/mod/demo/view.php?id=';
        $value = $this->resolveValue($context->find('module_instance_id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '&action=viewsub" class="ml-button">Back</a>
';
        $buffer .= $indent . '                <input class="ml-button ml-button--edit ml-form-submit" type="submit"
';
        $buffer .= $indent . '                    ';
        $value = $context->find('old_grade');
        $buffer .= $this->section0dd1e2023f0ed77160688b037911a4f1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $context->find('old_grade');
        if (empty($value)) {
            
            $buffer .= ' value="Grade Manually" ';
        }
        $buffer .= ' ">
';
        $buffer .= $indent . '                <span class="ml-button ml-button--extra ';
        $value = $context->find('manual_assign');
        $buffer .= $this->section5701c2195267c316fe2faefddec7db8e($context, $indent, $value);
        $value = $context->find('ai_assign');
        $buffer .= $this->section2cd804fb8ee913f64d60fb8d6e5f2204($context, $indent, $value);
        $buffer .= '" >Help Grading with AI</span>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </form>
';
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
        $buffer .= $indent . '    // HIệu ứng loading
';
        $buffer .= $indent . '    // Hiệu ứng loading
';
        $buffer .= $indent . '    const loadingOverlay = document.createElement("div");
';
        $buffer .= $indent . '    loadingOverlay.className = "loading-overlay";
';
        $buffer .= $indent . '    loadingOverlay.innerText = "Fact Check Questions...";
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    let grammarCheckButton = document.querySelector(\'.ml-grammar-check\')
';
        $buffer .= $indent . '    if (grammarCheckButton) {
';
        $buffer .= $indent . '        loadingOverlay.innerText = "Grammar Check Questions...";
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    const loadingProgress = document.createElement("div");
';
        $buffer .= $indent . '    loadingProgress.className = "loading-spinner";
';
        $buffer .= $indent . '    loadingOverlay.appendChild(loadingProgress);
';
        $buffer .= $indent . '    document.body.appendChild(loadingOverlay);
';
        $buffer .= $indent . '    // Hiển thị hiệu ứng "loading"
';
        $buffer .= $indent . '    function showLoading() {
';
        $buffer .= $indent . '        console.log(\'Loading...... cực cháy\')
';
        $buffer .= $indent . '        document.querySelector(\'.loading-overlay\').style.display = \'flex\';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    // Ẩn hiệu ứng "loading"
';
        $buffer .= $indent . '    function hideLoading() {
';
        $buffer .= $indent . '        document.querySelector(\'.loading-overlay\').style.display = \'none\';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Call api grammar check
';
        $buffer .= $indent . '    let submitButton = document.querySelector(\'.ml-form-submit\')
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    if (grammarCheckButton) {
';
        $buffer .= $indent . '        // loadingOverlay.innerText = "Grammar Check Questions...";
';
        $buffer .= $indent . '        let studentAnswer = document.querySelector(\'.ml-writing-answer\').textContent
';
        $buffer .= $indent . '        grammarCheckButton.onclick = async function() {
';
        $buffer .= $indent . '            showLoading()
';
        $buffer .= $indent . '            const response = await fetch(\'http://localhost:5000/grammar-analysis\', {
';
        $buffer .= $indent . '                method: \'POST\',
';
        $buffer .= $indent . '                body: JSON.stringify({
';
        $buffer .= $indent . '                    student_answer: studentAnswer,
';
        $buffer .= $indent . '                }),
';
        $buffer .= $indent . '                headers: {
';
        $buffer .= $indent . '                    \'Content-Type\': \'application/json\'
';
        $buffer .= $indent . '                },
';
        $buffer .= $indent . '                mode: \'cors\'
';
        $buffer .= $indent . '            })
';
        $buffer .= $indent . '            const data = await response.json()
';
        $buffer .= $indent . '            let grammarCheck = JSON.stringify(data)
';
        $buffer .= $indent . '            let grammarCheckInput = document.querySelector(\'.ml-factcheck\')
';
        $buffer .= $indent . '            grammarCheckInput.value = grammarCheck
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            let factCheckToServer = document.querySelector(\'.ml-is-factcheck\')
';
        $buffer .= $indent . '            factCheckToServer.value = \'true\'
';
        $buffer .= $indent . '            submitButton.click()
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Call api factcheck
';
        $buffer .= $indent . '    let studentAnswers = document.querySelectorAll(\'.ml-answer\')
';
        $buffer .= $indent . '    let summarizes = document.querySelectorAll(\'.ml-summarize\')
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    result = []
';
        $buffer .= $indent . '    async function fetchAndProcessRequests() {
';
        $buffer .= $indent . '        showLoading()
';
        $buffer .= $indent . '        for (let i = 0; i < studentAnswers.length; i++) {
';
        $buffer .= $indent . '            let studentAnswer = studentAnswers[i].textContent
';
        $buffer .= $indent . '            let summarize = summarizes[i].textContent
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            const response = await fetch(\'http://localhost:5000/check-legit-answer\', {
';
        $buffer .= $indent . '                method: \'POST\',
';
        $buffer .= $indent . '                body: JSON.stringify({
';
        $buffer .= $indent . '                    student_answer: studentAnswer,
';
        $buffer .= $indent . '                    summarize: summarize
';
        $buffer .= $indent . '                }),
';
        $buffer .= $indent . '                headers: {
';
        $buffer .= $indent . '                    \'Content-Type\': \'application/json\'
';
        $buffer .= $indent . '                },
';
        $buffer .= $indent . '                mode: \'cors\'
';
        $buffer .= $indent . '            })
';
        $buffer .= $indent . '            const data = await response.json()
';
        $buffer .= $indent . '            result.push(data)
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        let factCheck = JSON.stringify(result)
';
        $buffer .= $indent . '        let factCheckInput = document.querySelector(\'.ml-factcheck\')
';
        $buffer .= $indent . '        factCheckInput.value = factCheck
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        let factCheckToServer = document.querySelector(\'.ml-is-factcheck\')
';
        $buffer .= $indent . '        factCheckToServer.value = \'true\'
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        submitButton.click()
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    let factCheckButton = document.querySelector(\'.ml-factcheck-button\')
';
        $buffer .= $indent . '    if (factCheckButton) {
';
        $buffer .= $indent . '        factCheckButton.onclick = async function() {
';
        $buffer .= $indent . '            console.log(\'đã click\')
';
        $buffer .= $indent . '            await fetchAndProcessRequests()
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Xử lý khi focus vào textarea
';
        $buffer .= $indent . '    function removeLeadingTrailingSpaces(textarea) {
';
        $buffer .= $indent . '        textarea.value = textarea.value.trim();
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Xử lý xóa dấu cách của textarea khi trang vừa tải xong
';
        $buffer .= $indent . '    document.addEventListener("DOMContentLoaded", function() {
';
        $buffer .= $indent . '        let textarea = document.querySelector(\'.ml-form-feedback\')
';
        $buffer .= $indent . '        removeLeadingTrailingSpaces(textarea);
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
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
        $buffer .= $indent . '    // Change module Name
';
        $buffer .= $indent . '    let moduleName = document.querySelector(\'.active.active_tree_node.nav-link\')
';
        $buffer .= $indent . '    moduleName.innerText = \'AI Assignment\'
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function sectionCfe4ff722073016e272001254b3485b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p class="ml-assign-file-title">{{ question }}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p class="ml-assign-file-title">';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00f7cf03a9962eeb6565fc78af252677(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p class="ml-assign-file-title">Read the following file and answer the questions:</p>
            <a class="ml-assign-file" href="{{ file_path }}" target="_blank">
                <i class=\'ml-assign-file-icon bx bx-file\'></i>
                {{ file_name }}
            </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p class="ml-assign-file-title">Read the following file and answer the questions:</p>
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
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92ae7eb967cc8ea237f1c3bfcbfaeccd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <p class="ml-writing-answer">{{ writing_answer }}</p>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <p class="ml-writing-answer">';
                $value = $this->resolveValue($context->find('writing_answer'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fcb737435d1fe2e64f40e058f3737bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ml-factcheck-{{ factcheck }} ml-factcheck-available';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ml-factcheck-';
                $value = $this->resolveValue($context->find('factcheck'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ml-factcheck-available';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c540b36cf28da20ff2c5bfccc849c54(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ml-answer-label--{{ factcheck }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ml-answer-label--';
                $value = $this->resolveValue($context->find('factcheck'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB653c46eb6aab820b52741e8730fda1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="ml-answer-label
                        {{# factcheck }}ml-answer-label--{{ factcheck }}{{/ factcheck }}">
                        {{ factcheck }}
                    </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="ml-answer-label
';
                $buffer .= $indent . '                        ';
                $value = $context->find('factcheck');
                $buffer .= $this->section6c540b36cf28da20ff2c5bfccc849c54($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('factcheck'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b14f33c3f42bbb63ead391a4f9f09f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p class="ml-ai-question">{{ id }}. {{ question }}</p>
                <div class="ml-answer-wrapper
                            {{# factcheck }}ml-factcheck-{{ factcheck }} ml-factcheck-available{{/ factcheck }}">
                    <b>Answer: </b><span class="ml-answer">{{ answer }}</span>
                    {{# factcheck }}
                    <span class="ml-answer-label
                        {{# factcheck }}ml-answer-label--{{ factcheck }}{{/ factcheck }}">
                        {{ factcheck }}
                    </span>
                    {{/ factcheck }}
                </div>
                <p><b>Summary for teacher: </b>{{ summary }}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p class="ml-ai-question">';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '. ';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                <div class="ml-answer-wrapper
';
                $buffer .= $indent . '                            ';
                $value = $context->find('factcheck');
                $buffer .= $this->section5fcb737435d1fe2e64f40e058f3737bb($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <b>Answer: </b><span class="ml-answer">';
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $value = $context->find('factcheck');
                $buffer .= $this->sectionB653c46eb6aab820b52741e8730fda1c($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <p><b>Summary for teacher: </b>';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9165f15613a68a6e82623ffbf855402(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p style="display: none" class="ml-summarize">{{ summarize }}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p style="display: none" class="ml-summarize">';
                $value = $this->resolveValue($context->find('summarize'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d9987d03fefe58d00ddf1ad6dfe278d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{# information }}
                <p class="ml-ai-question">{{ id }}. {{ question }}</p>
                <div class="ml-answer-wrapper
                            {{# factcheck }}ml-factcheck-{{ factcheck }} ml-factcheck-available{{/ factcheck }}">
                    <b>Answer: </b><span class="ml-answer">{{ answer }}</span>
                    {{# factcheck }}
                    <span class="ml-answer-label
                        {{# factcheck }}ml-answer-label--{{ factcheck }}{{/ factcheck }}">
                        {{ factcheck }}
                    </span>
                    {{/ factcheck }}
                </div>
                <p><b>Summary for teacher: </b>{{ summary }}</p>
            {{/information}}

            {{# summarizes }}
                <p style="display: none" class="ml-summarize">{{ summarize }}</p>
            {{/ summarizes }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('information');
                $buffer .= $this->section0b14f33c3f42bbb63ead391a4f9f09f2($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('summarizes');
                $buffer .= $this->sectionD9165f15613a68a6e82623ffbf855402($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6ec8d6e14c9fe77e4c574d916af6507(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p class="ml-ai-question">{{ id }}. {{ question }}</p>
                <div class="ml-answer-wrapper">
                    <b>Answer: </b><span class="ml-answer">{{ answer }}</span>
                <p><b>Corrected Answer: </b>{{ corrected_answer }}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p class="ml-ai-question">';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '. ';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                <div class="ml-answer-wrapper">
';
                $buffer .= $indent . '                    <b>Answer: </b><span class="ml-answer">';
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                <p><b>Corrected Answer: </b>';
                $value = $this->resolveValue($context->find('corrected_answer'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD52ad241437c134df67edc2169380807(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{# vietnamese_questions }}
                <p class="ml-ai-question">{{ id }}. {{ question }}</p>
                <div class="ml-answer-wrapper">
                    <b>Answer: </b><span class="ml-answer">{{ answer }}</span>
                <p><b>Corrected Answer: </b>{{ corrected_answer }}</p>
            {{/vietnamese_questions}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('vietnamese_questions');
                $buffer .= $this->sectionF6ec8d6e14c9fe77e4c574d916af6507($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section892966eeaffc1e763eea97db0700c877(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul class="ml-english-grammar-check">
            <li>{{ tense }} (Wrong sentence: {{ frequency }})</li>
        </ul>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <ul class="ml-english-grammar-check">
';
                $buffer .= $indent . '            <li>';
                $value = $this->resolveValue($context->find('tense'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' (Wrong sentence: ';
                $value = $this->resolveValue($context->find('frequency'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ')</li>
';
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04d6267b8cd3bebc853481f438791356(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="ml-content ml-grading ml-content-assign ml-english">
        <h2 class="ml-assign-description-title ml-english-title">Tenses you should review</h2>
        {{# tenses }}
        <ul class="ml-english-grammar-check">
            <li>{{ tense }} (Wrong sentence: {{ frequency }})</li>
        </ul>
        {{/tenses}}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="ml-content ml-grading ml-content-assign ml-english">
';
                $buffer .= $indent . '        <h2 class="ml-assign-description-title ml-english-title">Tenses you should review</h2>
';
                $value = $context->find('tenses');
                $buffer .= $this->section892966eeaffc1e763eea97db0700c877($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30a6b24747a3d13c867f8ab8ef784b43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="ml-content ml-grading ml-content-assign ml-english">
        <h2 class="ml-assign-description-title ml-english-title">CEFR Level</h2>
        <div class="ml-english-CEFR">
            <span class="ml-english-CEFR-title">CEFR: </span>
            <span class="ml-english-CEFR-grade">{{ cefr }}</span>
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="ml-content ml-grading ml-content-assign ml-english">
';
                $buffer .= $indent . '        <h2 class="ml-assign-description-title ml-english-title">CEFR Level</h2>
';
                $buffer .= $indent . '        <div class="ml-english-CEFR">
';
                $buffer .= $indent . '            <span class="ml-english-CEFR-title">CEFR: </span>
';
                $buffer .= $indent . '            <span class="ml-english-CEFR-grade">';
                $value = $this->resolveValue($context->find('cefr'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5c96e056d312e5c2bf97b4c23c7a3b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="ml-content ml-grading ml-content-assign ml-english">
        <h2 class="ml-assign-description-title ml-english-title">Grammar Check</h2>

            <div class="ml-english-grammar-check">
                {{{ correct_answer }}}
            </div>

    </div>
    {{# has_tenses }}
    <div class="ml-content ml-grading ml-content-assign ml-english">
        <h2 class="ml-assign-description-title ml-english-title">Tenses you should review</h2>
        {{# tenses }}
        <ul class="ml-english-grammar-check">
            <li>{{ tense }} (Wrong sentence: {{ frequency }})</li>
        </ul>
        {{/tenses}}
    </div>
    {{/has_tenses}}

    <!-- Có điểm CEFR mới hiện thị CEFR  -->
    {{# cefr }}
    <div class="ml-content ml-grading ml-content-assign ml-english">
        <h2 class="ml-assign-description-title ml-english-title">CEFR Level</h2>
        <div class="ml-english-CEFR">
            <span class="ml-english-CEFR-title">CEFR: </span>
            <span class="ml-english-CEFR-grade">{{ cefr }}</span>
        </div>
    </div>
    {{/ cefr }}


    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="ml-content ml-grading ml-content-assign ml-english">
';
                $buffer .= $indent . '        <h2 class="ml-assign-description-title ml-english-title">Grammar Check</h2>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="ml-english-grammar-check">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('correct_answer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $value = $context->find('has_tenses');
                $buffer .= $this->section04d6267b8cd3bebc853481f438791356($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <!-- Có điểm CEFR mới hiện thị CEFR  -->
';
                $value = $context->find('cefr');
                $buffer .= $this->section30a6b24747a3d13c867f8ab8ef784b43($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1675763ac27cadea0063e3271b98a092(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<!-- Có correct answer mới hiển thị grammar check   -->
    {{#correct_answer }}
    <div class="ml-content ml-grading ml-content-assign ml-english">
        <h2 class="ml-assign-description-title ml-english-title">Grammar Check</h2>

            <div class="ml-english-grammar-check">
                {{{ correct_answer }}}
            </div>

    </div>
    {{# has_tenses }}
    <div class="ml-content ml-grading ml-content-assign ml-english">
        <h2 class="ml-assign-description-title ml-english-title">Tenses you should review</h2>
        {{# tenses }}
        <ul class="ml-english-grammar-check">
            <li>{{ tense }} (Wrong sentence: {{ frequency }})</li>
        </ul>
        {{/tenses}}
    </div>
    {{/has_tenses}}

    <!-- Có điểm CEFR mới hiện thị CEFR  -->
    {{# cefr }}
    <div class="ml-content ml-grading ml-content-assign ml-english">
        <h2 class="ml-assign-description-title ml-english-title">CEFR Level</h2>
        <div class="ml-english-CEFR">
            <span class="ml-english-CEFR-title">CEFR: </span>
            <span class="ml-english-CEFR-grade">{{ cefr }}</span>
        </div>
    </div>
    {{/ cefr }}


    {{/correct_answer}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '<!-- Có correct answer mới hiển thị grammar check   -->
';
                $value = $context->find('correct_answer');
                $buffer .= $this->sectionE5c96e056d312e5c2bf97b4c23c7a3b4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91b6b58a9de9d2f28ee9379829e3ccf5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' value="{{ old_grade }}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' value="';
                $value = $this->resolveValue($context->find('old_grade'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF98ed8771616c1b1191d252129a55c8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ old_feedback }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('old_feedback'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0dd1e2023f0ed77160688b037911a4f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' value="Save changes" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' value="Save changes" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5701c2195267c316fe2faefddec7db8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ml-grammar-check';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ml-grammar-check';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cd804fb8ee913f64d60fb8d6e5f2204(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ml-factcheck-button';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ml-factcheck-button';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
