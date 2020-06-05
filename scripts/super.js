//FUNCTIONS
function newQuestions(i){
        fetch('class/ajax.php').then(res=>res.json()).then(data=>{
            questObjects[i].value1.innerHTML = data.value1;
            questObjects[i].value1.style.color=colors[data.value1-1];
            questObjects[i].Val1.setAttribute('value', data.value1);
            questObjects[i].value2.innerHTML = data.value2;
            questObjects[i].Val2.setAttribute('value', data.value2);
            questObjects[i].result.innerHTML = data.result;
            questObjects[i].result.style.backgroundColor=colors[data.value1-1];
            questObjects[i].Vres.setAttribute('value', data.result);
            questObjects[i].rep.style.backgroundColor=colors[data.value1-1];
            questObjects[i].repInput.style.backgroundColor=colors[data.value1-1];
            questObjects[i].titletext.innerHTML = 'Question '+i+' :';
            questObjects[i].smiley.style.display='none';
            questObjects[i].result.style.display='none';
            questObjects[i].rep.style.display='inline';
            Score.style.display='none';
            score=0;
            subButton.style.display='flex'
        });
}
let score = 0;
let valid = [];
//Color values
const colors = ['#FFC900','#00A1E7','#FF5400','#53BE00','#062EE7','#FF1779','#6644bb','#EB0000','#9C6800','#B168FF'];
//Count questions
let questions = document.getElementsByClassName('Quest');
let form = document.getElementById('QUESTION');
let subButton = document.getElementById('SUB');
let replayButton = document.getElementById('REPLAY');
let Score = document.getElementById('REPONSE');
//List Question objects
let questObjects = [];
//Create question objects
window.addEventListener('load', function () {
    for (let i = 0 ; i<5 ; i++){
        let newQuestion = new Object();
        newQuestion.title = questions[i].querySelector('.QuestTitle');
        newQuestion.titletext = questions[i].querySelector('.QuestTitleTxt');
        newQuestion.smiley = questions[i].querySelector('.QuestIcon');
        newQuestion.value1 = questions[i].querySelector('.QuestV1');
        newQuestion.value2 = questions[i].querySelector('.QuestV2');
        newQuestion.result = questions[i].querySelector('.QuestRes');
        newQuestion.rep = questions[i].querySelector('.QuestUser');
        newQuestion.repInput = questions[i].querySelector('.QuestUserInput');
        newQuestion.Vres = questions[i].querySelector('.Vres');
        newQuestion.Val1 = questions[i].querySelector('.V1');
        newQuestion.Val2 = questions[i].querySelector('.V2');
        questObjects.push(newQuestion);
        newQuestions(i);
    }
  })

form.addEventListener('submit', (e)=>{
    e.preventDefault();
    const formData = new FormData(form);
    fetch( 'class/ajax.php', { method : "post" , body : formData } )
        .then( res => res.json() ).then( data =>{
            valid[0]=data.valid0;
            valid[1]=data.valid1;
            valid[2]=data.valid2;
            valid[3]=data.valid3;
            valid[4]=data.valid4;
            for(let i=0 ; i<5 ; i++){
                questObjects[i].smiley.style.display='inline';
                questObjects[i].result.style.display='inline';
                questObjects[i].rep.style.display='none';
                subButton.style.display='none'
                Score.style.display='block';
                questObjects[i].titletext.innerHTML = 'Reponse '+questObjects[i].repInput.value+' :';
                if(valid[i]==1){
                    questObjects[i].title.style.backgroundColor=colors[3];
                    questObjects[i].smiley.setAttribute('src', 'media/happy.svg');
                    score=score+1;
                    console.log(score);
                }
                else{
                    questObjects[i].title.style.backgroundColor=colors[7];
                    questObjects[i].smiley.setAttribute('src', 'media/sad.svg');
                }
            }
        });
});
