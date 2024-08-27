window.onload = function () {
	const burger = document.querySelector("#burger");
	const menuBurger = document.querySelector(".menu-burger");
	const body = document.querySelector("body");

	const mask = document.createElement("div");
	mask.setAttribute("class", "mask");

	function closeBurger(menuBurger) {
		menuBurger.classList.remove("menu-growth");
		menuBurger.classList.add("displayed");
		setTimeout(function () {
			menuBurger.classList.remove("show");
			menuBurger.classList.add("hide");
		}, 1000);
	}

	function toggleBurger(menuBurger) {
		menuBurger.classList.remove("hide");
		setTimeout(function () {
			menuBurger.classList.add("show");
			setTimeout(function () {
				menuBurger.classList.add("menu-growth");
				setTimeout(function () {
					menuBurger.classList.remove("displayed");
				});
			});
		});
	}
	burger.addEventListener(
		"click",
		function (e) {
			if (menuBurger.classList.contains("show")) {
				body.removeChild(mask);
				closeBurger(menuBurger);
			} else {
				body.appendChild(mask);
				toggleBurger(menuBurger);
			}
		},
		false
	);
};
