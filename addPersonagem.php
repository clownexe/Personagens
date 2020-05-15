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
        <br>

<h1 id='dndh1'>Cadastre seu personagem de D&D!</h1>
<img src="https://i.pinimg.com/originals/3f/6b/79/3f6b79503b98f7d85448b904382dadd2.jpg" alt="dnd" width="500">
<hr>
        
<form id='formPersonagens' method="POST" action="salvarPersonagem.php?<?php echo $action; ?>">
            <label for="txtNome">Nome:</label>
            <input type="text" name="txtNome" required />
            <br>
            <label for="txtClasse">Classe:</label>
            <input type="text" name="txtClasse" required />
            <br>
            <br>
            <input type="submit" value="Enviar"/>
            <input type="reset" value="Limpar" />
        </form>
        <hr>
        
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