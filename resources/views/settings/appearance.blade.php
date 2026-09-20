<x-layouts.app title="Appearance" page-title="Appearance">
<div class="mc-appearance">
    <div class="mc-card"><div class="mc-card-body mc-appearance-hero"><div><div class="mc-appearance-eyebrow">Design System V9.0</div><h1 class="mc-appearance-title">Appearance</h1><p class="mc-appearance-description">Atur seluruh karakter visual aplikasi dari satu tempat. Pilihan tersimpan otomatis dan dipakai oleh seluruh modul.</p></div></div></div>
    <div class="mc-appearance-workspace">
        <div class="mc-card mc-appearance-controls">
            @php($groups=[
                ['title'=>'Theme mode','help'=>'Light, mengikuti sistem, atau dark.','key'=>'theme','items'=>[['light','☀','Light','Terang'],['system','◐','System','Ikuti perangkat'],['dark','☾','Dark','Gelap']]],
                ['title'=>'Sidebar','help'=>'Warna dan karakter sidebar aplikasi.','key'=>'sidebar','items'=>[['emerald','', 'Emerald','Hijau utama'],['dark','', 'Dark','Gelap elegan'],['light','', 'Light','Terang'],['accent','', 'Accent','Ikuti aksen']]],
                ['title'=>'Page background','help'=>'Warna area kerja halaman.','key'=>'background','items'=>[['warm','','Warm','Ivory hangat'],['cool','','Cool','Cool grey'],['clean','','Clean','Putih bersih']]],
                ['title'=>'Card','help'=>'Karakter kartu dan permukaan modul.','key'=>'card','items'=>[['flat','','Flat','Tanpa shadow'],['elevated','','Elevated','Shadow ringan'],['soft','','Soft','Shadow lebih terasa']]],
                ['title'=>'Button','help'=>'Gaya tombol utama aplikasi.','key'=>'button','items'=>[['accent','','Accent','Warna utama'],['dark','','Dark','Kontras'],['outline','','Outline','Garis aksen'],['soft','','Soft','Latar lembut']]],
                ['title'=>'Font','help'=>'Tipografi seluruh interface.','key'=>'font','items'=>[['instrument','','Instrument','Modern'],['inter','','Inter','Clean'],['system','','System','Native'],['mono','','Mono','Monospace']]],
                ['title'=>'Shadow','help'=>'Kekuatan bayangan komponen.','key'=>'shadow','items'=>[['none','','None','Tanpa bayangan'],['soft','','Soft','Halus'],['medium','','Medium','Sedang'],['strong','','Strong','Tegas']]],
                ['title'=>'Border','help'=>'Ketegasan garis komponen.','key'=>'border','items'=>[['none','','None','Tanpa garis'],['soft','','Soft','Halus'],['medium','','Medium','Sedang'],['strong','','Strong','Tegas']]],
                ['title'=>'Corner radius','help'=>'Tingkat ketegasan sudut.','key'=>'radius','items'=>[['sharp','','Sharp','Tegas'],['soft','','Soft','Seimbang'],['round','','Round','Membulat']]],
                ['title'=>'Interface density','help'=>'Kepadatan ruang kerja.','key'=>'density','items'=>[['compact','','Compact','Lebih padat'],['comfortable','','Comfortable','Lebih lega']]],
            ])
            @foreach($groups as $group)
                <div class="mc-appearance-section"><h2 class="mc-appearance-section-title">{{ $group['title'] }}</h2><p class="mc-appearance-section-help">{{ $group['help'] }}</p><div class="mc-choice-grid {{ count($group['items'])===4 ? 'four' : '' }}">
                    @foreach($group['items'] as $item)<button type="button" class="mc-choice" data-appearance-choice="{{ $group['key'] }}" data-value="{{ $item[0] }}" aria-pressed="false">@if($item[1])<span class="mc-choice-icon">{{ $item[1] }}</span>@endif<span class="mc-choice-label">{{ $item[2] }}</span><span class="mc-choice-help">{{ $item[3] }}</span></button>@endforeach
                </div></div>
            @endforeach

            <div class="mc-appearance-section">
                <h2 class="mc-appearance-section-title">Accent color</h2>
                <p class="mc-appearance-section-help">Pilih keluarga warna, lalu tentukan tingkat terang sampai gelap.</p>
                <div class="mc-color-family-grid">
                    @php($colors=[
                        ['green','#16a34a','Green'],['emerald','#19735f','Emerald'],['blue','#2563eb','Blue'],['violet','#7c3aed','Violet'],['gold','#bc903d','Gold'],['orange','#ea580c','Orange'],['red','#dc2626','Red'],['pink','#db2777','Pink'],['cyan','#0891b2','Cyan'],['slate','#475569','Slate']
                    ])
                    @foreach($colors as $color)<button type="button" class="mc-color-family" data-appearance-choice="accent" data-value="{{ $color[0] }}" aria-pressed="false"><span class="mc-color-dot" style="--swatch:{{ $color[1] }}"></span><span>{{ $color[2] }}</span></button>@endforeach
                </div>
                <div class="mc-shade-title"><span>Shade</span><span class="mc-shade-hint">100 terang → 900 gelap</span></div>
                <div class="mc-shade-grid">
                    @foreach([100,200,300,400,500,600,700,800,900] as $shade)<button type="button" class="mc-shade" data-appearance-shade data-value="{{ $shade }}" aria-pressed="false"><span class="mc-shade-swatch"></span><strong>{{ $shade }}</strong></button>@endforeach
                </div>
            </div>
        </div>
        <div class="mc-live-preview"><div class="mc-live-preview-head"><strong>Live Preview</strong><span>Preview berubah langsung saat pilihan diganti.</span></div><div class="mc-preview-frame"><aside class="mc-preview-sidebar"><div class="mc-preview-brand">MC-APP V9.0</div><div class="mc-preview-nav"><span class="active">Dashboard</span><span>Teller</span><span>Transaction</span><span>Closing Rp</span></div></aside><div class="mc-preview-content"><div class="mc-preview-topbar"></div><div class="mc-preview-label">DASHBOARD</div><div class="mc-preview-card"><strong>USD Stock</strong><div class="mc-preview-line"></div><button class="mc-preview-button">Open transaction</button></div><div class="mc-preview-meta"><div>Today Sales<br><strong>Rp 12.450.000</strong></div><div>Customers<br><strong>28</strong></div></div></div></div></div>
    </div>
    <div class="mc-card mc-appearance-actions"><span class="mc-appearance-status">Pengaturan tersimpan otomatis di browser ini.</span><button type="button" class="mc-appearance-reset" data-appearance-reset>Reset to default</button></div>
</div>
</x-layouts.app>
