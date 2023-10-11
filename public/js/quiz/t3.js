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
    question: "<h4>A. Which among the following were the outcomes of the Battle of Plassey?</h4><p><br>1. Siraj ud Daula was replaced by Mir Jaffar, a puppet of the East India Company. <br> 2. There onwards the Company’s trade in Bengal was without any restriction. <br> 3. Treaty of Allahabad was signed between Shuja ud daula and Robert Clive <br> Select the correct answer using the code given below: </p> ",
    choiceW: "1 only",
    choiceX: "Both 1 and 2",
    choiceY: "2 only",
    choiceZ: "1,2 and 3",
    correct: "X"
}, {
    question: "<h4>B. Consider the following statements with respect to “Global Alliance for Vaccine and Immunization(GAVI)”, recently in the news: </h4><p><br>1. It is a global health partnership of Public sector organizations only. <br>2. Its mission is to save people's lives in poorer countries by increasing access toimmunization. <br> Select the correct answer using the code given below: </p> ",
    choiceW: "1 and 2",
    choiceX: "2 only",
    choiceY: "1,2 and 3",
    choiceZ: "2 and 3",
    correct: "X"
}, {
    question: "<h4>C. Coral reefs are complex ecosystems. Which of the following organisms constitute their biotic communities?</h4><p><br>1. Polyps. <br> 2. Sea urchins. <br> 3. Zooxanthellae. <br> Which of the statements given above is/are correct ? </p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "Neither 1 nor 2",
    choiceZ: "1,2 and 3",
    correct: "Z"
}, {
    question: "<h4>D. Consider the following statements with respect to ‘Kalamkari painting’:</h4><p>br> 1. These paintings are made in Tamil Nadu.<br>2. This art is mainly related to decorating temple interiors with painted cloth panels, which was developed in the fifteenth century under the patronage of Vijayanagar rulers. <br> 3. It is hand painted as well as block printing with vegetable dyes applied on cloth. <br> Which of the statements given above is/are correct ? </p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "2 and 3",
    choiceZ: "1,2 and 3",
    correct: "Y"
}, {
    question: "<h4>With reference to the Wholesale Price Index (WPI), consider the following statements: </h4><p><br>1. It covers both services as well as goods. <br>2. It includes indirect taxes to account for the impact of fiscal policy. <br> Which of the statements given above is/are correct ? </p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "Both 1 & 2",
    choiceZ: "Neither 1 nor 2",
    correct: "Z"
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
            html: '<div style="height:200px; display: flex; justify-content: center; align-items: center; font-size: 32px">You need to improve your preparation for the basics of concept and content. Our classes and study plan will guide you on what to study. Please call us at 9085268769</div>',
            width: 900
        });
    } else if (scorePerCent < 70) {
        Swal.fire({
            html: '<div style="height:200px; display: flex; justify-content: center; align-items: center; font-size: 32px">Are you not able to prepare systematically? your concept in a few subjects are good, but we cannot compromise with other subjects. Please register for the live online classes, which will help you to overcome all subjects.</div>',
            width: 900
        });
    } else {
        Swal.fire({
            html: '<div style="height:200px; display: flex; justify-content: center; align-items: center; font-size: 32px">Congratulations! Make it happen. We belive you are on the edge of your success. Contact us today so that we can build the bridge for your Goal.</div>',
            width: 900
        });
    }
}

function myFunction() {
    location.replace("onlinequiz");
}