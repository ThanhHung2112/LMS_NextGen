<?php

class __Mustache_89f56806aa226a2a79924f6f808a325f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<link href=\'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\' rel=\'stylesheet\'>
';
        $buffer .= $indent . '
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
        $buffer .= $indent . '    .ml-content-title {
';
        $buffer .= $indent . '        margin-bottom: 50px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-content.ml-content-search-button {
';
        $buffer .= $indent . '        background-color: #fff;
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
        $buffer .= $indent . '        grid-gap: 20px;
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
        $buffer .= $indent . '        .ml-courses-block {
';
        $buffer .= $indent . '            display: grid;
';
        $buffer .= $indent . '            grid-template-columns: repeat(1, 1fr);
';
        $buffer .= $indent . '            grid-gap: 20px;
';
        $buffer .= $indent . '        }
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="ml-content ml-content-search-button">
';
        $buffer .= $indent . '    <h1 class="ml-content-title">Check Recommendation System</h1>
';
        $buffer .= $indent . '    <form class="ml-search" method="POST">
';
        $buffer .= $indent . '        <div class="ml-search-input">
';
        $buffer .= $indent . '            <i class=\'ml-search-input-icon bx bx-search\'></i>
';
        $buffer .= $indent . '            <input name="user-id" class="ml-search-input-text" type="text" placeholder="Which user id  do you want to check?">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('is_searched');
        $buffer .= $this->section83366829d1737b222a4e162cfa03ab99($context, $indent, $value);
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

    private function section5e8a5ff82e45c32dc4a2f772874998b7(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '        <h2 class="ml-message">';
                $value = $this->resolveValue($context->find('search_message'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section645295a6b8244a96100a35eafd5faf2b(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                <div class="ml-course" data-course-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <div style="background-image: url(https://picsum.photos/id/';
                $value = $this->resolveValue($context->find('id_for_image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/250);"
';
                $buffer .= $indent . '                         class="ml-course-img">
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <h3 class="ml-course-title">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $buffer .= $indent . '                    <p class="ml-course-description"><b>Fields:</b> ';
                $value = $this->resolveValue($context->find('category_template'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                    <p class="ml-course-level"> ';
                $value = $this->resolveValue($context->find('level'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '                </div>
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

    private function section83366829d1737b222a4e162cfa03ab99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="ml-content ml-content-search">
    <h1 class="ml-courses-title">Enrolled Course</h1>
    <h3 class="ml-search-keyword">Search for user id: "{{ search_keyword }}"</h3>
    {{# search_message }}
        <h2 class="ml-message">{{ search_message }}</h2>
    {{/ search_message }}

    {{^ search_message }}
        <div class="ml-courses-block">
            {{#enrolled_courses}}
                <div class="ml-course" data-course-id="{{ id }}">
                    <div style="background-image: url(https://picsum.photos/id/{{ id_for_image }}/250);"
                         class="ml-course-img">
                    </div>
                    <h3 class="ml-course-title">{{fullname}}</h3>
                    <p class="ml-course-description"><b>Fields:</b> {{ category_template }}</p>
                    <p class="ml-course-level"> {{ level }}</p>
                </div>
            {{/enrolled_courses}}
        </div>

    {{/ search_message }}
</div>

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
                
                $buffer .= $indent . '<div class="ml-content ml-content-search">
';
                $buffer .= $indent . '    <h1 class="ml-courses-title">Enrolled Course</h1>
';
                $buffer .= $indent . '    <h3 class="ml-search-keyword">Search for user id: "';
                $value = $this->resolveValue($context->find('search_keyword'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"</h3>
';
                $value = $context->find('search_message');
                $buffer .= $this->section5e8a5ff82e45c32dc4a2f772874998b7($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('search_message');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div class="ml-courses-block">
';
                    $value = $context->find('enrolled_courses');
                    $buffer .= $this->section645295a6b8244a96100a35eafd5faf2b($context, $indent, $value);
                    $buffer .= $indent . '        </div>
';
                    $buffer .= $indent . '
';
                }
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="ml-content">
';
                $buffer .= $indent . '    <h1 class="ml-courses-title">Recommended Courses</h1>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="ml-courses-block">
';
                $value = $context->find('recommended_courses');
                $buffer .= $this->section504cb79efee99bc60fc19e2fe92ff499($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('recommended_message');
                $buffer .= $this->section6e5ccf2efaf80a46488f31c3e5b8a9c7($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
