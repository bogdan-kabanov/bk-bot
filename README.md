# Документация к боту "Селеба чат"

## _Настройки кнопок_

- next-message --- с помощью номера сообщения

- next-message --- можно указывать без номера тогда он - воспроизведет следующиее сообщение

- data-result --- ставится на 1 сообщение ответа

- set-result --- выбирает ответ по data-result

- result выводит текущий выбранный ответ по data-result=2

        <button next-message>Стандартная кнопка</button>
        <button next-message=4>Кнопка ведущая к конкретному сообщению</button>
        <button set-result=1>Кнопка выбор ответа</button>
        <button result>Итоговая кнопка ведущая к ответу</button>
