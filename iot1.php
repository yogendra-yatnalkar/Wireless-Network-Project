<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://smtpjs.com/v2/smtp.js">
</script>
	<script>
		str1=["hanozd1234@gmail.com","yogenyat@gmail.com"]
        function abc(){
		var xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState==4 && this.status==200){
				var obj=JSON.parse(this.responseText);
				var date=(obj.created_at).split("T");
				var time=(date[1].split("Z"))[0];
				var field_1=obj.field1;
				field_1 = 600;
				if(field_1>500){
					field_1="on verge of overflow.";
				}
				else{
					field_1="Acceptable.";
				}
				var field_2=obj.field3;
				var str=`<h3>The water bucket as of ${date[0]} is: <br/><br/></h3>
				Time of taking the reading ${time} <br> The depth of the water is ${field_1} `;
                //document.write(obj.field3);
                var flag=localStorage.getItem("re_flag");
				document.write(str);
				if(obj.field1>0 && flag==1) {
                    Email.send("y.yatnalkar123@gmail.com",
				        str1,
				        `Water bucket operation as of ${date[0]}`,
				        `<h3>on time ${time} <br> The water bucket level is ${field_1} `,
				        "smtp.elasticemail.com",
						"y.yatnalkar123@gmail.com",
				        "d74a0ab1-c1a2-45f0-8666-63ec54a083f3");
					localStorage.setItem("re_flag", 0);
                }
                if(obj.field1<400) {
					var ab=1;
					localStorage.setItem("ab", 1);
					document.write(localStorage.getItem("ab"));
                }
                if(obj.field1>500 ){
					var ab=localStorage.getItem("ab");
					if(ab==1){
						localStorage.setItem("ab",1);
                    	window.location.replace("iot.php");
					}
                }
			}
		};
		xhttp.open("GET","https://api.thingspeak.com/channels/584560/feeds/last.json?timezone=Asia/Kolkata",true);
		xhttp.send();
	}
	window.onload=abc;
    setTimeout(function() {
        location.reload();
        }, 5000);
	</script>
</head>
<body>