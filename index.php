<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

    <script>
        loadingText = 'Дипак Чопра Печатает'

        // Настройки кнопок
        // next-message  --- с помощью номера сообщения
        // ---  next-message можно указывать без номера тогда он воспроизведет следующиее сообщение

        // data-result ставится на 1 сообщение ответа

        // set-result  --- выбирает ответ по data-result

        // result выводит текущий выбранный ответ по data-result=2

    </script>
</head>

<body>
    <div class="content">
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Добрый день! Вы находитесь на личном сайте доктора Дипак Чопра. Здесь вы можете рассказать, что вас
                    беспокоит. А я проведу онлайн-диагностику и назначу эффективное лечение.
                </p>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Ответьте на следующие вопросы и получите индивидуальную консультацию по вашему случаю всего за
                    несколько минут
                </p>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Укажите ваш возраст
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>до 35 лет</button>
                    <button class="btn operating-btn" next-message>36-45 лет</button>
                    <button class="btn operating-btn" next-message>46-55 лет</button>
                    <button class="btn operating-btn" next-message set-result=3>55-65 лет</button>
                    <button class="btn operating-btn" next-message result>старше 66
                        лет</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Укажите ваш пол
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message=9 result>Мужской</button>
                    <button class="btn operating-btn" next-message=7>Женский</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Принимаете ли вы гормональные контрацептивы или гормональную заместительную терапию?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Да</button>
                    <button class="btn operating-btn" next-message>Нет</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Принимаете ли вы витамин Д?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Да</button>
                    <button class="btn operating-btn" next-message>Нет</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Какой образ жизни вы ведете?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Стараюсь вести активный образ жизни</button>
                    <button class="btn operating-btn" next-message>Физическая активность периодическая</button>
                    <button class="btn operating-btn" next-message>Сидячий образ жизни</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Укажите тип труда и физической активности? (возможность нескольких ответов)
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Сидячая работа</button>
                    <button class="btn operating-btn" next-message>Работа статическая стоя</button>
                    <button class="btn operating-btn" next-message>Частое поднятие тяжестей</button>
                    <button class="btn operating-btn" next-message>Труд, связанный с постоянной ходьбой</button>
                    <button class="btn operating-btn" next-message>Высокая рабочая физическая активность,
                        тяжелый
                        физический труд.</button>

                </div>
            </div>
        </div>


        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Занимаетесь ли вы спортом?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message=16>Да</button>
                    <button class="btn operating-btn" next-message>Нет</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Какой вид спорта предпочитаете?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Командные игры(футбол,баскетбол,
                        волейбол)</button>
                    <button class="btn operating-btn" next-message>Бег</button>
                    <button class="btn operating-btn" next-message>Ходьба</button>
                    <button class="btn operating-btn" next-message>Силовая физическая нагрузка</button>
                    <button class="btn operating-btn" next-message>Йога, растяжка</button>
                    <button class="btn operating-btn" next-message>Танцы</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Были ли у вас переломы костей или травмы суставов, связок, мышц? Кто указывает травмы –
                    результат 2
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Да</button>
                    <button class="btn operating-btn" next-message>Нет</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Были ли у вас операции на костях, мышцах, связках?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg  stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Да</button>
                    <button class="btn operating-btn" next-message>Нет</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Есть ли у вас генетическое заболевание суставов? Положительный ответ – 1 вариант результатов
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg  stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Нет</button>
                    <button class="btn operating-btn" next-message>Ревматоидный артрит</button>
                    <button class="btn operating-btn" next-message>Подагра</button>
                    <button class="btn operating-btn" next-message>Спондилоартроз</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Есть ли у вас повышенная масса тела?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Нет</button>
                    <button class="btn operating-btn" next-message>Есть избыточная масса тела</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Что вас беспокоит больше? (возможность нескольких ответов)
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Интенсивная боль в суставах и
                        позвоночнике</button>
                    <button class="btn operating-btn" next-message>Утренняя скованность движений</button>
                    <button class="btn operating-btn" next-message>Вечерняя боль и напряжение в мышцах</button>
                    <button class="btn operating-btn" next-message>Отек и краснота в области суставов</button>
                    <button class="btn operating-btn" next-message>Простреливающая боль в позвоночнике с
                        отдачей
                        вногу</button>
                    <button class="btn operating-btn" next-message>Ограничения в движениях суставов и
                        позвоночнике</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Есть ли у вас деформация суставов или позвоночника?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Да</button>
                    <button class="btn operating-btn" next-message>Нет</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Как часто возникают вышеуказанные жалобы?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Ежедневно</button>
                    <button class="btn operating-btn" next-message>Около 3-4 раз в неделю</button>
                    <button class="btn operating-btn" next-message>Около 1 раза в неделю</button>
                    <button class="btn operating-btn" next-message>Несколько раз в месяц</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Сколько обычно длится болезненный эпизод?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Неопределенно длительно</button>
                    <button class="btn operating-btn" next-message> 1-2 Недели</button>
                    <button class="btn operating-btn" next-message>2-4 дня</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Что вы принимаете при приступе боли?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Ничего</button>
                    <button class="btn operating-btn" next-message>Таблетки противовоспалительные</button>
                    <button class="btn operating-btn" next-message>Обезболивающее</button>
                    <button class="btn operating-btn" next-message>Местные мази и компрессы</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Есть ли эффект от самостоятельного лечения?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>Да</button>
                    <button class="btn operating-btn" next-message>Нет</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    На какое время помогает самостоятельное лечение?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div>
                    <button class="btn operating-btn" next-message>На 1-2 часа</button>
                    <button class="btn operating-btn" next-message>На 3-4 часа</button>
                    <button class="btn operating-btn" next-message>На 5-8 часов</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    Как часто вы меняете схему лечения?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg stop-msg">
                <div>
                    <button class="btn operating-btn" result>Сменил 1-2 препарата, без
                        эффекта</button>
                    <button class="btn operating-btn" result>Сменил 3-5 препаратов, без
                        эффекта</button>
                    <button class="btn operating-btn" result>Меняю схему лечения регулярно, ничего
                        не
                        помогает.</button>
                </div>
            </div>
        </div>

        <!-- ОТВЕТ 1 -->

        <div class="msg-wrapper left-msg" data-result=1>
            <div class="msg">
                <p class="msg-question">
                    У вас есть генетическое заболевание суставов и позвоночника. При ревматоидном артрите,
                    например,
                    сами клетки организма атакуют ткани сустава. Из-за этого возникает воспаление, боль и
                    деформация
                    суставов. При подагрическом артрите страдает обмен веществ. Животная пища плохо усваивается
                    и
                    откладывается в тканях сустава в виде солей мочевой кислоты. Скорее всего, вам назначают
                    постоянное
                    лечение, однако положительный эффект выражен слабо. Соблюдения общих рекомендаций может не
                    хватить
                    для хорошего результата.
                </p>
                <img class="img-question hidden"
                    src="https://cdnn1.ukraina.ru/img/07e6/0c/02/1041436899_0:206:2905:1840_1920x0_80_0_0_c7022893b761781d76fe592010d14bd2.jpg">
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Ко мне обращаются ежедневно пациенты с такими же симптомами патологии. По статистике около
                    42 млн
                    людей в Индии страдают от генетических заболеваний суставов и позвоночника. Примерно 17 млн
                    из них
                    встречаются с тяжелыми осложнениями патологий, которые могут привести к летальному исходу.
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg ">
                <p class="msg-question">
                    Чтобы побороть болезнь, вам нужно использовать в лечении комбинацию из натуральных
                    растительных
                    компонентов. Экстракты перца, гвоздики, имбиря и куркумы помогают подавить воспалительный
                    процесс в
                    суставе и позвоночнике. Усиливается кровообращение в этой зоне, за счет такого механизма
                    основные
                    действующие компоненты хорошо проникают в глубокие ткани.
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Натуральный рыбный коллаген и сульфат хондроитина, выделенный из морских животных, полностью
                    восстанавливают поврежденные ткани сустава и позвоночника. Пораженные клетки получают нужные
                    питательные компоненты и обновляются. Весь организм омолаживается, возвращается полнота и
                    безболезненность движений.

                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Такие активные компоненты гармонично сочетаются в новом препарате для местного лечения геле
                    Fixit.
                    Формула лекарства предполагает идеальные и совместимые концентрации всех составляющих. Для
                    производства применяется новая технология холодной экстракции растений. Именно она позволяет
                    очистить сырье и сохранить все полезные свойства трав. Поэтому Fixit можно применять людям с
                    аллергией или чувствительной кожей.
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Для лечения вашей патологии я рекомендую вам наносить гель Fixit утром и вечером тонким
                    слоем на
                    кожу над зоной воспаления. Курс терапии занимает 30 дней.
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <div class="msg-question">
                    <p>Какие результаты вы можете ожидать?</p>
                    <ul>
                        <li>
                            Уменьшение болевого и воспалительного синдрома в первые 5-7 дней применения;
                        </li>
                        <li>
                            Полное купирование болей в течение 2 недель терапии;
                        </li>
                        <li>
                            Реконструирование костных и мягкотканных компонентов сустава за 30 дней лечения.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Дополнительные рекомендации. Стоит совместить курс лечения Fixit с улучшением образа жизни.
                    Соблюдайте диету, подключайте безопасную физическую активность. Если вы никогда не
                    занимались
                    спортом, то начните с простых прогулок на свежем воздухе. С течением времени постепенно
                    наращивайте
                    нагрузку.
                </p>
            </div>
        </div>

        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Я активно сотрудничаю с производителем лекарства, поэтому компания предоставляет скидку 50%
                    на Fixit
                    моим пациентам. Акция действует ровно 24 часа. Количество партии препарата для пациентов
                    доктора
                    Дипак Чопра ограничен. Поторопитесь! Успейте заказать эффективное лекарство для суставов
                    Fixit.
                </p>
            </div>
        </div>
        <!-- Ответ 2 -->
        <div class="msg-wrapper  left-msg" data-result=2>
            <div class="msg">
                <p class="msg-question">
                    У вас были травмы опорно-двигательного аппарата. Такие повреждения не проходят бесследно, но
                    при
                    правильном и грамотном лечении можно избавиться от боли и последствий травм. При повреждении
                    опорно-двигательного аппарата изменяется распределение нагрузки на ось тела и основные
                    крупные
                    суставы, позвоночник. Мышцы на здоровой стороне тела тоже подвергаются повышенному
                    напряжению, боль
                    возникает во всем теле.
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    По моим статистическим 57 млн человек в Индии страдают от последствий травм суставов, костей
                    и
                    позвоночника. Из них 8 млн подвергаются неправильному лечению, которое заканчивается
                    осложнениями.
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Чтобы побороть болезнь, вам нужно Использовать в лечении комбинацию из натуральных
                    растительных
                    компонентов. Экстракты перца, гвоздики, имбиря и куркумы помогают подавить воспалительный
                    процесс в
                    суставе и позвоночнике. Усиливается кровообращение в этой зоне, за счет такого механизма
                    основные
                    действующие компоненты хорошо проникают в глубокие ткани.

                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Натуральный рыбный коллаген и сульфат хондроитина, выделенный из морских животных, полностью
                    восстанавливают поврежденные ткани сустава и позвоночника. Пораженные клетки получают нужные
                    питательные компоненты и обновляются, места разрыва сухожилий, связок и мышц зарастают без
                    грубых
                    рубцов. Весь организм омолаживается, возвращается полнота и безболезненность движений.

                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Такие активные компоненты гармонично сочетаются в новом препарате для местного лечения геле
                    Fixit.
                    Формула лекарства предполагает идеальные и совместимые концентрации всех составляющих. Для
                    производства применяется новая технология холодной экстракции растений. Именно она позволяет
                    очистить сырье и сохранить все полезные свойства трав. Поэтому Fixit можно применять людям с
                    аллергией или чувствительной кожей.

                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Для лечения вашей патологии я рекомендую вам наносить гель Fixit утром и вечером тонким
                    слоем на
                    кожу над зоной воспаления. Курс терапии занимает 30 дней.
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <div class="msg-question">
                    <p> Какие результаты вы можете ожидать?</p>
                    <ul>
                        <li>
                            Уменьшение болевого и воспалительного синдрома в первые 5-7 дней применения;
                        </li>
                        <li>
                            Полное купирование болей в течение 2 недель терапии;
                        </li>
                        <li>
                            Реконструирование костных и мягкотканных компонентов сустава за 30 дней лечения.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Дополнительные рекомендации. Стоит совместить курс лечения Fixit с улучшением образа жизни.
                    Соблюдайте диету, подключайте безопасную физическую активность. Если вы никогда не
                    занимались
                    спортом, то начните с простых прогулок на свежем воздухе. С течением времени постепенно
                    наращивайте
                    нагрузку.
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Я активно сотрудничаю с производителем лекарства, поэтому компания предоставляет скидку 50%
                    на Fixit
                    моим пациентам. Акция действует ровно 24 часа. Количество партии препарата для пациентов
                    доктора
                    Дипак Чопра ограничен. Поторопитесь! Успейте заказать эффективное лекарство для суставов
                    Fixit.
                </p>
            </div>
        </div>
        <!-- Ответ 3 -->
        <div class="msg-wrapper  left-msg" data-result=3>
            <div class="msg">
                <p class="msg-question">
                    Скорее всего, у вас есть артрозы крупных суставов. С возрастом костные суставные поверхности
                    начинают разрушаться от высоких нагрузок. Лишний вес, интенсивный физический труд и
                    предыдущие
                    травмы только усугубляют процесс. К лечение таких изменений в суставах нужно подходить
                    комплексно.
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Около 40 млн людей в Индии страдают от возрастных изменений в суставах и позвоночнике. Почти
                    50% из
                    них говорят о ежедневной боли и неэффективности лечения.
                </p>
            </div>
        </div>

        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Чтобы побороть болезнь, вам нужно Использовать в лечении комбинацию из натуральных
                    растительных
                    компонентов. Экстракты перца, гвоздики, имбиря и куркумы помогают подавить воспалительный
                    процесс в
                    суставе и позвоночнике. Усиливается кровообращение в этой зоне, за счет такого механизма
                    основные
                    действующие компоненты хорошо проникают в глубокие ткани.

                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Натуральный рыбный коллаген и сульфат хондроитина, выделенный из морских животных, полностью
                    восстанавливают поврежденные ткани сустава и позвоночника. Пораженные клетки получают нужные
                    питательные компоненты и обновляются, места разрыва сухожилий, связок и мышц зарастают без
                    грубых
                    рубцов. Костный поверхности в суставах заполняются молекулами коллагена и хондроитина,
                    костная ткань
                    регенерирует. Весь организм омолаживается, возвращается полнота и безболезненность движений.

                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Такие активные компоненты гармонично сочетаются в новом препарате для местного лечения геле
                    Fixit.
                    Формула лекарства предполагает идеальные и совместимые концентрации всех составляющих. Для
                    производства применяется новая технология холодной экстракции растений. Именно она позволяет
                    очистить сырье и сохранить все полезные свойства трав. Поэтому Fixit можно применять людям с
                    аллергией или чувствительной кожей.

                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Для лечения вашей патологии я рекомендую вам наносить гель Fixit утром и вечером тонким
                    слоем на
                    кожу над зоной воспаления. Курс терапии занимает 30 дней.

                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <div class="msg-question">
                    <p>Какие результаты вы можете ожидать?</p>
                    <ul>
                        <li>
                            Уменьшение болевого и воспалительного синдрома в первые 5-7 дней применения;
                        </li>
                        <li>
                            Полное купирование болей в течение 2 недель терапии;
                        </li>
                        <li>
                            Реконструирование костных и мягкотканных компонентов сустава за 30 дней лечения.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Дополнительные рекомендации. Стоит совместить курс лечения Fixit с улучшением образа жизни.
                    Соблюдайте диету, подключайте безопасную физическую активность. Если вы никогда не
                    занимались
                    спортом, то начните с простых прогулок на свежем воздухе. С течением времени постепенно
                    наращивайте
                    нагрузку.

                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    Я активно сотрудничаю с производителем лекарства, поэтому компания предоставляет скидку 50%
                    на Fixit
                    моим пациентам. Акция действует ровно 24 часа. Количество партии препарата для пациентов
                    доктора
                    Дипак Чопра ограничен. Поторопитесь! Успейте заказать эффективное лекарство для суставов
                    Fixit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>