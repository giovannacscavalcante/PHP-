<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
<?php
//conexão
try 
{
  $pdo = new PDO ("mysql:dbname=crudpdo;host=localhost","root","");
}
catch (PDOException $e){
  echo "Erro com banco de dados: ".$e->getMessage();
}
catch(Exception $e)
{
  echo "Erro generico: ".$e->getMessage();
}

//INSERT
//1ª forma
$res = $pdo->prepare("insert into pessoa(nome,telefone,email)values(:n,:t,:e)");
$res->bindValue(":n","Gabriel");
$res->bindValue(":t","9966666666");
$res->bindValue(":e","gabs@gmail.com");
$res->execute();
////2ª forma 
//$pdo->query("insert into pessoa(nome,telefone,email)values('Mirian','0000000','teste@gmail.com')");

//-- DELETE
//1ª forma
//$res =$pdo-<query("delete from pessoa where id = '1'");
//2ª forma
// $cmd =$pdo->prepare("delete from pessoa where id = :id");
// $id=9;
// $cmd->bindValue(":id",$id);
// $cmd->execute();


//--UPDATE
//1ª forma
//$cmd=prompt de comando
//$cmd = $pdo->prepare("update pessoa set email = :e where id = :id");
// $cmd->bindValue(":e","kleber@gmail.com");
// $cmd->bindValue(":id",2);
// $cmd->execute();

//-- Select imprimindo na tela de navegação
//1ª forma "como array"
// $cmd= $pdo->prepare("select * from pessoa where id = :id");
// $cmd->bindValue(":id",2);
// $cmd->execute();
// $resultado = $cmd->fetch()
// print_r($resultado);

//print_r($resultado);
//2ª forma "visualmente mais bonito"
$cmd= $pdo->prepare("select * from pessoa where id = :id");
$cmd->bindValue(":id",1);
$cmd->execute();
$resultado = $cmd->fetch(PDO::FETCH_ASSOC); //pega os métodos e processa cada dado em matriz


?>


    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://c.tenor.com/rz4kOurhQ0QAAAAd/big-mouth-cat.gif" width="0px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Adote um gatíneo</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled">Fotos de gatíneos</a>
        </li>
      </ul>
      <form class="d-flex" role="procurar gatíneos">
        <input class="form-control me-2" type="search" placeholder="Procurar gatíneos" aria-label="Search">
        <button style="border: none" type="submit"><img src="https://i.pinimg.com/originals/a6/0c/c7/a60cc74b45fb3423d1d76176767f947c.png" width="70px"></button>
        <?php foreach ($resultado as $key => $value) : ?>
        <ul class="list-group">
  <li class="list-group-item active" aria-current="true"> Dado</li>
  <li class="list-group-item"><?php echo $key.": ".$value. "<br>";?></li>
</ul>
<?php endforeach; ?>
      </form>
    </div>
  </div>
</nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://placekitten.com/1600/700" class="d-block w-100"  alt="Gatinho">
      <div class="carousel-caption d-none d-md-block" style="text-align: right;">
        <h5>Gatineos</h5>
        <p>Meu sonho é ser um leão, meu nome é Jeromel.</p>
      </div>
    </div>
  </div>
</div>
    <h1></h1>

    <div class="container">


  <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img class="img-thumbnail" src="https://data.whicdn.com/images/180278761/original.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>


  <div class="row align-items-center">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>


  <div class="row align-items-end">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>?
  </body>
</html>
