const $navbarTop = document.getElementById("topnavbar");
const btn_toggle_navbar = document.getElementById("btn-mobile-toggle-navbar");

window.onscroll = function (evt) {
    const scrollY = evt.target.scrollingElement.scrollTop;
    if (scrollY > 50) return $navbarTop.classList.add("float");
    $navbarTop.classList.remove("float");
};

btn_toggle_navbar.onclick = () => $navbarTop.classList.toggle("open-menu");

// FUNCION DE HORA DEL ANUNCIO
const $time = document.querySelector("#anuncio-time");
const $time_day = $time.querySelector(".time-day");
const $time_hour = $time.querySelector(".time-hour");
const $time_minute = $time.querySelector(".time-minute");
const $time_second = $time.querySelector(".time-second");
const $message = $time.querySelector(".message");

if ($time_day && $time_hour && $time_minute && $time_second) {
    let time_day = parseInt($time_day.innerText);
    let time_hour = parseInt($time_hour.innerText);
    let time_minute = parseInt($time_minute.innerText);
    let time_second = parseInt($time_second.innerText);
    setInterval(() => {
        time_second--;
        if (time_second < 0) {
            time_second = 59;
            time_minute--;
        }
        if (time_minute < 0) {
            time_minute = 59;
            time_hour--;
        }
        if (time_hour < 0) {
            time_hour = 23;
            time_day--;
        }
        if (time_day < 0) {
            time_day = 0;
            time_hour = 0;
            time_minute = 0;
            time_second = 0;
            $time.classList.add("time-out");
            $message.innerText = "¡Ya empezó, te lo estas perdiendo!";
        } else if (time_day == 0) {
            $message.innerText = "¡Empieza hoy!";
        }
        $time_second.innerText = time_second < 10 ? "0" + time_second : time_second;
        $time_minute.innerText = time_minute < 10 ? "0" + time_minute : time_minute;
        $time_hour.innerText = time_hour < 10 ? "0" + time_hour : time_hour;
        $time_day.innerText = time_day;
    }, 1000);
}
