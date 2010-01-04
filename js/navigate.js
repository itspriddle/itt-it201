

function createRequest(){
	var req; //declare the variable to hold the object.
	var browser = navigator.appName; //find the browser name
	if(browser == "Microsoft Internet Explorer"){
		/* Create the object using MSIE's method */
		req = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		/* Create the object using other browser's method */
		req = new XMLHttpRequest();
	}
	return req; //return the object
}

var http = createRequest();

function navigate( page, start ) {  
	
		var url = "content.php";
		var post = "page=" + page;
		
		if (start ) {
			post = post + "&start=" + start;
		}
	
	http.open('post',  'content.php');
	http.onreadystatechange = callback;
	http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	http.send( post );
	// alert( post );
}

function callback() {
	
        if(http.readyState == 4) {
                if(http.status == 200) {
                        response = http.responseText;
                        document.getElementById("content").innerHTML = response;
						
                } else {
                        alert("There was a problem retrieving the data:\n" + http.statusText);
                }
        }
}