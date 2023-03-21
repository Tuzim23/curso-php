algoritmo "semnome"
// 44) Escreva um algoritmo para ler 2 valores e se o segundo valor informado for ZERO, deve ser lido
//um novo valor, ou seja, para o segundo valor não pode ser aceito o valor zero e imprimir o resultado
//da divisão do primeiro valor lido pelo segundo valor lido. (utilizar a estrutura REPITA).
var
a , b : inteiro
inicio
Escreval ("Digite 1 número")
Leia(a)
Escreval("Digite 1 número")
Leia(b)
Se(b =0) entao
repita
escreval("Dê um valor válido à B")
Leia(b)
 ate (b <> 0)
 Fimse
 Escreval(a/b)
fimalgoritmo
