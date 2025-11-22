// public/js/manifeste-modal.js

function openManifesteModal() {
    document.getElementById('manifesteModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeManifesteModal() {
    document.getElementById('manifesteModal').style.display = 'none';
    document.body.style.overflow = '';

    // Réinitialiser le formulaire
    document.getElementById('manifesteForm').reset();
    document.getElementById('manifesteError').style.display = 'none';
    document.getElementById('manifesteSuccess').style.display = 'none';
}

// Fermer le modal en cliquant sur l'overlay
document.addEventListener('click', function(e) {
    const modal = document.getElementById('manifesteModal');
    if (e.target === modal) {
        closeManifesteModal();
    }
});

// Fermer avec la touche Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeManifesteModal();
    }
});

// Gestion de la soumission du formulaire
document.getElementById('manifesteForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = e.target;
    const submitBtn = form.querySelector('button[type="submit"]');
    const buttonText = document.getElementById('manifesteButtonText');
    const errorDiv = document.getElementById('manifesteError');
    const successDiv = document.getElementById('manifesteSuccess');

    // Réinitialiser les messages
    errorDiv.style.display = 'none';
    successDiv.style.display = 'none';

    // Désactiver le bouton
    submitBtn.disabled = true;
    buttonText.textContent = 'Envoi en cours...';

    try {
        const formData = new FormData(form);

        const response = await fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json',
            },
            body: formData
        });

        const data = await response.json();

        if (response.ok && data.success) {
            successDiv.textContent = data.message;
            successDiv.style.display = 'block';

            // Réinitialiser le formulaire
            form.reset();

            // Fermer le modal après 3 secondes
            setTimeout(() => {
                closeManifesteModal();
            }, 3000);
        } else {
            throw new Error(data.message || 'Une erreur est survenue');
        }
    } catch (error) {
        errorDiv.textContent = error.message || 'Erreur lors de l\'envoi. Veuillez réessayer.';
        errorDiv.style.display = 'block';
    } finally {
        submitBtn.disabled = false;
        buttonText.textContent = 'Recevoir le lien par email';
    }
});
