document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('hero-search-input');
    const tagChips = document.querySelectorAll('.tag-chip');

    tagChips.forEach(chip => {
        chip.addEventListener('click', function (e) {
            e.preventDefault();
            if (searchInput) {
                searchInput.value = this.textContent.trim();
                searchInput.focus();
            }
        });
    });
});