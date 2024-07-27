<div class="h-screen w-screen bg-slate-700 overflow-hidden">
    <div class="form-container w-full h-full max-w-[500px] sm:max-h-[600px] left-1/2 top-1/2 absolute -translate-x-1/2 -translate-y-1/2 overflow-hidden">
        <div class="card flex flex-col h-full w-full relative bg-white rounded-md">
            <div class="card-header flex justify-between py-2 px-2 border-b">
                <div>
                    <button @if($step == 0) disabled @endif wire:click="prevStep()"
                        @class([
                            'disabled:hover:bg-transparent disabled:hover:text-gray-400 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white',
                            'hidden' => $step == 0
                        ])>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="self-center">
                    <span class="text-lg font-medium text-gray-900 dark:text-white">{{ $this->step_titles[$this->step] ?? '' }}</span>
                </div>
                <div>
                    <a href="{{ url()->previous() !== url('form') ? url()->previous() : '/' }}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Formu kapat</span>
                    </a>
                </div>

            </div>
            <div class="card-body h-full overflow-y-auto px-5">
                @foreach ($steps as $step)
                    @include('form.steps.'.Str::replace('.blade.php', '', $step->getFilename()))
                @endforeach
                {{-- @include('form.loading') --}}
            </div>
            <div class="card-footer mt-auto text-center border-t p-2">
                <button class="btn btn-success mx-auto block bg-green-700 text-white py-2 px-4 rounded" type="button" id="kvkkasistanFormNextBtn" wire:click="nextStep">DEVAM</button>
            </div>
        </div>
    </div>
</div>
