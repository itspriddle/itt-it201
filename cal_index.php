<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css" rel="stylesheet">
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFF;
}
body {
	background: #011C60;
	margin: 0;
}
table.calendar {
	border: 0;
	margin: 7px;
}
	table.calendar th.day,
	  table.calendar td.day {
		width: 30px;
		height: 24px;
		background-color: #00133C;
		color: #FFF;
		font-size: 10px;
		font-weight: bold;
		padding: 0;
		background-repeat: no-repeat;
		text-align: center;
	}
	
	table.calendar th.day {
		background-image: url(images/calendar/th.bg.gif);
	}
	table.calendar td.day {
		background-image: url(images/calendar/td.bg.gif);		
	}
	table.calendar td.blank {
		background-image: none;
		border: 1px solid #4792F8;		
	}
	table.calendar td#caption {
		height: 24px;
		line-height: 24px;
		color: #FFF;
		background: no-repeat url(images/calendar/caption.gif) center;
		font-size: 10px;
		font-weight: bold;
		padding: 0;
		margin: 0;
	}

		table.calendar td#caption .prev  a,
		  table.calendar td#caption .next  a {
			display: block;
			width: 100%;
			height: 100%;
		}
		table.calendar td#caption  a:link {
			color: #FFFFFF;
			text-decoration: none;
		}
		table.calendar td#caption  a:visited {
			color: #FFFFFF;
			text-decoration: none;
		}
		table.calendar td#caption  a:hover {
			color: #FFFFFF;
			text-decoration: none;
		}
		table.calendar td#caption  a:active {
			color: #FFFFFF;
			text-decoration: none;
		}

		table.calendar table.header td {
			background: none;
			width: auto;
			height: 24px;
			text-align: center;
		}
		table.calendar .prev,
		  table.calendar .month,
		  table.calendar .next {
		  	font-size: 10px;
		  }
	
</style>
<script type="text/javascript" src="js/calendar.js" language="javascript"></script>
</head>
<body onLoad="cal_navigate('','')">
<div id="calendar"></div>
</body>
</html>
