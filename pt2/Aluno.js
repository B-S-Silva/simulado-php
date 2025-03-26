class Aluno extends Pessoa {
    constructor(nome, idade, matricula) {
        super(nome, idade); 
        this.matricula = matricula; 
    }

    fala() {
        return `${this.getNome()} está perguntando...`; 
    }
}