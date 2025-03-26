let Pessoa1 = new Pessoa("João Silva", 41);
let Pessoa2 = new Pessoa("Maria Oliveira", 17);
let Aluno1 = new Aluno("João", 10, "12345");
let Aluno2 = new Aluno("Pedro Santos", 85, "54321"); 
let Professor1 = new Professor("Carlos Pereira", 84, "13579", "Educação");
let Professor2 = new Professor("Fernanda Costa", 76, "97531", "História");


function exibirInformacoes(pessoa) {
    console.log('\n==============================');
    console.log(`Nome: ${pessoa.getNome()}`);
    console.log(`Idade: ${pessoa.idade}`);
    console.log(`Fala: ${pessoa.fala()}`);
    console.log('==============================');
}

// Exibindo informações
exibirInformacoes(Pessoa1);
Pessoa1.trocarNome("Adalton Pereira");

exibirInformacoes(Pessoa2);
Pessoa2.trocarNome("Mariana Silva");

exibirInformacoes(Aluno1);
Aluno1.trocarNome("Ricardo Ventura");

exibirInformacoes(Aluno2);
Aluno2.trocarNome("Bebeto show");

exibirInformacoes(Professor1);
exibirInformacoes(Professor2);