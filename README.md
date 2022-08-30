# ProjetoConsultarCep
Esse é o projeto de um site que realiza a consulta de CEP utilizando a API gratuita disponibilizada pelo ViaCep.

Tecnologias utilizadas:
  - HTML 
  - CSS
  - Javascript
  - PHP
  - Framework Bootstrap para o CSS
  
Funcionamento:
  - Ao preencher o campo com o CEP e fazer a consulta, esse CEP é enviado a uma classe PHP que recebe o valor e realiza toda a conexão com a API e obtém o retorno
    dos dados, preenchendo assim as variáveis. 
  - Essas variáveis são resgatadas pela tela de exibição dos resultados e preenchem os valores nos seus respectivos campos.
  - Todos os campos possuem a opção para copiar o conteúdo diretamente para a área de transferência do Windows e ao fazer isso é exibido uma mensagem na tela para
    indicar ao usuário que a ação foi feita. 
  - Também existem validações na tela inicial em que pode apenas ser informado um CEP entre 8 e 9 caracteres, ou seja, 89562100 ou 89562-100, caso informado
    incorretamente é exibido um mensagem tanto para a quantidade de caracteres inválido quanto para a falha ao buscar os dados do CEP.
