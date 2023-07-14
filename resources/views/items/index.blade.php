<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="">
        <!-- component -->
        <div class="h-screen flex flex-col justify-center items-center">
            <div class="bg-gray-300 rounded-md w-2/3 flex flex-col gap-1 p-6">
                <h1 class="text-4xl">Listas</h1>
                @foreach ($listnames as $listname)
                    <h2 class="text-2xl">Nombre de la lista: {{ $listname->name }}</h2>
                    @foreach ($categories as $category)
                        <h3>Categoria: {{ $category->name }}</h3>
                        @foreach ($listname->items as $item)
                            <ul class="list-disc">
                                @if ($item->category_id === $category->id)
                                    <li>{{ $item->name }}</li>
                                @endif
                            </ul>
                        @endforeach
                    @endforeach
                @endforeach
            </div>


        </div>
    </div>
</body>

</html>
