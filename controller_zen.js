$(document).ready(function () {
	
var questionNumber=0;
var questionBank=new Array();
var stage="#game1";
var stage2=new Object;
var questionLock=false;
var numberOfQuestions;
var score=0;
		 

 		$.getJSON('activity.json', function(data) {

		for(i=0;i<data.quizlist.length;i++){ 
			questionBank[i]=new Array;
			questionBank[i][0]=data.quizlist[i].question;
			questionBank[i][1]=data.quizlist[i].option1;
			questionBank[i][2]=data.quizlist[i].option2;
			questionBank[i][3]=data.quizlist[i].option3;
            questionBank[i][4]=data.quizlist[i].option4;
            questionBank[i][5]=data.quizlist[i].ajuda;
            questionBank[i][6]=data.quizlist[i].prova
		}
		 numberOfQuestions=questionBank.length; 
		
		 window.onbeforeunload = function () { return "Seu progresso será perdido!"; };
            
		displayQuestion();
		})//gtjson

function displayQuestion(){
 var rnd=Math.random()*4;
 rnd=Math.ceil(rnd);
 var q1;
 var q2;
 var q3;
 var q4;
 var qHelp = questionBank[questionNumber][5];
 var prova = questionBank[questionNumber][6];
 
if(rnd==1){q1=questionBank[questionNumber][1];q2=questionBank[questionNumber][2];q3=questionBank[questionNumber][3];q4=questionBank[questionNumber][4]};
if(rnd==2){q2=questionBank[questionNumber][1];q3=questionBank[questionNumber][2];q4=questionBank[questionNumber][3];q1=questionBank[questionNumber][4]};
if(rnd==3){q3=questionBank[questionNumber][1];q4=questionBank[questionNumber][2];q1=questionBank[questionNumber][3];q2=questionBank[questionNumber][4]};
if(rnd==4){q4=questionBank[questionNumber][1];q1=questionBank[questionNumber][2];q2=questionBank[questionNumber][3];q3=questionBank[questionNumber][4]};

$(stage).append('<div class="textareawrapper"><p id="tituloQuestao">'+prova+'</p>'+questionBank[questionNumber][0]+'</div>'+
'<div id="1" class="block_container"><div class="optionLetter">A</div><div id="opt1" class="option">'+q1+'</div></div>'+
'<div id="2" class="block_container"><div class="optionLetter">B</div><div id="opt2" class="option">'+q2+'</div></div>'+
'<div id="3" class="block_container"><div class="optionLetter">C</div><div id="opt3" class="option">'+q3+'</div></div>'+
'<div id="4" class="block_container"><div class="optionLetter">D</div><div id="opt4" class="option">'+q4+'</div></div>');

 $('.block_container').click(function(){
    if(questionLock==false){
        questionLock=true;	
        //correct answer
        if(this.id==rnd){
            $(stage).append('<div class="block"><div class="feedback1">Correto</div><div id=proximo class="botaoProximo">Proxima</div></div>');
            document.getElementById("opt" + this.id).className = "optionRight";
            
            score++;
        }
        //wrong answer	
        if(this.id!=rnd){
            $(stage).append('<div class="block"><div class="feedback2">Errado</div><div id=proximo class="botaoProximo">Proxima</div></div>');
            document.getElementById("opt" + this.id).className = "optionWrong";
            document.getElementById("opt" + rnd).className = "optionRight";
        }
        $(stage).append('<div id="qhelp" class="questionHelp"><p id="titleHelp">Resolucao</p>'+qHelp+'</div>');
        
        jumpScroll()
        
        
                
        $('.botaoProximo').click(function (){
            setTimeout(function(){changeQuestion()},10);
        })
    }
})// block_container click

}//display question

function jumpScroll(){
    $("html, body").animate({ scrollTop: $(document).height() },1000)
    /*window.scroll(0,1500);*/
}


function changeQuestion(){
		
		questionNumber++;
	
	if(stage=="#game1"){stage2="#game1";stage="#game2";}
		else{stage2="#game2";stage="#game1";}
	
	if(questionNumber<numberOfQuestions){displayQuestion();}else{displayFinalSlide();}
	
	 $(stage2).animate({"right": "+=800px"},"slow", function() {$(stage2).css('right','-800px');$(stage2).empty();});
	 $(stage).animate({"right": "+=800px"},"slow", function() {questionLock=false;});
}//change question
	

	
	
	function displayFinalSlide(){
		
		$(stage).append('<div class="questionText">You have finished the quiz!<br><br>Total questions: '+numberOfQuestions+'<br>Correct answers: '+score+'</div>');
        $(stage).append('<div id=proximo onclick="window.location.href = \'modo_zen.html\'" class="botaoProximo">Voltar</div>')
		
	}//display final slide
	
	
	});//doc ready