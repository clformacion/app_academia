

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
        <?php include 'log/header.php'?>
        </header>
        <main>

        <div class="container mt-3"  style="border: 2px solid black;background-color: gray;  ">

        <div class="mb-3">


<div style="margin-top:10px;" style="float:left">
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z"/>
</svg>
</div>

<div class="mb-3" style="float: right;">
    <label for="" class="form-label" style="float: right; margin-top: -15px;" ><b>Nª Registro</b></label>
    <input
      type="text"
      class="form-control"
      name="registro"
      id=""
      aria-describedby="helpId"
      style="width: 150px; margin-top:15px; ";
      placeholder=""
    />
  </div>






  <h2 style="text-align: center; color:blue;font-size:30px; margin-left:250px ">INCRIPCIONES NUEVAS</h2>
  
 <form action="">
  



  
    <label for="" class="form-label" style="margin-top:5px"><b>Nombre del Estudiante</b></label>
    <input
      type="text"
      class="form-control"
      name="nombre"
      id=""
      aria-describedby="helpId"
      placeholder=""
      style="width: 500px;";
    />
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label" style="float: right; margin-top: -85px; margin-right:500px"><b>DNI</b></label>
    <input
      type="text"
      class="form-control"
      name="dni"
      id=""
      aria-describedby="helpId"
      style="width: 500px; float:right; margin-top:-55px;margin-right:5px";
      placeholder=""
    />
  </div>
  





 
  <div class="mb-3">
    <label for="" class="form-label" style="margin-top:5px"><b>Direccion</b></label>
    <input
      type="text"
      class="form-control"
      name="direccion"
      id=""
      aria-describedby="helpId"
      placeholder=""
      style="width: 800px;";
    />
  </div>
  

  <div class="mb-3">
    <label for="" class="form-label" style="float: right; margin-top: -85px; margin-right:270px"><b>Telefono</b></label>
    <input
      type="text"
      class="form-control"
      name="telefono"
      id=""
      aria-describedby="helpId"
      style="width: 300px; float:right; margin-top:-55px;margin-right:5px";
      placeholder=""
    />
  </div>
  <div class="mb-3">
  <label for="" class="form-label" style="margin-top:5px; width:300px"><b>CURSO A INSCRIBIR</b></label>
  <select class="form-select form-select-lg" name="curso">
     <option>ELIJA CURSO</option>
     <option>FCD0022 1 FULLSTACK WEB DEVELOPER CON JAVASC</option>
     <option>IFCD0023 2 FULLSTACK JÚNIOR WEB DEVELOPER CON C# </option>
     <option>IFCD0024 2 FULLSTACK JÚNIOR WEB DEVELOPER CON PHP </option>
     <option>IFCD0025 1 FUNDAMENTOS DE PROGRAMACIÓN CON HTML, CSS Y JAVASCRIPT  </option>
     <option>IFCD0034 1 PROGRAMACIÓN CON .NET </option>
   </select>
  </div>
   

  <label for="" class="form-label" style="margin-top:5px; width:300px"><b>HORARIO DE ESTUDIO:</b></label>
  <div class="form-check">
      <input type="radio" class="form-check-input" id="radio1" name="opcion1" value="option1" >
      <label class="form-check-label" for="radio1">Mañana</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio2" name="opcion2" value="option2"  >
      <label class="form-check-label" for="radio2">Tarde</label>
    </div>
    
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio3" name="opcion3" value="option3">
      <label class="form-check-label" for="radio2">Noche</label>
    </div>


    <div class="mb-3">
    <label for="" class="form-label" style="float: right; margin-top: -110px; margin-right:700px"><b>MODALIDAD</b></label>

<div class="form-check" >
      <input type="radio" class="form-check-input" id="radio1" name="opcion4" value="option1" checked style="float: right; margin-top: -72px; margin-right:670px">
      <label class="form-check-label" for="radio1"  style="float: right; margin-top: -80px; margin-right:700px">Presencial</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio2" name="opcion5" value="option2" style="float: right; margin-top: -72px; margin-right:670px">
      <label class="form-check-label" for="radio2"style="float: right; margin-top: -80px; margin-right:700px" >Aula Virtual</label>
    </div>
    
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio3" name="opcion6" value="option3"style="float: right; margin-top: -72px; margin-right:670px" >
      <label class="form-check-label" for="radio2"style="float: right; margin-top: -80px; margin-right:700px" ><p>Mixto</p></label>
    </div>


    </div>

    <div class="mb-3">
    <label for="" class="form-label" style="float: right; margin-top: -200px; margin-right:270px"><b>Correo Electronico</b></label>
    <input
      type="text"
      class="form-control"
      name="correo"
      id=""
      aria-describedby="helpId"
      style="width: 300px; float:right; margin-top:-160px;margin-right:5px";
      placeholder=""
    />
    </div>

  <button type="reset" class="btn btn-primary" style="float: right; margin-top:-50px" >Borrar</button>
  <button type="reset" class="btn btn-primary" style="float: left; margin-top:-50px" >Registrar</button>




</div>






 </form>

        </main>
        <footer>
          <?php include'log/footer.php' ?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
