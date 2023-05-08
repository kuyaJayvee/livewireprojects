<div class="mx-auto mt-24 w-1/2 text-center">
    <button wire:click="increment" class="bg-blue-500 text-white p-3 text-2xl font-bold rounded-md">+</button>
    <span class="font-bold text-3xl px-4">{{ $count }}</span>
    <button wire:click="decrement" class="bg-blue-500 text-white p-3 text-2xl font-bold rounded-md">-</button>
</div>
<div> 
    <div x-data="{ open: false }">
        <button @click="open = true" class="bg-blue-500 text-white">Show More...</button>
 
        <ul x-show="open" @click.outside="open = false">
            <li><button wire:click="archive">Archive</button></li>
            <li><button wire:click="delete">Delete</button></li>
        </ul>
    </div>
</div>