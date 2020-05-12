$("#send").on("click", function() {
	var name = $("#name").val().trim();
	var email = $("#email").val().trim();
	var question = $("#question").val().trim();

	if (name == "") {
		$("#mess-error").text("Введите имя");
		return false;
	} 
	else if (email == "") {
		$("#mess-error").text("Введите email");
		return false; 
	}
	else if (question.length < 5 ) {
		$("#mess-error").text("Введите не менее 5 символов в вопросе");
		return false; 
	}

	$("#mess-error").text(""); 

	$.ajax({
	url: '../php/mail.php',
	type: 'POST',
	cashe: false,
	data: { 'name': name, 'email': email, 'question': question},
	dataType: 'html',
	beforeSend: function() {
		$("#send").prop("disabled", true);
	},
	success: function(data) {
		if (!data)
			alert("Произошли ошибки, сообщение не отправлено!");		
		else			
			$("#MailForm").trigger("reset"); 
		
		alert("Успешно отправлено!");
		$("#send").prop("disabled", false);
	}
});

});

// $("#cancel-mail").on("click", function() {
// 	$("#mess-error").text(""); 
// 	$("#MailForm").trigger("reset");
// }
