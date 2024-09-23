window.onload = function () {
	const burger = document.querySelector("#burger");
	const menuBurger = document.querySelector(".menu-burger");
	const body = document.querySelector("body");

	const mask = document.createElement("div");
	mask.setAttribute("class", "mask");

	const searchBarInput = document.querySelector("#search-bar input");
	const searchBarContainer = document.querySelector("#search-bar");
	const searchBarIcon = document.querySelector("#search-bar .icon");
	const maskOnFocusInput = document.createElement("div");
	const contentSearch = document.querySelector(".content-search");
	const loader = document.createElement("img");

	let executionTimeout = [];

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
	burger.addEventListener("click", function (e) {
		if (menuBurger.classList.contains("show")) {
			body.removeChild(mask);
			closeBurger(menuBurger);
		} else {
			body.appendChild(mask);
			toggleBurger(menuBurger);
		}
	});

	loader.setAttribute("src", "/assets/images/loader.gif");
	loader.setAttribute("id", "loader");
	maskOnFocusInput.setAttribute("class", "mask-on-focus-input");

	function makeProduct(srcImg, descriptionText, titleText) {
		const product = document.createElement("div");
		const globalDescription = document.createElement("div");

		product.setAttribute("class", "product");
		const image = document.createElement("img");
		image.src = srcImg;
		const titleProduct = document.createElement("h4");
		const titleTextNode = document.createTextNode(titleText);
		const description = document.createElement("p");
		const textNode = document.createTextNode(descriptionText);
		description.appendChild(textNode);
		titleProduct.appendChild(titleTextNode);

		globalDescription.appendChild(titleProduct);
		globalDescription.appendChild(description);

		product.appendChild(image);
		product.appendChild(globalDescription);

		return product;
	}

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
				contentSearch.innerHTML = "";
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
			contentSearch.innerHTML = "";
			searchByName(value).then((result) => {
				// @TODO
				contentSearch.appendChild(loader);
				console.log("results database: ", result);
				const products = result.map(function (product) {
					return makeProduct(product.image, product.description, product.name);
				});
				console.log(
					"result database transforme HTMLElement products: ",
					products
				);
				setTimeout(function () {
					const loader = document.querySelector("#loader");
					if (loader) {
						contentSearch.removeChild(loader);
					}
					products.forEach(function (product) {
						contentSearch.appendChild(product);
					});
				}, 2000);
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
