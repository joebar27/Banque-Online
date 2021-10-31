const dispEmprunt = document.querySelector("#dispEmprunt");
const graphbar = document.querySelector("#graphbar");

const tableEmprunt = () => {
  let statEmprunt = './Data/statistique.json';
  let httpRequest = new XMLHttpRequest();

  httpRequest.onreadystatechange = function () {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      // tout va bien, la réponse a été reçue
      if (httpRequest.status === 200) {
        let data = JSON.parse(httpRequest.response);
        // console.log(data[0]);
        for (let i = 0; i < data[0].length; i++) {
          dispEmprunt.innerHTML += `<tr>
        <td id="montant" class="text-center align-middle">${data[0][i].montant}</td>
        <td id="taux" class="text-center align-middle">${data[0][i].taux}</td>
        <td id="duree" class="text-center align-middle">${data[0][i].duree}</td>
      </tr>`
        }
      } else {
        // il y a eu un problème avec la requête,
        console.log("un probleme est intervenue");
      }
    }
  }
  httpRequest.open('GET', statEmprunt);
  httpRequest.send();

}

// Fonction de recuperation des données du barregraphe
const barregraphe = () => {
  let statEmprunt = './Data/statistique.json';
  let httpRequest = new XMLHttpRequest();

  httpRequest.onreadystatechange = function () {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      // tout va bien, la réponse a été reçue
      if (httpRequest.status === 200) {
        let data = JSON.parse(httpRequest.response);
        let data1 = data[1];
        // console.log("longueur table", data1.length);
        for (let i = 0; i < data1.length; i++) {
          //   console.log("data1[i] : ",data1[i]);
          let points = parseInt(Object.values(data1[i]), 10);
          //   console.log("points : ", points);
          let calcHeigth = (((points - 4000) / 3000) * 100).toFixed(2);
          //   console.log(calcHeigth);
          updateUsedHeight("bar" + `${i+1}`, calcHeigth);
        }
      } else {
        // il y a eu un problème avec la requête,
        console.log("un probleme est intervenue");
      }
    }
  }
  httpRequest.open('GET', statEmprunt);
  httpRequest.send();

}

// Fonction de changement hauteur des barres graphique

function updateUsedHeight(id, calcHeigth) {
  //   console.log("id : ", id);
  //   console.log("calcHeigth", calcHeigth);
  const div = document.querySelector(`#${id}`);
  //   console.log("div : ", div);
  div.style.height = `${calcHeigth}%`;
}

//################ appel des fonctions ###################

// Tableau des taux d'emprunt
tableEmprunt();

// Mise en forme du barregraphe selon les donner recuperer
barregraphe();
