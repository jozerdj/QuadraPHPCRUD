<?php
include("conexao.php");
$aluguel = selectIdAluguel($_POST["id"]);
?>

<link href="css/bootstrap.css" rel="stylesheet">
<meta charset="UTF-8">
<h1 align="center">Alterar Aluguel</h1>


<div class="container">
    <form name="dadosQuadra" action="conexao.php" method="POST">
        <div class="form-group">
            <label for="responsavel">Responsável</label>
            <input type="text" class="form-control" name="responsavel"  value="<?=$aluguel["responsavel"]?>"  id="responsavel" 
                   aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">Digite o nome do responsável pelo horário</small>
        </div>
        
        <div class="form-group">
            <label for="quadraSelect">Quadra</label>
            <select class="form-control" name="quadraSelect" id="quadraSelect">
                <option <?php if($aluguel["numero"] == "Quadra 1") echo "selected=\"selected\"";?>>Quadra 1</option>
                <option <?php if($aluguel["numero"] == "Quadra 2") echo "selected=\"selected\"";?>>Quadra 2</option>
                <option <?php if($aluguel["numero"] == "Quadra 3") echo "selected=\"selected\"";?>>Quadra 3</option>
                <option <?php if($aluguel["numero"] == "Quadra 4") echo "selected=\"selected\"";?>>Quadra 4</option>
                <option <?php if($aluguel["numero"] == "Quadra 5") echo "selected=\"selected\"";?>>Quadra 5</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="horarioSelect">Horário</label>
            <select class="form-control" name="horarioSelect" id="horarioSelect">
                <option <?php if($aluguel["horario"] == "14:00") echo "selected=\"selected\"";?>>14:00</option>
                <option <?php if($aluguel["horario"] == "15:00") echo "selected=\"selected\"";?>>15:00</option>
                <option <?php if($aluguel["horario"] == "16:00") echo "selected=\"selected\"";?>>16:00</option>
                <option <?php if($aluguel["horario"] == "17:00") echo "selected=\"selected\"";?>>17:00</option>
                <option <?php if($aluguel["horario"] == "18:00") echo "selected=\"selected\"";?>>18:00</option>
                <option <?php if($aluguel["horario"] == "19:00") echo "selected=\"selected\"";?>>19:00</option>
                <option <?php if($aluguel["horario"] == "20:00") echo "selected=\"selected\"";?>>20:00</option>
                <option <?php if($aluguel["horario"] == "21:00") echo "selected=\"selected\"";?>>21:00</option>
                <option <?php if($aluguel["horario"] == "22:00") echo "selected=\"selected\"";?>>22:00</option>
                <option <?php if($aluguel["horario"] == "23:00") echo "selected=\"selected\"";?>>23:00</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="diaSelect">Dia</label>
            <select class="form-control" name="diaSelect" id="diaSelect">
                <option <?php if($aluguel["dia"] == "Domingo") echo "selected=\"selected\"";?>>Domingo</option>
                <option <?php if($aluguel["dia"] == "Segunda") echo "selected=\"selected\"";?>>Segunda</option>
                <option <?php if($aluguel["dia"] == "Terça") echo "selected=\"selected\"";?>>Terça</option>
                <option <?php if($aluguel["dia"] == "Quarta") echo "selected=\"selected\"";?>>Quarta</option>
                <option <?php if($aluguel["dia"] == "Quinta") echo "selected=\"selected\"";?>>Quinta</option>
                <option <?php if($aluguel["dia"] == "Sexta") echo "selected=\"selected\"";?>>Sexta</option>
                <option <?php if($aluguel["dia"] == "Sábado") echo "selected=\"selected\"";?>>Sábado</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="pagoSelect">Pago</label>
            <select class="form-control" name="pagoSelect" id="pagoSelect">
                <option <?php if($aluguel["pago"] == "Pago") echo "selected=\"selected\"";?>>Pago</option>
                <option <?php if($aluguel["pago"] == "Não Pago") echo "selected=\"selected\""?>>Não Pago</option>
            </select>
        </div>
        
        <input type="hidden" name="id" value="<?=$aluguel["id"]?>" />

        
        <input type="hidden" name="acao" value="alterar" />
        <button type="submit" class="btn btn-primary">Enviar</button>
        
    </form>
</div>