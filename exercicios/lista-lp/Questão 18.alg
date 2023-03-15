algoritmo "semnome"
// 18) Ler o ano atual e o ano de nascimento de uma pessoa. Escrever uma mensagem que diga se ela
//poderá ou não votar este ano (não é necessário considerar o mês em que a pessoa nasceu).
var
ano , nasc , idade : inteiro
inicio
Escreva("Em que ano estamos?")
Leia(ano)
Escreva("Em que ano você nasceu?")
Leia(nasc)
idade := ano-nasc
Escreval("Você tem", idade," anos")
Se (idade>=16)entao
Escreva("Você ja pode votar!")
senao
Escreva("Você ainda não pode votar")
fimse
fimalgoritmo
