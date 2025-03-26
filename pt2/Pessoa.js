class Pessoa {
    #nome;

    constructor(nome, idade) {
        this.#nome = nome; 
        this.idade = idade; 
    }

    fala() {
        return `${this.#nome} está falando...`; 
    }

    getNome() {
        return this.#nome; 
    }

    trocarNome(novoNome) {
        if (this.idade >= 18) {
            this.#nome = novoNome; 
            console.log(`Nome alterado para: ${this.#nome}`);
        } else {
            console.log("Você não tem idade suficiente para trocar de nome.");
        }
    }
}
