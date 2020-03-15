<?php 
    /*$put days in calendar*/
    function getCalendar($month) {
        $calendar = array();
        $year = 2020;
        $startDayTimestamp = mktime(0, 0, 0, $month, 1, $year);
        $endDayTimestamp = mktime(0, 0, 0, $month + 1, 0, $year);
        $endDay = date("d", $endDayTimestamp);
        $weekday = date("w", $startDayTimestamp);
        $endWeekday = date("w", $endDayTimestamp);
    
        for ($i = 1; $i <= $endDay; $i++){  
            /*put blank before 1st in array*/  
            if ($i == 1){
                for ($k = 0; $k < $weekday; $k++){
                    $calendar[] = '';
                }
            }
            /*put 1st to end day in array*/
            $calendar[] = $i;
            /*put blank after end day in array */
            if ($i == $endDay){
                for ($e = 0; $e < 6 - $endWeekday; $e++){
                    $calendar[] = '';
                }
            }
        }
        /*return array*/
        return $calendar;
    };
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Calendar</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php for ($month=1; $month <= 12; $month++): ?>
            <h1><?= "{$month}"; ?>月のカレンダー</h1>

            <table border="1">
                <tr>
                    <th>SUN</th>
                    <th>MON</th>
                    <th>TUE</th>
                    <th>WED</th>
                    <th>THU</th>
                    <th>FRI</th>
                    <th>SAT</th>
                </tr>
                    <!--get array of month-->
                    <?php $calendar = getCalendar($month)?>
                <tr>
                    <!-- make table of calendar -->
                    <?php $cnt = 0; ?>
                    <?php foreach ($calendar as $key => $value): ?>
                        <?php $cnt++; ?>
                        <td><?= $value; ?></td>
                        <!-- make new line ever 7days-->
                        <?php if ($cnt == 7): ?>
                            </tr><tr>
                            <?php $cnt = 0; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            </table>
        <?php endfor; ?>
    </body>
</html>