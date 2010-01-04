
<?php
# PHP Calendar (version 2.3), written by Keith Devens
# http://keithdevens.com/software/php_calendar
# see example at http://keithdevens.com/weblog
# License: http://keithdevens.com/software/license

# Slightly edited by Joshua Priddle on 2/2/06.

function generate_calendar($year, $month, $days = array(), $day_name_length = 3, $month_href = NULL, $first_day = 0, $pn = array()){
    $first_of_month = gmmktime(0, 0, 0, $month, 1, $year);

    $day_names = array(); // generate all the day names according to the current locale
	
    for($n = 0,$t = (3 + $first_day) * 86400; $n < 7; $n++, $t += 86400) { // January 4, 1970 was a Sunday
        $day_names[$n] = ucfirst(gmstrftime('%A', $t)); // %A means full textual day name
	}

    list($month, $year, $month_name, $weekday) = explode(',', gmstrftime('%m, %Y, %B, %w', $first_of_month));
	
    $weekday = ($weekday + 7 - $first_day) % 7; // adjust for $first_day
	
    $title   = htmlentities(ucfirst($month_name)).'&nbsp;'.$year; 

    @list($p, $pl) = each($pn); 
	@list($n, $nl) = each($pn); // previous and next links, if applicable
	
    if($p) $p = ($pl ? '<a href="'.htmlspecialchars($pl).'">'.$p.'</a>' : $p);
    if($n) $n = ($nl ? '<a href="'.htmlspecialchars($nl).'">'.$n.'</a>' : $n);
	
    $calendar = 
		'<table border="0" cellspacing="2" cellpadding="0" class="calendar">'."\n".
		"<tr>\n".
		"  <td colspan=\"7\" id=\"caption\">\n".
		'    <table width="222" border="0" cellspacing="0" cellpadding="0" class="header">'."\n".
		"    <tr>\n".
	    "      <th class=\"prev\" width=\"56\">$p</th>\n".
    	'      <th class="month" width="110">'. 
		($month_href ? '<a href="'.htmlspecialchars($month_href).'">'.$title.'</a>' : $title). "</th>\n".
    	"      <th class=\"next\" width=\"56\">$n</th>\n".
		"    </tr>\n".
		"    </table>\n".
		"  </td>\n".
		"</tr>\n".
		"<tr>\n";


    if($day_name_length){ // if the day names should be shown ($day_name_length > 0)
        // if day_name_length is >3, the full name of the day will be printed
        foreach($day_names as $d) {
            $calendar .= '  <th class="day" abbr="'.htmlentities($d).'">'.
				htmlentities($day_name_length < 4 ? substr($d,0,$day_name_length) : $d).'</th>'."\n";
		}
		$calendar .= "</tr>\n<tr>\n";
    }

    if($weekday > 0) { // initial 'empty' days
		for ($i = $weekday; $i > 0; $i--) $calendar .= "  <td class=\"day\">&nbsp;</td>\n"; 
	} 
    for($day = 1, $days_in_month = gmdate('t', $first_of_month); $day <= $days_in_month; $day++, $weekday++){
        if($weekday == 7){
            $weekday   = 0; // start a new week
            $calendar .= "</tr>\n<tr>\n";
        }
        if(isset($days[$day]) and is_array($days[$day])){
            @list($link, $classes, $content) = $days[$day];
            if(is_null($content))  $content  = $day;
            $calendar .= '  <td class="day'.($classes ? ' ' . htmlspecialchars($classes).'">' : '">').
                ($link ? '<a href="'.htmlspecialchars($link).'">'.
				$content.'</a>' : $content).'</td>'."\n";
        }
        else $calendar .= "  <td class=\"day\">$day</td>\n";
    }
    if($weekday != 7) {
		for ($i = 7 - $weekday; $i > 0; $i--) $calendar .= "  <td class=\"day\">&nbsp;</td>\n";
	} // remaining "empty" days

    return $calendar."</tr>\n</table>\n";
}
?> 


<?php
	if ($cur_month == "" && $cur_year == "") {
		$cur_month = date('m');
		$cur_year  = date('Y');
	}
	
	if($cur_month == 12) { 
		$next = 1; 
		$nexty = $cur_year + 1; 
	} else { 
		$next = $cur_month + 1; 
		$nexty = $cur_year; 
	}
	
	if($cur_month == 1) { 
		$prev = 12; 
		$prevy = $cur_year - 1; 
	} else { 
		$prev = $cur_month - 1; 
		$prevy = $cur_year; 
	}
	
	//$months = array(1 => 'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
	
	include_once('dbc.php');
	$sql = "SELECT * FROM calendar WHERE DATE_FORMAT(date, '%c') = ". $cur_month; 
	//echo $sql;
	$query = @mysql_query($sql, $connection);
	
	while ($row = @mysql_fetch_array($query)) {
		$day = substr($row['date'], -2);
		if(substr($day, 0,1) == "0") $day = substr($day, -1);
		$days[$day] = array(date('Y/m/d'), 'linked-day');
	}
	
	echo generate_calendar($cur_year, 
		$cur_month, $days, $day_name_length = 3, $month_href = NULL, $first_day = 0,  
		$pn = array('&laquo;&nbsp;'. date('M', mktime(0, 0, 0, ($cur_month - 1), 1, $cur_year)) =>"javascript:cal_navigate('".$prev."','".$prevy."')",
		date('M', mktime(0, 0, 0, ($cur_month + 1), 1, $cur_year)).'&nbsp;&raquo;'=>"javascript:cal_navigate('".$next."','".$nexty."')"));
	
?>

