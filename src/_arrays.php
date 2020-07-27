<?php
$questionArr = [
    'question1' => 
      ['question' => '1. De manhã, você:',  
        'answers' => [
          ['value' => 'a', 'answer' => 'Acorda cedo e come frutas cortadas metodicamente.'],
          ['value' => 'b', 'answer' => 'Sai da cama com o despertador e se prepara para a batalha da semana.'],
          ['value' => 'c', 'answer' => 'Só consegue lembrar do seu nome depois do café.'],
          ['value' => 'd', 'answer' => 'Levanta e faz café pra todos da casa.'],
          ['value' => 'e', 'answer' => 'Passa o café e conserta um erro no HTML.']
        ]
      ],

    'question2' => 
      ['question' => '2. Indo para o trabalho você encontra uma senhora idosa caída na rua:', 
        'answers' => [
          ['value' => 'a', 'answer' => 'Ela vai atrapalhar seu horário. Oculte o corpo.'],
          ['value' => 'b', 'answer' => 'Levanta a senhora e jura protegê-la com sua vida.'],
          ['value' => 'c', 'answer' => 'Ajuda-a, mas questiona sua real identidade.'],
          ['value' => 'd', 'answer' => 'Oferece para caminharem juntos até um destino em comum.'],
          ['value' => 'e', 'answer' => 'Testa se ela roda bem no Firefox. Não roda.']
        ]
      ],

    'question3' => 
      ['question' => '3. Chega no prédio e o elevador está cheio:', 
        'answers' => [
          ['value' => 'a', 'answer' => 'Convence parte das pessoas a esperarem o próximo.'],
          ['value' => 'b', 'answer' => 'Ignora as pessoas no elevador e entra de qualquer forma.'],
          ['value' => 'c', 'answer' => 'Você questiona a realidade, as coisas e tudo mais. Sobe de escada.'],
          ['value' => 'd', 'answer' => 'Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.'],
          ['value' => 'e', 'answer' => 'Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.']
        ]
      ],

    'question4' => 
      ['question' => '4. Você chega no trabalho e as convenções sociais te obrigam a puxar assunto:', 
        'answers' => [
          ['value' => 'a', 'answer' => 'Fala sobre a política, eleições, como tudo é um absurdo.'],
          ['value' => 'b', 'answer' => 'Larga uma frase polêmica e vê uma pequena guerra se formar.'],
          ['value' => 'c', 'answer' => 'Puxa um assunto e te lembram que já foi discutido semana passada.'],
          ['value' => 'd', 'answer' => 'Sugere que os colegas trabalhem na ideia de um novo projeto.'],
          ['value' => 'e', 'answer' => 'Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.']
        ]
      ],

    'question5' => 
      ['question' => '5. A pauta pegou o dia todo, mas você está indo para casa:', 
        'answers' => [
          ['value' => 'a', 'answer' => 'Vou chamar aqui o meu Uber.'],
          ['value' => 'b', 'answer' => 'Pegarei o bus junto com o resto do povo.'],
          ['value' => 'c', 'answer' => 'No ponto de ônibus mais uma vez, espero não errar a linha de novo.'],
          ['value' => 'd', 'answer' => 'Vou de carro, mas ofereço uma carona para os colegas.'],
          ['value' => 'e', 'answer' => 'Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.']
        ]
      ]
];   


$series = [
  'a' => '<p>House Of Cards:</p> <p>Você é House of Cards: ataca o problema com método e faz de tudo para resolver a situação.</p>', 
  'b' => '<p>Game of Thrones:</p> <p>Você é Game of Thrones: não tem muita delicadeza nas ações, mas resolve o problema de forma prática.</p>', 
  'c' => '<p>Lost:</p> <p>Você é Lost: faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo.</p>', 
  'd' => '<p>Breaking Bad:</p> <p>Você é Breaking Bad: pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros.</p>', 
  'e' => '<p>Silicon Valley:</p> <p>Você é Silicon Valley: vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia.</p>'
];

$alternativas = ['a' => 0, 'b' => 0, 'c' => 0, 'd' => 0, 'e' => 0];

$ansArr = ['0.25' => $_POST['question1'], '0.5' => $_POST['question2'], '0.75' => $_POST['question3'], '1' => $_POST['question4'], '1.25' => $_POST['question5']];

?>