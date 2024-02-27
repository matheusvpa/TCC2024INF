const input = document.querySelector('.cpfcadastro');

input.addEventListener('input', () => {
    let inputValue = input.value.replace(/\D/g, ''); // Remove todos os caracteres que não são dígitos

    if (inputValue.length > 11) {
        inputValue = inputValue.slice(0, 11); // Limita a 11 caracteres
    }

    let formattedValue = '';
    for (let i = 0; i < inputValue.length; i++) {
        if (i === 3 || i === 6) {
            formattedValue += '.';
        } else if (i === 9) {
            formattedValue += '-';
        }
        formattedValue += inputValue[i];
    }

    input.value = formattedValue;
});