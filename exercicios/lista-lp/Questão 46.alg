algoritmo "semnome"
// 46) Acrescentar uma mensagem de 'VALOR INVÁLIDO' no exercício [44] caso o segundo valor
//informado seja ZERO.
var
a , b : inteiro
inicio
Escreval ("Digite 1 número")
Leia(a)
Escreval("Digite 1 número")
Leia(b)
Se(b =0) entao
repita
Escreval("VALOR INVÁLIDO, ")
escreval("Dê um valor válido à B")
Leia(b)
 ate (b <> 0)
 Fimse
 Escreval(a/b)
fimalgoritmo
