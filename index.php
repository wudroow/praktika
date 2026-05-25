<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>КРЯ-ТЕСТ: безопасность за рабочим столом ПК</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: radial-gradient(circle at 20% 30%, #0a0f1e, #03050b);
            font-family: 'Segoe UI', 'Courier New', 'Fira Code', monospace;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 1rem;
        }

        /* ГЛАВНЫЙ КОНТЕЙНЕР — СТИЛЬ "КРЯ" = жёсткий техно-панк */
        .quiz-container {
            max-width: 950px;
            width: 100%;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(2px);
            border: 2px solid #ff3b3b;
            border-radius: 32px;
            box-shadow: 0 0 20px #ff3b3b55, 0 10px 35px rgba(0,0,0,0.7), inset 0 0 15px rgba(255,60,60,0.2);
            padding: 1.8rem;
            transition: all 0.2s ease;
        }

        .danger-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            border-bottom: 2px dashed #ff5555;
            padding-bottom: 0.6rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        h1 {
            font-size: 1.9rem;
            letter-spacing: -1px;
            background: linear-gradient(135deg, #ff5e5e, #ffb347);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            text-shadow: 0 0 5px #ff2a2a40;
            font-weight: 800;
        }
        .badge {
            background: #1f1b1b;
            border: 1px solid #ff3b3b;
            color: #ff7a7a;
            padding: 0.3rem 0.9rem;
            border-radius: 60px;
            font-family: monospace;
            font-weight: bold;
            font-size: 0.9rem;
            backdrop-filter: blur(4px);
        }

        .progress-area {
            margin-bottom: 2rem;
        }
        .progress-stats {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #ffb7b7;
            margin-bottom: 0.4rem;
        }
        .progress-bar-bg {
            background: #221c1c;
            border-radius: 40px;
            height: 14px;
            border: 1px solid #ff5e5e;
            overflow: hidden;
        }
        .progress-fill {
            width: 0%;
            height: 100%;
            background: linear-gradient(90deg, #ff3b3b, #ff9f4a);
            border-radius: 40px;
            transition: width 0.25s cubic-bezier(0.2, 1.2, 0.8, 1);
            box-shadow: 0 0 5px #ff6a00;
        }

        .question-card {
            background: #0c0c14e6;
            border-left: 8px solid #ff3b3b;
            padding: 1.5rem 1.2rem;
            border-radius: 28px;
            margin-bottom: 1.8rem;
            transition: all 0.2s;
            box-shadow: 0 8px 0 #2a0c0c;
        }
        .question-text {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.4rem;
            color: #fff0e0;
            text-shadow: 0 1px 2px black;
            line-height: 1.3;
            letter-spacing: -0.2px;
        }
        .options-list {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }
        .option {
            background: #11131f;
            border: 1px solid #3a2a2a;
            border-radius: 60px;
            padding: 0.8rem 1.2rem;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.2s;
            backdrop-filter: blur(4px);
        }
        .option:hover {
            background: #241e1e;
            border-color: #ff7b5c;
            transform: scale(0.99);
        }
        .option.selected {
            background: #4a1818;
            border: 2px solid #ff4d4d;
            box-shadow: 0 0 8px #ff3131;
        }
        .option-marker {
            width: 32px;
            height: 32px;
            background: #2a1e1e;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 1rem;
            font-weight: bold;
            color: #ffaeae;
            font-family: monospace;
            font-size: 1.2rem;
        }
        .option-text {
            font-size: 1rem;
            line-height: 1.3;
            color: #f2e0d0;
            font-weight: 500;
        }

        .nav-buttons {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            margin-top: 1rem;
            margin-bottom: 2rem;
        }
        button {
            background: #1f1b1f;
            border: 2px solid #ff5a5a;
            color: #ffbbbb;
            font-weight: bold;
            padding: 0.75rem 1.8rem;
            border-radius: 60px;
            font-size: 1rem;
            font-family: monospace;
            cursor: pointer;
            transition: 0.15s linear;
            letter-spacing: 1px;
        }
        button:hover:not(:disabled) {
            background: #ff3b3b;
            color: black;
            border-color: #ffcf9a;
            box-shadow: 0 0 12px red;
            transform: scale(0.97);
        }
        button:disabled {
            opacity: 0.4;
            border-color: #6f4e4e;
            cursor: not-allowed;
        }
        .submit-btn {
            background: #a12222;
            border-color: #ff9f6e;
            color: #fff2dd;
            font-size: 1.2rem;
            padding: 0.8rem 1rem;
            width: 100%;
            margin-top: 0.5rem;
        }
        .result-area {
            margin-top: 1.8rem;
            background: #000000aa;
            border-radius: 28px;
            padding: 1.2rem;
            border: 1px solid #f75c5c;
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: #ffdd99;
            backdrop-filter: blur(8px);
        }
        .restart-btn {
            background: #2a1a1a;
            margin-top: 0.8rem;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
        footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.7rem;
            color: #ff7b7b80;
        }

        @media (max-width: 580px) {
            .quiz-container {
                padding: 1rem;
            }
            .question-text {
                font-size: 1.2rem;
            }
            .option-text {
                font-size: 0.85rem;
            }
        }

        @keyframes kriaAlert {
            0% { text-shadow: 0 0 0 red; background: #a12222;}
            100% { text-shadow: 0 0 6px orange; background: #ff4c4c;}
        }
        .alert-pulse {
            animation: kriaAlert 0.5s ease-in-out 3;
        }
    </style>
</head>
<body>

<div class="quiz-container" id="quizRoot">
    <div class="danger-header">
        <h1>⚠️ КРЯ-ТЕСТ: ТБ за ПК ⚠️</h1>
        <div class="badge">электробезопасность + эргономика</div>
    </div>

    <div class="progress-area">
        <div class="progress-stats">
            <span>🔴 уровень угрозы: <span id="answeredCount">0</span>/<span id="totalQuestions">8</span></span>
            <span>⚡ выживаемость</span>
        </div>
        <div class="progress-bar-bg">
            <div class="progress-fill" id="progressFill"></div>
        </div>
    </div>

    <div id="questionsContainer"></div>

    <div class="nav-buttons">
        <button id="prevBtn" disabled>◀ КРЯ-НАЗАД</button>
        <button id="nextBtn">ДАЛЕЕ ▶</button>
    </div>

    <button id="submitBtn" class="submit-btn">🔥 ЗАВЕРШИТЬ ТЕСТ & ПОЛУЧИТЬ ВЕРДИКТ 🔥</button>

    <div id="resultPanel" class="result-area" style="display: none;"></div>
    <footer>⚡ каждый неверный ответ = риск для спины и проводки ⚡</footer>
</div>

<script>
    // ---------- 8 вопросов по ТБ за компьютером ----------
    const questionsData = [
        {
            text: "1. Как правильно расположить монитор на рабочем столе для безопасности глаз и осанки?",
            options: [
                "На расстоянии вытянутой руки, верхний край экрана на уровне глаз",
                "Максимально близко, чтобы лучше видеть детали",
                "Сбоку от клавиатуры, на расстоянии 10 см от лица",
                "Под углом 45°, смотреть на экран снизу вверх"
            ],
            correct: 0
        },
        {
            text: "2. Что НЕЛЬЗЯ делать с системным блоком и проводами питания?",
            options: [
                "Вытирать пыль сухой тряпкой при выключенном ПК",
                "Ставить блок на ковролин или закрывать вентиляцию",
                "Использовать ИБП для защиты от скачков",
                "Регулярно проверять целостность кабелей"
            ],
            correct: 1
        },
        {
            text: "3. Какая поза считается эргономичной при длительной работе за ПК?",
            options: [
                "Стул максимально низко, ноги скрещены под столом",
                "Спина прямая, поясница поддерживается, стопы на полу",
                "Лёжа на животе перед ноутбуком на диване",
                "Руки вытянуты вперёд, клавиатура на коленях"
            ],
            correct: 1
        },
        {
            text: "4. Что из перечисленного — грубое нарушение пожарной безопасности?",
            options: [
                "Использование удлинителя без заземления",
                "Оставлять включённый ПК без присмотра на ночь",
                "Накрывать системный блок плотной тканью для тишины",
                "Подключение трех устройств в один тройник"
            ],
            correct: 2
        },
        {
            text: "5. Как часто рекомендуется делать перерывы при непрерывной работе за компьютером?",
            options: [
                "Раз в 4 часа на 20 минут",
                "Каждые 45-60 минут по 5-10 минут, разминать шею/кисти",
                "Только когда устали глаза, примерно раз в 3 часа",
                "Перерывы не нужны, если пить кофе"
            ],
            correct: 1
        },
        {
            text: "6. При запахе гари или искрении из блока питания нужно:",
            options: [
                "Продолжить работу, возможно это конденсатор греется",
                "Немедленно обесточить ПК (выключить кнопкой или из розетки), вызвать специалиста",
                "Полить водой искрящийся участок",
                "Стукнуть по блоку питания, чтобы искры пропали"
            ],
            correct: 1
        },
        {
            text: "7. Какое требование к освещению рабочего места с ПК правильное?",
            options: [
                "Полная темнота, только свет монитора — глаза меньше устают",
                "Свет от окна должен падать прямо на экран",
                "Основной источник света сбоку, без бликов на мониторе, лампа не слепит в глаза",
                "Подсветка RGB за монитором полностью заменяет общее освещение"
            ],
            correct: 2
        },
        {
            text: "8. Как правильно организовать кабели питания под столом?",
            options: [
                "Связать все провода в тугой жгут и прижать ножкой стола",
                "Разместить так, чтобы они не перегибались, не перетирались и не создавали путаницу, использовать кабель-каналы",
                "Оставить провода петлями на полу — для лучшей вентиляции",
                "Использовать удлинитель без заземления, лежащий в луже"
            ],
            correct: 1
        }
    ];

    // Состояние приложения
    let userAnswers = new Array(questionsData.length).fill(null);   // храним индексы выбранных ответов (0..3) или null
    let currentQuestionIndex = 0;      // 0-based
    let quizCompleted = false;          // заблокировать ли завершение повторно

    // DOM элементы
    const questionsContainer = document.getElementById('questionsContainer');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const resultPanel = document.getElementById('resultPanel');
    const answeredCountSpan = document.getElementById('answeredCount');
    const totalQuestionsSpan = document.getElementById('totalQuestions');
    const progressFill = document.getElementById('progressFill');

    totalQuestionsSpan.textContent = questionsData.length;

    // Функция обновления счётчика ответов и прогресс-бара
    function updateProgress() {
        const answered = userAnswers.filter(a => a !== null).length;
        answeredCountSpan.textContent = answered;
        const percent = (answered / questionsData.length) * 100;
        progressFill.style.width = `${percent}%`;
    }

    // рендерим ТОЛЬКО текущий вопрос (постраничная навигация)
    function renderCurrentQuestion() {
        const question = questionsData[currentQuestionIndex];
        const selectedIdx = userAnswers[currentQuestionIndex];
        
        let optionsHtml = '';
        const letters = ['A', 'B', 'C', 'D'];
        question.options.forEach((opt, idx) => {
            const isSelected = (selectedIdx === idx);
            const selectedClass = isSelected ? 'selected' : '';
            optionsHtml += `
                <div class="option ${selectedClass}" data-opt-index="${idx}">
                    <div class="option-marker">${letters[idx]}</div>
                    <div class="option-text">${escapeHtml(opt)}</div>
                </div>
            `;
        });

        const fullHtml = `
            <div class="question-card" id="activeQuestionCard">
                <div class="question-text">${escapeHtml(question.text)}</div>
                <div class="options-list" id="optionsList">
                    ${optionsHtml}
                </div>
            </div>
        `;
        
        questionsContainer.innerHTML = fullHtml;
        
        // навесить обработчики на варианты ответов
        const optionDivs = document.querySelectorAll('.option');
        optionDivs.forEach(optDiv => {
            optDiv.addEventListener('click', (e) => {
                if (quizCompleted) return;
                const idx = parseInt(optDiv.getAttribute('data-opt-index'), 10);
                // обновить ответ для текущего вопроса
                if (userAnswers[currentQuestionIndex] === idx) {
                    // если клик по уже выбранному — можно снять выделение? (по концепции теста лучше оставить как есть, но для гибкости сделаем переключение)
                    // Но часто тесты позволяют сменить ответ. Однако мы сделаем просто изменение без снятия, но можно и снять если повторно? 
                    // По ТЗ лучше: повторный клик не снимает, а оставляет выбранным, но пользователь может выбрать другой вариант. 
                    // Ничего страшного, пусть остаётся выбранным. Чтобы снять — выберет другой.
                }
                userAnswers[currentQuestionIndex] = idx;
                // перерисовать текущий вопрос для отображения выделения
                renderCurrentQuestion();
                updateProgress();
                // разблокируем кнопки навигации (при необходимости)
                updateNavButtonsState();
            });
        });
    }

    // вспомогательная функция для экранирования HTML
    function escapeHtml(str) {
        return str.replace(/[&<>]/g, function(m) {
            if (m === '&') return '&amp;';
            if (m === '<') return '&lt;';
            if (m === '>') return '&gt;';
            return m;
        }).replace(/[\uD800-\uDBFF][\uDC00-\uDFFF]/g, function(c) {
            return c;
        });
    }

    function updateNavButtonsState() {
        if (quizCompleted) {
            prevBtn.disabled = true;
            nextBtn.disabled = true;
            return;
        }
        // кнопка "назад"
        if (currentQuestionIndex === 0) {
            prevBtn.disabled = true;
        } else {
            prevBtn.disabled = false;
        }
        // кнопка "далее"
        if (currentQuestionIndex === questionsData.length - 1) {
            nextBtn.disabled = true;
        } else {
            nextBtn.disabled = false;
        }
    }

    function goPrev() {
        if (quizCompleted) return;
        if (currentQuestionIndex > 0) {
            currentQuestionIndex--;
            renderCurrentQuestion();
            updateNavButtonsState();
        }
    }
    
    function goNext() {
        if (quizCompleted) return;
        if (currentQuestionIndex < questionsData.length - 1) {
            currentQuestionIndex++;
            renderCurrentQuestion();
            updateNavButtonsState();
        }
    }

    // подсчёт результатов и вывод вердикта
    function calculateAndShowResults() {
        if (quizCompleted) return;
        
        // проверим, все ли вопросы отвечены (можно разрешить финальный подсчет даже с пропусками, но предупредим)
        const answeredCount = userAnswers.filter(a => a !== null).length;
        if (answeredCount < questionsData.length) {
            // мигающий эффект на кнопке сабмит, как "кря-предупреждение"
            submitBtn.classList.add('alert-pulse');
            setTimeout(() => {
                submitBtn.classList.remove('alert-pulse');
            }, 800);
            resultPanel.style.display = 'block';
            resultPanel.innerHTML = `⚠️ ТЫ ОТВЕТИЛ ТОЛЬКО НА ${answeredCount} ИЗ ${questionsData.length} ВОПРОСОВ! ⚠️<br>Заполни все, иначе техника безопасности подведёт. Ответь на все вопросы!`;
            resultPanel.style.borderColor = "#ffaa44";
            return;
        }
        
        // считаем правильные ответы
        let correctCount = 0;
        for (let i = 0; i < questionsData.length; i++) {
            if (userAnswers[i] === questionsData[i].correct) {
                correctCount++;
            }
        }
        
        const percent = Math.round((correctCount / questionsData.length) * 100);
        let verdict = '';
        let icon = '';
        if (correctCount === 8) {
            verdict = '⭐ АБСОЛЮТНЫЙ КРЯ-ГУРУ! Твоя безопасность — эталон! Глаза и спина скажут спасибо. ⭐';
            icon = '🏆';
        } else if (correctCount >= 6) {
            verdict = '👍 Неплохо, но есть нюансы. Пересмотри эргономику и правила с проводами. Ты на верном пути!';
            icon = '⚡';
        } else if (correctCount >= 4) {
            verdict = '⚠️ Тревожный звонок! Риск травм и поломок высок. Пройди инструктаж заново. Береги технику и здоровье!';
            icon = '🔥';
        } else {
            verdict = '💀 КРЯ-ПРОВАЛ! Ты игнорируешь ТБ. Немедленно изучи правила: розетки, осанка, перерывы и пожарка! 💀';
            icon = '☠️';
        }
        
        const resultMessage = `${icon} Твой результат: ${correctCount} / ${questionsData.length} (${percent}%)<br><br>${verdict}<br><br>
        <button id="restartQuizBtn" class="restart-btn">🔄 ПРОЙТИ КРЯ-ТЕСТ ЗАНОВО 🔄</button>`;
        
        resultPanel.style.display = 'block';
        resultPanel.innerHTML = resultMessage;
        resultPanel.style.borderColor = "#ff7e5e";
        quizCompleted = true;
        submitBtn.disabled = true;
        submitBtn.style.opacity = '0.6';
        submitBtn.style.cursor = 'default';
        prevBtn.disabled = true;
        nextBtn.disabled = true;
        
        // вешаем событие на кнопку рестарта
        const restartBtn = document.getElementById('restartQuizBtn');
        if (restartBtn) {
            restartBtn.addEventListener('click', () => {
                resetQuiz();
            });
        }
    }
    
    // сброс всего теста
    function resetQuiz() {
        userAnswers = new Array(questionsData.length).fill(null);
        currentQuestionIndex = 0;
        quizCompleted = false;
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
        submitBtn.style.cursor = 'pointer';
        resultPanel.style.display = 'none';
        resultPanel.innerHTML = '';
        updateProgress();
        renderCurrentQuestion();
        updateNavButtonsState();
        // убрать возможные блокировки
    }
    
    // инициализация и обработчики
    function init() {
        renderCurrentQuestion();
        updateProgress();
        updateNavButtonsState();
        
        prevBtn.addEventListener('click', goPrev);
        nextBtn.addEventListener('click', goNext);
        submitBtn.addEventListener('click', calculateAndShowResults);
    }
    
    init();
</script>
</body>
</html>
