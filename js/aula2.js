// =============================================
// AULA 2: CONDICIONAIS EM JAVASCRIPT
// =============================================
// ---------- IF / ELSE ----------
let idade = 18;
console.log("Exemplo if/else:");
if (idade >= 18) {
 console.log("Você é maior de idade.");
} else {
 console.log("Você é menor de idade.");
}
console.log("----------------------");
// ---------- ELSE IF ----------
let nota = 7;
console.log("Exemplo else if:");
if (nota >= 9) {
 console.log("Excelente!");
} else if (nota >= 7) {
 console.log("Aprovado.");
} else if (nota >= 5) {
 console.log("Recuperação.");
} else {
 console.log("Reprovado.");
}
console.log("----------------------");
// ---------- SWITCH ----------
let cor = "azul";
console.log("Exemplo switch:");
switch (cor) {
 case "vermelho":
 console.log("A cor é vermelho.");
 break;
 case "azul":
 console.log("A cor é azul.");
 break;
 case "verde":
 console.log("A cor é verde.");
 break;
 default:
 console.log("Cor não encontrada.");
}
console.log("----------------------");
// =============================================
// EXERCÍCIOS RESOLVIDOS
// =============================================


// 1. Par ou Ímpar
let numero = 5;
console.log("Exercício 1:");
if (numero %2 === 0) {
 console.log(`O número é par`);
} else {
 console.log(`O número é ímpar`);
}
console.log("----------------------");


// 2. Notas do aluno
let notaAluno = 3;

console.log("Exercício 2:");

if (notaAluno >= 9) {
 console.log("Excelente");
} else if (notaAluno >= 7) {
 console.log("Aprovado");
} else if (notaAluno >= 5) {
 console.log("Recuperação");
} else {
 console.log("Reprovado");
}
console.log("----------------------");


// 3. Dias da semana com switch
let dia = 4;
console.log("Exercício 3:");
switch (dia) {
 case 1:
 console.log("Domingo");
 break;
 case 2:
 console.log("Segunda-feira");
 break;
 case 3:
 console.log("Terça-feira");
 break;
 case 4:
 console.log("Quarta-feira");
 break;
 case 5:
 console.log("Quinta-feira");
 break;
 case 6:
 console.log("Sexta-feira");
 break;
 case 7:
 console.log("Sábado");
 break;
 default:
 console.log("Dia inválido");
}
console.log("----------------------");

// 4. Classificação por idade
let idadePessoa = 18;
console.log("Exercício 4:");
if (idadePessoa <= 12) {
 console.log("Criança");
} else if (idadePessoa <= 18) {
 console.log("Adolescente");
} else if (idadePessoa <= 60) {
 console.log("Adulto");
} else {
 console.log("Idoso");
}
console.log("----------------------")