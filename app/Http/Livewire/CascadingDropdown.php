<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;
use App\Models\Continent;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];

    public $selectedContinent;
    public $selectedCountry;

    public $disabled = true;

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function changeContinent()
    {
        sleep(1);
        if ($this->selectedContinent !== '-1') {
            $this->disabled = false;
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        } else {
            $this->disabled = true;
            $this->selectedCountry = -1;
        }
    }

}
