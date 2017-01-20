<?php
$params = array();
if (isset($_GET['year']) && isset($_GET['month'])) {
    $params = array(
        'year' => $_GET['year'],
        'month' => $_GET['month'],
    );
}
$params['url']  = 'demo.php';
require_once 'calendar.class.php';
?>

<html>
    <head>
        <title>日历demo</title>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <style type="text/css">
            table.calendar {
                border: 1px solid #050;
            }
            .calendar th, .calendar td {
                width:30px;
                text-align:center;
            }            
            .calendar th {
                background-color:#050;
                color:#fff;
            }
            .today{
		color:#fff;
		background-color:#050;                
            }
        </style>
    </head>
    <body>
        <div style="align:center">
            <?php
                $cal = new Calendar($params);
                $cal->display();
            ?>    
        </div>
    </body>
</html>