algoritmo "semnome"
// 30) Ler 3 valores (considere que n�o ser�o informados valores iguais) e escrev�-los em ordem
//crescente.
var
a , b , c : inteiro
inicio
Escreva("Digite um valor A")
Leia(a)
Escreva("Digite um valor B")
Leia(b)
Escreva("Digite um valor C")
Leia(c)
Se (a>b)e (b>c)entao
Escreva("Os valores em ordem crescente ficam desse jeito: ",a ,"/",b,"/",c )
Senao
Se (b>c) e (c>a)entao
Escreva("Os valores em ordem crescente ficam desse jeito: ",b ,"/",c,"/",a)
Senao
Escreva("Os valores em ordem crescente ficam desse jeito: ",c ,"/",a,"/",b)
Fimse
Fimse
fimalgoritmo
