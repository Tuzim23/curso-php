algoritmo "semnome"
// 17) Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever
//uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o
//aluno é aprovado). Escrever também a média calculada.
var
a1 , a2 , m : real
inicio
Escreva("Qual a nota da primeira avaliação do aluno?")
Leia(a1)
Escreva("Qual a nota da segunda avaliação do aluno?")
Leia(a2)
m := (a1+a2)/2
Escreva("O aluno teve media de ",m )
Se(m>=6)entao
Escreva("Aluno aprovado")
senao
Escreva("Aluno reprovado")
fimse
fimalgoritmo
