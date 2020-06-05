let score = 0;
let stage = 0;
//Color values
const colors = ['#FFC900','#00A1E7','#FF5400','#53BE00','#062EE7','#FF1779','#6644bb','#EB0000','#9C6800','#B168FF'];

//Count questions
let questions = document.getElementsByClassName('Quest');
//List Question objects
let questObjects = [];
//Create question objects
window.addEventListener('load', function () {
    for (let i = 0 ; i<questions.length ; i++){
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
    }
    if(stage==0){
        newQuestions();
    }
  })
// console.log(questObjects);

function newQuestions(){
    for(let i=0; i<questions.length ; i++){
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
        });
    }
}