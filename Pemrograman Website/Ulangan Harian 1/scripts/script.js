function hitung_lingkaran() {
    const jariJari = document.querySelector('#jari_jari').value;
    const alertText = document.querySelector('#alert_lingkaran');
    const modalForm = new bootstrap.Modal(document.getElementById('modal_lingkaran'), {});
    
    if (!jariJari) {
        alertText.innerHTML = "Masukkan Jari-Jari terlebih dahulu!";
        return alertText.style.display = "block";
    }

    alertText.style.display = "none";
    const luas = 3.14 * jariJari * jariJari;
    const keliling = 2 * 3.14 * jariJari;

    document.querySelector('#resultDecimal_luasLingkaran').innerHTML = `${luas}cm`;
    document.querySelector('#resultDecimal_kelilingLingkaran').innerHTML = `${keliling}cm`;
    document.querySelector('#resultBulat_luasLingkaran').innerHTML = `${parseInt(luas)}cm`;
    document.querySelector('#resultBulat_kelilingLingkaran').innerHTML = `${parseInt(keliling)}cm`;

    modalForm.show();
}

function reset_lingkaran() {
    const jariJari = document.querySelector('#jari_jari').value;
    const alertText = document.querySelector('#alert_lingkaran');
    if (!jariJari) {
        alertText.innerHTML = "Tidak ada yang perlu dihapus!";
        return alertText.style.display = "block";
    }
    
    alertText.style.display = "none";
    document.querySelector('#jari_jari').value = "";
}

function ganjil_looping() {
    const length = document.querySelector('#length').value;
    const alertText = document.querySelector('#alert_looping');
    const modalForm = new bootstrap.Modal(document.getElementById('modal_ganjil'), {});

    if (!length) {
        alertText.innerHTML = "Masukkan banyak bilangan terlebih dahulu!";
        return alertText.style.display = "block";
    }

    alertText.style.display = "none";
    let text = "";
    for(let i = 1; i <= length; i += 2) {
        text += `${i} `;
    }

    document.querySelector('#ganjil_text').innerHTML = text;
    modalForm.show();
}

function genap_looping() {
    const length = document.querySelector('#length').value;
    const alertText = document.querySelector('#alert_looping');
    const modalForm = new bootstrap.Modal(document.getElementById('modal_genap'), {});

    if (!length) {
        alertText.innerHTML = "Masukkan banyak bilangan terlebih dahulu!";
        return alertText.style.display = "block";
    }

    alertText.style.display = "none";
    let text = "";
    for(let i = 2; i <= length; i += 2) {
        text += `${i} `;
    }

    document.querySelector('#genap_text').innerHTML = text;
    modalForm.show();
}

function reset_looping() {
    const length = document.querySelector('#length').value;
    const alertText = document.querySelector('#alert_looping');

    if (!length) {
        alertText.innerHTML = "Tidak ada yang perlu dihapus!";
        return alertText.style.display = "block";
    }
    
    alertText.style.display = "none";
    document.querySelector('#length').value = "";
}