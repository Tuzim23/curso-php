algoritmo "semnome"
// 18) Ler o ano atual e o ano de nascimento de uma pessoa. Escrever uma mensagem que diga se ela
//poder� ou n�o votar este ano (n�o � necess�rio considerar o m�s em que a pessoa nasceu).
var
ano , nasc , idade : inteiro
inicio
Escreva("Em que ano estamos?")
Leia(ano)
Escreva("Em que ano voc� nasceu?")
Leia(nasc)
idade := ano-nasc
Escreval("Voc� tem", idade," anos")
Se (idade>=16)entao
Escreva("Voc� ja pode votar!")
senao
Escreva("Voc� ainda n�o pode votar")
fimse
fimalgoritmo
