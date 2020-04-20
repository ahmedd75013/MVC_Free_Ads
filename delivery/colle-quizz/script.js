(function() {
    var questions = [{
      question:"Who is the creator of PHP?",
      reponse: [
      "Jack Sparrow", 
      "Rasmus Lerdorf", 
      "Tim Berners-Lee", 
      "Dennis Ritchie"],
      solution: 2
    }, {
      question: "When was the first implementation of Blockchain Technology?",
      reponse: [ 
      "2009", 
      "2008", 
      "2000", 
      "1991"],
      solution: 1
    }, {
      question: "In which year was the first Playstation made?",
      reponse: [
        "1994", 
        "1992", 
        "1990", 
        "1995"
      ],
      solution: 1
    }, {
      question: "What does PHP mean today ?",
      reponse: [
      "PHP: Personal Home Page",
      "PHP: Program High Performace",
      "PHP: Hypertext Preprocessor",
      "PHP: Hypertext Page"],
      solution: 3
    }, {
      question: "What is the last Sega console?",
      reponse: [
      "Dreamcast", 
      "Saturn", 
      "S-Gage", 
      "Lindbergh"],
      solution: 1
    },
    {
        question:"What does www stands for ?",
        reponse: [ 
        "Web wasabi world",
        "World wide web",
        "Wide web world",
        "Web war song"],
        solution: 2
      },
      {
        question:  "What's the name of the UNIX creator?",
        reponse: [
        "Mark Shuttleworth", 
        "Kenneth Thompson",
        "Linus Torvalds",
        "Bill Gates"
         ],
        solution: 2
      },
      {
        question: "When was born Alan Turing ?",
        reponse: [  
        "1981", 
        "1891", 
        "1934",
        "1912"
            
         ],
        solution: 4
      },
      {
        question: "What is the port for the http",
        reponse: [ 
            "70",
            "90",
            "82",
            "80"],
        solution: 4
      },];
    
    var questionCounter = 0; 
    var selections = []; 
    var quiz = $('#quiz'); 
    
    // Afficher la question initiale
    displayNext();
    
    // Gestionnaire de clics pour le bouton 'suivant'
    $('#next').on('click', function (e) {
      e.preventDefault();
      
// Suspendre l'écouteur de clics pendant l'animation de fondu
      if(quiz.is(':animated')) {        
        return false;
      }
      choose();
      
   // Si aucune sélection d'utilisateur, la progression est arrêtée
      if (isNaN(selections[questionCounter])) {
        alert('Please make a selection!');
      } else {
        questionCounter++;
        displayNext();
      }
    });
    
   // Gestionnaire de clics pour le bouton 'prev'
    $('#prev').on('click', function (e) {
      e.preventDefault();
      
      if(quiz.is(':animated')) {
        return false;
      }
      choose();
      questionCounter--;
      displayNext();
    });
    
  // Cliquez sur le gestionnaire pour le bouton "Recommencer"
    $('#start').on('click', function (e) {
      e.preventDefault();
      
      if(quiz.is(':animated')) {
        return false;
      }
      questionCounter = 0;
      selections = [];
      displayNext();
      $('#start').hide();
    });
    
// Animation des boutons en survol
    $('.button').on('mouseenter', function () {
      $(this).addClass('active');
    });
    $('.button').on('mouseleave', function () {
      $(this).removeClass('active');
    });
    
// Crée et retourne le div qui contient les questions et
    // les sélections de réponses
    function createQuestionElement(index) {
      var qElement = $('<div>', {
        id: 'question'
      });
      
      var header = $('<h2>Question ' + (index + 1) + ':</h2>');
      qElement.append(header);
      
      var question = $('<p>').append(questions[index].question);
      qElement.append(question);
      
      var radioButtons = createRadios(index);
      qElement.append(radioButtons);
      
      return qElement;
    }
    
 // Crée une liste des choix de réponse comme entrées radio
    function createRadios(index) {
      var radioList = $('<ul>');
      var item;
      var input = '';
      for (var i = 0; i < questions[index].reponse.length; i++) {
        item = $('<li>');
        input = '<input type="radio" name="answer" value=' + i + ' />';
        input += questions[index].reponse[i];
        item.append(input);
        radioList.append(item);
      }
      return radioList;
    }
    
// Lit la sélection de l'utilisateur et envoie la valeur à un tableau
    function choose() {
      selections[questionCounter] = +$('input[name="answer"]:checked').val();
    }
 // Affiche le prochain élément demandé
    function displayNext() {
      quiz.fadeOut(function() {
        $('#question').remove();
        
        if(questionCounter < questions.length){
          var nextQuestion = createQuestionElement(questionCounter);
          quiz.append(nextQuestion).fadeIn();
          if (!(isNaN(selections[questionCounter]))) {
            $('input[value='+selections[questionCounter]+']').prop('checked', true);
          }
          
          

// Contrôle l'affichage du bouton 'prev'
          if(questionCounter === 1){
            $('#prev').show();
          } else if(questionCounter === 0){
            
            $('#prev').hide();
            $('#next').show();
          }
        }else {
          var scoreElem = displayScore();
          quiz.append(scoreElem).fadeIn();
          $('#next').hide();
          $('#prev').hide();
          $('#start').show();
        }
      });
    }
    
  // Calcule le score et renvoie un élément de paragraphe à afficher

  function displayScore() {
      var score = $('<p>',{id: 'question'});
      
      var numCorrect = 0;
      for (var i = 0; i < selections.length; i++) {
        if (selections[i] === questions[i].solution) {
          numCorrect++;
        }
      }
      
      score.append('Vous avez ' + numCorrect + ' questions sur ' +
                   questions.length + ' juste!!!');
      return score;
    }
  })();