<?php

class __Mustache_29b29e13e4b54827befaacd719831daa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '    /* Loading animation  */
';
        $buffer .= $indent . '    .loading-overlay {
';
        $buffer .= $indent . '
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
        $buffer .= $indent . '    .ml-content.ml-content-control {
';
        $buffer .= $indent . '        padding: 0px;
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
        $buffer .= $indent . '    /* Upload form */
';
        $buffer .= $indent . '    .ml-upload-form {
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '        border: 1px solid #ddd;
';
        $buffer .= $indent . '        padding: 20px;
';
        $buffer .= $indent . '        max-width: 400px;
';
        $buffer .= $indent . '        margin: 0 auto;
';
        $buffer .= $indent . '        border-radius: 5px;
';
        $buffer .= $indent . '        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-call-api {
';
        $buffer .= $indent . '        display: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-upload-file {
';
        $buffer .= $indent . '        display: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-manual {
';
        $buffer .= $indent . '        display: none;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-manual-form-input {
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
        $buffer .= $indent . '    .ml-manual-form-submit {
';
        $buffer .= $indent . '        padding: 8px 30px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    /* Create Vietnamese questions */
';
        $buffer .= $indent . '    .ml-button.ml-button--vietnamese {
';
        $buffer .= $indent . '        background-color: #FFC47E;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content--vietnamese {
';
        $buffer .= $indent . '        display: none;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-number-form-group {
';
        $buffer .= $indent . '        margin-top: 30px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-vietnamese-question-answer {
';
        $buffer .= $indent . '        margin-bottom: 30px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-vietnamese-input-group {
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '        flex-direction: column;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-vietnamese-input {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        height: 100px;
';
        $buffer .= $indent . '        padding: 20px;
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        border: 1px solid #ccc;
';
        $buffer .= $indent . '        border-radius: 5px;
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="ml-wrapper">
';
        $buffer .= $indent . '    <h1>
';
        $buffer .= $indent . '        ';
        $value = $context->find('is_edit');
        $buffer .= $this->sectionB48df9d4393c6be79b36969ca5acc753($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('is_edit');
        if (empty($value)) {
            
            $buffer .= 'Create assignment';
        }
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </h1>
';
        $buffer .= $indent . '
';
        $value = $context->find('has_num');
        if (empty($value)) {
            
            $buffer .= $indent . '    <!--  Control assignment for admin  -->
';
            $buffer .= $indent . '    <div class="ml-content ml-content-control">
';
            $buffer .= $indent . '        <div class="ml-button-group">
';
            $buffer .= $indent . '            <button class="ml-button ml-question-generator">Question Generation with AI</button>
';
            $buffer .= $indent . '            <button class="ml-button ml-button--edit ml-question-manually">Add Assignment Manually</button>
';
            $buffer .= $indent . '            <button class="ml-button ml-button--vietnamese">Add Vietnamese Assignment</button>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '    <div class="ml-content ml-content-upload-file" data-file-path="';
            $value = $this->resolveValue($context->find('uploaded_file_path'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '">
';
            $buffer .= $indent . '        <form class="ml-upload-form" method="post" enctype="multipart/form-data">
';
            $buffer .= $indent . '            <label class="ml-upload-label" for="file">
';
            $buffer .= $indent . '                ';
            $value = $context->find('is_edit');
            $buffer .= $this->section6b7c2ea55d742c3b46b80d04c97b435c($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $context->find('is_edit');
            if (empty($value)) {
                
                $buffer .= 'Choose file';
            }
            $buffer .= '
';
            $buffer .= $indent . '            </label>
';
            $buffer .= $indent . '            <input class="ml-upload-choose-file" type="file" name="file" id="file"><br>
';
            $buffer .= $indent . '            <input class="ml-upload-submit" type="submit" name="submit" value="Submit">
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <input style="display: none" type="text"
';
            $buffer .= $indent . '                   name="question_and_summarize" class="question_and_summarize">
';
            $buffer .= $indent . '            <input style="display: none"
';
            $buffer .= $indent . '                   type="text" name="file_name" class="file_path_database">
';
            $buffer .= $indent . '        </form>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '    <div class="ml-content ml-content-manual">
';
            $buffer .= $indent . '        <form class="ml-manual-form"  method="post">
';
            $buffer .= $indent . '            <h3 class="ml-manual-form-title">
';
            $buffer .= $indent . '                ';
            $value = $context->find('is_edit');
            $buffer .= $this->sectionE01f4f7ba35a4beb80ccdd2ce8ea5c7f($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $context->find('is_edit');
            if (empty($value)) {
                
                $buffer .= 'Create manual Assignment';
            }
            $buffer .= '
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '            </h3>
';
            $buffer .= $indent . '            <textarea class="ml-manual-form-input" onfocusin="removeLeadingTrailingSpaces(this);"
';
            $buffer .= $indent . '                      name="question" id="" cols="30" rows="10">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('question'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '
';
            $buffer .= $indent . '            </textarea>
';
            $buffer .= $indent . '            <input class="ml-button ml-button--edit ml-manual-form-submit" type="submit" value="Save">
';
            $buffer .= $indent . '        </form>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '    <div class="ml-content ml-content-number">
';
            $buffer .= $indent . '        <form class="ml-number-of-question-form"  method="post">
';
            $buffer .= $indent . '            <h3 class="ml-manual-form-title">
';
            $buffer .= $indent . '                ';
            $value = $context->find('is_edit');
            $buffer .= $this->section02cfee6ffe126a1d4541a9a1bdf1a4d6($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                ';
            $value = $context->find('is_edit');
            if (empty($value)) {
                
                $buffer .= 'Create Vietnamese Assignment';
            }
            $buffer .= '
';
            $buffer .= $indent . '            </h3>
';
            $buffer .= $indent . '            <div class="ml-number-form-group">
';
            $buffer .= $indent . '                <label for="ml-num-input" >Enter number of question</label>
';
            $buffer .= $indent . '                <input name="number-of-questions" class="ml-num-input" id="ml-num-input" value="3"/>
';
            $buffer .= $indent . '                <input class="ml-button ml-button--edit ml-manual-form-submit" type="submit" value="Next">
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            
';
            $buffer .= $indent . '        </form>
';
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('has_num');
        $buffer .= $this->sectionE769faf7f678a3109f4efb99c1155365($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!--Thêm thư viện jquery để call api generate question-->
';
        $buffer .= $indent . '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        $buffer .= $indent . '    // Xử lý xóa dấu cách của textarea khi trang vừa tải xong
';
        $buffer .= $indent . '    let textarea = document.querySelector(\'.ml-manual-form-input\')
';
        $buffer .= $indent . '    removeLeadingTrailingSpaces(textarea);
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Xử lý hiện form phù hợp
';
        $buffer .= $indent . '    let uploadButton = document.querySelector(\'.ml-question-generator\')
';
        $buffer .= $indent . '    let uploadWrapper = document.querySelector(\'.ml-content-upload-file\')
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    let manualButton = document.querySelector(\'.ml-question-manually\')
';
        $buffer .= $indent . '    let manualWrapper = document.querySelector(\'.ml-content-manual\')
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    let vietnameseButton = document.querySelector(\'.ml-button--vietnamese\')
';
        $buffer .= $indent . '    let numberWrapper = document.querySelector(\'.ml-content-number\')
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    uploadButton.onclick = function() {
';
        $buffer .= $indent . '        uploadWrapper.style.display = \'block\'
';
        $buffer .= $indent . '        manualWrapper.style.display = \'none\'
';
        $buffer .= $indent . '        numberWrapper.style.display = \'none\'
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    manualButton.onclick = function() {
';
        $buffer .= $indent . '        manualWrapper.style.display = \'block\'
';
        $buffer .= $indent . '        uploadWrapper.style.display = \'none\'
';
        $buffer .= $indent . '        numberWrapper.style.display = \'none\'
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    vietnameseButton.onclick = function() {
';
        $buffer .= $indent . '        numberWrapper.style.display = \'block\'
';
        $buffer .= $indent . '        manualWrapper.style.display = \'none\'
';
        $buffer .= $indent . '        uploadWrapper.style.display = \'none\'
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Hiệu ứng loading
';
        $buffer .= $indent . '    const loadingOverlay = document.createElement("div");
';
        $buffer .= $indent . '    loadingOverlay.className = "loading-overlay";
';
        $buffer .= $indent . '    loadingOverlay.innerText = "Generating Questions...";
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    const loadingProgress = document.createElement("div");
';
        $buffer .= $indent . '    loadingProgress.className = "loading-spinner";
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    loadingOverlay.appendChild(loadingProgress);
';
        $buffer .= $indent . '
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Thêm hiệu ứng loading + call api + redirect lại trang assign ban đầu
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    let submitQuestionGenerator = document.querySelector(\'.ml-upload-submit\')
';
        $buffer .= $indent . '    let divWithFilePath = document.querySelector(\'.ml-content.ml-content-upload-file\')
';
        $buffer .= $indent . '    // Đây là đường dẫn tuyệt đối
';
        $buffer .= $indent . '    let filePath = divWithFilePath.getAttribute(\'data-file-path\')
';
        $buffer .= $indent . '    if (filePath) {
';
        $buffer .= $indent . '        showLoading()
';
        $buffer .= $indent . '        // Call api
';
        $buffer .= $indent . '        fetch(\'http://localhost:5000/questions-generate\', {
';
        $buffer .= $indent . '            method: \'POST\',
';
        $buffer .= $indent . '            body: JSON.stringify({
';
        $buffer .= $indent . '                uploaded_file_path: filePath,
';
        $buffer .= $indent . '            }),
';
        $buffer .= $indent . '            headers: {
';
        $buffer .= $indent . '                \'Content-Type\': \'application/json\'
';
        $buffer .= $indent . '            },
';
        $buffer .= $indent . '            mode: \'cors\'
';
        $buffer .= $indent . '        })
';
        $buffer .= $indent . '        .then(response => response.json())
';
        $buffer .= $indent . '        .then(data => {
';
        $buffer .= $indent . '            console.log(data)
';
        $buffer .= $indent . '            let extra_input = document.querySelector(\'.question_and_summarize\')
';
        $buffer .= $indent . '            let uploadForm = document.querySelector(\'.ml-upload-form\')
';
        $buffer .= $indent . '            let submitButton = document.querySelector(\'.ml-upload-submit\')
';
        $buffer .= $indent . '            let filePathInput = document.querySelector(\'.file_path_database\')
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            let parts = filePath.split("/")
';
        $buffer .= $indent . '            let fileName = parts[parts.length - 1];
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            extra_input.value = JSON.stringify(data)
';
        $buffer .= $indent . '            filePathInput.value = fileName
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            submitButton.click()
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        })
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '
';
        $value = $context->find('vietnamese_assign');
        $buffer .= $this->section5702df9b3720314dfdcd4750e278bb80($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('manual_assign');
        $buffer .= $this->section9b6b7f261d3fc0c1202c0c30bbdd436d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('ai_assign');
        $buffer .= $this->section74f871b85b5a23bc8bb0a697b51fa26c($context, $indent, $value);

        return $buffer;
    }

    private function sectionB48df9d4393c6be79b36969ca5acc753(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'Edit assignment';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'Edit assignment';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b7c2ea55d742c3b46b80d04c97b435c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'Choose another file';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'Choose another file';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE01f4f7ba35a4beb80ccdd2ce8ea5c7f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'Edit manual Assignment';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'Edit manual Assignment';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02cfee6ffe126a1d4541a9a1bdf1a4d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'Edit Vietnamese Assignment';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'Edit Vietnamese Assignment';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8461f04fdb10ee046f7d1c1df6da0b74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="ml-vietnamese-question-answer">
                <div class="ml-vietnamese-input-group">
                    <label for="question{{ id }}" class="ml-vietnamese-label">Question {{ id }}:</label>
                    <textarea onfocusin="removeLeadingTrailingSpaces(this);"
                            name="question{{ id }}" class="ml-vietnamese-input" type="text" id="question{{ id }}">
                    </textarea>
                </div>
                <div class="ml-vietnamese-input-group">
                    <label for="answer{{ id }}" class="ml-vietnamese-label">Corrected Answer:</label>
                    <textarea onfocusin="removeLeadingTrailingSpaces(this);"
                            name="answer{{ id }}" class="ml-vietnamese-input" type="text" id="answer{{ id }}">
                    </textarea>
                </div>
            </div>
             
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="ml-vietnamese-question-answer">
';
                $buffer .= $indent . '                <div class="ml-vietnamese-input-group">
';
                $buffer .= $indent . '                    <label for="question';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="ml-vietnamese-label">Question ';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ':</label>
';
                $buffer .= $indent . '                    <textarea onfocusin="removeLeadingTrailingSpaces(this);"
';
                $buffer .= $indent . '                            name="question';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="ml-vietnamese-input" type="text" id="question';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    </textarea>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="ml-vietnamese-input-group">
';
                $buffer .= $indent . '                    <label for="answer';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="ml-vietnamese-label">Corrected Answer:</label>
';
                $buffer .= $indent . '                    <textarea onfocusin="removeLeadingTrailingSpaces(this);"
';
                $buffer .= $indent . '                            name="answer';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="ml-vietnamese-input" type="text" id="answer';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    </textarea>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '             
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1eae32c17c35e5858dcbf7d6f2f2ca02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <button class="ml-button ml-button--edit">Edit assignment</button>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <button class="ml-button ml-button--edit">Edit assignment</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE769faf7f678a3109f4efb99c1155365(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="ml-content ml-content-vietnamese">
        <form class="ml-number-of-question-form"  method="post">
            <h3 class="ml-manual-form-title">
                Create Vietnamese Assignment
            </h3>
            {{# number_of_question }}
            <div class="ml-vietnamese-question-answer">
                <div class="ml-vietnamese-input-group">
                    <label for="question{{ id }}" class="ml-vietnamese-label">Question {{ id }}:</label>
                    <textarea onfocusin="removeLeadingTrailingSpaces(this);"
                            name="question{{ id }}" class="ml-vietnamese-input" type="text" id="question{{ id }}">
                    </textarea>
                </div>
                <div class="ml-vietnamese-input-group">
                    <label for="answer{{ id }}" class="ml-vietnamese-label">Corrected Answer:</label>
                    <textarea onfocusin="removeLeadingTrailingSpaces(this);"
                            name="answer{{ id }}" class="ml-vietnamese-input" type="text" id="answer{{ id }}">
                    </textarea>
                </div>
            </div>
             
            {{/number_of_question}}
            <input name="is-vietnamese-assign" style="display: none;" value="1"/>
            <div class="ml-button-group">
                {{# is_edit }}
                    <button class="ml-button ml-button--edit">Edit assignment</button>
                {{/is_edit}}
                    
                {{^ is_edit }}
                    <button class="ml-button ml-button--edit">Create assignment</button>
                {{/is_edit}}

                
                <a href="http://localhost/mod/demo/view.php?id={{ course_id }}"
                class="ml-button">Cancel</a>
            </div>
        </div>
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
                
                $buffer .= $indent . '    <div class="ml-content ml-content-vietnamese">
';
                $buffer .= $indent . '        <form class="ml-number-of-question-form"  method="post">
';
                $buffer .= $indent . '            <h3 class="ml-manual-form-title">
';
                $buffer .= $indent . '                Create Vietnamese Assignment
';
                $buffer .= $indent . '            </h3>
';
                $value = $context->find('number_of_question');
                $buffer .= $this->section8461f04fdb10ee046f7d1c1df6da0b74($context, $indent, $value);
                $buffer .= $indent . '            <input name="is-vietnamese-assign" style="display: none;" value="1"/>
';
                $buffer .= $indent . '            <div class="ml-button-group">
';
                $value = $context->find('is_edit');
                $buffer .= $this->section1eae32c17c35e5858dcbf7d6f2f2ca02($context, $indent, $value);
                $buffer .= $indent . '                    
';
                $value = $context->find('is_edit');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <button class="ml-button ml-button--edit">Create assignment</button>
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '                
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
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </form>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5702df9b3720314dfdcd4750e278bb80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <script>
        let buttonAppearFormType2 = document.querySelector(\'.ml-button--vietnamese\')
        buttonAppearFormType2.click()
    </script>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <script>
';
                $buffer .= $indent . '        let buttonAppearFormType2 = document.querySelector(\'.ml-button--vietnamese\')
';
                $buffer .= $indent . '        buttonAppearFormType2.click()
';
                $buffer .= $indent . '    </script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b6b7f261d3fc0c1202c0c30bbdd436d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <script>
        let buttonAppearFormType1 = document.querySelector(\'.ml-question-manually\')
        buttonAppearFormType1.click()
    </script>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <script>
';
                $buffer .= $indent . '        let buttonAppearFormType1 = document.querySelector(\'.ml-question-manually\')
';
                $buffer .= $indent . '        buttonAppearFormType1.click()
';
                $buffer .= $indent . '    </script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74f871b85b5a23bc8bb0a697b51fa26c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <script>
        let buttonAppearFormType0 = document.querySelector(\'.ml-question-generator\')
        buttonAppearFormType0.click()
    </script>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <script>
';
                $buffer .= $indent . '        let buttonAppearFormType0 = document.querySelector(\'.ml-question-generator\')
';
                $buffer .= $indent . '        buttonAppearFormType0.click()
';
                $buffer .= $indent . '    </script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
