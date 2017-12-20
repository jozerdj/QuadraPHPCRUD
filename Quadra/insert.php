<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link href="css/bootstrap.css" rel="stylesheet">
<meta charset="UTF-8">
<h1 align="center">Inserir Aluguel</h1>


<div class="container">
    <form name="dadosQuadra" action="conexao.php" method="POST">
        <div class="form-group">
            <label for="responsavel">Responsável</label>
            <input type="text" class="form-control" name="responsavel" id="responsavel" aria-describedby="nameHelp" placeholder="Nome do Responsável">
            <small id="nameHelp" class="form-text text-muted">Digite o nome do responsável pelo horário</small>
        </div>
        
        <div class="form-group">
            <label for="quadraSelect">Quadra</label>
            <select class="form-control" name="quadraSelect" id="quadraSelect">
                <option>Quadra 1</option>
                <option>Quadra 2</option>
                <option>Quadra 3</option>
                <option>Quadra 4</option>
                <option>Quadra 5</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="horarioSelect">Horário</label>
            <select class="form-control" name="horarioSelect" id="horarioSelect">
                <option>14:00</option>
                <option>15:00</option>
                <option>16:00</option>
                <option>17:00</option>
                <option>18:00</option>
                <option>19:00</option>
                <option>20:00</option>
                <option>21:00</option>
                <option>22:00</option>
                <option>23:00</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="diaSelect">Dia</label>
            <select class="form-control" name="diaSelect" id="diaSelect">
                <option>Domingo</option>
                <option>Segunda</option>
                <option>Terça</option>
                <option>Quarta</option>
                <option>Quinta</option>
                <option>Sexta</option>
                <option>Sábado</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="pagoSelect">Pago</label>
            <select class="form-control" name="pagoSelect" id="pagoSelect">
                <option>Pago</option>
                <option>Não Pago</option>
            </select>
        </div>
        
        <input type="hidden" name="acao" value="inserir" />
        <button type="submit" class="btn btn-primary">Enviar</button>
        
    </form>
</div>
