(function() {
	var button = document.querySelectorAll(".button-toggle");
	var content = document.querySelectorAll(".content");

	button[0].addEventListener("click", function() {
		content[0].classList.toggle("toggle");
	});
	button[1].addEventListener("click", function() {
		content[1].classList.toggle("toggle");
	});
	button[2].addEventListener("click", function() {
		content[2].classList.toggle("toggle");
	});
	button[3].addEventListener("click", function() {
		content[3].classList.toggle("toggle");
	});
	button[4].addEventListener("click", function() {
		content[4].classList.toggle("toggle");
	});
	button[5].addEventListener("click", function() {
		content[5].classList.toggle("toggle");
	});
	button[6].addEventListener("click", function() {
		content[6].classList.toggle("toggle");
	});
}());