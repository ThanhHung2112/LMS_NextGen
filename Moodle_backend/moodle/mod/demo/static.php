<?php
// Định nghĩa route
$module->addURL('/mod/demo/static.php', new moodle_url('/mod/demo/static.php'));

require_once('../../config.php');
require_login();
$filename = required_param('file', PARAM_TEXT);

// Kiểm tra tệp tồn tại trong thư mục static_files
$filepath = $CFG->dataroot . '/demo/static_files/' . $filename;
if (file_exists($filepath)) {
    // Xác định loại tệp (ví dụ: hình ảnh)
    $mimetype = mimeinfo('type', $filepath);

    // Thiết lập header cho tệp
    header('Content-Type: ' . $mimetype);
    header('Content-Disposition: inline; filename=' . $filename);

    // Đọc và xuất tệp
    readfile($filepath);
} else {
    // Xử lý khi tệp không tồn tại
    echo 'File not found.';
}
