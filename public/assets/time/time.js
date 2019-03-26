const h = document.getElementById("h");
const m = document.getElementById("m");
const s = document.getElementById("s");

function setDate() {
  const now = new Date();
  const seconds = now.getSeconds();
  s.innerHTML = seconds;

  const mins = now.getMinutes();
  m.innerHTML = mins;

  const hours = now.getHours();
  h.innerHTML = hours;
}

setInterval(setDate, 1000);
setDate();
