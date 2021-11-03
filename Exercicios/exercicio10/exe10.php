<?php
    class banco(){
        public $nomeCliente = $_POST['nomeCliente'];
        
        function banco(){
            
            $conexao = mysqli_connect('localhost','root','');
            $sql = 'CREATE DATABASE IF NOT EXISTS `Vendas` DEFAULT CHARACTER SET utf8mb4;';
            mysqli_query($conexao, $sql);
            $conexao = mysqli_connect('localhost','root','','Vendas');
            $sql = 'CREATE TABLE IF NOT EXISTS `Clientes` (
                `CODIGO` int UNSIGNED NOT NULL AUTO_INCREMENT,
                `NOME` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
                `ENDERECO` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
                `CIDADE` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
                `RENDA` float UNSIGNED NOT NULL, 
                PRIMARY KEY (`CODIGO`) 
            )ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4';
            mysqli_query($conexao, $sql);
        }
        function verificaCliente(){
            $conexao = mysqli_connect('localhost','root','','Vendas');
            $sql = 'SELECT NOME FROM `Clientes` WHERE NOME=`'.$nomeCliente. '`;'
            $resultado = mysqli_query($conexao, $sql);
            if(mysqli_num_rows($resultado) == 0){
                criarCliente();
            }else{
                alterarCliente();
            }
        }
        function criarCliente(){
            echo '<h1>criar cliente</h1>':
            echo '<form action="" method="post">';
            echo 'Nome: <input type="text" name="nome" value="'.$nomeCliente.'">';
            echo  'Endereço: <input type="text" name="endereco">';
            echo  'Cidade: <input type="text" name="cidade">';
            echo 'Renda: <input type="number" name="renda">';
            echo  '<input type="submit" value="Enviar"> ';
            echo   '</form>'; 
            if(!empty($_POST['cidade'])){
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $cidade = $_POST['cidade'];
                $renda = $_POST['renda'];
                $sql = 'INSERT INTO `Clientes` VALUES(NULL,'.$nome.', '.$endereco.', '.$cidade.', '.$renda.')';
                $conexao = mysqli_connect('localhost','root','','Vendas');
                mysqli_query($conexao,$sql);
            }
        }
        function alterarCliente(){
            
        }
    }
?>