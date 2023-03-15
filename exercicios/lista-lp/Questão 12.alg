algoritmo "semnome"
//12) Escreva um algoritmo para ler uma temperatura em graus Fahrenheit, calcular e escrever o valor
//correspondente em graus Celsius (baseado na fórmula abaixo): C/5 = F-32/9

var
F , C : real
inicio
escreva("Digite a temperatura em Fahrenheit")
leia (F)
C := (F-32)*5/9
escreval(" A temperatura em Fahrenheit é ", F , " e em Celsius ", C , ".")
fimalgoritmo
