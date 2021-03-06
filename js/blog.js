function getBlogs() {
  let httpRequest = new XMLHttpRequest();
  httpRequest.onreadystatechange = function () {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      // tout va bien, la réponse a été reçue
      if (httpRequest.status === 200) {
        // Declaration des elements html
        const blog = document.getElementById("blog");
        
        // Affectation de la reponse dans une variable
        let blogs = JSON.parse(httpRequest.response);
        //console.log("longueur :", blogs.length);
        for (let i = 0; i < blogs.length; i++) {
          // Execution de la fonction
          
          // console.log("newblog :", blog);
          blog.innerHTML += `<div class="d-flex flex-wrap mx-md-2 col-10 col-md-5 col-lg-5"><h4 class="d-flex col-12">` + blogs[i].id + `</h2><p class="d-flex col-12">` + blogs[i].titre + `</p><p class="d-flex col-12">` + blogs[i].contenu + `</p></div>`;
        //   console.log("blog"+`${i}`);
        }
      } else {
        // il y a eu un problème avec la requête,
        console.log("un probleme est intervenue");
      }
    }
  }
  httpRequest.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles');
  httpRequest.send();
}

//initialisation et execution
const init = () => {

  // appel de la fonction
  getBlogs();
}

//appel de la fonction init au chargement de la page
window.addEventListener('load', () => {
  init();
});
