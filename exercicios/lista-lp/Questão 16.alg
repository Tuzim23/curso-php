algoritmo "semnome"
// 16) As ma��s custam R$ 1,30 cada se forem compradas menos de uma d�zia, e R$ 1,00 se forem
//compradas pelo menos 12. Escreva um programa que leia o n�mero de ma��s compradas, calcule e
//escreva o custo total da compra.
var
mc , m1 , m2 : real
inicio

Escreva("Quantas ma��s foram compradas?")
Leia(mc)
m1 := 1.30*mc
m2 := 1*mc
Se(mc>=12)entao
Escreva("As ma��s foram vendidas por ", m2 , " reais")
senao
Escreva("As ma��s foram vendidas por ", m1 , " reais")
fimse
fimalgoritmo
