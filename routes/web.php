<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard.index')->name('dashboard');
Route::view('/dashboard', 'dashboard.index')->name('dashboard');

Route::view('/teller', 'modules.index', [
    'title' => 'Teller',
    'description' => 'Workspace teller untuk transaksi dan operasional harian.',
])->name('teller');

Route::view('/transactions', 'modules.index', [
    'title' => 'Transactions',
    'description' => 'Workspace transaksi money changer.',
])->name('transactions');

Route::view('/settlement', 'modules.index', [
    'title' => 'Settlement',
    'description' => 'Workspace settlement dan penyelesaian transaksi.',
])->name('settlement');

Route::view('/cash-bank', 'modules.index', [
    'title' => 'Cash / Bank',
    'description' => 'Workspace kas, rekening, dan pergerakan bank.',
])->name('cash-bank');

Route::view('/closing-rp', 'modules.index', [
    'title' => 'Closing Rp',
    'description' => 'Workspace closing Rupiah dan rekonsiliasi kas.',
])->name('closing-rp');

Route::view('/currency', 'modules.index', [
    'title' => 'Currency',
    'description' => 'Master mata uang dan konfigurasi pecahan.',
])->name('currency');

Route::view('/customers', 'modules.index', [
    'title' => 'Customers',
    'description' => 'Master customer dan data KYC.',
])->name('customers');

Route::view('/suppliers', 'modules.index', [
    'title' => 'Suppliers',
    'description' => 'Master supplier dan sumber stok valas.',
])->name('suppliers');

Route::view('/stock', 'modules.index', [
    'title' => 'Stock',
    'description' => 'Stok valas per mata uang dan pecahan.',
])->name('stock');

Route::view('/reports/transactions', 'modules.index', [
    'title' => 'Transaction Reports',
    'description' => 'Laporan transaksi dan aktivitas penjualan/pembelian.',
])->name('reports.transactions');

Route::view('/reports/finance', 'modules.index', [
    'title' => 'Finance Reports',
    'description' => 'Laporan keuangan dan ringkasan finansial.',
])->name('reports.finance');

Route::view('/audit-trail', 'modules.index', [
    'title' => 'Audit Trail',
    'description' => 'Riwayat perubahan dan aktivitas sistem.',
])->name('audit-trail');

Route::view('/settings', 'modules.index', [
    'title' => 'Settings',
    'description' => 'Pengaturan aplikasi dan konfigurasi sistem.',
])->name('settings');

Route::view('/settings/appearance', 'settings.appearance')->name('appearance');
