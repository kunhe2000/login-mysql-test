<!-- Created By CodingNepal - www.codingnepalweb.com  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Quiz App | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Start Quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>룰을 설명드리겠습니다.</span></div>
        <div class="info-list">
            <div class="info">1. 문제당 <span>15 초 가량의</span> 시간이 부여됩니다.</div>
            <div class="info">2. 한번 답을 선택하면 취소할 수 없습니다..</div>
            <div class="info">3. 제한시간이 지나면 답을 선택할 수 없습니다.</div>
            <div class="info">4. 퀴즈가 진행되는 동안에는 종료할 수 없습니다.</div>
            <div class="info">5. 개당 10점의 점수가 부여됩니다.</div>
        </div>
        <div class="buttons">
            <button class="quit">퀴즈 종료</button>
            <button class="restart">진행하기</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">재밌는 퀴즈 풀기</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">퀴즈가 종료되었습니다!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">재도전!</button>
            <button class="quit">종료!</button>
            <button><a href="main.html">점수입력</a></button>
        </div>
    </div>
    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/questions.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
	<FORM ID="f1" METHOD ="post" ACTION="insert_result.php">
	    <INPUT id="name1" TYPE ="hidden" NAME="이름" />
	    <INPUT id="score1" TYPE ="hidden" NAME="점수" />
	</FORM>
	<script src="js/script.js"></script>

</body>
</html>