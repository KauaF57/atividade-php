<?php
class usuario {
    public int $id;
    public string $nome;
    public string $email;
    public string $tipo;
    private string $senha_hash;
    public function saudacao() {
        return "Olá, " . $this->nome;
    }
     public function definirSenha(string $senha): void
    {
        $this->senha = password_hash($senha, PASSWORD_BCRYPT);
    }
    public function verificarSenha(string $senha): bool 
    {
         return password_verify($senha, $this->senha);
    }
}



class instrutor extends usuario {
    public array $materiasLecionadas;

}



class aluno extends usuario {
    public int $xp_total = 0;
}

$instrutor = new Instrutor();

$instrutor->id = 1;
$instrutor->nome = "Carlos";
$instrutor->email = "carlos@email.com";

$aluno = new Aluno();

$aluno->id = 2;
$aluno->nome = "João";
$aluno->email = "joao@email.com";
?>