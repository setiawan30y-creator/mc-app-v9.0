<aside class="mc-sidebar">
    <div class="mc-brand">
        <div class="mc-brand-mark">A</div>
        <div>
            <div class="mc-brand-title">ALMARA OS</div>
            <div class="mc-brand-subtitle">Money Changer</div>
        </div>
    </div>

    <nav class="mc-nav" aria-label="Main navigation">
        <div class="mc-nav-section">Workspace</div>

        <a class="mc-nav-item {{ request()->routeIs('dashboard') ? 'is-active' : '' }}" href="{{ route('dashboard') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="m3 11 9-8 9 8"/><path d="M5 10v10h14V10"/><path d="M9 20v-6h6v6"/></svg></span>
            <span class="mc-nav-label">Dashboard</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('teller') ? 'is-active' : '' }}" href="{{ route('teller') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 7h8M8 11h3M13 11h3M8 15h3M13 15h3"/></svg></span>
            <span class="mc-nav-label">Teller</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('transactions') ? 'is-active' : '' }}" href="{{ route('transactions') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="M7 7h13"/><path d="m16 4 3 3-3 3"/><path d="M17 17H4"/><path d="m8 14-3 3 3 3"/></svg></span>
            <span class="mc-nav-label">Transactions</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('settlement') ? 'is-active' : '' }}" href="{{ route('settlement') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="m5 12 4 4L19 6"/></svg></span>
            <span class="mc-nav-label">Settlement</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('cash-bank') ? 'is-active' : '' }}" href="{{ route('cash-bank') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="M4 7h16v13H4z"/><path d="M7 7V5h10v2"/><path d="M8 11h8"/></svg></span>
            <span class="mc-nav-label">Cash / Bank</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('closing-rp') ? 'is-active' : '' }}" href="{{ route('closing-rp') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><path d="M12 8v5l3 2"/></svg></span>
            <span class="mc-nav-label">Closing Rp</span>
        </a>

        <div class="mc-nav-section">Master</div>

        <a class="mc-nav-item {{ request()->routeIs('currency') ? 'is-active' : '' }}" href="{{ route('currency') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><path d="M9 8h4a2 2 0 0 1 0 4H9a2 2 0 0 0 0 4h5"/><path d="M12 6v12"/></svg></span>
            <span class="mc-nav-label">Currency</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('customers') ? 'is-active' : '' }}" href="{{ route('customers') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="3"/><path d="M5 20a7 7 0 0 1 14 0"/></svg></span>
            <span class="mc-nav-label">Customers</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('suppliers') ? 'is-active' : '' }}" href="{{ route('suppliers') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="M4 20h16"/><path d="M6 20v-9l6-4 6 4v9"/><path d="M9 14h6M9 17h6"/></svg></span>
            <span class="mc-nav-label">Suppliers</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('stock') ? 'is-active' : '' }}" href="{{ route('stock') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="M4 5h16v14H4z"/><path d="M8 9h8M8 13h8M8 17h5"/></svg></span>
            <span class="mc-nav-label">Stock</span>
        </a>

        <div class="mc-nav-section">Reports</div>

        <a class="mc-nav-item {{ request()->routeIs('reports.transactions') ? 'is-active' : '' }}" href="{{ route('reports.transactions') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="M5 19V5M10 19V9M15 19V3M20 19v-7"/></svg></span>
            <span class="mc-nav-label">Transactions</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('reports.finance') ? 'is-active' : '' }}" href="{{ route('reports.finance') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="M4 19V5h16v14z"/><path d="M8 15v-3M12 15V8M16 15v-5"/></svg></span>
            <span class="mc-nav-label">Finance</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('audit-trail') ? 'is-active' : '' }}" href="{{ route('audit-trail') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="M12 3 5 6v5c0 5 3 8 7 10 4-2 7-5 7-10V6z"/><path d="M9 12l2 2 4-5"/></svg></span>
            <span class="mc-nav-label">Audit Trail</span>
        </a>

        <div class="mc-nav-section">System</div>

        <a class="mc-nav-item {{ request()->routeIs('settings') ? 'is-active' : '' }}" href="{{ route('settings') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.9l.1.1-1.5 1.5-.1-.1a1.7 1.7 0 0 0-1.9-.3 1.7 1.7 0 0 0-1 1.5v.2h-2.1v-.2a1.7 1.7 0 0 0-1-1.5 1.7 1.7 0 0 0-1.9.3l-.1.1-1.5-1.5.1-.1A1.7 1.7 0 0 0 9 15a1.7 1.7 0 0 0-1.5-1H7.3v-2.1h.2a1.7 1.7 0 0 0 1.5-1 1.7 1.7 0 0 0-.3-1.9l-.1-.1 1.5-1.5.1.1a1.7 1.7 0 0 0 1.9.3 1.7 1.7 0 0 0 1-1.5v-.2h2.1v.2a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.9-.3l.1-.1 1.5 1.5-.1.1a1.7 1.7 0 0 0-.3 1.9 1.7 1.7 0 0 0 1.5 1h.2V14h-.2a1.7 1.7 0 0 0-1.4 1z"/></svg></span>
            <span class="mc-nav-label">Settings</span>
        </a>

        <a class="mc-nav-item {{ request()->routeIs('appearance') ? 'is-active' : '' }}" href="{{ route('appearance') }}">
            <span class="mc-nav-icon"><svg viewBox="0 0 24 24"><path d="M12 3a9 9 0 1 0 9 9h-4a5 5 0 0 1-5-5z"/><path d="M15 3.5A9 9 0 0 1 20.5 9H15z"/></svg></span>
            <span class="mc-nav-label">Appearance</span>
        </a>
    </nav>

    <div class="mc-sidebar-footer">
        <div class="mc-user-card">
            <div class="mc-user-avatar">T</div>
            <div class="mc-user-copy">
                <div class="mc-user-name">Teller</div>
                <div class="mc-user-status">● Online</div>
            </div>
        </div>
    </div>
</aside>
