
<!DOCTYPE HTML>
<html>
    <head>
        <title>Calendar</title>
        <meta charset = "utf-8">
    </head>
    
    <body>
        <?php for($month=1; $month <= 12; $month ++): ?>
          <header><?php echo "{$month}月のカレンダー"; ?></header>

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
            <tr>

            <?php //nnnn($calendarMonth); 
                $calendar = array();
                $year = 2020;
                $startDayTimestamp = mktime(0,0,0,$month,1,$year);
                $endDayTimestamp = mktime(0,0,0,$month+1,0,$year);
                $endDay = date("d", $endDayTimestamp);
                $Weekday = date("w", $startDayTimestamp);                
                $endWeekday = date("w", $endDayTimestamp);
                for($i = 1; $i <= $endDay; $i++){    
                    if($i == 1){
                        for($k = 0; $k < $Weekday; $k++){
                            $calendar[$s]['day'] = '';
                            $s++;
                        }
                    }
                  
                    $calendar[$s]['day'] = $i;
                    $s++;

                    if($i == $endDay){
                        for($e = 0; $e < 6 - $endWeekday; $e++){
                            $calendar[$s]['day'] = '';
                            $s++;
                        }  
                    }
                }
                echo '<tr>';
                $cnt = 0;
                foreach($calendar as $key => $value){
                    $cnt++;
                    echo '<td>'.$value['day'].'</td>';
          
                    if($cnt == 7){
                        echo '</tr><tr>';
                        $cnt = 0;
                    }
                }
                echo '</tr>';
            ?>   
        
          </table>
        <?php endfor; ?>
    </body>
</html>