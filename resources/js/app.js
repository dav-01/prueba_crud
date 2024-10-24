import './bootstrap';


setTimeout(() => {
    const alert = document.getElementById('alert');
    if (alert) {
        alert.style.display = 'none';
    }
}, 3000);

function closeAlert() {
    const alert = document.getElementById('alert');
    if (alert) {
        alert.style.display = 'none';
    }
}
