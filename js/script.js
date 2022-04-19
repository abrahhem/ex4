window.onload = () => {
	document.getElementById("submit").onclick = function () {
		let count = 0;
		const checke1 = document.getElementById("code");
		if (checke1.checked)
			count++;
		const checke2 = document.getElementById("cook");
		if (checke2.checked)
			count++;
		const checke3 = document.getElementById("games");
		if (checke3.checked)
			count++;
		const checke4 = document.getElementById("reading");
		if (checke4.checked)
			count++;
		console.log(count);
		if(count < 2) {
			checke4.setCustomValidity("At least two checkboxes needed");
			window.location.reload();
		}
	}
}


