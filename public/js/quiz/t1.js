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
    question: "<h4>A. Which of the following statements is/are correct with respect to the horizontal distribution of salinity in oceans ? </h4><p><br>1. The North Sea records higher-than normal salinity due to saline water brought by the North Atlantic Drift. <br> 2. Black Sea records lower- than-normal salinity due to the fresh water influx by rivers. <br> Select the correct answer using the code given below: </p> ",
    choiceW: "1 only",
    choiceX: "Both 1 and 2",
    choiceY: "2 only",
    choiceZ: "Neither 1 nor 2",
    correct: "X"
}, {
    question: "<h4>B. Which of the following statements regarding the Government of India Act, 1935 is/are correct ? </h4><p><br>1. It provided the Dominion status to India. <br>2. It provided separate representation to workers as well as women.<br> 3. The Indian legislatures were authorized to modify or amend the act.<br>Select the correct answer using the code given below:</p> ",
    choiceW: "1 and 2",
    choiceX: "2 only",
    choiceY: "1,2 and 3",
    choiceZ: "2 and 3",
    correct: "X"
}, {
    question: "<h4>C. Which of the following statements is/are correct regarding Lok Adalats?</h4><p><br>1. It is one of the components of Alternative Dispute Resolution. <br>2. It is based on Gandhian principles. <br> 3. It has non-statutory status. <br> Which of the statements given above is/are correct? </p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "2 & 3",
    choiceZ: "1 & 2",
    correct: "Z"
}, {
    question: "<h4>D. Which of the following statements is/are correct regarding Salmonella bacteria?</h4><p><br> 1. It is found in the intestines of humans, animals as well as birds.<br>2. It is a gram-positive bacterium.<br>3. Person-to-person transmission of the bacteria can occur through the fecal-oral route. <br> Which of the statements given above is/are correct ? </p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "1 and 3",
    choiceZ: "1,2 and 3",
    correct: "Y"
}, {
    question: "<h4>E. Which of the following traits do Highyielding varieties (HYVs) of agricultural crops are usually characterized by in contrast to the conventional varieties: </h4><p><br>1. Tallness. <br>2. Improved response to fertilizers.<br>3. Very low reliance on irrigation.<br>Which of the statements given above is/are correct ? </p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "Both 1 & 2",
    choiceZ: "Neither 1 nor 2",
    correct: "X"
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