<x-layouts.app :title="$title ?? 'Module'" :page-title="$title ?? 'Module'">
    <div class="mc-page-header">
        <div>
            <div class="mc-appearance-eyebrow">MC-App V9.0</div>
            <h1>{{ $title ?? 'Module' }}</h1>
            <p>{{ $description ?? 'Module workspace is ready for development.' }}</p>
        </div>
    </div>

    <div class="mc-card" style="margin-top:18px;padding:24px;">
        <div class="mc-stat-label">MODULE STATUS</div>
        <div class="mc-stat-value">Ready</div>
        <p style="margin:8px 0 0;color:var(--mc-text-muted);">Menu sudah aktif dan route sudah tersedia. Fitur bisnis akan dikembangkan di modul ini tanpa mengubah App Shell.</p>
    </div>
</x-layouts.app>
