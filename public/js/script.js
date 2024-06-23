// Validasi inputan nomor hp
const nomorHpInput = document.querySelector('input[name="no_hp"]');
nomorHpInput.addEventListener('input', function () {
    this.value = this.value.replace(/\D/g, '');
});
