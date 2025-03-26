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
}

// Exemplo de uso
$aluno1 = new Aluno("Maria", 20, "12345");
$aluno2 = new Aluno("João", 16, "54321");
$professor = new Professor("Carlos", 35, "67890", "Matemática");

// Exibir informações
echo "\nAluno 1:\n";
echo "Nome: " . $aluno1->getNome() . "\n";
echo "Idade: " . $aluno1->idade . "\n";
echo "Matrícula: " . $aluno1->matricula . "\n";
$aluno1->fala();

echo "\nAluno 2:\n";
echo "Nome: " . $aluno2->getNome() . "\n";
echo "Idade: " . $aluno2->idade . "\n";
echo "Matrícula: " . $aluno2->matricula . "\n";
$aluno2->fala();

echo "\nProfessor:\n";
echo "Nome: " . $professor->getNome() . "\n";
echo "Idade: " . $professor->idade . "\n";
echo "Matrícula: " . $professor->matricula . "\n";
echo "Disciplina: " . $professor->disciplina . "\n";
$professor->fala();


// Troca de nome
echo "\nTentando trocar nome para Mariana...\n";
$aluno1->trocarNome("Mariana"); // Deve funcionar

echo "Tentando trocar nome para João Pedro...\n";
$aluno2->trocarNome("João Pedro"); // Não deve funcionar

echo "Tentando trocar nome para Carla...\n";
$professor->trocarNome("Carla"); // Deve funcionar

