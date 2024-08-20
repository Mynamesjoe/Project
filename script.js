const container = document.getElementById('container');
const staffBtn = document.getElementById('stafflogin');
const docBtn = document.getElementById('doclogin');

staffBtn.addEventListener('click', () => {
    container.classList.add("active");
});

docBtn.addEventListener('click', () => {
    container.classList.remove("active");
});