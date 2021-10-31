const dispEmprunt = document.querySelector("#dispEmprunt");

const tableEmprunt = () => {
  let statEmprunt = './Data/statistique.json';
  let httpRequest = new XMLHttpRequest();

  httpRequest.onreadystatechange = function () {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      // tout va bien, la réponse a été reçue
      if (httpRequest.status === 200) {
        let data = JSON.parse(httpRequest.response);
        
        for (let i=0; i < data.length; i++) {
          dispEmprunt.innerHTML += `<tr>
        <td id="montant" class="text-center align-middle">${data[i].montant}</td>
        <td id="taux" class="text-center align-middle">${data[i].taux}</td>
        <td id="duree" class="text-center align-middle">${data[i].duree}</td>
      </tr>`
        }
        // els.popUp.innerHTML = httpRequest.responseText;
      } else {
        // il y a eu un problème avec la requête,
        console.log("un probleme est intervenue");
      }
    }
  }
  httpRequest.open('GET', statEmprunt);
  httpRequest.send();

}

tableEmprunt();
