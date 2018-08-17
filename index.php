<html>
<head>
<link href="csss/reset.css" rel="stylesheet" type="text/css">
<link href="csss/style.css" rel="stylesheet" type="text/css">
<title>Comment Box</title>
<style>
.a{
 background-color:black;


}
.page_content{
 background-color:white;


}
.comment_input{
	 background-color:black;
	 border-radius: 7px;
}
#container{
	 background-color:black;
	 border-radius: 10px;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>

	function commentSubmit(){
		if(form1.name.value == '' && form1.comments.value == ''){ 
			alert('Enter your message !');
			return;
		}
		var name = form1.name.value;
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); 
		
		xmlhttp.onreadystatechange = function(){ 
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText;  
			}
		}
		xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); 
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
		});
		
</script>
</head>
<body class="a">
<div id="container">
	<div class="page_content">
    	Enter Books Information
    </div>
    <div class="comment_input">
        <form name="form1">
        	<input type="text" name="name" placeholder="Book Name"/></br></br>
            <textarea name="comments" placeholder="Enter contact Number" style="width:635px; height:100px;"></textarea></br></br>
            <a href="#" onClick="commentSubmit()" class="button">Post</a></br>
        </form>
    </div>
    <div id="comment_logs">
    	Loading info...
    <div>
</div>
<style>
.a{
background-color: black;


}
</style>
</body>
</html>