<?php
    $action = "inserir";


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Personagens</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="estilo.css" >
    </head>
    <body>
        <?php require_once 'menu.php'; ?>
        

<h1 id='dndh1'>Cadastre seu personagem de D&D!</h1>
<img src="https://i.pinimg.com/originals/a0/c8/1d/a0c81d387bb9f52712ddd8038e56d907.jpg" alt="dnd" width="450" height="500px">
<hr>
        
<form id='formPersonagens' method="POST" action="salvarPersonagem.php?<?php echo $action; ?>">
            <label for="txtNome">Nome:</label>
            <input type="text" name="txtNome" required />
            <br>
            <label for="txtClasse">Classe:</label>
            <input type="text" name="txtClasse" required />
            <br>
            <input type="submit" value="Enviar"/>
            <input type="reset" value="Limpar" />
        </form>
<br>
        <hr>
        <br>
        <table id="tbl_personagens">
            <tr>
                <th>Nome</th>
                <th>Classe</th>
            </tr>
            
            <?php
            include_once 'clsConexaoPersonagem.php';
            $query = "SELECT * FROM personagens";
            $result = Conexao::consultar($query);
            while ($char = mysqli_fetch_array($result)){
                echo '<tr>';
                echo '<td>'.$char['nome'].'</td>';
                echo '<td>'.$char['classe'].'</td>';
                echo '</tr>';
            }
            ?>
        </table>
            
            
    </body>
</html>