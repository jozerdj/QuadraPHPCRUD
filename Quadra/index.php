<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<link href="css/bootstrap.css" rel="stylesheet">

<meta charset="UTF-8">

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

td[value="Pago"] {
    color: red;
}

.greenrow{
    background-color: #80ff80;
}

.redrow{
    background-color: #ff8080;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

.menu {margin: 25px}

#menubtn {padding: 20px}

#tbbtn {
    width: 100%; 
    height: 100%;
}
</style>


<?php include("conexao.php");
      $grupo = selectAllAluguel();
?>

<html>
    <head>
        <title>Menu</title>
    </head>
    <body>
        <h1 align="center"> Menu </h1>
        
        <div class="container ">
            <div class="row">
                <div class="col text-center">
                    <form  class="menu" method="post" action="/Quadra/insert.php">
                        <button type="submit" id="menubtn" class="btn btn-block btn-primary">Inserir</button>
                    </form>
                </div>
                <div class="col text-center">
                    <form class="menu" method="post" action="/Quadra/search.php">
                        <button type="submit" id="menubtn" class="btn btn-block btn-success disabled">Consultar</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="container">
            <table border="1">
                <thead>
                    <tr>
                        <th>Responsavel</th>
                        <th>Dia</th>
                        <th>Horario</th>
                        <th>Quadra</th>
                        <th>Pago</th>
                        <th>Pagar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($grupo as $aluguel) { ?>
                        
                        
                            <td><?= $aluguel["responsavel"] ?></td>
                            <td><?= $aluguel["dia"] ?></td>
                            <td><?= $aluguel["horario"] ?></td>
                            <td><?= $aluguel["numero"] ?></td>
                            
                            <?php 
                                if ($aluguel["pago"] == "Pago"){
                                    $class = "greenrow";
                                }
                                else{
                                    $class = "redrow";
                                }
                                echo "<td class='$class'>";
                                echo $aluguel["pago"];
                                echo "</td>";
                            ?>
                            
                            <td>
                                <form name="pagar" action="conexao.php" method="POST">
                                    <input type="hidden" name="id" value=<?= $aluguel["id"] ?> />
                                    <input type="hidden" name="acao" value="pagar" />
                                    <input type="submit" id="tbbtn" value="Pagar" name="pagar"
                                           <?php if($aluguel["pago"] == "Pago"){ 
                                                    echo "class=\"btn\"   disabled";
                                                }
                                                else{
                                                    echo "class=\"btn btn-primary\"";
                                                }
                                           
                                           ?>
                                    />
                                    
                                </form>
                            </td>
                            
                            
                            <td>
                                <form name="alterar" action="alterar.php" method="POST">
                                    <input type="hidden" name="id" value=<?= $aluguel["id"] ?> />
                                    <input type="submit" id="tbbtn" class="btn btn-warning" value="Editar" name="editar" />
                                </form>
                            </td>
                            
                            
                            <td>
                                <form name="excluir" action="conexao.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $aluguel["id"] ?>" />
                                    <input type="hidden" name="acao" value="excluir" />
                                    <input type="submit" id="tbbtn" class="btn btn-danger" value="Excluir" name="excluir" />
                                </form>
                            </td>

                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
    </body>
</html>

