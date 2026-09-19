const STORAGE_KEY = 'mc-app-v8-theme';

function getPreferredTheme() {
    return localStorage.getItem(STORAGE_KEY) || 'system';
}

export function applyTheme(theme = getPreferredTheme()) {
    const allowed = ['light', 'system', 'dark'];
    const value = allowed.includes(theme) ? theme : 'system';

    document.documentElement.dataset.theme = value;
    localStorage.setItem(STORAGE_KEY, value);

    document.querySelectorAll('[data-theme-choice]').forEach((button) => {
        button.classList.toggle('is-active', button.dataset.themeChoice === value);
    });
}

export function initTheme() {
    applyTheme();
    document.querySelectorAll('[data-theme-choice]').forEach((button) => {
        button.addEventListener('click', () => applyTheme(button.dataset.themeChoice));
    });
}

document.addEventListener('DOMContentLoaded', initTheme);
