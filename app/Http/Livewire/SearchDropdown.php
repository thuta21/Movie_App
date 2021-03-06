<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = "";
    public function render()
    {
        $searchMovies = [];
        if (strlen($this->search) >= 2) {
            $searchMovies = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query=' . $this->search)
                ->json()['results'];
        }
        return view('livewire.search-dropdown', [
            'searchMovies' => collect($searchMovies)->take(7)
        ]);
    }
}
