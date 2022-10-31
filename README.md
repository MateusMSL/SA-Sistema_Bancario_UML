╭─━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━─╮
- # SA - DotBook (HTML, CSS, PHP)
╰─━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━─╯

Link de Acesso para o site: **Temporáriamente Indisponível*

*Oii, Obrigado pelo interesse no meu projeto.*

*Este trabalho foi desenvolvido por mim e meu grupo de estudos (@Fábio, @Guilherme, @Hicaro) e seu intuito era focado no desenvolvimento dos diagramas requisitados relacionados ao tema: *"Sistema Bancário"*, e após isso iniciar o desenvolvimento de um código utilizando as tecnologias que tivermos mais facilidade baseando-se nos diagramas feitos pela equipe*

*Eu, **Mateus**, Trabalhei no desenvolvimento de elaboração do brainstorm de como seria desenvolvido o projeto e suas regras de negócio, requisitos funcionais e não funcionais, Diagramas de Sequencia desenvolvidos utilizando o Diagrama de caso de uso e tambem na criação dos Diagramas de Objetos!*


• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •

**REGRAS DE NEGÓCIO:**

*Inicialmente nos reunimos, discutimos entre nós o que poderia ser adicionado no sistema e o que não seria possivel pensando tambem no tempo limitado para o desenvolvimento do mesmo.*

![image](https://user-images.githubusercontent.com/109548196/199116734-efd9f6fc-70b2-4dbc-9aa3-7cf3f52f6aac.png)




**REQUISITOS FUNCIONAIS E NÃO FUNCIONAIS**

*Após a etapa anterior, elaboramos tambem com base na discussão, quais seriam os:*

**- Requisitos Funcionais** *( obrigatórios para o sistema funcionar )*

**- Requisitos Não Funcionais** *( adições que melhoram mas não afetam a criação base do projeto )*

![image](https://user-images.githubusercontent.com/109548196/199117005-1b33eeca-635b-44b3-bbc9-bd0bd607e8af.png)

**CONCLUSÃO ESTATISTICA DESSA ETAPA**

*Por fim, como o próprio titulo já sugere, uma tabela de estatistica sobre essa etapa do desenvolvimento*

![image](https://user-images.githubusercontent.com/109548196/199117184-7dbf8408-64a1-4422-bb77-e49b7d8cc958.png)

• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •

**DIAGRAMA DE CASOS DE USO**

*Finalmente iniciando aos diagramas, o primeiro da lista é o diagrama de casos de uso que foi desenvolvido pelo @guilherme.*

*Podemos notar que fornecer credenciais é um **"INCLUDE"** do saque e da transferência.*

*enquanto o unico **"EXTEND"** que temos é a filtragem por data sincronizada com a exibição de extrato*

*neste diagrama temos representando as opções que criamos lá atras nos requisitos funcionais e não funcionais!*

![Diagrama de caso de uso](https://user-images.githubusercontent.com/109548196/199120735-0aa663bb-8fab-48da-b93d-8febcbdb3d37.png)


• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •


*Partindo para os diagramas de atividades elaborados pelo aluno @fábio, temos as seguintes representações da forma mais intuitiva possivel:*


**DIAGRAMA DE ATIVIDADES - LOGIN*

![DA Login](https://user-images.githubusercontent.com/109548196/199121503-be91505c-2647-4cf6-a830-8af02482084d.png)



**DIAGRAMA DE ATIVIDADES - SAQUE*

![DA Saque](https://user-images.githubusercontent.com/109548196/199121538-d1bfac0c-0adc-4a10-9c8c-718db194f7a7.png)



**DIAGRAMA DE ATIVIDADES - DEPÓSITO*

![DA Depósito](https://user-images.githubusercontent.com/109548196/199121560-81538734-ede2-4864-ae6a-e6d2ab61a6fa.png)



**DIAGRAMA DE ATIVIDADES - TRANSFERÊNCIA*

![DA Transferência](https://user-images.githubusercontent.com/109548196/199121575-d8042167-fca0-4a53-a2f1-9d0345fd975d.png)



**DIAGRAMA DE ATIVIDADES - SALDO*

![DA Saldo](https://user-images.githubusercontent.com/109548196/199121593-8bdd3f68-91fa-40cd-9850-202515aa12f4.png)



**DIAGRAMA DE ATIVIDADES - EXTRATO*

![DA Extrato](https://user-images.githubusercontent.com/109548196/199121611-8155f1c4-6159-4c0e-ad2f-028cf9e25955.png)



**DIAGRAMA DE ATIVIDADES - GERAL*

*por fim, um diagrama geral exibindo como seria a união de todos os anteriores em um diagrama só.*

![DA Geral](https://user-images.githubusercontent.com/109548196/199121626-e0831494-7988-485d-90c7-80142caf204c.png)



• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •

*esses são os diagramas de sequência, desenvolvidos por mim @MateusMSL*





**DIAGRAMA DE SEQUENCIA - LOGIN*

*Explicando este diagrama, o usuário solicita o login, esse comando é enviado ao sistema onde é realizada uma consulta na base de dados e após uma verificação caso exista, o login será realizado com sucesso*



![Login](https://user-images.githubusercontent.com/109548196/199121843-a4ce6cee-dea9-40c8-b4da-299c9ba6eb7a.png)






**DIAGRAMA DE SEQUENCIA - SAQUE*

*um pouco mais complexo que o anterior, neste diagrama o usuario faz a solicitação de realizar um saque, o sistema faz uma busca na base de dados e exibe o valor atual do saldo do usuário.*

*após isso, inicia-se um processo onde o usuario digitaria o valor do seu saque, digitaria sua senha para confirmar a solicitação e após a verificação e confirmação com a conta seria feito um registro de transferência, que vamos fazer uso mais tarde na parte do extrato. após isso o sistema confirma o sucesso ao usuário e realiza o saque exibindo tambem o novo valor da conta após o procedimento.*

![Realizar Saque](https://user-images.githubusercontent.com/109548196/199122117-eaeb50cb-9e99-46e3-9ce1-a2a0f162d973.png)






**DIAGRAMA DE SEQUENCIA - DEPÓSITO*

*este aqui é bem parecido com o diagrama anterior, a principal diferença é que nao solicita senha para iniciar o depósito e a verificação que ele faz é do dinheiro inserido no sistema*



![Realizar Deposito](https://user-images.githubusercontent.com/109548196/199122530-8e96ed3d-9b14-4be9-ac69-b531f767daa9.png)



**DIAGRAMA DE SEQUENCIA - TRANSFERÊNCIA*

*as coisas finalmente ficam mais complexas, tudo sei nicia com a verificação de saldo realizada anteriormente, após isso é solicitado um destinatário e uma verificação se esse usuário existe é feita.*
*uma confirmação é enviada e após isso o usuário digita o valor da sua transferência, é feita uma verificação do saldo e quantia da transferência e após a aprovação será criado um registro para extratos e uma mensagem de confirmação será enviada ao usuário.*

![Realizar Transferência](https://user-images.githubusercontent.com/109548196/199122886-e5b852b5-cb7a-41dc-bdca-00a64c102d0d.png)



**DIAGRAMA DE SEQUENCIA - SALDO*

*este é até que bem simples, o usuario solicita ao sistema visualizar seu saldo e o sistema exibe o valor, seja ele 0 ou qualquer valor positivo*

![Visualizar Saldo](https://user-images.githubusercontent.com/109548196/199123233-1508e8dd-fda8-43d5-a3fd-bf40cc9141d9.png)



**DIAGRAMA DE SEQUENCIA - EXTRATO*

*o usuario solicita ver suas movimentações bancárias, o sistema busca na conta se existe algum extrato e exibe o resultado ao usuário... bem simplificado*

![Visualizar Extrato](https://user-images.githubusercontent.com/109548196/199123256-75e5e7a4-089b-4f94-a227-243d55d91f7b.png)



• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •

**DIAGRAMA DE CLASSE*

*o diagrama de classe desenvolvido pelo @Guilherme é bem tranquilo de entender, usuario realiza login e após sua confirmação é condedido o acesso as funções do sistema que foram citadas anteriormente e nisso cada classe terá seus objetos instânciados, como por exemplo o id do usuario ou seu nome, idade, CPF etc...*

![Classe UML](https://user-images.githubusercontent.com/109548196/199123508-bac9ee7d-3122-426c-b697-fe76d15493ed.png)

• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •

**DIAGRAMA DE OBJETO*

*chegamos ao ultimo diagrâma da lista, desenvolvido tambem por mim, @MateusMSL*
*o usuário faz login e após isso terá seus atributos. porem especificamente os atributos: "valor_saque, valor_deposito e data_extrato serão utilizados no extrato após realizar um depósito, saque ou transferência.*
*cada operação gera um extrato novo e atualiza o saldo do usuário conforme o sucesso da operação*

![Diagrama de Objetos](https://user-images.githubusercontent.com/109548196/199123759-c428d566-0cde-43f7-8d42-965ba32e2e02.png)





• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •

**CÓDIGO BASEADO NOS DIAGRAMAS*

*por fim, chegamos aos codigos em PHP e a exibição dos mesmos feita com HTML & CSS.*
*particularmente eu não acho intuitivo colocar prints dos códigos e sua explicação aqui então abaixo terão apenas algumas prints do código em execução e caso tenham interesse acessem as pastas do projeto, lá basicamente tem os códigos de tudo que foi desenvolvido nos diagramas além de um HTML + CSS simples que desenvolvemos rapidamente só para a exibição dos códigos na apresentação!




• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •













• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •
**Considerações finais**

*Foi um trabalho dificil, isso não posso negar... trabalhar com documentação é algo facil porem ao mesmo tempo exaustivo, pois se algo sair errado na documentação pode prejudicar o trabalho na hora de realizara a programação.
todo cuidado ainda é pouco quando se desenvolve um diagrama!
não é uma das coisas que eu mais gosto de fazer, mas ainda sim foi uma experiência incrivel.
cada um dos integrantes do grupo ficou responsável por garantir o desenvolvimento de uma parte do produto final com a maior qualidade possivel e designamos para entre nós a separação para o desenvolvimento do que tinhamos mais aptidão, tudo saiu como queriamos graças ao nosso esforço, mas tambem graças ao suporte no desenvolvimento do nosso professor: @wgsantos!*


**Por fim, muito obrigado pelo seu interesse no meu projeto acadêmico. espero que tenha gostado e em breve irei postar mais coisas que produzir nas aulas!**

• ━━━━━━━━━━━━━━━━━━━━━━━━━━━━ •
