<?php
class Pessoa {
    private string $nome;
    public int $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function trocarNome(string $novoNome): void {
        if ($this->idade >= 18) {
            echo get_class($this) . " " . $this->getNome() . " trocou o nome para: " . $novoNome . "\n";
            $this->nome = $novoNome;
        } else {
            echo get_class($this) . " " . $this->getNome() . " não tem idade suficiente para trocar de nome.\n";
        }
    }

    public function fala() {
        echo "Olá, sou " . $this->nome . " e tenho " . $this->idade . " anos.\n";
    }
    public function exibirInformacoes() {
        echo "Nome: " . $this->getNome() . "\n";
        echo "Idade: " . $this->idade . "\n";
        $this->fala();
    }
}

class Aluno extends Pessoa {
    public string $matricula;

    public function __construct(string $nome, int $idade, string $matricula) {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
    }

    public function fala(): void {
        echo "Aluno " . $this->getNome() . " está perguntando...\n";
    }
    public function exibirInformacoes() {
        echo "Nome: " . $this->getNome() . "\n";
        echo "Idade: " . $this->idade . "\n";
        echo "Matrícula: " . $this->matricula . "\n";
        $this->fala();
    }
}


class Professor extends Pessoa {
    public string $matricula;
    public string $disciplina;

    public function __construct(string $nome, int $idade, string $matricula, string $disciplina) {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
        $this->disciplina = $disciplina;
    }

    public function fala(): void {
        echo "Professor " . $this->getNome() . " está dando aula sobre " . $this->disciplina . "\n";
    }
    public function exibirInformacoes() {
        echo "Nome: " . $this->getNome() . "\n";
        echo "Idade: " . $this->idade . "\n";
        echo "Matrícula: " . $this->matricula . "\n";
        echo "Disciplina: " . $this->disciplina . "\n";
        $this->fala();
    }
}

// Exemplo de uso
$aluno1 = new Aluno("Maria", 20, "12345");
$aluno2 = new Aluno("João", 16, "54321");
$professor = new Professor("Carlos", 35, "67890", "Matemática");
$pessoa1 = new Pessoa("Carlos", 30);



// Exibindo informações
echo "\nAluno 1:\n";
$aluno1->exibirInformacoes();

echo "\nAluno 2:\n";
$aluno2->exibirInformacoes();

echo "\nProfessor:\n";
$professor->exibirInformacoes();

echo "\nPessoa:\n";
$pessoa1->exibirInformacoes();

echo "\nTentativa de troca de nome:\n";
$pessoa1->trocarNome("André");
echo "\nTentativa de troca de nome:\n";
$aluno2->trocarNome("André");

echo "\nResultado da tentativa:\n";

echo "\nPessoa:\n";
$pessoa1->exibirInformacoes();
echo "\nAluno 1:\n";
$aluno1->exibirInformacoes();

