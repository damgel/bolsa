<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Publicar Oferta </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico a/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
            nd apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/jqueryUI.css">
        <link rel="stylesheet" href="validacionStyle.css">
        <script src="assets/js/modernizr2.6.2.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/jquery-v1.10.2.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

         <script>
function numeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789";
    especiales = [8,37,39,46];
 
    tecla_especial = false
    for(var i in especiales){
 if(key == especiales[i]){
     tecla_especial = true;
     break;
        } 
    }
 
    if(letras.indexOf(tecla)==-1 && !tecla_especial)
        return false;
		}
</script>

    </head>
    <body>
        <div id="header" class="navbar navbar-inverse navbar-static-top">
            <?php include_once 'layout/header.php'; ?>
        </div>
        <div id="contenedor" class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Publicar Oferta</div>
                <div class="panel-body">
                    <form action="#" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">       

                            <br>      
                            <fieldset>
                                <center><legend> Detalles de la oferta</legend></center>
                                <div class="form-group">  
                                    <div class="form-group">
                                        <label for="oferta" class="col-lg-3 control-label">Nombre de la Oferta</label>
                                        <div class="col-lg-4">
                                            <input type="text" placeholder="Detalle su oferta" class="form-control" id = "focusedInput" required pattern=".{6,30}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="area" class="col-lg-3 control-label">Area de la Empresa</label>
                                        <div class="col-lg-4">
                                            <input type="text" placeholder="Detalle su oferta" class="form-control" id = "focusedInput" required pattern=".{6,30}" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cargo" class="col-lg-3 control-label">Cargo Solicitado</label>
                                        <div class="col-lg-4">
                                            <input type="text" placeholder="Detalle su oferta" class="form-control" id = "focusedInput" required pattern=".{6,30}">
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <label for="puesto vacantes" class="col-lg-3 control-label">Puestos Vacantes</label>
                                        <div class="col-lg-4">
                                            <input type="number" name="num" min="1" max="15" class="form-control" id = "focusedInput" required>
                                        </div>
                                    </div>
                                    <div class="form-group">              
                                        <label for="tipo contratacion" class="col-lg-3 control-label">Tipo de Contratacion</label>
                                        <div class="col-lg-4">
                                            <select name="estadoci" class="form-control" id = "focusedInput" required>
                                                <option value="TC">Tiempo Completo</option> 
                                                <option value="MT">Medio Tiempo</option>
                                                <option value="T">Temporal</option>
                                            </select>
                                        </div>
                                    </div>


                                    <center><legend>Nivel de Experiencia</legend></center>
                                    <div class="form-group">   
                                        <label for="nivel experiencia" class="col-lg-3 control-label">Experiencia en anos</label>
                                        <div class="col-lg-4">
                                            <select name="anos" class="form-control" id = "focusedInput" required>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="mas de 5">mas de 5</option>
                                                <option value="Sin experiencia">sin experiencia</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">        
                                        <label for="edad" class="col-lg-3 control-label">Edad</label>
                                        <div class="col-lg-4">
                                            <input type="number" name="num" min="18" max="50" class="form-control" id = "focusedInput" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Genero</label>
                                        <div class="col-lg-4">
                                            <input type="radio" name="optionsRadios"  id = "focusedInput" checked>
                                            Masculino
                                            <input type="radio" name="optionsRadios"  id = "focusedInput">
                                            Femenino   
                                        </div>  
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Vehiculo</label>
                                        <div class="col-lg-4">
                                            <input type="radio" name="idioma" value="Si" checked > 
                                            Si
                                            <input type="radio" name="idioma" value="No" > 
                                            No
                                        </div>
                                    </div>

                                    <div class="form-group">        
                                        <label for="salariom" class="col-lg-3 control-label">Salario Maximo</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control"  id = "focusedInput" placeholder="salariom" onkeypress="return numeros(event)">
                                        </div>
                                    </div>

                                    <div class="form-group"> 
                                        <label for="salariomi" class="col-lg-3 control-label">Salario Minimo</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control"  id = "focusedInput" placeholder="salariomi" onkeypress="return numeros(event)">
                                        </div>
                                    </div>

                                    <div class="form-group"> 
                                        <label for="pais" class="col-lg-3 control-label">Pais</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control"  id = "focusedInput" placeholder="Pais" required pattern=".{6,20}">
                                        </div>
                                    </div>

                                    <div class="form-group"> 
                                        <label for="departamento" class="col-lg-3 control-label">Departamento</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control"  id = "focusedInput" placeholder="Departamento" required pattern=".{6,15}">
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                        </div>

                        <div class="form-group"> 
                            <fieldset>
                                <center><legend> Experiencias Requeridas </legend></center>

                                <div class="form-group">    
                                    <label for="indispensable" class="col-lg-3 control-label">Indispensable</label>
                                    <div class="col-lg-4">
                                        <Textarea class="form-control" rows="6"> </textarea>
                    </div>
                    </div>         
                    </fieldset>   
                   </div> 
    
               <div class="form-group">
                    <fieldset>
                     <center><legend> Educacion Superior </legend></center>
                     
                     <div class="form-group">
                     <label for="Titulo" class="col-lg-3 control-label">Titulo en</label>
                     <div class="col-lg-4">
                     <input type="text" class="form-control" id = "focusedInput" placeholder="Detalle " required pattern=".{6,30}">
                     </div>
                     </div>
                     
                     <div class="form-group">
                     <label for="nivel academico" class="col-lg-3 control-label">Nivel Academico </label>
                     <div class="col-lg-4">
                     <select name="nivel" id="nivel" class="form-control" id = "focusedInput" required>
                     <option value="1">Estudiante Universitario-Graduado</option>
                     <option value="2">Estudiante Universitario-mitad de sus estudios</option>
                     <option value="3">Estudiante Universitario-empezando sus estudios</option>
                     <option value="4">Bachiller</option>
                     </select>
                     </div>
                     </div>
                 </fieldset>
                 </div>
  
                 <div class="form-group"> 
                    <fieldset>
                    <center><legend> Oferta de Empleo </legend></center>
                    
                    <div class="form-group">
                    <label for="nivel academico" class="col-lg-3 control-label">Descripcion de la Oferta</label>
                    <div class="col-lg-4">
                    <Textarea class="form-control" rows="6">  </textarea>
                    </div>
                    </div>
                     
                </fieldset>
                </div>
                <center><button type="submit" class="btn btn-primary btn-lg">Enviar</button> </center>  
                
            </form>
                </div>       
        </div>


        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.10.2.js"><\/script>')</script>
        <script src="assets/js/jquery-v1.10.2.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

    </body>
</html>
