function showsepatu() {
    document.querySelectorAll('.service-card').forEach(card => {
        if (card.querySelector('h3').innerText.toLowerCase().includes('sepatu')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

function showkemeja() {
    document.querySelectorAll('.service-card').forEach(card => {
        if (card.querySelector('h3').innerText.toLowerCase().includes('kemeja')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

function showkaos() {
    document.querySelectorAll('.service-card').forEach(card => {
        if (card.querySelector('h3').innerText.toLowerCase().includes('kaos')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

function showjeket() {
    document.querySelectorAll('.service-card').forEach(card => {
        if (card.querySelector('h3').innerText.toLowerCase().includes('jaket')) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}
