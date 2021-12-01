<?php 
include "template/header.php"; 
include "template/nav.php";
?>
<section id="popUp"></section>

<section class="d-flex col-12 flex-wrap justify-content-center mt-3 justify-content-md-around mt-md-5">

  <div id="tab1" class="col-10 col-md-5 mx-md-2 col-lg-3">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" colspan="3">Compte courant</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="col-auto me-auto align-middle">Solde :</td>
          <td class="text-center align-middle col-1">+</td>
          <td class="text-end align-middle col-1">245€</td>
        </tr>
        <tr>
          <td class="col-auto me-auto align-middle">Dernière opération :</td>
          <td class="text-center align-middle col-1">-</td>
          <td class="text-end align-middle col-1">600€</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="tab2" class="col-10 col-md-5 mx-md-2 col-lg-3">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" colspan="3">LEP</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="col-auto me-auto align-middle">Solde :</td>
          <td class="text-center align-middle col-1">+</td>
          <td class="text-end align-middle col-1">16354€</td>
        </tr>
        <tr>
          <td class="col-auto me-auto align-middle">Dernière opération :</td>
          <td class="text-center align-middle col-1">+</td>
          <td class="text-end align-middle col-1">1400€</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="tab3" class="col-10 mb-5 col-md-5 mx-md-2 col-lg-3">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" colspan="3">Livret A</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="col-auto me-auto align-middle">Solde :</td>
          <td class="text-center align-middle col-1">+</td>
          <td class="text-end align-middle">3875€</td>
        </tr>
        <tr>
          <td class="col-auto me-auto align-middle">Dernière opération :</td>
          <td class="text-center align-middle col-1">-</td>
          <td class="text-end align-middle col-1">1400€</td>
        </tr>
      </tbody>
    </table>
  </div>

</section>


<?php include "template/footer.php"; ?>