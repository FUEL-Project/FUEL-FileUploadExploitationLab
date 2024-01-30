window.onload = function(){
	var upload = document.getElementById("fileToUpload");
	var responseMsg = document.getElementsByClassName("responseMsg")[0];
	var errorMsg = document.getElementById("errorMsg");
	var uploadMsg = document.getElementById("uploadtext");
	upload.value="";
	upload.addEventListener("change",function(event){
		var file = this.files[0];
		responseMsg.style = "display:none;";
		if (file.type != "image/png"){
			upload.value = "";
			uploadMsg.style = "display:none;";
			error();
		} else{
			uploadMsg.innerHTML = "Chosen File: " + upload.value.split(/(\\|\/)/g).pop();
			responseMsg.style="display:none;";
			errorMsg.style="display:none;";
			success();
		}
	});
};