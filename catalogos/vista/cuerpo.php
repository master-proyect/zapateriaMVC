<link rel="stylesheet" href="vista/materialize/css/materialize.min.css">

<div class=" row ">



  <div class=" col s12 m3 l3">
     <ul class="collapsible popout" data-collapsible="accordion">

       <blockquote class="grey lighten-5">
    Filtros
   </blockquote>
       <li>
  <div class="collapsible-header">

  <i class="material-icons">monetization_on</i>Precio
  </div>
  <div class="collapsible-body grey lighten-5">



    <p >
      <input onclick="loadXMLDocm()" name="group1" type="radio" id="test1" />
      <label for="test1">Menor a Mayor </label>

    </p>
    <p>
      <input onclick="loadXMLDocmm()" name="group1" type="radio" id="test2" />
      <label for="test2">Mayor a Menor </label>
    </p>



  </div>
       </li>
       <li>
  <div class="collapsible-header">

  <i class="material-icons">line_style</i>Talla   Cm.
  </div>
  <div class="collapsible-body grey lighten-5 black-text">
  <form action="#">
     <p class="range-field">
       <input  onchange="talla()" type="range" id="test5" min="24" max="31" step="0.5"/>
     </p>
   </form>
  </div>


       </li>

       <li>
  <div class="collapsible-header">
  <i class="material-icons">label_outline</i> Marca
  </div>
  <div class="collapsible-body grey lighten-5">

  <p>
    <input onclick="cate()"  onchange="showContent1()"  type="checkbox" id="cater"   class="filled-in"/>
    <label for="cater">Caterpila</label>
  </p>
  <p>
    <input onclick="conv()" onchange="showContent2()"  type="checkbox" id="con" value="Converse"  class="filled-in" />
    <label for="con">Converse</label>
  </p>
  <p>
    <input type="checkbox"  onchange="showContent3()" onclick="hus()" class="filled-in" id="hus" />
    <label for="hus">Hush Puppies</label>
  </p>
  <p>
    <input type="checkbox" onchange="showContent4()" onclick="nik()" id="nike" class="filled-in" />
    <label for="nike">Nike</label>
  </p>
  <p>
    <input type="checkbox" onchange="showContent5()" onclick="pir()" id="pirma" class="filled-in" />
    <label for="pirma">Pirma</label>
  </p>


  </div>
       </li>
       <li>

         <div class="collapsible-header">
          <i class="material-icons">directions_walk</i> Ocasion
         </div>
         <div class="collapsible-body grey lighten-5">
           <form action="#">
           <p>
             <input type="checkbox" onchange="showContent6()" onclick="casual()" id="casu"  class="filled-in"/>
             <label for="casu">Casual</label>
           </p>
           <p>
             <input type="checkbox" onchange="urba()" onclick="urb()" id="ur" class="filled-in" />
             <label for="ur">Urbano</label>
           </p>
           <p>
             <input type="checkbox" onchange="formaloc()" onclick="f()" class="filled-in" id="forma" />
             <label for="forma">Formal</label>
           </p>
           <p>
             <input type="checkbox"  onchange="soccloc()" onclick="so()" id="socc" class="filled-in" />
             <label for="socc">Soccer</label>
           </p>
           <p>
             <input type="checkbox" onchange="ruloc()" onclick="ru()" id="run" class="filled-in" />
             <label for="run">Running</label>
           </p>

         </form>
         </div>
       </li>
     </ul>



  </div>

  <div class="container col s12 m9 l8" >

<br>
  <div class="chip">
<a href="http://127.0.0.1/zapateriaMVC/index.php"><i class="fa fa-home" aria-hidden="true"> Inicio </i>
</a>
  </div>
  <div class="chip">
    <a href="catalogoindex.php"><i class="fa fa-male" aria-hidden="true"> Hombres </i>
</a>
  </div>
<br>



<div id="filtro">
  <?php

  include 'modelo/catagen.php';

   ?>

</div>
<div id="filtro2">

</div>
<div id="filtro3">

</div>
<div id="filtro4">

</div>
<div id="filtro5">

</div>
<div id="filtro6">

</div>
<div id="filtro7">

</div>
<div id="filtro8">

</div>
<div id="filtro9">

</div>
<div id="filtro10">

</div>
