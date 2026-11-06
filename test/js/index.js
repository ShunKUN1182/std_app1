const startBtn = document.querySelector("#startbtn");
const stopBtn = document.querySelector("#stopbtn");
const resetBtn = document.querySelector("#resetbtn");
const timeInput = document.querySelector("#time");

let time = 0;

function renderTimes(time) {
    let renderTime = "";
    const times = String(time).split(".");
    const reTimes = times.toReversed();
    console.log(reTimes);
    if (times.length >= 3) {
        renderTime = "99:99:99";
    } else {
        for (let i = 0; i < 2; i++) {
            if (reTimes[i].length == 1) {
                reTimes[i] = `:0${reTimes[i]}`;
            }
            renderTime += reTimes[i] ? reTimes[i] : "00";
        }
    }
    timeInput.innerHTML += renderTime;
}

const intervalId = setInterval(() => {
    time += 0.01;
    renderTimes(time);
}, 10);
startBtn.addEventListener("click", () => {
    intervalId();
});

renderTimes(time);
