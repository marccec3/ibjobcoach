function showModal() {
    document.getElementById('paymentModal').style.display = 'flex';
}

function hideModal() {
    document.getElementById('paymentModal').style.display = 'none';
}

function processPayment() {
    // Lógica para procesar el pago
    alert('Pago procesado correctamente');
    hideModal();
}