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
    question: "<h4>A. Which of the following statements is/are correct with reference to the inversion of temperature ? </h4><p><br>1. Cloudy nights with turbulent winds are idealfor inversion. <br> 2. Dense fogs in winter mornings are caused due to temperature inversion.<br>3. It is a feature of plains and is not observed on hilly terrains.<br><br> Select the correct answer using the code given below :</p>",
    choiceW: "1 only",
    choiceX: "Both 1 and 3",
    choiceY: "2 only",
    choiceZ: "1,2,3",
    correct: "Y"
}, {
    question: "<h4>B. Which of the following reasons may be attributed to excessive cold in North India during the winter season ? </h4><p><br>1. Continentality of the north Indian region.<br> 2. Snowfall in the Himalayan ranges. <br> 3. Cold winds coming from the Caspian Sea. <br> 4. Early - onset of easterly jet stream.<br><br> Select the correct answer using the code given below :</p>",
    choiceW: "1 and 2",
    choiceX: "3 and 4",
    choiceY: "2,3 and 4",
    choiceZ: "1,2 and 3",
    correct: "Z"
}, {
    question: "<h4>C. Consider the following statements:</h4><p><br>1. Due to gravity, the air at the surface is denser and hence has higher pressure. <br> 2. The primary cause of air motion is a variation in atmospheric pressure at various places. <br> 3. In the lower atmosphere, the pressure increases rapidly with height.<br><br>Select the correct answer using the code given below: </p>",
    choiceW: "1 only",
    choiceX: "1 only",
    choiceY: "1 & 2",
    choiceZ: "None of the above",
    correct: "Y"
}, {
    question: "<h4>D. Which of the following can be attributed to the passing of Tropic of Cancer roughly through the central part of India ?</h4><p><br>1. India experiences tropical as well as temperate climatic zones. <br> 2. As compared to northern India, southern India experiences high temperatures throughout the year with small daily and annual range.<br><br> 3. Entire India observes overhead sun on the summer solistice of the northern hemisphere.<br><br>Select the correct answer using the code given below:</p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "1 and 2",
    choiceZ: "2 and 3",
    correct: "Y"
}, {
    question: "<h4>E. With reference to ‘break’ in monsoon, consider the following statements:</h4><p><br>1. It refers to the most deficient monsoon year in a decade. <br> 2. It occurs due to lack of rain - bearing storms along the ITCZ over northern India.<br><br> Which of the statements given above is/are NOT correct ? </p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "Both 1 & 2",
    choiceZ: "None of the above",
    correct: "W"
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
