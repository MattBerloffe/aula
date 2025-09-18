// =============================================
// AULA1: VARIÁVEIS E FUNÇÕES EM JAVASCRIPT
// =============================================
// ---------- VARIÁVEIS ----------

var nomeAntigo = "Maria"; // (forma antiga, evite usar)
let idade = 25; // pode mudar depois
const cidade = "São Paulo"; // não pode mudar
console.log("Exemplo variáveis:");
console.log("Nome:", nomeAntigo);
console.log("Idade:", idade);
console.log("Cidade:", cidade);
console.log("----------------------");


// ---------- FUNÇÕES SIMPLES ----------
function saudacao() {
 console.log("Olá, seja bem-vindo ao JavaScript!");
}
console.log("Função da aula do Flavio:");
saudacao();
console.log("----------------------");


// ---------- FUNÇÃO COM PARÂMETROS ----------
function soma(a, b) {
 return a + b;
}
let resultadoSoma = soma(5, 3);
console.log("Resultado da soma da aula:", resultadoSoma);
console.log("----------------------");


// =============================================
// EXERCÍCIOS RESOLVIDOS
// =============================================
// 1. Variáveis nome, idade e cidade em uma frase
let nome = "Jorge";
let idadePessoa = "74 anos";
let cidadePessoa = "Guaianases";
console.log("Exercício 1:");
console.log(nome," usa ciclone e Nike TN com ",idadePessoa,"e nasceu e vive em ",cidadePessoa);
console.log("----------------------");


// 2. Função dobro
function dobro(a) {
 return a * 2;
}
let resultadoDobro = dobro(9)
console.log("Exercício 2:");
console.log("O dobro de 9 é:", resultadoDobro );
console.log("----------------------");


// 3. Função apresentar
function apresentar(nomeSerasa,a) {
 return nomeSerasa, a;
}
let nomeSerasa = "Jorge";
let a = "Número de dividas = 1001";



console.log("Exercício 3:");
console.log(apresentar(a));
console.log("----------------------");

