<form wire:submit.prevent="createIdea"
      action="#"
      method="POST"
      class="space-y-4 px-4 py-6"
>
    <div>
        <input wire:model.defer="title"
               type="text"
               class="w-full rounded-xl bg-gray-700 px-4 py-2 border-none placeholder-gray-500 text-sm"
               placeholder="Your Idea">
        @error('title')
        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <select wire:model.defer="category"
                name="category_add" id="category_add"
                class="w-full rounded-xl px-4 py-2 border-none bg-gray-700 text-sm">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <textarea wire:model.defer="description"
                  name="idea_add" id="idea_add" cols="30" rows="4"
                  class="w-full rounded-xl bg-gray-700 text-sm border-none px-4 py-2 placeholder-gray-500"
                  placeholder="Describe your idea"></textarea>
        @error('description')
        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="flex items-center justify-between space-x-3">
        <button type="button"
                class="flex w-1/2 items-center justify-center bg-gray-500 text-xs rounded-xl px-4 py-3 border border-gray-500 hover:border-gray-300 transition ease-in duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform -rotate-45">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
            </svg>
            <span class="ml-1">Attach</span>
        </button>
        <button class="bg-blue-500 w-1/2 text-xs rounded-xl px-4 py-3 border border-blue-500 hover:border-gray-300 transition ease-in duration-150"
                type="submit">
            <span>Submit</span>
        </button>
    </div>

    <div>
        @if(session('success_message'))
            <div x-data="{ isVisible: true }"
                 x-init="setTimeout(() => isVisible=false, 5000)"
                 x-show="isVisible"
                 x-transition.duration.500ms
                 class="text-green-600 mt-4">
                {{ session('success_message') }}
            </div>
        @endif
    </div>
</form>
