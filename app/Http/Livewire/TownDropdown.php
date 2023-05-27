<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Town;
use Livewire\Component;

class TownDropdown extends Component
{
    public $city;
    public $towns=[];
    public $town;


    public function render()
    {
        if(!empty($this->city)) {
            $this->towns = Town::where('city_id', $this->city)->get();
        }
        return view('livewire.town-dropdown')
            ->withCities(City::orderBy('id')->get());
    }
}
