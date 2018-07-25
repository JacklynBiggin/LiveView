function enableTech() {
	var enteredPassword = window.prompt("Please enter the tech password to continue.");
	
	$.post("./assets/api/authenticate.php", {
		password: enteredPassword,	
	},
		   
	function(data) {
		console.log(data);
		if(data == "true") {
			Cookies.set('tech', 'true', { expires: 7 });
		}
	});
	
}

