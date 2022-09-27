<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Barcode extends Component
{
    public $barcode1 = 'E280623517';
    public $barcode2 = '1302577642';
    public function render()
    {
        $productCode = rand(1234567890,50);

        return view('livewire.barcode', [
            'productCode' => $productCode,
        ]);
    }
}
