var req;

function cal_navigate(month,year) {
        var url = "calendar.php?cur_month="+month+"&cur_year="+year;
        if(window.XMLHttpRequest) {
                req = new XMLHttpRequest();
        } else if(window.ActiveXObject) {
                req = new ActiveXObject("Microsoft.XMLHTTP");
        }
        req.open("GET", url, true);
        req.onreadystatechange = callback;
        req.send(null);
}

function callback() {
        if(req.readyState == 4) {
                if(req.status == 200) {
                        response = req.responseText;
                        document.getElementById("calendar").innerHTML = response;
                } else {
                        alert("There was a problem retrieving the data:\n" + req.statusText);
                }
        }
}