  {{-- MIDDLE SECTION STARTING HERE --}}

  <div class="items flex-grow p-6 overflow-y-scroll max-h-screen">
      <div class="flex flex-row justify-between">
          <div class="flex w-96 text-2xl">
              {{-- <h1 class="me-1 font-bold text-orange-400">Shoppingify</h1> --}}
              <h1 class="font-bold">
                  <span class="text-orange-400">Shoppingify</span>
                  allows you to take your shopping list wherever you go
              </h1>
          </div>

          <div class="flex items-center">
              <span>
                  <span class="material-symbols-outlined border-y-2 border-s-2 p-2 bg-white rounded-s-lg">
                      search
                  </span>
              </span>
              <input wire:model= "search" type="text" name="search" id="" placeholder="search for an item"
                  class=" border-y-2 border-e-2 p-2 w-50 focus:outline-none  bg-white rounded-e-lg">
          </div>
      </div>
      <div class="mt-12">
          <div class="font-quicksand font-medium">
              @if (count($items) == 0)
                  <h2 class="font-quicksand font-bold">No results</h2>
              @else
                  @foreach ($categories as $category)
                      @php
                          $categoryItems = $items->where('category_id', $category->id);
                      @endphp
                      @if ($categoryItems->count() > 0)
                          <div class="mb-3 mt-8 font-bold">{{ $category->name }}</div>
                          <div class="grid grid-cols-4 gap-3">
                              @foreach ($categoryItems as $item)
                                  <div
                                      class="showInfo bg-white rounded-lg shadow-md flex justify-between w-40 cursor-pointer p-3">
                                      <button wire:click="showDetails"
                                          class="flex-grow-1 h-auto">{{ $item->name }}</button>
                                      <button wire:click="showCategr({{ $item->id }})"
                                          class="text-gray-500 dark:text-gray-400">
                                          <span class="material-symbols-outlined">
                                            add
                                            </span>
                                      </button>
                                  </div>
                              @endforeach
                          </div>
                      @endif
                  @endforeach
              @endif
          </div>
      </div>
  </div>

  <div>
    @if ($showDetails)
        @livewire('show-details')
    @endif
</div>
  
  {{-- MIDDLE SECTION ENDING HERE --}}
