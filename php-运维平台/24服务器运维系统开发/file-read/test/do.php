
<?php
$ret = array();
$ret['success'] = 1;
$ret['msg'] = '调用php成功';
header('content-type:application/json');
echo json_encode($ret);
?>
