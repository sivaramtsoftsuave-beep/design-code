<div class="modal-content case-study-form-content">
    <button type="button" class="cs-modal-close" data-dismiss="modal" aria-label="Close">&times;</button>

    <h5 class="cs-modal-title" id="caseStudyModalTitle">Get the full case study</h5>
    <p class="cs-modal-subtitle">Enter your details and we'll email you the download link.</p>

    <form id="caseStudyDownloadForm" novalidate>
        <!-- populated automatically from the modal's data-case-study / data-case-study-url -->
        <input type="hidden" name="case_study_name" id="cs_form_name_field">
        <input type="hidden" name="case_study_url" id="cs_form_url_field">

        <input type="text" id="cs_name" name="name" placeholder="Your name" required maxlength="100">
        <input type="email" id="cs_email" name="email" placeholder="Your e-mail" required>
        <input type="tel" id="cs_mobile" name="mobile" placeholder="Phone" pattern="[0-9+\-\s()]{7,15}" required>

        <div id="caseStudyFormAlert" class="cs-modal-alert" role="alert"></div>

        <button type="submit" class="cs-btn cs-btn--primary" id="caseStudySubmitBtn">
            Download Case Study
        </button>
    </form>
</div>

<style>
/* Self-contained popup mechanics — does NOT depend on Bootstrap's modal CSS/JS
   being present or working, so it can't accidentally render inline. */
#consult_Popup {
    display: none !important;
    position: fixed !important;
    top: 0; left: 0; right: 0; bottom: 0;
    width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.6) !important;
    z-index: 2000 !important;
    align-items: center;
    justify-content: center;
    overflow-y: auto;
    padding: 20px;
    box-sizing: border-box;
}
#consult_Popup.cs-show {
    display: flex !important;
}
#consult_Popup .modal-dialog {
    margin: auto;
    max-width: 460px;
    width: 100%;
}
#consult_Popup .modal-content {
    position: relative;
    background: var(--panel, #fff);
    border-radius: var(--radius, 16px);
    padding: 32px;
    font-family: 'Inter', sans-serif;
    color: var(--ink, #10151B);
}
#consult_Popup .cs-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    background: none;
    border: none;
    font-size: 22px;
    line-height: 1;
    color: var(--ink-faint, #8894A0);
    cursor: pointer;
}
#consult_Popup .cs-modal-title {
    font-size: 20px;
    font-weight: 600;
    margin: 0 0 8px;
}
#consult_Popup .cs-modal-subtitle {
    font-size: 14px;
    color: var(--ink-soft, #54606E);
    margin: 0 0 20px;
}
#consult_Popup #caseStudyDownloadForm {
    display: grid;
    gap: 12px;
}
#consult_Popup #caseStudyDownloadForm input[type="text"],
#consult_Popup #caseStudyDownloadForm input[type="email"],
#consult_Popup #caseStudyDownloadForm input[type="tel"] {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    padding: 12px 14px;
    border: 1px solid var(--line, #DCE2E8);
    border-radius: 8px;
    background: var(--bg, #F5F7FA);
    color: var(--ink, #10151B);
    width: 100%;
    box-sizing: border-box;
}
#consult_Popup #caseStudyDownloadForm input::placeholder {
    color: var(--ink-faint, #8894A0);
}
#consult_Popup .cs-btn {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 14px;
    padding: 14px 22px;
    border-radius: 8px;
    border: 1px solid transparent;
    cursor: pointer;
    width: 100%;
    text-align: center;
}
#consult_Popup .cs-btn--primary {
    background: var(--restore, #FF6C3A);
    color: #fff;
}
#consult_Popup .cs-btn--primary:disabled {
    opacity: 0.7;
    cursor: default;
}
#consult_Popup .cs-modal-alert {
    display: none;
    font-size: 13px;
    padding: 10px 12px;
    border-radius: 8px;
}
#consult_Popup .cs-modal-alert.d-none {
    display: none;
}
#consult_Popup .cs-modal-alert.alert-success {
    display: block;
    background: var(--restore-bg, #EAF4F0);
    color: #1a7a4c;
}
#consult_Popup .cs-modal-alert.alert-danger {
    display: block;
    background: var(--flag-bg, #F7ECE7);
    color: var(--flag, #B5472A);
}
</style>

<script>
(function () {
    var modal = document.getElementById('consult_Popup');
    if (!modal || modal.dataset.csInit) return; // avoid double-binding
    modal.dataset.csInit = '1';

    var form = document.getElementById('caseStudyDownloadForm');
    var alertBox = document.getElementById('caseStudyFormAlert');
    var submitBtn = document.getElementById('caseStudySubmitBtn');

    function openModal() {
        var dialog = modal.querySelector('.modal-dialog');
        var caseStudyName = (dialog && dialog.getAttribute('data-case-study')) || document.title;
        var caseStudyUrl = dialog && dialog.getAttribute('data-case-study-url');

        // fallback for pages not yet updated with data-case-study-url
        if (!caseStudyUrl) {
            var legacyInput = document.getElementById('case_study_url');
            caseStudyUrl = legacyInput ? legacyInput.value : '';
        }

        form.reset();
        document.getElementById('cs_form_name_field').value = caseStudyName || '';
        document.getElementById('cs_form_url_field').value = caseStudyUrl || '';
        alertBox.classList.add('d-none');
        alertBox.classList.remove('alert-success', 'alert-danger');
        alertBox.textContent = '';

        modal.classList.add('cs-show');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('cs-show');
        document.body.style.overflow = '';
    }

    // Open: any element anywhere on the page that points at this modal
    document.addEventListener('click', function (e) {
        var trigger = e.target.closest(
            '[data-target="#consult_Popup"], [data-bs-target="#consult_Popup"]'
        );
        if (trigger) {
            e.preventDefault();
            openModal();
            return;
        }

        // Close: dismiss button
        if (e.target.closest('[data-dismiss="modal"], [data-bs-dismiss="modal"]')) {
            e.preventDefault();
            closeModal();
            return;
        }

        // Close: click on the dark backdrop itself (not inside the dialog)
        if (e.target === modal) {
            closeModal();
        }
    });

    // Close on Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal.classList.contains('cs-show')) {
            closeModal();
        }
    });

    // Submit via fetch (works even if jQuery/jQuery-slim is loaded without $.ajax)
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        alertBox.classList.add('d-none');
        alertBox.classList.remove('alert-success', 'alert-danger');
        alertBox.textContent = '';
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';

        fetch('case-study-download-handler.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams(new FormData(form)).toString()
        })
            .then(function (res) { return res.json(); })
            .then(function (data) {
                if (data.status === 'success') {
                    alertBox.classList.remove('d-none', 'alert-danger');
                    alertBox.classList.add('alert-success');
                    alertBox.textContent = data.message;
                    setTimeout(function () {
                        closeModal();
                        submitBtn.disabled = false;
                        submitBtn.textContent = 'Download Case Study';
                    }, 1800);
                } else {
                    alertBox.classList.remove('d-none', 'alert-success');
                    alertBox.classList.add('alert-danger');
                    alertBox.textContent = data.message || 'Something went wrong. Please try again.';
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Download Case Study';
                }
            })
            .catch(function () {
                alertBox.classList.remove('d-none', 'alert-success');
                alertBox.classList.add('alert-danger');
                alertBox.textContent = 'Something went wrong. Please try again.';
                submitBtn.disabled = false;
                submitBtn.textContent = 'Download Case Study';
            });
    });
})();
</script>
