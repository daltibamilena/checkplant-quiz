# checkplant-quiz

**Para executar o projeto com Docker:**

Baixar a imagem e fazer build

```docker-compose up --build```

O app está sendo servido na porta 8000, caso essa porta já esteja sendo usada, pode alterada no arquivo docker-compose.yml


**Para executar o app sem Docker:**

Utilize a pasta "src" em um web server.


# Sobre o App

Quiz desenvolvido usando apenas PHP e HTML. 
No arquivo ```index.php``` temos o código fundamental para o funcionamento da aplicação, nele é importado o ```_arrays.php``` onde é declarado todos os arrays utilizados na aplicação, foi deixado em um arquivo separado para poder manter o código do ```index.php``` o mais claro possível.

