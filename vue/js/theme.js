function applySavedTheme() {
  const theme = localStorage.getItem("theme");
  if (theme) {
    document.body.className = theme;
  }
}

document.addEventListener("DOMContentLoaded", applySavedTheme);
function ouvrirModal() {
  document.getElementById("modal-note")?.classList.add("actif");
}

function fermerModal(event) {
  const modal = document.getElementById("modal-note");

  if (event && event.target !== modal) {
    return;
  }

  modal?.classList.remove("actif");
}

function annulerNote() {
  document.getElementById("modal-note")?.classList.remove("actif");
}

function enregistrerNote() {
  const textarea = document.getElementById("modal-textarea");

  if (!textarea) return;

  const texte = textarea.value.trim();

  if (texte.length < 3) {
    textarea.classList.add("erreur");

    setTimeout(() => {
      textarea.classList.remove("erreur");
    }, 500);

    return;
  }

  const formData = new FormData();

  formData.append("ajouter", "1");
  formData.append("description", texte);

  fetch("index.php?route=note", {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (response.ok) {
        document.getElementById("modal-note")?.classList.remove("actif");

        location.reload();
      } else {
        alert("Erreur lors de l’enregistrement");
      }
    })
    .catch(() => {
      alert("Erreur réseau");
    });
}

document.addEventListener("input", function (e) {
  if (e.target.id === "modal-textarea") {
    const compteur = document.getElementById("modal-compteur");

    if (compteur) {
      compteur.textContent = e.target.value.length + "/300";
    }
  }
});

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    document.getElementById("modal-note")?.classList.remove("actif");
  }
});
