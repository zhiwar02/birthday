<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
*{
  box-sizing: border-box;
}
body{
  background-color: #b8c6db;
  background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7f7 100%);
  font-family: 'Poppins', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  overflow: hidden;
  margin: 0;
}
.quiz-container{
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
  width: 600px;
  overflow: hidden;
}
.quiz-header{
  padding: 4rem;
}
h2{
  padding: 1rem;
  text-align: center;
  margin: 0;
}
ul{
  list-style-type: none;
  padding: 0;
}
ul li{
  font-size: 1.2rem;
  margin: 1rem 0;
}
ul li label{
  cursor: pointer;
}
.btn{
  background-color: #03cae4;
  color: #fff;
  border: none;
  display: block;
  width: 100%;
  cursor: pointer;
  font-size: 1.1rem;
  font-family: inherit;
  padding: 1.3rem;
}
.btn:hover{
  background-color: #04adc4;
}
.btn:focus{
  outline: none;
  background-color: #44b927;
}
a{
    text-align: center;
    text-decoration: none;
}
    </style>
</head>
<body>
<div class="quiz-container" id="quiz">
    <div class="quiz-header">
        <h2><?php echo " سپاس بۆ داخڵ بوونت خاتوو خێڵان "?></h2>
      <h2 id="question">Question Text</h2>
      <ul>
        <li>
          <input type="radio" name="answer" id="a" class="answer">
          <label for="a" id="a_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="b" class="answer">
          <label for="b" id="b_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="c" class="answer">
          <label for="c" id="c_text">Answer</label>
        </li>
        <li>
          <input type="radio" name="answer" id="d" class="answer">
          <label for="d" id="d_text">Answer</label>
        </li>
      </ul>
    </div>
    <button class="btn" id="submit">Submit</button>
  </div>

  <script>
    const quizData = [
    {
        question: "یەکەم جار کەی بوو من و تۆ یەکمان ناسی😅",
        a: "١١-٢٠١٨",
        b: "٣-٢٠١٩",
        c: "١٢-٢٠١٨",
        d: "٥-٢٠١٩",
        correct: "d",
    },
    {
        question: "نازناوی من و تۆ چی بوو یانی بە چی بانگی یەکترمان ئەرکرد😁",
        a: "🐍من:ورچ🐼 تۆ:مار",
        b: "هەر سێ وەڵامی ئەی و سی و دی🤣",
        c: "من:سوتاو تۆ :سیسە",
        d: "هەر دوو وەڵامی ئەی و بی",
        correct: "b",
    },
    {
        question: "ت داوە بە منR چەن",
        a: "٦🙂",
        b: "٥😑",
        c: "٢🙄",
        d: "٤😐",
        correct: "a",
    },
    {
        question: "من تۆم چەنێک خۆش دەوێت😊",
        a: "‌هیچ",
        b: "کەم",
        c: "زۆر",
        d: "بە قەد هەموو دونیا😊",
        correct: "d",
    },
];
const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
loadQuiz()
function loadQuiz() {
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }
       currentQuiz++
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>جوابی${score}:${quizData.length} دانەت بە راستی داوەتەوە </h2>
           <button class="btn"  onclick="location.reload()">دوبارە</button>
           <a href="index2.html" class="btn" >دواتر<a/>
           `
       }
    }
})
  </script>
</body>
</html>