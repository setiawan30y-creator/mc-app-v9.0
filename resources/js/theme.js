const STORAGE = {
    theme: 'mc-app-v9-theme',
    accent: 'mc-app-v9-accent',
    background: 'mc-app-v9-background',
    card: 'mc-app-v9-card',
    radius: 'mc-app-v9-radius',
    density: 'mc-app-v9-density',
};

const DEFAULTS = {
    theme: 'system',
    accent: 'gold',
    background: 'warm',
    card: 'elevated',
    radius: 'soft',
    density: 'comfortable',
};

const OPTIONS = {
    theme: ['light', 'system', 'dark'],
    accent: ['emerald', 'gold', 'blue', 'violet', 'red'],
    background: ['warm', 'cool', 'clean'],
    card: ['flat', 'elevated', 'soft'],
    radius: ['sharp', 'soft', 'round'],
    density: ['compact', 'comfortable'],
};

function readSetting(key) {
    const value = localStorage.getItem(STORAGE[key]);
    return value && OPTIONS[key].includes(value) ? value : DEFAULTS[key];
}

function writeSetting(key, value) {
    localStorage.setItem(STORAGE[key], value);
}

export function getAppearanceSettings() {
    return Object.keys(STORAGE).reduce((settings, key) => {
        settings[key] = readSetting(key);
        return settings;
    }, {});
}

export function applyAppearance(settings = getAppearanceSettings()) {
    const root = document.documentElement;

    Object.keys(STORAGE).forEach((key) => {
        const value = OPTIONS[key].includes(settings[key]) ? settings[key] : DEFAULTS[key];
        root.dataset[key] = value;
        writeSetting(key, value);
    });

    document.querySelectorAll('[data-appearance-choice]').forEach((button) => {
        const group = button.dataset.appearanceChoice;
        button.classList.toggle('is-active', button.dataset.value === settings[group]);
        button.setAttribute('aria-pressed', button.dataset.value === settings[group] ? 'true' : 'false');
    });
}

export function setAppearance(key, value) {
    const settings = getAppearanceSettings();
    if (!OPTIONS[key]?.includes(value)) return;
    settings[key] = value;
    applyAppearance(settings);
}

export function resetAppearance() {
    Object.entries(DEFAULTS).forEach(([key, value]) => writeSetting(key, value));
    applyAppearance(DEFAULTS);
}

export function initTheme() {
    applyAppearance();

    document.querySelectorAll('[data-appearance-choice]').forEach((button) => {
        button.addEventListener('click', () => {
            setAppearance(button.dataset.appearanceChoice, button.dataset.value);
        });
    });

    document.querySelector('[data-appearance-reset]')?.addEventListener('click', resetAppearance);
}

document.addEventListener('DOMContentLoaded', initTheme);
