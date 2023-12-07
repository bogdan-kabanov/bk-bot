let allowNextMessage = true,
    messageId = 0,
    backMessageId = 0,
    resultId = 1,
    MAX_DELAY_MESSAGES = 0;

MAX_DELAY_MESSAGES *= 1000

let block = document.querySelector('.content-chat');

function isBlockEnd() {
    let blockHeight = block.scrollHeight;
    let blockTop = block.getBoundingClientRect().top;
    let windowHeight = window.innerHeight;

    return blockTop + blockHeight <= windowHeight;
}

function enableBlockScroll() {
    block.style.overflow = 'auto';
}

window.addEventListener('scroll', function () {
    if (isBlockEnd()) {
        enableBlockScroll();
    }
});

function scrollToBlockEnd() {
    let blockHeight = block.scrollHeight;

    block.style.overflow = 'hidden';
    block.style.overflowY = 'scroll';

    block.scrollTo({
        top: blockHeight,
        behavior: 'smooth'
    });
}

function scrollToBottom() {
    let pageHeight = Math.max(body.scrollHeight, body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);

    body.style.overflow = 'hidden';
    body.style.overflowY = 'scroll'; // Добавляем стиль overflow: scroll

    window.scrollTo({
        top: pageHeight,
        behavior: 'smooth'
    });
}

const btnList = document.querySelectorAll('button')
btnList.forEach(button => {
    button.addEventListener('click', () => {
        const now = new Date();
        const time = now.toLocaleTimeString('ru-RU', { hour: '2-digit', minute: '2-digit' });

        const selectText = button.innerText
        button.closest('.msg').innerHTML = `<div>
        <p style="text-align:end">आप</p>
            <button class="btn-selected">${selectText}</button>
        <p style="text-align:end">${time}</p>
        </div>`
    })
})

function animationText(text) {
    let animatedText = '';

    for (let i = 0; i < text.length; i++) {
        animatedText += `<span class="animated-letter" style="animation-delay: ${i * 0.1}s">${text[i]}</span>`;
    }

    return animatedText;
}

function delayMessages(msg_wrapper, messageId) {
    const nextMessageWrapper = msg_list[messageId + 1]?.closest('.msg-wrapper');
    const endResult = nextMessageWrapper?.getAttribute('data-result') == null
    const tragetStop = !msg_wrapper?.classList.contains('stop-msg');

    const text = msg_wrapper.textContent
    const delay = text.length * 10 <= MAX_DELAY_MESSAGES ? text.length * 10 : MAX_DELAY_MESSAGES
    const messageContent = msg_wrapper.innerHTML

    msg_wrapper.style.display = "flex"
    msg_wrapper.innerHTML = animationText('●●● ') + ` <span style="margin-left: 5px"> ${loadingText} </span>`;

    if (endResult && tragetStop) {
        if (msg_wrapper.classList.contains('right-msg')) {
            msg_wrapper.innerHTML = messageContent
            delayMessages(nextMessageWrapper, messageId + 1, text);
            scrollToBlockEnd()
        } else {
            setTimeout(function () {
                msg_wrapper.innerHTML = messageContent
                delayMessages(nextMessageWrapper, messageId + 1, text);
                getButtons(msg_wrapper)
                scrollToBlockEnd()
            }, delay);
        }
    } else {
        backMessageId = messageId += 1
        msg_wrapper.innerHTML = ''
        setTimeout(function () {
            msg_wrapper.innerHTML = messageContent
            getButtons(msg_wrapper)
            scrollToBlockEnd()
        }, 700);
    }
}

const msg_list = document.querySelectorAll('.msg-wrapper');
msg_list[msg_list.length - 1].classList.add('stop-msg')


const msg = msg_list[0];
const msg_wrapper = msg.closest('.msg-wrapper');

function getResultId(id) {
    const msg_wrapper = document.querySelectorAll('.msg-wrapper');
    let idResult = 0
    msg_wrapper.forEach((wrapper, index) => {
        if (wrapper.getAttribute('data-result') == id) {
            idResult = index
        }
    })

    return idResult
}

function getButtons(wrapper) {
    let btns = wrapper.querySelectorAll('.operating-btn');
    btns.forEach(button => {
        button.addEventListener('click', (button) => {
            const wrapper = button.target?.closest('.msg-wrapper')
            wrapper.innerHTML = ''

            const btnAnswer = document.createElement('button')
            btnAnswer.classList.add('btn');
            btnAnswer.innerText = button.target.innerText

            wrapper.appendChild(btnAnswer)
            if (button.target.hasAttribute('set-result')) {
                const resultId = button.target.getAttribute('set-result')
                setResultId(resultId)
            }

            if (button.target.hasAttribute('result')) {
                const nextMessageWrapper = msg_list[getResultId(resultId)]
                delayMessages(nextMessageWrapper, getResultId(resultId), text);
            } else {
                let nextMessage;
                if (button.target.hasAttribute('next-message')) {
                    nextMessage = backMessageId
                }
                if (button.target?.getAttribute('next-message') !== '') {
                    nextMessage = Number(button.target?.getAttribute('next-message')) - 1;
                }

                console.log(`next message: ${nextMessage}`);

                const nextMessageWrapper = msg_list[nextMessage]
                delayMessages(nextMessageWrapper, nextMessage);
            }

        })
    })
}

function setResultId(id) {
    resultId = id
    console.log(`set result id: ${resultId}`);
}

const text = msg.textContent
delayMessages(msg_wrapper, 0);
