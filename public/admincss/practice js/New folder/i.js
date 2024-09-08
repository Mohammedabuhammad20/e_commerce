const showButton = document.getElementById('showButton');
const curtain = document.querySelector('.curtain');

showButton.addEventListener('click', () => {
    curtain.classList.add('show');
});