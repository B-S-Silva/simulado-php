class Professor extends Pessoa {
    constructor(nome, idade, matricula, disciplina) {
        super(nome, idade); 
        this.matricula = matricula; 
        this.disciplina = disciplina; 
    }

    fala() {
        return `${this.getNome()} está dando aula sobre ${this.disciplina}.`; 
    }
}
