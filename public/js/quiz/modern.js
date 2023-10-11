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
    question: "<h4>A. Which among the following changes in the army was/were introduced by the British administration after the 1857 mutiny ? </h4><p><br>1. Increased proportion of Europeans to Indians in the army.<br>2. Introduction of idea of 'martial'and 'nonmartial'classes. <br>3. Increased recruitment from Awadh and Bihar. <br><br>Select the correct answer using the code given below:</p> ",
    choiceW: "1 only",
    choiceX: "Both 1 and 2",
    choiceY: "2 only",
    choiceZ: "Neither 1 or 2",
    correct: "X"
}, {
    question: "<h4>B. Which of the following was/were the main provisions of the Nehru Report?</h4><p><br>1. Attainment of Poorna Swaraj <br>2. India should be a federation. <br>3. Election should be on the basis of adult suffrage. <br>4. Separate electoratefor Linguistic Minorities. <br><br>Select the correct answer using the code given below:</p> ",
    choiceW: "1 and 2",
    choiceX: "3 and 4",
    choiceY: "2,3 and 4",
    choiceZ: "2 and 3",
    correct: "Z"
}, {
    question: "<h4>C. With reference to the Battle of Plassey (1757), consider the following statements:</h4><p><br>1. It resulted in the end of French forces. <br>2. The British became the paramount European power in India. <br>3. Exemption from paying duties on private trade. <br><br>Which of the statements given above is/are correct ? </p>",
    choiceW: "1 only",
    choiceX: "1 only",
    choiceY: "Both 1 & 3",
    choiceZ: "None of the above",
    correct: "Y"
}, {
    question: "<h4>D. Consider the following statements: </h4><p><br> 1. ‘The Bengal Gazette’, started by James Augustus Hickey in 1780, was the first newspaper in vernacular language in India. <br> 2. Bal Gangadhar Tilak became the first Indian journalist to be imprisoned for his fight for the freedom of press.<br><br>Which of the statements given above is/are correct?</p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "1 and 2",
    choiceZ: "None of the above",
    correct: "Z"
}, {
    question: "<h4>E. Consider the following statements with respect to the Wood’s Dispatch of 1854:</h4><p><br>1. It suggested to educate only a small section of upper and middle classes in line with Macaulay’ s Minute. <br>2. It recommended English as the medium of instruction for higher studies and vernacular at school level. <br>3. It laid stress on female and vocational education and on teachers’ training.<br><br>Which of the statements given above is/are correct ? </p>",
    choiceW: "1 only",
    choiceX: "2 only",
    choiceY: "Both 1 & 3",
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
