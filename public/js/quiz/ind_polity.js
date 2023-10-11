// select all elements
const start = document.getElementById("start");
const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const choiceW = document.getElementById("W");
const choiceX = document.getElementById("X");
const choiceY = document.getElementById("Y");
const choiceZ = document.getElementById("Z");
const counter = document.getElementById("counter");
const timeGauge = document.getElementById("timeGauge");
const progress = document.getElementById("progress");
const scoreDiv = document.getElementById("scoreContainer");
const end = document.getElementById("end");

// create our questions
let questions = [{
    question: "<h4>A. The loss of citizenship, by deprivation, is a compulsory termination of citizenship by the Central Government. In which of the following cases,the loss of citizenship by deprivation might occur?</h4><p><br>1. The citizen has been ordinarily resident out of India for 4 years continuously.<br>2. The citizen has shown disloyalty to the Constitution of India.<br><br>Which of the statements given above is/are correct?</p>",
    choiceW: "1 only",
    choiceX: "Both 1 and 2",
    choiceY: "2 only",
    choiceZ: "Neither 1 or 2",
    correct: "Y"
}, {
    question: "<h4>B. Right to freedom guaranteed under Articles 19 to 22 cover which of these rights?</h4><p><br>1. Prohibition of traffic in human beings.<br> 2. Protection against arrest and detention in certain cases.<br> 3. Right to freedom of speech,movement and expression.<br> 4. Right to freedom against bonded labour. <br><br> Which of the statements given above is/are correct ?</p> ",
    choiceW: "1 and 2",
    choiceX: "3 and 4",
    choiceY: "2,3 and 4",
    choiceZ: "2 and 3",
    correct: "Z"
}, {
    question: "<h4>C. Consider the following statements:</h4><p><br>1. A law made by the Parliament during President’s Rule automatically stands repealedafter President’s Rule <br> 2. The Parliament can make laws on any matter in the State List for implementing theinternational treaties, agreements or conventions. <br><br> Which of the following statements is/are correct ?</p>",
    choiceW: "1 only",
    choiceX: "1 only",
    choiceY: "Both 1 & 2",
    choiceZ: "None of the above",
    correct: "X"
}, {
    question: "<h4>D. Inner Line Permit (ILP) for the North-Eastern states of Arunachal Pradesh, Mizoram and Nagaland can be issued for:</h4><p><br> 1. Purchasing property in these states. <br> 2. Travel Purposes.<br> 3. Setting up business. <br><br> Which of the above statements is/are correct ?</p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "1 and 2",
    choiceZ: "2 and 3",
    correct: "X"
}, {
    question: "<h4>E. The consequences of the proclamation of a Financial Emergency are that</h4><p><br>1. The Centre can direct the statefor reservation of all money bills or other financialbills for the consideration of the President after they are passed. <br> 2. The executive authority of the Centre extends to directing any state to observe such canons of financial propriety as are specified by it.<br><br> Which of the above statements is/are correct ?</p> ",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "Both 1 & 2",
    choiceZ: "None of the above",
    correct: "Y"
}];

// create some variables

const lastQuestion = questions.length - 1;
let runningQuestion = 0;
let count = 0;
const questionTime = 120; // 10s
const gaugeWidth = 150; // 150px
const gaugeUnit = gaugeWidth / questionTime;
let TIMER;
let score = 0;

// render a question
function renderQuestion() {
    let q = questions[runningQuestion];

    question.innerHTML = "<p>" + q.question + "</p>";
    choiceW.innerHTML = q.choiceW;
    choiceX.innerHTML = q.choiceX;
    choiceY.innerHTML = q.choiceY;
    choiceZ.innerHTML = q.choiceZ;
}

start.addEventListener("click", startQuiz);

// start quiz
function startQuiz() {
    start.style.display = "none";
    renderQuestion();
    quiz.style.display = "block";
    renderProgress();
    renderCounter();
    TIMER = setInterval(renderCounter, 1000); // 1000ms = 1s
}

// render progress
function renderProgress() {
    for (let qIndex = 0; qIndex <= lastQuestion; qIndex++) {
        progress.innerHTML += "<div class='prog' id=" + qIndex + "></div>";
    }
}

// counter render

function renderCounter() {
    if (count <= questionTime) {
        counter.innerHTML = count;
        timeGauge.style.width = count * gaugeUnit + "px";
        count++
    } else {
        count = 0;
        // change progress color to red
        answerIsWrong();
        if (runningQuestion < lastQuestion) {
            runningQuestion++;
            renderQuestion();
        } else {
            // end the quiz and show the score
            clearInterval(TIMER);
            scoreRender();
        }
    }
}

// checkAnwer

function checkAnswer(answer) {
    if (answer == questions[runningQuestion].correct) {
        // answer is correct
        score++;
        // change progress color to green
        answerIsCorrect();
    } else {
        // answer is wrong
        // change progress color to red
        answerIsWrong();
    }
    count = 0;
    if (runningQuestion < lastQuestion) {
        runningQuestion++;
        renderQuestion();
    } else {
        // end the quiz and show the score
        clearInterval(TIMER);
        scoreRender();
    }
}

// answer is correct
function answerIsCorrect() {
    document.getElementById(runningQuestion).style.backgroundColor = "#0f0";
}

// answer is Wrong
function answerIsWrong() {
    document.getElementById(runningQuestion).style.backgroundColor = "#f00";
}

// score render
// score render
function scoreRender() {
    scoreDiv.style.display = "block";

    // calculate the amount of question percent answered by the user
    const scorePerCent = Math.round(100 * score / questions.length);
    let img = (scorePerCent >= 80) ? "img/5.png" :
        (scorePerCent >= 60) ? "img/4.png" :
        (scorePerCent >= 40) ? "img/3.png" :
        (scorePerCent >= 20) ? "img/2.png" :
        "img/1.png";

    scoreDiv.innerHTML = "<img src=" + img + ">";
    scoreDiv.innerHTML += "<p>" + scorePerCent + "%</p>";
    if (scorePerCent < 40) {
        Swal.fire({
            html: '<div style="height:200px; display: flex; justify-content: center; align-items: center; font-size: 32px">You are not failed, your “success” is just postponed! High time for you to enroll and prepare systematically with us.</div>',
            width: 900,
        });
    } else if (scorePerCent < 70) {
        Swal.fire({
            html: '<div style="height:200px; display: flex; justify-content: center; align-items: center; font-size: 32px">Your success is near, start with a plan. You need to go thoroughly with each subject. We suggest you to join our live online courses for a planned preparation.</div>',
            width: 900,
        });
    } else {
        Swal.fire({
            html: '<div style="height:200px; display: flex; justify-content: center; align-items: center; font-size: 32px">when you focus on the goal, your success increases. Congratulations! Now please attempt the professional test.</div>',
            width: 900
        });
    }
}

function myFunction() {
    location.replace("onlinequiz");
}
