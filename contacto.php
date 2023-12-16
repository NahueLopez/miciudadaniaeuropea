<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Yanho" />
    <meta name="description" content="Sitio Mi Ciudadanía Europea">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Mi Ciudadanía Europea</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>

/* Sección de contacto */
body{
    background-color: black;
}
section {
    position: relative;
    z-index: 3;
    padding-top: 100px;
    padding-bottom: 50px;
    background-color: #e4e6ef;
}

.section-header {
    margin-bottom: 50px;
    text-align: center;
}

.section-header h2 {
    color: #161616;
    font-weight: bold;
    font-size: 3em;
    margin-bottom: 20px;
}

.section-header p {
    color: #DCCDD4;
    font-size: 1.5em;
}

.row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.contact-info {
    width: 50%;
    margin-bottom: 30px;
}

.contact-info-item {
    display: flex;
    margin-bottom: 30px;
}

.contact-info-icon {
    height: 70px;
    width: 70px;
    background-color: #DCCDD4;
    text-align: center;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-info-icon i {
    font-size: 30px;
    color: #ffffff;
}

.contact-info-content {
    margin-left: 20px;
}

.contact-info-content h4 {
    color: #DCCDD4;
    font-size: 1.4em;
    margin-bottom: 5px;
}

.contact-info-content p {
    color: black;
    font-size: 1em;
}

.contact-form {
    background-color: #fff;
    padding: 40px;
    width: 45%;
    padding-bottom: 20px;
    padding-top: 20px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.contact-form h2 {
    font-weight: bold;
    font-size: 2em;
    margin-bottom: 10px;
    color: #333;
}

.contact-form .input-box {
    position: relative;
    width: 100%;
    margin-top: 10px;
}

.contact-form .input-box input,
.contact-form .input-box textarea,
.contact-form .input-box select {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    outline: none;
    transition: border-color 0.3s;
}

.contact-form .input-box input:focus,
.contact-form .input-box textarea:focus,
.contact-form .input-box select:focus {
    border-color: #00bcd4;
}

.contact-form .input-box span {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: #666;
}

.contact-form .input-box input:focus ~ span,
.contact-form .input-box textarea:focus ~ span,
.contact-form .input-box select:focus ~ span {
    color: #e91e63;
    font-size: 12px;
    transform: translateY(-20px);
}

.contact-form .input-box input[type="submit"] {
    width: 100%;
    background: #00bcd4;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
    border: 1px solid #00bcd4;
    border-radius: 4px;
    transition: 0.5s;
}

.contact-form .input-box input[type="submit"]:hover {
    background: #fff;
    color: #00bcd4;
}

/* Estilos responsive */
@media(max-width: 575px) {
    .banner-image {
        height: 900px;
    }
    section{
        width: 100%;
    }
    .contact-info-icon i {
        font-size: 20px;
    }
    .contact-info-icon {
        height: 40px;
        width: 40px;
    }
    .contact-info-content  {
        margin-left: 8px;
    }    
    .map {
        padding-top: 250px;
    }

    .map-map {
        width: 250px;
        height: 150px;
    }

    .section-header .container {
        width: 100%;
        margin-top: 50px;
    }

    .contact-info {
        width: 100%;
        margin-bottom: 40px;
    }

    .contact-info iframe {
        width: 100%;
    }

    .contact-form {
        display: none;
    }
}


    </style>


</head>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <?php require_once 'templates/header.php';?>
        <!-- end: Header -->


        <section>
    
        <div class="section-header">
          <div class="container">
            <h2>Contactanos</h2>
            <p>No dude en comunicarse con nosotros, lo invitamos a dejarnos sus datos y nos contactaremos con usted a la brevedad.</p>
          </div>
        </div>
        
        <div class="container">
          <div class="row">
            
            <div class="contact-info">
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="fas fa-home"></i>
                </div>
                
                <div class="contact-info-content">
                  <h4>Nuestra oficinas </h4>
                  <p>CABA, Buenos Aires Argentina</p>
                </div>
              </div>
              
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="fas fa-phone"></i>
                </div>
                
                <div class="contact-info-content">
                  <h4>Telefono</h4>
                  <p> - </p>
                </div>
              </div>
              
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="fas fa-envelope"></i>
                </div>
                
                <div class="contact-info-content">
                  <h4>Email</h4>
                 <p>miciudadaniaeuropea@gmail.com</p>
                </div>
              </div>
             

            </div>
            
            <div class="contact-form">
            <form class= action="/submit" method="post" id="contact-form">
                <label for="nombre">Nombre y Apellido:</label>
                <input class="input-box" type="text" id="nombre" name="nombre" required>

                <label for="nombre">Fecha de nacimiento:</label>
                <input  type="date" id="fecha" name="fecha" required>
                
                <label for="nombre">Nacionalidad que te gustaria solicitar:</label>
                <select>
                    <option> -- Seleccione una nacionalidad -- </option>
                    <option> Italiana </option>
                    <option> Española </option>
                    <option> Alemana </option>
                    <option> Croata </option>
                    <option> Otros </option>
                    <!-- Que aparezca un text para escribir -->
                </select>

                <label for="documentosParentesco">¿Contás con documentos que acrediten tu parentesco con la persona que te hereda la nacionalidad?</label>

                    <input type="radio" id="si" name="documentosParentesco" value="si" required>
                    <label for="si">Sí</label>

                    <input type="radio" id="no" name="documentosParentesco" value="no" required>
                    <label for="no">No</label>


                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensaje">Comentarios:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

                <button class="btn-contactanos" type="submit">Enviar</button>
            </form>
            </div>
            
          </div>
        </div>
      </section>

            
        </div>

        <!-- Footer -->
        <?php require_once 'templates/footer.php';?>
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>

</html>