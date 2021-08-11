
function showOption() {
	const menuChild = document.getElementById("menu-child").classList;
	menuChild.forEach(value => {
		if (value === "hide")
			menuChild.remove("hide");
		else menuChild.add("hide");
	});
}
