<?php
session_write_close();
ignore_user_abort(true);
set_time_limit(0);
header('Content-Type: text/event-stream');
header('Connection: close');
echo json_encode(glob(sprintf('%s%s*',preg_replace('#[\\/]#',DIRECTORY_SEPARATOR,urldecode($_REQUEST['path'])),DIRECTORY_SEPARATOR)));
exit;
