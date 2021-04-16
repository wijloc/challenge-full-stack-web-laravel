GrupoA Educação - Full Stack Web Developer - Laravel
===================

Este arquivo tem como finalidade comentar sobre o processo de desenvolvimento do desafio proposto pelo GrupoA.

# API

Optei por começar o desenvolvimento pela API devido à possibilidade de fazer seus testes pelo Insomnia.

Utilizei a criação do projeto através do utilitário Laravel Sail, que criou a estrutura necessária para desenvolvimento.

Foi adotada a estrutura de projeto sugerida pelo Laravel durante a criação do projeto. Sendo assim os principais conceitos utilizados foram:

- Model
- Controller
- Resource

Durante o desenvolvimento, visando um código limpo e de fácil manutenção e entendimento, foi empregado o _Single Responsibility Principle_, a nível de funções principalmente, entre outros princípios.

No contexto de desenvolvimento foi utilizado o docker-compose.yml gerado pelo Sail, porém, este não se manteve após a etapa de deploy, na qual foi criado um docker-compose.yml com o essencial, retirando algumas dependências não utilizadas.

## Dependências

A principal dependência do backend foi o Sail, responsável por gerenciar o ambiente, apesar de ter sido um facilitador nas configurações, após a experiência com o projeto, eu iria preferir criar o docker-compose.yml manualmente retirando essa dependência.

## Observações

- Optei por determinar o campo registro acadêmico como uma string devido a não conhecer melhor as suas restrições como tamanho máximo e caracteres permitidos.

- Optei por armazenar o campo cpf sem máscara e formatar sua exibição somente no frontend, a máscara é um conteúdo sem muito significado nesse caso, visto que para todos os registros temos a mesma máscara.

- Utilizei resources ao responder requisições principalmente para separar as responsabilidades, facilitando assim futuras manutenções.

- Para validação do cpf foi utilizada Expressões Regulares, que em minha opinião, são muito versáteis.

## Melhorias

- Considerando a existência de mais membros na equipe de desenvolvimento acho importante definir um formatador único de código para que todos utilizem.

***

# Frontend

Foi utilizado um projeto Vue para o frontend. A estrutura de pastas também foi baseada no que o framework propõe.

Visando uma separação semântica dos componentes foi criada a pasta _views_ para guardar os componentes utilizados diretamente nas rotas.

## Dependências

- Foi utilizado o VueRouter para gerenciar as rotas, foi criada a pasta _routes_ com os arquivos de rotas. Com o crescimento do projeto poderíamos ter vários arquivos de rotas para separar por finalidades.

- Para acesso à api foi utilizado o _axios_ para requisições http, gerando assim, a pasta _services_, para armazenar o arquivo que fornece uma instância pré-configurada de acesso à api.

- O Vuetify foi utilizado como framework de UI como previsto nos pré-requisitos deste desafio.

- Para as mensagens do sistema foi utilizada a biblioteca VueSimpleAlert. Dentre as várias opções, escolhi esta devido ao suporte ao Vue e por estar ativa no GitHub, logo com uma chance menor de ficar obsoleta rapidamente.

## Melhorias

- Havendo mais tempo para trabalhar no projeto, eu faria certas refatorações, principalmente na utilização do componente ```v-btn``` que se repete várias vezes no projeto. Em um cenário de manutenção esse seria um problema muito grave.

- Verificar se o carregamento do dados na interface de listagem está sendo feito de forma assíncrona afim de proporcionar uma boa experiência para o usuário em um cenário com muitos dados.

- Internacionalização dos textos da interface, tendo arquivos com todas as strings utilizadas, de modo que pudessem ser traduzidas e fazer uma seleção de idioma.

- Uma possível melhoria na usabilidade: ao utilizar o botão cancelar na interface de inclusão/edição verificar se há alterações feitas e exibir uma confirmação, para evitar perda de informações de forma acidental.

***

# Banco de dados

Para banco de dados foi utilizado o MySQL porém toda a comunicação com essa camada foi feita através do Eloquent, através da classe Student.

Dada a estrutura atual, a troca de banco de dados seria uma alteração bem simples, devido ao desacoplamento entre as camadas do projeto.

## Observações

- Devido a simplicidade do projeto não foram necessárias classes de repositórios.

***

# Deploy

A etapa de deploy foi um pouco mais complicada devido à falta de prática da minha parte e consequentemente demandou mais tempo que o esperado.

Eu ainda não havia criado um projeto com o Laravel do zero ao deploy. O uso do Laravel Sail e a falta de conhecimento específico sobre ele foi um problema.

Ao fim, utilizei apenas o docker-compose para deploy do backend na AWS.

Para o deploy do frontend utilizei o netlify e posteriormente o heroku que ficou como versão final.

Como melhoria, poderia melhorar a estrutura dos containers que ficou um pouco comprometida devido ao tempo de entrega.

***

# Testes

Os testes não foram criados apesar de eu entender sua importância. O campo de testes automatizados é algo que tenho estudado e estou começando a aplicar recentemente, visto que ainda não trabalhei em um projeto real que os utilize amplamente.

Dados os conceitos que utilizo nos testes feitos em nodeJS não consegui adaptar muito bem a maneira com que construo testes para o Laravel. Com receio de tentar mudar a estrutura do projeto, preferi não inserí-los no projeto.

Reitero, acho muito importante que os testes sejam feitos e entendo suas vantagens práticas, inclusive no direcionamento do desenvolvimento como proposto no TDD.

***

# Versionamento do código

Foi utilizado o git como versionador de código, utilizando uma estrutura simples, com as branchs ```main``` e ```features```. Num cenário mais amplo poderíamos empregar o git flow, tendo sua branch ```develop``` e quando necessário branches de ```hotfix```.

Foi adotada a convenção de mensagens de commits do Angular para deixar os commits mais organizados. A convenção de mensagens ajuda a manter cada commit com sua devida responsabilidade, facilitando a identificação de erros e revisão do histórico.