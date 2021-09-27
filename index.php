<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="" href="./assets/css/style.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    
    />
    
  </head>
<div class="container">


  <body class="p-3 mb-2 bg-primary text-white bg-opacity-100" >
    <!--CABECERA-->

    <header id="header">
      <div id="logo">
        <img src="assets/img/camiseta.png" alt="camiseta logo " />
        <a href="index.php"> tienda de camisetas </a>
      </div>
    </header>
    <!--MENU-->

    <nav id="menu">
      <ul>
        <li>
          <a href="#">Inicio</a>
        </li>
        <li>
          <a href="#">categoria</a>
        </li>
        <li>
          <a href="#">categoria</a>
        </li>
        <li>
          <a href="#">categoria</a>
        </li>
        <li>
          <a href="#">categoria 1</a>
        </li>
      </ul>
    </nav>
    <div id="content">
      <!--BARRA LATERAL-->
      <aside id="lateral">
        <div id="login" class="block_aside">
            <h3>entrar a la web</h3>
          <form action="" method="POST">
            <label for="email">Email</label>
            <input  class="form-control" type="email" name="email" placeholder="email" />

            <label for="password">Password</label>
            <input  class="form-control"  type="password" name="password" placeholder="contraseña"/>
           <br>
            <input  class="btn btn-primary" type="submit" value="enviar" />
            <br />
            <li>
            <a href="">mis pedidos</a> </li>
          <li> <a href="">gestionar pedidos</a></li> 
           <li> <a href=""> gestionar categorias</a></li>
           
          </form>
        </div>
      </aside>
    </div>

    <!--CONTENIDO CENTRAL-->
    <div id="central">
      <h1>Productos Destacados</h1>
      <div class="product">
        <img src="assets/img/camiseta.png" alt="" />
        <h2 >Camiseta azul ancha</h2>
        <p>30 euros</p>
        <a href="">Comprar</a>
      </div>
      <div class="product">
        <img src="assets/img/camiseta.png" alt="" />
        <h2>Camiseta azul ancha</h2>
        <p>30 euros</p>
        <a href="">Comprar</a>
      </div>
      <div class="product">
        <img src="assets/img/camiseta.png" alt="" />
        <h2>Camiseta azul ancha</h2>
        <p>30 euros</p>
        <a href="">Comprar</a>
      </div>
      <div class="product">
        <img src="assets/img/camiseta.png" alt="" />
        <h2>Camiseta azul ancha</h2>
        <p>30 euros</p>
        <a href="">Comprar</a>
      </div>
    </div>

    <!--PIE DE PAGINA-->

    <footer id="footer">
      <p>
        Desarrollado Por manuel Guzman &copy;
        <?=date('Y')?>
      </p>
    </footer>
    </div>
  </body>
</html>
