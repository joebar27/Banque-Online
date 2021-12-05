// création du tableau des éléments HTML
const els = {
  popUp: null,
  popClose: null,
};

//initialisation et execution
const init = () => {
  // définition des elements html
  els.popUp = document.querySelector("#popUp");
  els.popClose = document.querySelector("#popClose");
  console.log(sessionStorage);
  if (!sessionStorage.getItem("informed")) {
    // appel de la fonction du popUp d'avertissement
    popUpDisplay();
  }
};

//appel de la fonction init au chargement de la page
window.addEventListener("load", () => {
  init();
});
