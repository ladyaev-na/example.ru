<x-layout>
    <x-slot:title>
        информация о категории
    </x-slot:title>
<div class="m-4">
    <p>ID категорий: {{ $category->id }}</p>
    <p>Название категорий: {{ $category->name }}</p>
</div>
</x-layout>
