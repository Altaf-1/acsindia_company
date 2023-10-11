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
    question: "<h4>A. Consider the following statements with respect to ‘Arctic ozone depletion’:</h4><p><br>1. The ozone depletion in the Arctic is not increasing.<br>2. The increasing cold temperature in the Arctic stratosphere encourages the formulationof Polar Stratospheric clouds.<br><br> Which of the statements given above is/are correct ?</p>",
    choiceW: "1 only",
    choiceX: "Both 1 and 2",
    choiceY: "2 only",
    choiceZ: "Neither 1 or 2",
    correct: "Y"
}, {
    question: "<h4>B. Which of the following is/are the impacts of global warming?</h4><p><br>1. Melting of glaciers and ice caps.<br>2. Changes in rainfall patterns.<br>3. Spread of diseases.<br> 4. Coral bleaching. <br><br>Select the correct answer using the code given below:</p>",
    choiceW: "1 and 2 ",
    choiceX: "3 and 4",
    choiceY: "2,3 and 4",
    choiceZ: "1,2,3 and 4",
    correct: "Z"
}, {
    question: "<h4>C. With reference to wetlands of India, consider the following statements:</h4><p><br>1. The country’s total geographical area under the category of wetlands is recorded more in Gujarat as compared to other states. <br> 2. In India,the total geographical area of coastal wetlands is larger than that of inlandwetlands.<br><br> Which of the statements given above is/are correct ?</p>",
    choiceW: "1 only",
    choiceX: "1 only",
    choiceY: "Both 1 & 2",
    choiceZ: "None of the above",
    correct: "W"
}, {
    question: "<h4>D. Consider the following statements with respect to ‘ocean acidification’:</h4><p><br>1. It is the change in the ocean chemistry, lowering of the pH level of oceans.<br> 2. The pH of the ocean surface has decreased by about 0.1 pH unit since the beginning of the industrial revolution. <br> 3. The ocean currently has a pH of around 8 and is therefore ‘acidic’. <br><br> Which of the statements given above is/are correct ?</p> ",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "1 and 2",
    choiceZ: "2 and 3",
    correct: "Y"
}, {
    question: "<h4>E.Consider the following statements with respect to ‘wind energy’:</h4><p><br>1. Wind farms can be located both onshore and offshore.<br>2. The larger the radius of the blades of the wind turbines, more the energy is produced.<br>3. Gujarat has the largest installed wind energy capacity in India.<br><br>Which of the statements given above is/are correct ?</p>",
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
