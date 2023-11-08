<?php

class __Mustache_b9814bca2664f4fd4b0dbf0dcb4c011d extends Mustache_Template
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
        $buffer .= $indent . '    .ml-content {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        background-color: #F5F7F8;
';
        $buffer .= $indent . '        padding: 30px 100px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-search-button {
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '        padding: 30px 100px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-search {
';
        $buffer .= $indent . '        background-color: #ddf7e8;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-enroll {
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-courses-block {
';
        $buffer .= $indent . '        display: grid;
';
        $buffer .= $indent . '        grid-template-columns: repeat(5, 1fr);
';
        $buffer .= $indent . '        grid-gap: 30px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-courses-title {
';
        $buffer .= $indent . '        margin-bottom: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course {
';
        $buffer .= $indent . '        height: 400px;
';
        $buffer .= $indent . '        border-radius: 20px;
';
        $buffer .= $indent . '        padding: 10px;
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '        flex-direction: column;
';
        $buffer .= $indent . '        border: 2px solid #E5E7E8;
';
        $buffer .= $indent . '        transition: transform linear 0.2s;
';
        $buffer .= $indent . '        box-shadow: 0 1px 8px -3px rgb(0 0 0 / 16%),0 0 24px -16px rgb(0 0 0 / 16%);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course:hover {
';
        $buffer .= $indent . '        transform: scale(1.1);
';
        $buffer .= $indent . '        cursor: pointer;
';
        $buffer .= $indent . '        box-shadow: 0 0 40px -8px rgb(0 0 0 / 16%),0 0 24px -16px rgb(0 0 0 / 16%);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course-img {
';
        $buffer .= $indent . '        height: 200px;
';
        $buffer .= $indent . '        background-position: center;
';
        $buffer .= $indent . '        background-size: cover;
';
        $buffer .= $indent . '        background-repeat: no-repeat;
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course-title {
';
        $buffer .= $indent . '        margin-top: 10px;
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '        margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course-description {
';
        $buffer .= $indent . '        font-size: 14px;
';
        $buffer .= $indent . '        color: #555;
';
        $buffer .= $indent . '        font-weight: 400;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course-level {
';
        $buffer .= $indent . '        margin-top: auto;
';
        $buffer .= $indent . '        font-weight: 400;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-message {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '        color: #888;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-search {
';
        $buffer .= $indent . '        margin-top: 10px;
';
        $buffer .= $indent . '        margin-bottom: 30px;
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-search-keyword {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '        color: #888;
';
        $buffer .= $indent . '        margin-bottom: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-search-input {
';
        $buffer .= $indent . '        width: 60%;
';
        $buffer .= $indent . '        margin: 0 auto;
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-search-input-icon {
';
        $buffer .= $indent . '        background-color: #0F0F0F;
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '        position: absolute;
';
        $buffer .= $indent . '        font-size: 25px;
';
        $buffer .= $indent . '        top: 50%;
';
        $buffer .= $indent . '        right: 4px;
';
        $buffer .= $indent . '        transform: translateY(-50%);
';
        $buffer .= $indent . '        padding: 6px 20px;
';
        $buffer .= $indent . '        border-radius: 20px;
';
        $buffer .= $indent . '        cursor: pointer;
';
        $buffer .= $indent . '        transition: background-color linear 0.2s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-search-input-icon:hover {
';
        $buffer .= $indent . '        background-color: #525252;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-search-input-text {
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        border: 2px solid #e5e7e8;
';
        $buffer .= $indent . '        outline: none;
';
        $buffer .= $indent . '        padding: 10px 30px;
';
        $buffer .= $indent . '        border-radius: 20px;
';
        $buffer .= $indent . '        transition: border linear 0.2s;
';
        $buffer .= $indent . '        box-shadow: 0 1px 8px -3px rgb(0 0 0 / 16%),0 0 24px -16px rgb(0 0 0 / 16%);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-search-input-text:focus {
';
        $buffer .= $indent . '        border: 2px solid #333;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-search-input-submit {
';
        $buffer .= $indent . '        border: none;
';
        $buffer .= $indent . '        outline: none;
';
        $buffer .= $indent . '        padding: 10px 20px;
';
        $buffer .= $indent . '        border-radius: 5px;
';
        $buffer .= $indent . '        transition: border linear 0.3s;
';
        $buffer .= $indent . '        background-color: #6499E9;
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '        display: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /* Custom*/
';
        $buffer .= $indent . '    div.d-flex.align-items-center h2.mb-3.mt-3 {
';
        $buffer .= $indent . '        margin-left: 100px !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    div.page-header-headings h1.h2 {
';
        $buffer .= $indent . '        margin-left: 100px !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media (max-width: 1200px) {
';
        $buffer .= $indent . '        .ml-content {
';
        $buffer .= $indent . '            padding: 30px 30px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .ml-courses-block {
';
        $buffer .= $indent . '            grid-gap: 20px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media (max-width: 1100px) {
';
        $buffer .= $indent . '        .ml-content {
';
        $buffer .= $indent . '            padding: 30px 30px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        div.d-flex.align-items-center h2.mb-3.mt-3 {
';
        $buffer .= $indent . '            margin-left: 30px !important;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        div.page-header-headings h1.h2 {
';
        $buffer .= $indent . '            margin-left: 30px !important;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .ml-courses-block {
';
        $buffer .= $indent . '            display: grid;
';
        $buffer .= $indent . '            grid-template-columns: repeat(4, 1fr);
';
        $buffer .= $indent . '            grid-gap: 20px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media (max-width: 850px) {
';
        $buffer .= $indent . '        .ml-content {
';
        $buffer .= $indent . '            padding: 30px 10px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .ml-search-input {
';
        $buffer .= $indent . '            width: 100%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        div.d-flex.align-items-center h2.mb-3.mt-3 {
';
        $buffer .= $indent . '            margin-left: 10px !important;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        div.page-header-headings h1.h2 {
';
        $buffer .= $indent . '            margin-left: 10px !important;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        .ml-courses-block {
';
        $buffer .= $indent . '            display: grid;
';
        $buffer .= $indent . '            grid-template-columns: repeat(3, 1fr);
';
        $buffer .= $indent . '            grid-gap: 20px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media (max-width: 650px) {
';
        $buffer .= $indent . '        .ml-courses-block {
';
        $buffer .= $indent . '            display: grid;
';
        $buffer .= $indent . '            grid-template-columns: repeat(2, 1fr);
';
        $buffer .= $indent . '            grid-gap: 20px;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    @media (max-width: 550px) {
';
        $buffer .= $indent . '    .ml-courses-block {
';
        $buffer .= $indent . '        display: grid;
';
        $buffer .= $indent . '        grid-template-columns: repeat(1, 1fr);
';
        $buffer .= $indent . '        grid-gap: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    div#page.drawers.drag-container {
';
        $buffer .= $indent . '        padding-left: 0;
';
        $buffer .= $indent . '        padding-right: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    div#topofscroll.main-inner {
';
        $buffer .= $indent . '        max-width: unset !important;
';
        $buffer .= $indent . '        padding: 0 !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    div#topofscroll.main-inner div[role="main"] {
';
        $buffer .= $indent . '        padding: 0 !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-check-rs {
';
        $buffer .= $indent . '        text-decoration: none;
';
        $buffer .= $indent . '        border: none;
';
        $buffer .= $indent . '        outline: none;
';
        $buffer .= $indent . '        padding: 10px 20px;
';
        $buffer .= $indent . '        border-radius: 5px;
';
        $buffer .= $indent . '        transition: border linear 0.3s;
';
        $buffer .= $indent . '        background-color: #6499E9;
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-check-rs:hover {
';
        $buffer .= $indent . '        text-decoration: none;
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '        opacity: 0.8;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $value = $context->find('is_admin');
        $buffer .= $this->section916ebfd5063b7c8e921937b177e50b50($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="ml-content ml-content-search-button">
';
        $buffer .= $indent . '    <form class="ml-search" method="POST">
';
        $buffer .= $indent . '        <div class="ml-search-input">
';
        $buffer .= $indent . '            <i class=\'ml-search-input-icon bx bx-search\'></i>
';
        $buffer .= $indent . '            <input name="course-name" class="ml-search-input-text" type="text" placeholder="What do you want to learn?">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Render search courses -->
';
        $value = $context->find('is_searched');
        $buffer .= $this->sectionA7252c939eff7c528386cbe281c4c895($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!--Render enrolled courses-->
';
        $value = $context->find('isloggedin');
        $buffer .= $this->sectionFb0a137af0f1b79aee5ca1b75369b4ba($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Render some course when not login -->
';
        $buffer .= $indent . '<div class="ml-content ';
        $value = $context->find('isloggedin');
        $buffer .= $this->sectionE67f30dc31441b5b383beb776db8a419($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <h1 class="ml-courses-title">
';
        $value = $context->find('isloggedin');
        $buffer .= $this->section9d401f924d35355f7d1b2fe8cb625846($context, $indent, $value);
        $value = $context->find('isloggedin');
        if (empty($value)) {
            
            $buffer .= $indent . '            Some Courses
';
        }
        $buffer .= $indent . '    </h1>
';
        $buffer .= $indent . '    <div class="ml-courses-block">
';
        $value = $context->find('courses');
        $buffer .= $this->section504cb79efee99bc60fc19e2fe92ff499($context, $indent, $value);
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
        $buffer .= $indent . '    // Handle event redirect to detail course
';
        $buffer .= $indent . '    let courses = document.querySelectorAll(\'.ml-course\')
';
        $buffer .= $indent . '    console.log(courses)
';
        $buffer .= $indent . '    courses.forEach(course => {
';
        $buffer .= $indent . '        course.addEventListener("click", function() {
';
        $buffer .= $indent . '            let courseId = course.getAttribute("data-course-id")
';
        $buffer .= $indent . '            let courseDetailLink = `http://localhost/local/message/coursedetails.php?id=${courseId}`
';
        $buffer .= $indent . '            if (course.classList.contains(\'ml-enrolled-course\')) {
';
        $buffer .= $indent . '                courseDetailLink = `http://localhost/course/view.php?id=${courseId}`
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '            window.location.href = courseDetailLink
';
        $buffer .= $indent . '        })
';
        $buffer .= $indent . '    })
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    // Handle click search button
';
        $buffer .= $indent . '    let searchForm = document.querySelector(\'.ml-search\')
';
        $buffer .= $indent . '    let searchButton = document.querySelector(\'.ml-search-input-icon\')
';
        $buffer .= $indent . '    searchButton.onclick = function() {
';
        $buffer .= $indent . '        searchForm.submit()
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function section916ebfd5063b7c8e921937b177e50b50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="ml-content ml-content-manage">
    <p>Click the following button to check Recommendation System</p>
    <a href="http://localhost/local/message/viewRS.php" class="ml-check-rs">Check </a>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="ml-content ml-content-manage">
';
                $buffer .= $indent . '    <p>Click the following button to check Recommendation System</p>
';
                $buffer .= $indent . '    <a href="http://localhost/local/message/viewRS.php" class="ml-check-rs">Check </a>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBaddf0738802ce2f9fef76a0930ed105(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h3 class="ml-search-keyword"> {{num_founded_courses}} results for "{{ search_keyword }}"</h3>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h3 class="ml-search-keyword"> ';
                $value = $this->resolveValue($context->find('num_founded_courses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' results for "';
                $value = $this->resolveValue($context->find('search_keyword'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"</h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7f7311bb2b15caf7ce5afaed49aeeed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h2 class="ml-message">{{ search_message }}</h2>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <h2 class="ml-message">';
                $value = $this->resolveValue($context->find('search_message'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section504cb79efee99bc60fc19e2fe92ff499(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="ml-course" data-course-id="{{ id }}">
                <div style="background-image: url(https://picsum.photos/id/{{ id_for_image }}/250);"
                     class="ml-course-img">
                </div>
                <h3 class="ml-course-title">{{fullname}}</h3>
                <p class="ml-course-description"><b>Fields:</b> {{ category_template }}</p>
                <p class="ml-course-level"> {{ level }}</p>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="ml-course" data-course-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <div style="background-image: url(https://picsum.photos/id/';
                $value = $this->resolveValue($context->find('id_for_image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/250);"
';
                $buffer .= $indent . '                     class="ml-course-img">
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <h3 class="ml-course-title">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $buffer .= $indent . '                <p class="ml-course-description"><b>Fields:</b> ';
                $value = $this->resolveValue($context->find('category_template'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                <p class="ml-course-level"> ';
                $value = $this->resolveValue($context->find('level'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7252c939eff7c528386cbe281c4c895(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="ml-content ml-content-search">
    <h1 class="ml-courses-title">Searched Courses</h1>
    {{#num_founded_courses }}
        <h3 class="ml-search-keyword"> {{num_founded_courses}} results for "{{ search_keyword }}"</h3>
    {{/num_founded_courses}}
    {{^num_founded_courses }}
        <h3 class="ml-search-keyword">Search for "{{ search_keyword }}"</h3>
    {{/num_founded_courses}}
    {{# search_message }}
    <h2 class="ml-message">{{ search_message }}</h2>
    {{/ search_message }}

    {{^ search_message }}
    <div class="ml-courses-block">
        {{#search_courses}}
            <div class="ml-course" data-course-id="{{ id }}">
                <div style="background-image: url(https://picsum.photos/id/{{ id_for_image }}/250);"
                     class="ml-course-img">
                </div>
                <h3 class="ml-course-title">{{fullname}}</h3>
                <p class="ml-course-description"><b>Fields:</b> {{ category_template }}</p>
                <p class="ml-course-level"> {{ level }}</p>
            </div>
        {{/search_courses}}
</div>

{{/ search_message }}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="ml-content ml-content-search">
';
                $buffer .= $indent . '    <h1 class="ml-courses-title">Searched Courses</h1>
';
                $value = $context->find('num_founded_courses');
                $buffer .= $this->sectionBaddf0738802ce2f9fef76a0930ed105($context, $indent, $value);
                $value = $context->find('num_founded_courses');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <h3 class="ml-search-keyword">Search for "';
                    $value = $this->resolveValue($context->find('search_keyword'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"</h3>
';
                }
                $value = $context->find('search_message');
                $buffer .= $this->sectionB7f7311bb2b15caf7ce5afaed49aeeed($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('search_message');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <div class="ml-courses-block">
';
                    $value = $context->find('search_courses');
                    $buffer .= $this->section504cb79efee99bc60fc19e2fe92ff499($context, $indent, $value);
                    $buffer .= $indent . '</div>
';
                    $buffer .= $indent . '
';
                }
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b0633184b8338dbb82dffe31d175823(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="ml-course ml-enrolled-course" data-course-id="{{ id }}">
                <div style="background-image: url(https://picsum.photos/id/{{ id_for_image }}/250);"
                     class="ml-course-img">
                </div>
                <h3 class="ml-course-title">{{fullname}}</h3>
                <p class="ml-course-description"><b>Fields:</b> {{ category_template }}</p>
                <p class="ml-course-level"> {{ level }}</p>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="ml-course ml-enrolled-course" data-course-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <div style="background-image: url(https://picsum.photos/id/';
                $value = $this->resolveValue($context->find('id_for_image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/250);"
';
                $buffer .= $indent . '                     class="ml-course-img">
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <h3 class="ml-course-title">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $buffer .= $indent . '                <p class="ml-course-description"><b>Fields:</b> ';
                $value = $this->resolveValue($context->find('category_template'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                <p class="ml-course-level"> ';
                $value = $this->resolveValue($context->find('level'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section181928b801ae3575e3cadeade2a45ada(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ml-course" data-course-id="{{ id }}">
            <div style="background-image: url(https://picsum.photos/id/{{ id_for_image }}/250);"
                 class="ml-course-img">
            </div>
            <h3 class="ml-course-title">{{fullname}}</h3>
            <p class="ml-course-description"><b>Fields:</b> {{ category_template }}</p>
            <p class="ml-course-level"> {{ level }}</p>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ml-course" data-course-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <div style="background-image: url(https://picsum.photos/id/';
                $value = $this->resolveValue($context->find('id_for_image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/250);"
';
                $buffer .= $indent . '                 class="ml-course-img">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <h3 class="ml-course-title">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $buffer .= $indent . '            <p class="ml-course-description"><b>Fields:</b> ';
                $value = $this->resolveValue($context->find('category_template'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '            <p class="ml-course-level"> ';
                $value = $this->resolveValue($context->find('level'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e5ccf2efaf80a46488f31c3e5b8a9c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2 class="ml-message">{{ recommended_message }}</h2>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h2 class="ml-message">';
                $value = $this->resolveValue($context->find('recommended_message'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb0a137af0f1b79aee5ca1b75369b4ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div style="margin-bottom: 50px" class="ml-content ml-content-enroll">
    <h1 class="ml-courses-title">Enrolled Courses</h1>

    <div class="ml-courses-block">
        {{#enrolled_courses}}
            <div class="ml-course ml-enrolled-course" data-course-id="{{ id }}">
                <div style="background-image: url(https://picsum.photos/id/{{ id_for_image }}/250);"
                     class="ml-course-img">
                </div>
                <h3 class="ml-course-title">{{fullname}}</h3>
                <p class="ml-course-description"><b>Fields:</b> {{ category_template }}</p>
                <p class="ml-course-level"> {{ level }}</p>
            </div>
        {{/enrolled_courses}}
    </div>
    {{^enrolled_courses}}
        <h2 class="ml-message">You haven\'t enrolled in any courses.</h2>
    {{/enrolled_courses}}
</div>


<!--Render Recommended Courses when logged in-->
<div class="ml-content">
    <h1 class="ml-courses-title">Recommended Courses</h1>

    <div class="ml-courses-block">
    {{#recommended_courses}}
        <div class="ml-course" data-course-id="{{ id }}">
            <div style="background-image: url(https://picsum.photos/id/{{ id_for_image }}/250);"
                 class="ml-course-img">
            </div>
            <h3 class="ml-course-title">{{fullname}}</h3>
            <p class="ml-course-description"><b>Fields:</b> {{ category_template }}</p>
            <p class="ml-course-level"> {{ level }}</p>
        </div>
    {{/recommended_courses}}
    </div>

    {{#recommended_message}}
        <h2 class="ml-message">{{ recommended_message }}</h2>
    {{/recommended_message}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div style="margin-bottom: 50px" class="ml-content ml-content-enroll">
';
                $buffer .= $indent . '    <h1 class="ml-courses-title">Enrolled Courses</h1>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="ml-courses-block">
';
                $value = $context->find('enrolled_courses');
                $buffer .= $this->section8b0633184b8338dbb82dffe31d175823($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $value = $context->find('enrolled_courses');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <h2 class="ml-message">You haven\'t enrolled in any courses.</h2>
';
                }
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<!--Render Recommended Courses when logged in-->
';
                $buffer .= $indent . '<div class="ml-content">
';
                $buffer .= $indent . '    <h1 class="ml-courses-title">Recommended Courses</h1>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="ml-courses-block">
';
                $value = $context->find('recommended_courses');
                $buffer .= $this->section181928b801ae3575e3cadeade2a45ada($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('recommended_message');
                $buffer .= $this->section6e5ccf2efaf80a46488f31c3e5b8a9c7($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE67f30dc31441b5b383beb776db8a419(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ml-content-enroll';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ml-content-enroll';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d401f924d35355f7d1b2fe8cb625846(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            Other Courses
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            Other Courses
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
