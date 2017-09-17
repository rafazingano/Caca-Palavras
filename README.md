# Caça-palavras

Criação de um caça-palavras 20x20 posições que receba uma lista de palavras e as posicione aleatoriamente no quadro.

----

**Como foi feito**
* Criada a classe Passatempo responsável por criar o passatempo.
* Criado um arquivo index.php que apresenta um formulário permitindo escolher as parametrizações desejadas:
  * Largura do quadro
  * Altura do quadro
  * Lista de palavras
  * Checkbox para decidir se deve ou não preencher os outros espaços com letras aleatórias.
Ao enviar o formulário, o próprio arquivo index.php é executado utilizando os parâmetros escolhidos no passo anterior.

**Observações:**
* Um pequeno relatório é exibido para informar quais palavras foram inseridas no quadro e quais não foram.
* Principal motivo para não inserir uma palavra é a mesma possuir tamanho maior do que o quadro.
* As palavras são posicionadas HORIZONTAL ou VERTICALMENTE, nunca na diagonal.