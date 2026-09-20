const STORAGE = {
    theme: 'mc-app-v9-theme', accent: 'mc-app-v9-accent', accentShade: 'mc-app-v9-accent-shade', background: 'mc-app-v9-background', card: 'mc-app-v9-card', radius: 'mc-app-v9-radius', density: 'mc-app-v9-density', sidebar: 'mc-app-v9-sidebar', button: 'mc-app-v9-button', font: 'mc-app-v9-font', shadow: 'mc-app-v9-shadow', border: 'mc-app-v9-border',
};

const DEFAULTS = {
    theme:'system', accent:'gold', accentShade:'600', background:'warm', card:'elevated', radius:'soft', density:'comfortable', sidebar:'emerald', button:'accent', font:'instrument', shadow:'medium', border:'soft'
};

const OPTIONS = {
    theme:['light','system','dark'],
    accent:['green','emerald','blue','violet','gold','orange','red','pink','cyan','slate'],
    accentShade:['100','200','300','400','500','600','700','800','900'],
    background:['warm','cool','clean'],
    card:['flat','elevated','soft'],
    radius:['sharp','soft','round'],
    density:['compact','comfortable'],
    sidebar:['emerald','dark','light','accent'],
    button:['accent','dark','outline','soft'],
    font:['instrument','inter','system','mono'],
    shadow:['none','soft','medium','strong'],
    border:['none','soft','medium','strong']
};

function readSetting(key){
    const value=localStorage.getItem(STORAGE[key]);
    return value&&OPTIONS[key].includes(value)?value:DEFAULTS[key];
}

function writeSetting(key,value){localStorage.setItem(STORAGE[key],value);}

export function getAppearanceSettings(){
    return Object.keys(STORAGE).reduce((s,k)=>{s[k]=readSetting(k);return s;},{});
}

export function applyAppearance(settings=getAppearanceSettings()){
    const root=document.documentElement;
    Object.keys(STORAGE).forEach(key=>{
        const value=OPTIONS[key].includes(settings[key])?settings[key]:DEFAULTS[key];
        root.dataset[key]=value;
        writeSetting(key,value);
    });
    document.querySelectorAll('[data-appearance-choice]').forEach(button=>{
        const group=button.dataset.appearanceChoice;
        const active=button.dataset.value===settings[group];
        button.classList.toggle('is-active',active);
        button.setAttribute('aria-pressed',active?'true':'false');
    });
    document.querySelectorAll('[data-appearance-shade]').forEach(button=>{
        const active=button.dataset.value===settings.accentShade;
        button.classList.toggle('is-active',active);
        button.setAttribute('aria-pressed',active?'true':'false');
    });
}

export function setAppearance(key,value){
    const settings=getAppearanceSettings();
    if(!OPTIONS[key]?.includes(value))return;
    settings[key]=value;
    applyAppearance(settings);
}

export function resetAppearance(){applyAppearance(DEFAULTS);}

export function initTheme(){
    applyAppearance();
    document.querySelectorAll('[data-appearance-choice]').forEach(button=>button.addEventListener('click',()=>setAppearance(button.dataset.appearanceChoice,button.dataset.value)));
    document.querySelectorAll('[data-appearance-shade]').forEach(button=>button.addEventListener('click',()=>setAppearance('accentShade',button.dataset.value)));
    document.querySelector('[data-appearance-reset]')?.addEventListener('click',resetAppearance);
}

document.addEventListener('DOMContentLoaded',initTheme);
