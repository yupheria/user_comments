function verifyComment() {	
	errorMessage = "";
	var myComment = document.getElementById("user_input");
	if(myComment.value.length == 0) {
		errorMessage += "Please Enter a Comment \n";
	}
	var regTest = /^[a-zA-Z0-9 ]+$/;
	//var regTest = /^[a-zA-Z0-9]{6,}/;
	if(!regTest.test(myComment.value)) {
		errorMessage += "Invalid Comment \n";
	}
	
	if(errorMessage.length > 0) {
		alert(errorMessage);
		return false;
	} else {
		return true;
	}
}