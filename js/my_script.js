function Check() {
	var name = $('#name').val().trim();
	var email = $('#email').val().trim();
	var question = $('#question').val().trim();

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
};

