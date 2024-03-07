<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SFA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="CSS/style.css">
  <style>
    .d-block{
      filter: blur(0);
      margin-top: 0;
    }
    .text-white{
  font-weight: bold;
  }


  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">   
       
        
        

        <a href="#" class="navbar-brand"
          ><span class="text-primary">Search</span> For Agro</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarS"
          aria-controls="navbarS"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarS">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="index2.php" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item">
                <a href="progreso.php" class="nav-link">Progreso</a>
              </li>
            <li class="nav-item">
              <a href="cultivos.php" class="nav-link">Cultivos</a>
            </li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">Cerrar session</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators mb-5">
      <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" aria-current="true" aria-label="Slide 3"></button>
    </div>
    
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="CSS/IMG/cafe-grano.jpg" class="d-block w-100" alt="" />
          
          <div class="carousel-caption mb-5">
            <h1 class="text-white">Cuidado del cultivo</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non
              aliquam ante. Donec fermentum scelerisque pulvinar. Integer
              tincidunt dui ut risus porttitor mollis. Proin tristique elit ut
              nulla consequat faucibus. Fusce non risus erat. Nullam et eleifend
              metus. Aliquam erat volutpat. Integer efficitur elementum ligula
              id commodo. Ut et ipsum laoreet, laoreet quam quis, sodales
            </p>
            <a href="#" class="btn btn-primary mt-3">Más Información</a>
          </div>
        
        </div>
        <div class="carousel-item">
          <img src="CSS/IMG/zanahoria-carrusel.jpg" class="d-block w-100" alt="" />
          <div class="carousel-caption mb-5">
            <h1 class="text-white">Cuidado del cultivo</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non
              aliquam ante. Donec fermentum scelerisque pulvinar. Integer
              tincidunt dui ut risus porttitor mollis. Proin tristique elit ut
              nulla consequat faucibus. Fusce non risus erat. Nullam et eleifend
              metus. Aliquam erat volutpat. Integer efficitur elementum ligula
              id commodo. Ut et ipsum laoreet, laoreet quam quis, sodales nunc.
            </p>
            <a href="#" class="btn btn-primary mt-3">Más Información</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="CSS/IMG/arroz-carrusel.jpg" class="d-block w-100" alt="" />
          <div class="carousel-caption mb-5">
            <h1 class="text-white">Cuidado del cultivo</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non
              aliquam ante. Donec fermentum scelerisque pulvinar. Integer
              tincidunt dui ut risus porttitor mollis. Proin tristique elit ut
              nulla consequat faucibus. Fusce non risus erat. Nullam et eleifend
              metus. Aliquam erat volutpat. Integer efficitur elementum ligula
              id commodo. Ut et ipsum laoreet, laoreet quam quis, sodales nunc.
            </p>
            <a href="#" class="btn btn-primary mt-3">Más Información</a>
          </div>
        </div>
      </div>
    </div>



    <button class="carousel-control-prev" type="button" data-bs-target="#carouselE" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
      <span class="visually-hidden">hola</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselE" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"> </span>
      <span class="visually-hidden">hola</span>
    </button>
  </div>

  <div class="fondow bg-light">
    <section class="about section-padding">

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="CSS/IMG/arroz.jpg" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md5">
            <div class="about-text">
              <h2>TENGO <br />HAMBREEEEEEEE</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                non aliquam ante. Donec fermentum scelerisque pulvinar.
                Integer tincidunt dui ut risus porttitor mollis. Proin
                tristique elit ut nulla consequat faucibus. Fusce non risus
                erat. Nullam et eleifend metus. Aliquam erat volutpat. Integer
                efficitur elementum ligula id commodo. Ut et ipsum laoreet,
                laoreet quam quis, sodales nunc. Proin pharetra, nulla ac
                mollis eleifend, mauris nunc maximus enim, vel interdum dolor
                felis rhoncus lectus. Pellentesque mattis mi magna, a
                convallis ex placerat id. Nulla luctus lorem non augue laoreet
                tincidunt. Cras eget mollis turpis, sit amet egestas dui. Nunc
                consequat nunc ut velit ultricies, ac vehicula mi fringilla.
                Morbi vehicula dolor turpis. Cras eget nisi et velit posuere
                tincidunt cursus eu mi.
              </p>
              <a href="#" class="btn btn-primary">Mas informacion</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>










  

  <section class="services section-padding">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="section-header text-center text-white pb-5">
            <h2>Nuestros servicios</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <i class="bi bi-laptop"></i>
              <h3 class="card-title">Registrate</h3>
              <p class="lead">
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id.
                Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                eu mi
              </p>
              <button class="btn bg-primary text-white">
                <a href="inicarSe.html" class="text-white text-decoration-none">Mas informacion</a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <i class="bi bi-people-fill"></i>
              <h3 class="card-title">Nosotros</h3>
              <p class="lead">
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id.
                Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                eu mi
              </p>
              <button class="btn bg-primary text-white">
                Mas informacion
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <i class="bi bi-chat-square-text"></i>
              <h3 class="card-title">Contactanos</h3>
              <p class="lead">
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id.
                Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                eu mi
              </p>
              <button class="btn bg-primary text-white">
                <a href="contacto.html" class="text-white text-decoration-none">Mas informacion</a>


              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="portafolio section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-5 section-header bg-dark text-white text-center p-5 rounded mb-5" >
            <h2>Cultivos</h2>
            <p>
              maximus enim, vel interdum dolor felis rhoncus lectus.
              Pellentesque mattis mi magna, a convallis ex placerat id. Nulla
              luctus lorem non augue laoreet tincidunt. Cras eget mollis
              turpis, sit amet egestas dui. Nunc consequat nunc ut velit
              ultricies, ac vehicula mi fringilla. Morbi vehicula dolor
              turpis. Cras eget nisi et velit posuere tincidunt cursus eu mi
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="img/maiz.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Maiz</h3>
              <p class="lead">
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id.
                Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                eu mi
              </p>
              <button class="btn bg-primary text-white">
                Mas informacion
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="img/maiz.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Maiz</h3>
              <p class="lead">
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id.
                Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                eu mi
              </p>
              <button class="btn bg-primary text-white">
                Mas informacion
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="img/maiz.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Maiz</h3>
              <p class="lead">
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id.
                Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                eu mi
              </p>
              <button class="btn bg-primary text-white">
                Mas informacion
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="portafolio section-padding mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-5 section-header bg-dark text-white text-center p-5 rounded mb-5">
            <h2>Plagas</h2>
            <p>
              maximus enim, vel interdum dolor felis rhoncus lectus.
              Pellentesque mattis mi magna, a convallis ex placerat id. Nulla
              luctus lorem non augue laoreet tincidunt. Cras eget mollis
              turpis, sit amet egestas dui. Nunc consequat nunc ut velit
              ultricies, ac vehicula mi fringilla. Morbi vehicula dolor
              turpis. Cras eget nisi et velit posuere tincidunt cursus eu mi
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body ">
              <div class="img-arena mb-4">
                <img src="img/maiz.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Maiz</h3>
              <p class="lead">
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id.
                Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                eu mi
              </p>
              <button class="btn bg-primary text-white">
                Mas informacion
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="img/maiz.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Maiz</h3>
              <p class="lead">
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id.
                Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                eu mi
              </p>
              <button class="btn bg-primary text-white">
                Mas informacion
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-light pb-2">
            <div class="card-body">
              <div class="img-arena mb-4">
                <img src="img/maiz.jpg" class="img-fluid" alt="" />
              </div>
              <h3>Maiz</h3>
              <p class="lead">
                maximus enim, vel interdum dolor felis rhoncus lectus.
                Pellentesque mattis mi magna, a convallis ex placerat id.
                Nulla luctus lorem non augue laoreet tincidunt. Cras eget
                mollis turpis, sit amet egestas dui. Nunc consequat nunc ut
                velit ultricies, ac vehicula mi fringilla. Morbi vehicula
                dolor turpis. Cras eget nisi et velit posuere tincidunt cursus
                eu mi
              </p>
              <button class="btn bg-primary text-white">
                Mas informacion
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">&copy; Search For Agro 2024</p></div>
        </footer>

  <script>
    const body = document.body;
    const labelToggle = document.querySelector(".theme-switch");

    labelToggle.addEventListener("click", (event) => {
      if (event.target.tagName.toLowerCase() !== 'input') {
        if (body.classList.contains("modo-oscuro")) {
          body.classList.remove("modo-oscuro");
          localStorage.setItem("modo", "claro");
        } else {
          body.classList.add("modo-oscuro");
          localStorage.setItem("modo", "oscuro");
        }
      }
    });

    const modoAlmacenado = localStorage.getItem("modo");
    if (modoAlmacenado) {
      body.classList.add(
        modoAlmacenado === "oscuro" ? "modo-oscuro" : "modo-claro"
      );
    }
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>