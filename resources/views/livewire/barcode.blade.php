<div>
            


   

<div class="bg-white grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="mt-8 text-2xl sm:px-20">
            <div class="col">
                <div class="mt-4">
                    <x-jet-label value="{{ __('ECODE Number') }}" />
                    <x-jet-input wire:model="barcode1" id="text" class="block mt-1 w-full" type="text" name="password" required autocomplete="current-password" />
                </div>
            </div>
            <div class="col">
                <div class="mt-4">
                    <x-jet-label value="{{ __('Visa Number ') }}" />
                    <x-jet-input wire:model="barcode2" id="text" class="block mt-1 w-full" type="text" name="password" required autocomplete="current-password" />
                </div>
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200  md:border-t-0 md:border-l">
        <div class="flex justify-center">
            <div class="mt-8 sm:px-20 text-2xl justify-center">
                <div class="col p-3 text-center">
                    <div class="flex justify-center">
                        <h1 class="text-lg">{!! DNS1D::getBarcodeHTML("$barcode1", 'C128') !!}</h1>  
                    </div>
                    <h3 class="text-sm">{{$barcode1}}</h3>
                    
                </div>
                <div class="col p-3 text-center">
                    <div class="flex justify-center">
                        <h1 class="text-lg">{!! DNS1D::getBarcodeHTML("$barcode2", 'C128') !!}</h1>  
                    </div>
                    <h3 class="text-sm">{{$barcode2}}</h3>
                    
                </div>
            </div>
        </div>
    </div>

</div>
</div>
