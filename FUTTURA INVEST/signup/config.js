document.addEventListener('DOMContentLoaded', function () {
    const cepInput = document.querySelector('#cep');
    const celularInput = document.querySelector('#celular');
    const inputsToDisable = document.querySelectorAll('[data-input]');

    // Formato de CEP (xxxxx-xxx)
    cepInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '');
        if (this.value.length > 5) {
            this.value = this.value.replace(/^(\d{5})(\d{3})/, '$1-$2');
        }
    });

    // Formato de celular ((xx) x xxxx-xxxx)
    celularInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '');
        if (this.value.length > 0) {
            let formattedValue = '';
            // Adiciona o código de área
            if (this.value.length > 2) {
                formattedValue += `(${this.value.substring(0, 2)}) `;
            } else if (this.value.length <= 2) {
                formattedValue += `(${this.value.substring(0, 2)}`;
            }

            // Adiciona o primeiro dígito após o código de área
            if (this.value.length > 2) {
                formattedValue += `${this.value.substring(2, 3)} `;
            } else if (this.value.length > 1) {
                formattedValue += `${this.value.substring(2, 3)}`;
            }

            // Adiciona o restante do número
            if (this.value.length > 3) {
                formattedValue += `${this.value.substring(3, 7)}-${this.value.substring(7, 11)}`;
            } else if (this.value.length > 2) {
                formattedValue += `${this.value.substring(3, 7)}`;
            }

            this.value = formattedValue;
        }
    });

    // Código ViaCEP (mantendo o código original)
    cepInput.addEventListener('blur', function () {
        const cep = this.value.replace(/\D/g, '');
        if (cep.length === 8) {
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    if (!data.erro) {
                        document.querySelector('#address').value = data.logradouro;
                        document.querySelector('#neighborhood').value = data.bairro;
                        document.querySelector('#city').value = data.localidade;
                        document.querySelector('#region').value = data.uf;

                        inputsToDisable.forEach(input => input.disabled = false);
                    } else {
                        alert("CEP não encontrado.");
                        resetForm();
                    }
                })
                .catch(error => {
                    console.error('Erro ao buscar CEP:', error);
                    alert('Erro ao buscar CEP.');
                    resetForm();
                });
        } else {
            alert('CEP inválido, reinicie essa página para continuar.');
            resetForm();
        }
    });

    function resetForm() {
        document.querySelector('#address').value = '';
        document.querySelector('#neighborhood').value = '';
        document.querySelector('#city').value = '';
        document.querySelector('#region').value = 'Estado';

        inputsToDisable.forEach(input => input.disabled = true);
    }

});
