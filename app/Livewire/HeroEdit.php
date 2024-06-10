<?php

namespace App\Livewire;

use App\Models\Icon;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class HeroEdit extends Component
{
    use WithFileUploads;

    public $name;
    public $handle;
    public $cta;
    public $header_image;
    public $icons;
    public $icon;
    public $header_icon;

    #[Validate('image|max:1024|mimes:jpeg,png')]
    public $image;

    public $imagePreviewUrl = null;

    public function mount()
    {
        $this->dataFetch();
        $this->icons = Icon::all();
    }

    public function updatedImage()
    {
        // Validate the image
        $this->validate([
            'image' => 'required|image|max:1024|mimes:jpeg,png,webp',
        ]);

        // Generate the preview URL
        $this->imagePreviewUrl = $this->image->temporaryUrl();
    }

    public function update()
    {
        $settingsChanged = false;

        $settingName = Setting::where('key', 'name')->first();
        if ($settingName->value !== $this->name) {
            $settingName->value = $this->name;
            $settingName->save();
            $settingsChanged = true;
        }

        $settingHandle = Setting::where('key', 'handle')->first();
        if ($settingHandle->value !== $this->handle) {
            $settingHandle->value = $this->handle;
            $settingHandle->save();
            $settingsChanged = true;
        }

        $settingCta = Setting::where('key', 'cta')->first();
        if ($settingCta->value !== $this->cta) {
            $settingCta->value = $this->cta;
            $settingCta->save();
            $settingsChanged = true;
        }

        $settingIcon = Setting::where('key', 'header_icon')->first();
        if ($settingIcon->value !== $this->icon) {
            $settingIcon->value = $this->icon;
            $settingIcon->save();
            $settingsChanged = true;
        }

        if ($this->image) {
            $this->validate([
                'image' => 'required|image|max:1024|mimes:jpeg,png',
            ]);

            $this->header_image = $this->image->store('photos', 'public');
            $settingHeaderImage = Setting::where('key', 'header_image')->first();
            if ($settingHeaderImage->value !== $this->header_image) {
                $settingHeaderImage->value = $this->header_image;
                $settingHeaderImage->save();
                $settingsChanged = true;
            }
        }

        if ($settingsChanged) {
            $this->dataFetch();
            session()->flash('success', 'Settings updated successfully!');
        }
    }

    public function dataFetch()
    {
        $this->name = Setting::where('key', 'name')->first()->value;
        $this->handle = Setting::where('key', 'handle')->first()->value;
        $this->cta = Setting::where('key', 'cta')->first()->value;
        $this->header_image = Setting::where('key', 'header_image')->first()->value;
        $this->header_icon = Icon::find(Setting::where('key', 'header_icon')->first()->value)->svg_code;
    }

    public function render()
    {
        return view('livewire.hero-edit');
    }
}
