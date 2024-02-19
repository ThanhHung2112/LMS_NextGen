<?php

class __Mustache_1b7b46172a81527363f6a0e9b6ae2550 extends Mustache_Template
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
        $buffer .= $indent . '    .ml-grade {
';
        $buffer .= $indent . '        display: inline-block;
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
        $buffer .= $indent . '    .ml-none-submission {
';
        $buffer .= $indent . '        color: #888;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '        font-size: 20px;
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
        $buffer .= $indent . '    <!-- Summary assignment-->
';
        $buffer .= $indent . '    <div class="ml-content ml-content-summary">
';
        $buffer .= $indent . '        <div class="ml-summary">
';
        $buffer .= $indent . '            <h2 class="ml-summary-title">
';
        $buffer .= $indent . '                Submissions
';
        $buffer .= $indent . '            </h2>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('submissions'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $value = $context->find('has_submission');
        $buffer .= $this->section4488c8881d128addd99cf4bdd045a642($context, $indent, $value);
        $value = $context->find('has_submission');
        if (empty($value)) {
            
            $buffer .= $indent . '                <h3 class="ml-none-submission">There are no submissions at all.</h3>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- Control assignment -->
';
        $buffer .= $indent . '    <div class="ml-content ml-content-control">
';
        $buffer .= $indent . '        <div class="ml-button-group">
';
        $buffer .= $indent . '            <a href="http://localhost/mod/demo/view.php?id=';
        $value = $this->resolveValue($context->find('course_id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="ml-button">Back</a>
';
        $value = $context->find('has_submission');
        $buffer .= $this->sectionC11e155f1e4e39bc0d884082e09bf066($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
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
        $buffer .= $indent . '    // Change module Name
';
        $buffer .= $indent . '    let moduleName = document.querySelector(\'.active.active_tree_node.nav-link\')
';
        $buffer .= $indent . '    moduleName.innerText = \'AI Assignment\'
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function section70d26c692aff125f776a3ea92d8ebd08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{ grade }} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('grade'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa4b8549992705ef234c21f850606fd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="http://localhost/mod/demo/view.php?id={{module_instance}}&action=grading&id-ass={{ id_ass }}&id-user={{ id }}&edit=true" class="ml-button ml-button--edit ml-grade">Edit</a>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="http://localhost/mod/demo/view.php?id=';
                $value = $this->resolveValue($context->find('module_instance'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&action=grading&id-ass=';
                $value = $this->resolveValue($context->find('id_ass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&id-user=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&edit=true" class="ml-button ml-button--edit ml-grade">Edit</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5adba7ba27abfa213a0f88e087bf5e2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <tr>
                        <td>{{ fullname }}</td>
                        <td>{{ email }}</td>
                        <td>Submitted</td>
                        <td>
                            {{# grade }} {{ grade }} {{/grade}}
                            {{^ grade }}
                                <a href="http://localhost/mod/demo/view.php?id={{module_instance}}&action=grading&id-ass={{ id_ass }}&id-user={{ id }}" class="ml-button ml-button--edit ml-grade">Grade</a>
                            {{/grade}}
                        </td>
                        <td>
                            {{# grade }}
                                <a href="http://localhost/mod/demo/view.php?id={{module_instance}}&action=grading&id-ass={{ id_ass }}&id-user={{ id }}&edit=true" class="ml-button ml-button--edit ml-grade">Edit</a>
                            {{/grade}}
                            {{^ grade }}
                                No Grading
                            {{/grade}}
                        </td>
                    </tr>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <tr>
';
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td>Submitted</td>
';
                $buffer .= $indent . '                        <td>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('grade');
                $buffer .= $this->section70d26c692aff125f776a3ea92d8ebd08($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('grade');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <a href="http://localhost/mod/demo/view.php?id=';
                    $value = $this->resolveValue($context->find('module_instance'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '&action=grading&id-ass=';
                    $value = $this->resolveValue($context->find('id_ass'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '&id-user=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" class="ml-button ml-button--edit ml-grade">Grade</a>
';
                }
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                        <td>
';
                $value = $context->find('grade');
                $buffer .= $this->sectionDa4b8549992705ef234c21f850606fd0($context, $indent, $value);
                $value = $context->find('grade');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                No Grading
';
                }
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4488c8881d128addd99cf4bdd045a642(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <table class="ml-summary-table">
                    <tr>
                        <th>Full Name</th>
                        <th>Email address</th>
                        <th>Status</th>
                        <th>Grade</th>
                        <th>Edit Grade (If graded)</th>
                    </tr>
                    {{# users }}
                    <tr>
                        <td>{{ fullname }}</td>
                        <td>{{ email }}</td>
                        <td>Submitted</td>
                        <td>
                            {{# grade }} {{ grade }} {{/grade}}
                            {{^ grade }}
                                <a href="http://localhost/mod/demo/view.php?id={{module_instance}}&action=grading&id-ass={{ id_ass }}&id-user={{ id }}" class="ml-button ml-button--edit ml-grade">Grade</a>
                            {{/grade}}
                        </td>
                        <td>
                            {{# grade }}
                                <a href="http://localhost/mod/demo/view.php?id={{module_instance}}&action=grading&id-ass={{ id_ass }}&id-user={{ id }}&edit=true" class="ml-button ml-button--edit ml-grade">Edit</a>
                            {{/grade}}
                            {{^ grade }}
                                No Grading
                            {{/grade}}
                        </td>
                    </tr>
                    {{/users}}

                </table>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <table class="ml-summary-table">
';
                $buffer .= $indent . '                    <tr>
';
                $buffer .= $indent . '                        <th>Full Name</th>
';
                $buffer .= $indent . '                        <th>Email address</th>
';
                $buffer .= $indent . '                        <th>Status</th>
';
                $buffer .= $indent . '                        <th>Grade</th>
';
                $buffer .= $indent . '                        <th>Edit Grade (If graded)</th>
';
                $buffer .= $indent . '                    </tr>
';
                $value = $context->find('users');
                $buffer .= $this->section5adba7ba27abfa213a0f88e087bf5e2a($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC11e155f1e4e39bc0d884082e09bf066(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="ml-button ml-button--extra">Help Grading with AI</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="ml-button ml-button--extra">Help Grading with AI</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
