algoritmo "semnome"
// 10) O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem do
//distribuidor e dos impostos (aplicados ao custo de fábrica). Supondo que o percentual do distribuidor
//seja de 28% e os impostos de 45%, escrever um algoritmo para ler o custo de fábrica de um carro,
//calcular e escrever o custo final ao consumidor.
var
a , b , pd , ip : real
inicio
a := 10000
pd := 28
ip := 45
escreval("a = ",a)
ip := 45*10
pd := 28*10
b := ip+pd+a
escreval("b = ",b)

fimalgoritmo
