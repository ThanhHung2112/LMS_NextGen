<?php

class __Mustache_7a2db1db515bc408264e664805601061 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    class="hidden bg-white position-relative border-bottom p-1 px-sm-2"
';
        $buffer .= $indent . '    aria-hidden="true"
';
        $buffer .= $indent . '    data-region="view-conversation"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div class="hidden" data-region="header-content"></div>
';
        $buffer .= $indent . '    <div class="hidden" data-region="header-edit-mode">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_header_edit_mode')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-region="header-placeholder">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_header_placeholder')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="hidden position-absolute z-index-1"
';
        $buffer .= $indent . '        data-region="confirm-dialogue-container"
';
        $buffer .= $indent . '        style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
';
        $buffer .= $indent . '    ></div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
