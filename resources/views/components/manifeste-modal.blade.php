{{-- // resources/views/components/manifeste-modal.blade.php --}}

<div id="manifesteModal" class="modal-overlay" style="display: none; margin-top:15px">
    <div class="modal-container">
        <div class="modal-content">
            <button type="button" class="modal-close" onclick="closeManifesteModal()">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width: 24px; height: 24px;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="modal-header">
                <h2 class="modal-title">Télécharger le Manifeste MBRC</h2>
                <p class="modal-description">Remplissez ce formulaire pour recevoir le lien de téléchargement par email</p>
            </div>

            <form id="manifesteForm" action="{{ route('manifeste.download') }}" method="POST" class="modal-form">
                @csrf

                <div class="form-group">
                    <label for="manifeste_nom">Nom <span style="color: var(--red-primary);">*</span></label>
                    <input type="text" id="manifeste_nom" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="manifeste_prenom">Prénom <span style="color: var(--red-primary);">*</span></label>
                    <input type="text" id="manifeste_prenom" name="prenom" required>
                </div>

                <div class="form-group">
                    <label for="manifeste_email">Email <span style="color: var(--red-primary);">*</span></label>
                    <input type="email" id="manifeste_email" name="email" required>
                </div>

                <div id="manifesteError" class="alert-error" style="display: none;"></div>
                <div id="manifesteSuccess" class="alert-success" style="display: none;"></div>

                <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center;">
                    <span id="manifesteButtonText">Recevoir le lien par email</span>
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

<style>
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.75);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    overflow-y: auto;
}

.modal-container {
    width: 100%;
    max-width: 500px;
    position: relative;
}

.modal-content {
    background: white;
    border-radius: var(--radius-xl);
    padding: 2rem;
    position: relative;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
}

.modal-close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--gray-100);
    border: none;
    border-radius: var(--radius-full);
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all var(--transition-fast);
}

.modal-close:hover {
    background: var(--gray-200);
    transform: rotate(90deg);
}

.modal-header {
    margin-bottom: 2rem;
}

.modal-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--gray-900);
    margin-bottom: 0.5rem;
}

.modal-description {
    color: var(--gray-600);
    font-size: 0.9375rem;
}

.modal-form {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--gray-700);
    font-size: 0.9375rem;
}

.form-group input {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid var(--gray-200);
    border-radius: var(--radius-md);
    font-size: 1rem;
    transition: border-color var(--transition-fast);
}

.form-group input:focus {
    outline: none;
    border-color: var(--green-primary);
}

.alert-error {
    padding: 1rem;
    background: #fee;
    border: 1px solid #fcc;
    border-radius: var(--radius-md);
    color: #c00;
    font-size: 0.9375rem;
}

.alert-success {
    padding: 1rem;
    background: #efe;
    border: 1px solid #cfc;
    border-radius: var(--radius-md);
    color: #060;
    font-size: 0.9375rem;
}

@media (max-width: 640px) {
    .modal-content {
        padding: 1.5rem;
    }

    .modal-title {
        font-size: 1.25rem;
    }
}
</style>
