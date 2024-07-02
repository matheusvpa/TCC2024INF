document.addEventListener('DOMContentLoaded', function () {
    const cepInput = document.querySelector('#cep');
    const inputsToDisable = document.querySelectorAll('[data-input]');

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
            alert('CEP inválido.');
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
