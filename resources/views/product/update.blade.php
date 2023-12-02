<x-layout>
    <x-slot:title>
        редактирование товара
    </x-slot:title>

    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Название тавара</label>
            <input class="form-control" id="name" name="name" value="{{ $product->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Цена тавара</label>
            <input class="form-control" type="number" min="0" step="0.01" name="price" value="{{ $product->price }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="quantity">Колличество тавара</label>
            <input class="form-control" id="quantity" type="number" min="0" step="1" name="quantity" value="{{ $product->quantity }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Описание тавара</label>
            <input class="form-control" id="description" name="description" value="{{ $product->description }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="category_id">Категории</label>
            <select class="form-select" id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? "selected" : " " }} > {{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Обновить данные</button>
        </div>

    </form>
</x-layout>
