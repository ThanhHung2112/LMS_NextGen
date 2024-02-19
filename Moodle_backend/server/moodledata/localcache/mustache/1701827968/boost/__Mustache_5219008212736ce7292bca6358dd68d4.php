<?php

class __Mustache_5219008212736ce7292bca6358dd68d4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '    // Change icon AI Assignment
';
        $buffer .= $indent . '    let images = document.querySelectorAll(\'.modtype_demo img\')
';
        $buffer .= $indent . '    images.forEach(image => {
';
        $buffer .= $indent . '        image.src = "https://thumbs.dreamstime.com/b/artificial-intelligence-ai-processor-chip-vector-icon-symbol-graphic-design-logo-web-site-social-media-mobile-app-ui-158205566.jpg"
';
        $buffer .= $indent . '        image.style.width = \'50px\'
';
        $buffer .= $indent . '        image.style.height = \'50px\'
';
        $buffer .= $indent . '    })
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    let openButtons = document.querySelectorAll(\'[data-action="open-chooser"]\');
';
        $buffer .= $indent . '    // let aiBlock = document.querySelectorAll(\'[aria-label="[[modulename]]"]\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    console.log(document.querySelectorAll(\'.modal\'))
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    openButtons.forEach(button => {
';
        $buffer .= $indent . '        document.addEventListener(\'DOMContentLoaded\', function() {
';
        $buffer .= $indent . '        button.onclick = function() {
';
        $buffer .= $indent . '            let aiBlock = document.querySelectorAll(\'.modal\');
';
        $buffer .= $indent . '            console.log(aiBlock);
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '        })
';
        $buffer .= $indent . '    })
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }
}
