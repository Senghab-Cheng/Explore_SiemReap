function showTab(tab, el) {
    document.querySelectorAll('.tab-panel').forEach((panel) => panel.classList.remove('active'));
    document.querySelectorAll('.tab-btn:not(.logout-tab)').forEach((button) => button.classList.remove('active'));

    const panel = document.getElementById('tab-' + tab);
    if (panel) {
        panel.classList.add('active');
    }

    if (el) {
        el.classList.add('active');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const profileImageInput = document.getElementById('profileImageInput');
    const profilePreviewImg = document.getElementById('profilePreviewImg');
    const profileImagePreview = document.getElementById('profileImagePreview');

    if (!profileImageInput || !profilePreviewImg || !profileImagePreview) {
        return;
    }

    profileImageInput.addEventListener('change', (event) => {
        const file = event.target.files[0];

        if (!file) {
            profileImagePreview.style.display = 'none';
            profilePreviewImg.src = '';
            return;
        }

        const reader = new FileReader();
        reader.onload = (readerEvent) => {
            profilePreviewImg.src = readerEvent.target.result;
            profileImagePreview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    });
});
