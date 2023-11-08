<?php

class __Mustache_41f9036f5b929c61869a8b2e03dc0df7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course-wrapper {
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-image {
';
        $buffer .= $indent . '        margin-right: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-image-image {
';
        $buffer .= $indent . '        width: 400px;
';
        $buffer .= $indent . '        height: 300px;
';
        $buffer .= $indent . '        background-position: center -30px;
';
        $buffer .= $indent . '        background-size: cover;
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course-content-title {
';
        $buffer .= $indent . '        font-size: 30px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course-content-category {
';
        $buffer .= $indent . '        font-weight: 400;
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course-content-title-description {
';
        $buffer .= $indent . '        font-size: 20px;
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .ml-course-content-description {
';
        $buffer .= $indent . '        font-weight: 400;
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
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
        $buffer .= $indent . '    .ml-content.ml-content-details {
';
        $buffer .= $indent . '        background-color: #fff;
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /* Custom*/
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
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="ml-content ml-content-details">
';
        $buffer .= $indent . '    <div class="ml-course-wrapper">
';
        $buffer .= $indent . '        <div class="ml-image">
';
        $buffer .= $indent . '            <div style="background-image: url(https://picsum.photos/id/';
        $value = $this->resolveValue($context->findDot('course.id_for_image'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/250);"
';
        $buffer .= $indent . '                 class="ml-image-image">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="ml-course-content">
';
        $buffer .= $indent . '            <h2 class="ml-course-content-title">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('course.fullname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '            </h2>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <p class="ml-course-content-category"><b>Fields:</b> ';
        $value = $this->resolveValue($context->findDot('course.category_template'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <h2 class="ml-course-content-title-description">
';
        $buffer .= $indent . '                Description
';
        $buffer .= $indent . '            </h2>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <p class="ml-course-content-description">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('course.description'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="ml-content">
';
        $buffer .= $indent . '    <h1 class="ml-courses-title">Relevant Courses</h1>
';
        $buffer .= $indent . '    <div class="ml-courses-block">
';
        $value = $context->find('recommended_courses');
        $buffer .= $this->section504cb79efee99bc60fc19e2fe92ff499($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('recommended_courses');
        if (empty($value)) {
            
            $value = $context->find('relevant_courses');
            $buffer .= $this->sectionA946a9244c28ae7865c5cf68f72119f4($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '    <!--    Handle event redirect to detail course-->
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
        $buffer .= $indent . '            window.location.href = courseDetailLink
';
        $buffer .= $indent . '        })
';
        $buffer .= $indent . '    })
';
        $buffer .= $indent . '</script>';

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

    private function sectionA946a9244c28ae7865c5cf68f72119f4(Mustache_Context $context, $indent, $value)
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

}
