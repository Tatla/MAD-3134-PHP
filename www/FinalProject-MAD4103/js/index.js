(function() {
  var ques = [ {
  
    "Ques": "Before leaving you car parked on a downgrade, you should:",
    "options": ["Turn your front wheel to the left and set your parking brake?","Set your parking brake only","Leave your front wheels parallel to the curb","Turn your front wheels to the right and set your parking brake"],
    "Answer": 4
  }, {
    "Ques": "If you have G1 or G2 Licence and you are driving under influence of alcohol ?",
    "options": ["You will be called for an interview","Your Licence will be cancelled.","You will receive a warning letter","Your Licence will be suspended for 30 days and you may be charged under criminal code."],
    "Answer": 4
  }, {
    "Ques": "If you first convicted criminaly for how long your Licence could be suspended.",
    "options": ["One year","Two year","Three year","Five year"],
    "Answer": 1
  }, {
    "Ques": "The broken centre line on a roadway means you may:",
    "options": ["Never pass?"," Pass if the way is clear?","Pass at any time?","Pass only during daylight hours?"],
    "Answer": 2
  }, {
    "Ques": "When driving in heavy fog, you should use:",
   "options": ["Low beam headlights?","Parking lights","Parking lights and high beam headlights?","High beam headlights."],
   "Answer": 1
  }, {
    "Ques": "Which of the following hand-and-arm signals is correct for slowing or stopping?",
    "options": ["Arm straight out of the window","Arm out and up.","Arm out and down.","Circle motion."],
    "Answer": 3
  }, {
    "Ques": "If you have G1 Licence at what time you are not suppose to drive?",
    "options": ["½ hour after sunrise and ½ hour before sunset","From midnight till 5 am","In the Bad weather when visibility is poor","In Rush Hours"],
    "Answer": 2
  }, {
    "Ques": "When there is cyclist in your lane you should?",
    "options": ["Blow the horn & Pass","Pass the cyclist in same lane","Check in mirrors, signal, check the blindspot, if it is safe make the lane change & pass the cyclist.","Wait for the cyclist give the way then pass him"],
    "Answer": 3
  }, {
    "Ques": "To avoid the collision, you should?",
    "options": ["Always keep your headlights on","Do not drive in busy traffic","Keep more space in left, right, front and back of your vehicle and try to adjust you speed accordingly","Donít drive in bad weather."],
    "Answer": 3
  }, {
    "Ques": "Except when you tend to overtake and pass another vehicle or when you intend to make a left turn, you should:",
    "options": ["Drive in the centre of the roadway?","Always keep well to the right?","Drive on the shoulder of the highway?","Always keep well to the left?"],
    "Answer": 2
  },{
    "Ques": "Which of the following has the right-of-way over all others at an intersection when the signal light is green?",
    "options": ["Pedestrians crossing with the light.","Vehicles turning right","Pedestrians crossing against the light","Vehicles turning left"],
    "Answer": 1
  }, {
    "Ques": "You should under all conditions drive at a speed which will allow you to:",
    "options": ["Stop within 90m (300 ft)?","Stop within 60m (200ft)?","Stop within 150m (500 ft)?","Stop within a safe distance?"],
    "Answer": 4
  }, {
    "Ques": "If you have G1 Licence, the driver setting beside you should be",
    "options": [" Owner of the vehicle."," Be your relative or friend.","Must sit on the front seat alone.","Must have done defensive driving course"],
    "Answer": 3
  }, {
    "Ques": "To get your vehicle out of skid, you should first:",
    "options": ["Steer straight ahead","Steer in the direction of the skid?","Steer in the opposite direction of the skid?","Apply brake hard?"],
    "Answer": 2
  }, {
    "Ques": "At an intersection where there is a flashing amber(yellow) traffic light, you must:",
    "options": ["Stop if making right turn?"," Continue at same speed?","Stop if making left turn?"," Slow down and proceed with caution?"],
    "Answer": 4
  }, {
    "Ques": "If your licence get suspended under what circumstance you could still drive.",
    "options": [" If you think you are very skilled driver.","You can not drive at all"],
    "Answer": 2
  }, {
    "Ques": " If you have G1 or G2 Licence, after how many demerit points your licence could be suspended.",
    "options": ["4 demerit points.","6 demerit points.","8 demerit points.","During first two year 9 or more demerit points"],
    "Answer": 4
  }, {
    "Ques": "A flashing blue light mounted on a motor vehicle indicates:",
    "options": ["Motor vehicle carrying explosives?","Snow removal equipment?","An ambulance?","A police emergency vehicle?"],
    "Answer": 2
  }, {
    "Ques": "How close to a fire hydrant may you legally park?",
    "options": ["1.5 meters (5ft)?","6 meters (20 ft)?","4.5 meters (15 ft)?","3 meters (10ft)?"],
    "Answer": 4
  },
   {
    "Ques": "When you make a left turn what hand signal is correct.",
     "options":["Arm straight at out of window","Arm out and up","Arm out and down","Circle motion"],
   "Answer": 1
  }
  ];
  
  var questionCount = 0; 
  var selections = []; 
  var showdata = $('#showdata'); 
  
 
  displayNext();
  
  
  $('#next').on('click', function (e) {
    e.preventDefault();
    
 
    if(showdata.is(':animated')) {        
      return false;
    }
    choose();
    
   
    if (isNaN(selections[questionCount])) {
      alert('Choose One Option');
    } else {
      questionCount++;
      displayNext();
    }
  });
  
 
  $('#back').on('click', function (e) {
    e.preventDefault();
    
    if(showdata.is(':animated')) {
      return false;
    }
    choose();
    questionCount--;
    displayNext();
  });
  
 
  $('#start').on('click', function (e) {
    e.preventDefault();
    
    if(showdata.is(':animated')) {
      return false;
    }  
    questionCount = 0;
    selections = [];
    displayNext();

  });

  function createQuesEle(index) {
    var qElement = $('<div>', {
      id: 'Ques'
    });
    
    var header = $('<h2>Choose one option <br> Question ' + (index + 1) + ':</h2>');
    qElement.append(header);
    
    var Ques = $('<p>').append(ques[index].Ques);
    qElement.append(Ques);
    
    var radioButtons = cRadiobtn(index);
    qElement.append(radioButtons);
    
    return qElement;
  }
  

  function cRadiobtn(index) {
    var radioList = $('<ol>');
    var item;
    var input = '';
    for (var i = 0; i < ques[index].options.length; i++) {
      item = $('<li>');
      input = '<input type="radio" name="answer" value=' + i + ' />';
      input += ques[index].options[i];
      item.append(input);
      radioList.append(item);
    }
    return radioList;
  }
  
  
  function choose() {
    selections[questionCount] = +$('input[name="answer"]:checked').val();
  }
  
 
  function displayNext() {
    showdata.fadeOut(function() {
      $('#Ques').remove();
      
      if(questionCount < ques.length){
        var nextQues = createQuesEle(questionCount);
        showdata.append(nextQues).fadeIn();
        if (!(isNaN(selections[questionCount]))) {
          $('input[value='+selections[questionCount]+']').prop('checked', true);
        }
        
      
        if(questionCount === 1){
          $('#back').show();
        } else if(questionCount === 0){
          
          $('#back').hide();
          $('#next').show();
        }
      }else {
        var resultElem = displayResult();
        showdata.append(resultElem).fadeIn();
        $('#next').hide();
        $('#back').hide();
     
      }
    });
  }
  

  function displayResult() {
    var score = $('<p>',{id: 'Ques'});
    
    var correctAns = 0;
    for (var i = 0; i < selections.length; i++) {
      if (selections[i] === ques[i].Answer) {
        correctAns++;
      }
    }
    
    score.append('Your Score: <br>' + correctAns + ' / ' +
                 ques.length);
    return score;
  }
})();