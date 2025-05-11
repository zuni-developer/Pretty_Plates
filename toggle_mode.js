function toggleMode() {
    const body = document.body;
    const switchElement = document.querySelector('.switch');

    if (switchElement.classList.toggle('active')) {
    body.style.backgroundColor = 'black';
    body.style.color = 'white';
    } 
    else {
    body.style.backgroundColor = 'white';
    body.style.color = 'black';
    }
}