window.onload = function () {
	const searchBarInput = document.querySelector("#search-bar input");
	const searchBarIcon = document.querySelector("#search-bar .icon");
	const maskOnFocusInput = document.createElement("div");
	const body = document.querySelector("body");
	const contentSearch = document.querySelector(".content-search");
	const loader = document.createElement("img");

	let executionTimeout = [];

	loader.setAttribute("src", "/assets/images/loader.gif");
	loader.setAttribute("id", "loader");
	maskOnFocusInput.setAttribute("class", "mask-on-focus-input");

	function getData() {
		// On récupère les données du json émitant la base de donnée
		// avec le fichier qui est dans le dossier schéma appeler "database.json"
		const request = new Request("/assets/schema/database.json", {
			method: "GET",
		});
		return fetch(request)
			.then((response) => response.json())
			.then((json) => json);
	}

	function searchByName(name) {
		return getData().then((datas) =>
			datas.produits.filter((produit) => produit.name.match(name))
		);
	}

	searchBarInput.addEventListener("focus", function (e) {
		body.appendChild(maskOnFocusInput);
		searchBarInput.classList.add("search-focused");
		searchBarIcon.classList.add("search-focused");
	});

	searchBarInput.addEventListener(
		"focusout",
		function () {
			body.removeChild(maskOnFocusInput);
			searchBarInput.classList.remove("search-focused");
			searchBarIcon.classList.remove("search-focused");
			if (contentSearch.classList.contains("show")) {
				searchBarInput.value = "";
				contentSearch.classList.remove("show");
			}
		},
		false
	);

	function displayContent() {
		return setTimeout(function () {
			contentSearch.classList.add("show");
		}, 500);
	}

	searchBarInput.addEventListener("keydown", function (e) {
		const isDisplayedContent = contentSearch.classList.contains("show");
		const value = searchBarInput.value;
		if (searchBarInput.value.length >= 5) {
			searchByName(value).then((result) => {
				// @TODO
				console.log(result);
			});
			const timeout = displayContent();
			executionTimeout.push(timeout);
			console.log("executionTimeout:", executionTimeout);
		}
		if (isDisplayedContent && searchBarInput.value.length < 5) {
			contentSearch.classList.remove("show");
			executionTimeout.forEach((timeout) => clearTimeout(timeout));
		}
		console.log(searchBarInput.value.length);
	});

	searchBarInput.addEventListener(
		"keyup",
		function () {
			const isDisplayedContent = contentSearch.classList.contains("show");

			if (isDisplayedContent && searchBarInput.value.length === 0) {
				contentSearch.classList.remove("show");
				executionTimeout.forEach((timeout) => clearTimeout(timeout));
			}
		},
		false
	);

	searchBarIcon.addEventListener("click", function (e) {}, false);
};
