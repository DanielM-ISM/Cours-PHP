

//Page accueil
document.addEventListener('DOMContentLoaded', function () {
    const filterButton = document.getElementById('filter-button');
    const filterInput = document.getElementById('filter-input');

    filterButton.addEventListener('click', function () {
        const filterText = filterInput.value.toLowerCase();
        const rows = document.querySelectorAll('#client-list tr');

        rows.forEach(row => {
            const name = row.getAttribute('data-filter-name').toLowerCase();
            const phone = row.getAttribute('data-filter-phone').toLowerCase();

            if (name.includes(filterText) || phone.includes(filterText)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});

//Page client
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form[action="../Controllers/dettes_controller.php"]');
    forms.forEach(form => {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            const index = form.querySelector('input[name="index"]').value;
            const montant = form.querySelector('input[name="montant"]').value;
            try {
                const response = await fetch('../Controllers/dettes_controller.php', {
                    method: 'POST',
                    body: new URLSearchParams({
                        index: index,
                        montant: montant,
                        regler: '1'
                    })
                });
                const data = await response.json();
                if (data.success) {
                    location.reload();
                } else {
                    alert(data.message);
                }
            } catch (error) {
                console.error('Erreur :', error);
            }
        });
    });

    const filterButton = document.getElementById('filter-button');
    const filterInput = document.getElementById('filter-input');

    filterButton.addEventListener('click', function() {
        const filterText = filterInput.value.toLowerCase();
        const rows = document.querySelectorAll('#client-list tr');

        rows.forEach(row => {
            const name = row.getAttribute('data-filter-name').toLowerCase();
            const phone = row.getAttribute('data-filter-phone').toLowerCase();
            if (name.includes(filterText) || phone.includes(filterText)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});

//Page dette
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('client-form');
    const messageDiv = document.getElementById('message');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(form);

        try {
            const response = await fetch('../Controllers/dettes_controller.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                messageDiv.textContent = result.message;
                messageDiv.style.color = 'green';
                form.reset();
            } else {
                messageDiv.textContent = result.message || 'Une erreur est survenue.';
                messageDiv.style.color = 'red';
            }
        } catch (error) {
            console.error('Erreur:', error);
            messageDiv.textContent = 'Impossible de contacter le serveur.';
            messageDiv.style.color = 'red';
        }
    });
});
