// Ajoutez ici vos fonctionnalités pour les boutons de la barre d'outils
// document.querySelector(".bold").addEventListener("click", () => {
// 	document.execCommand("bold", false, null);
// });

// document.querySelector(".italic").addEventListener("click", () => {
// 	document.execCommand("italic", false, null);
// });

// document.querySelector(".underline").addEventListener("click", () => {
// 	document.execCommand("underline", false, null);
// });

document.querySelector(".reply").addEventListener("click", () => {
	const text = document.querySelector(".text-area").innerHTML;
	alert("Votre réponse : " + text);
});

const preview = document.createElement("img");
const fileReader = new FileReader();
const fileInput = document.getElementById("file-input");
fileInput.addEventListener("change", (e) => {
	console.log(e.target.files[0]);
	preview.src = URL.createObjectURL(e.target.files[0]);
	document.querySelector(".text-area").appendChild(preview);
	// const imageURL = prompt("Entrez l'URL de l'image :", "https://");
	// if (imageURL) {
	// 	document.execCommand("insertImage", false, imageURL);
	// }
});

document.getElementById("emoji").addEventListener("click", () => {
	const emojiContainer = document.querySelector(".emoji-container");
	emojiContainer.style.display =
		emojiContainer.style.display === "none" ? "block" : "none";
});

function insertEmoji(emoji) {
	document.execCommand("insertHTML", false, emoji);
	const emojiContainer = document.querySelector(".emoji-container");
	emojiContainer.style.display = "none";
}

// Affiche la date et l'heure actuelle
function afficheDateHeure() {
	const date = new Date();
	const jour = date.getDate();
	const mois = date.getMonth() + 1;
	const annee = date.getFullYear();
	const heure = date.getHours();
	const minute = date.getMinutes();

	// document.getElementById("date").innerHTML = `${jour}/${mois}/${annee}`;
	// document.getElementById("heure").innerHTML = `${heure}h${minute}m$`;
}

// Appel la fonction afficheDateHeure toutes les secondes
setInterval(afficheDateHeure, 1000);

// Appel la fonction afficheDateHeure une fois au chargement de la page
afficheDateHeure();
