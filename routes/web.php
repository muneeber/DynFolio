<?php

use App\Livewire\FooterEdit;
use App\Livewire\HeroEdit;
use App\Livewire\OtherProjectsEdit;
use App\Livewire\ProjectsEdit;
use App\Livewire\SideNavEdit;
use App\Livewire\SmallProjectsEdit;
use App\Livewire\WhatIKnowEdit;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::get('edit/hero', HeroEdit::class)->middleware(['auth', 'verified'])->name('hero-edit');
    Route::get('edit/sidenav', SideNavEdit::class)->middleware(['auth', 'verified'])->name('sideNav-edit');
    Route::get('edit/projects', ProjectsEdit::class)->middleware(['auth', 'verified'])->name('projects-edit');
    Route::get('edit/projects/other', OtherProjectsEdit::class)->middleware(['auth', 'verified'])->name('other-projects-edit');
    Route::get('edit/projects/small', SmallProjectsEdit::class)->middleware(['auth', 'verified'])->name('small-projects-edit');
    Route::get('edit/whatIKnow', WhatIKnowEdit::class)->middleware(['auth', 'verified'])->name('whatiknow-edit');
    Route::get('edit/footer', FooterEdit::class)->middleware(['auth', 'verified'])->name('footer-edit');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
