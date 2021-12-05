const popUpDisplay = () => {
  let popUpText = './Data/popup.php';
  
    let httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function () {
      if (httpRequest.readyState === XMLHttpRequest.DONE) {
        // tout va bien, la réponse a été reçue
        if (httpRequest.status === 200) {
          // console.log(httpRequest.responseText);
          els.popUp.innerHTML = httpRequest.responseText;
        } else {
          // il y a eu un problème avec la requête,
          console.log("un probleme est intervenue");
        }
      }
    }
    httpRequest.open('GET', popUpText);
    httpRequest.send();
  
}

const popUpClose = () => {
  els.popUp.classList.add('hidden');
  sessionStorage.setItem("informed", true);
}
