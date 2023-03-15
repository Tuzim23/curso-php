algoritmo "semnome"
// 31) Ler 3 valores (A, B e C) representando as medidas dos lados de um triângulo e escrever se formam
//ou não um triângulo. OBS: para formar um triângulo, o valor de cada lado deve ser menor que a soma
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
Escreva("De fato é um triangulo")
Senao
Se (c<a+b)entao
Escreva("De fato forma um triangulo")
Senao
Escreva("Não forma um triangulo")
Fimse
Fimse
fimalgoritmo
