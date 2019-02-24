<?PHP
 
$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'projeto');
mysqli_set_charset($conexao,'utf8');


$nome = $_POST['nome'];
$senha = $_POST['password'];
 
$sql = mysqli_query($conexao,"select * from admin") or die("Erro");
while($dados=mysqli_fetch_assoc($sql))
    {
       if($dados['admin_nome'] == $nome && $dados['senha'] == $senha){
        
       header('Location: admin.php?nome='.$nome);

    }
    }


    echo "aperte o botão de voltar e insira os dados corretamente";

?>