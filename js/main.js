// création du tableau des éléments HTML
const els = {
  popUp: null,
  popClose: null
};


//initialisation et execution
const init = () => {
    
  // définition des elements html
  els.popUp = document.querySelector('#popUp');
  els.popClose = document.querySelector('#popClose');

  // fonction du popUp d'avertissement
  popUpDisplay();

}

window.addEventListener('load', () => {
  init();
});
