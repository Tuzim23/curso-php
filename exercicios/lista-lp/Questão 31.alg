algoritmo "semnome"
// 31) Ler 3 valores (A, B e C) representando as medidas dos lados de um tri�ngulo e escrever se formam
//ou n�o um tri�ngulo. OBS: para formar um tri�ngulo, o valor de cada lado deve ser menor que a soma
//dos outros 2 lados.
var
a , b , c : inteiro
inicio
Escreva("De o valor do lado A do triangulo")
Leia(a)
Escreva("De o valor do lado B do triangulo")
Leia(b)
Escreva("De o valor do lado C do triangulo")
Leia(c)
Se (a<b+c) e (b<a+c)entao
Escreva("De fato � um triangulo")
Senao
Se (c<a+b)entao
Escreva("De fato forma um triangulo")
Senao
Escreva("N�o forma um triangulo")
Fimse
Fimse
fimalgoritmo
