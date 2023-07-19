<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;200;300;400;500;600;700;800;900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&family=Nunito+Sans:ital,wght@0,600;1,300&family=Quicksand:wght@300;400;500;600;700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,600;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="flex justify-between">

        <aside id="left" class="sticky bg-white z-50 top-0  left-0 w-20 h-screen" aria-label="Sidebar">
            <div class="flex flex-col justify-between h-full py-4  bg-white">
                <div class="w-18 h-24 flex justify-center py-2.5">
                    <img src="img/logo.svg" alt="logo">
                </div>
                <ul class="flex flex-col gap-10 font-normal">
                    <li class="flex items-center pl-5" onclick="toggleHover(this)">
                        <a href="{{ route('main.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 -960 960 960"
                                width="35">
                                <path
                                    d="M377-198v-60h463v60H377Zm0-252v-60h463v60H377Zm0-253v-60h463v60H377ZM189-161q-28.05 0-48.025-19Q121-199 121-227.5t19.5-48q19.5-19.5 48-19.5t47.5 19.975Q255-255.05 255-227q0 27.225-19.387 46.613Q216.225-161 189-161Zm0-252q-28.05 0-48.025-19.681Q121-452.362 121-480t19.975-47.319Q160.95-547 189-547q27.225 0 46.613 19.681Q255-507.638 255-480t-19.387 47.319Q216.225-413 189-413Zm-1-253q-27.637 0-47.319-19.681Q121-705.362 121-733t19.681-47.319Q160.363-800 188-800q27.637 0 47.319 19.681Q255-760.638 255-733t-19.681 47.319Q215.637-666 188-666Z" />
                            </svg>
                        </a>
                    </li>
                    <li class="flex items-center pl-5" onclick="toggleHover(this)">
                        <a href="{{ route('history.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 -960 960 960"
                                width="35">
                                <path
                                    d="M480-80q-75 0-140.5-28T225-185q-49-49-77-114.5T120-440h60q0 125 87.5 212.5T480-140q125 0 212.5-87.5T780-440q0-125-85-212.5T485-740h-23l73 73-41 42-147-147 147-147 41 41-78 78h23q75 0 140.5 28T735-695q49 49 77 114.5T840-440q0 75-28 140.5T735-185q-49 49-114.5 77T480-80Z" />
                            </svg>
                        </a>
                    </li>
                    <li class="flex items-center pl-5" onclick="toggleHover(this)">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 -960 960 960"
                                width="35">
                                <path
                                    d="M284-277h60v-275h-60v275Zm166 0h60v-406h-60v406Zm166 0h60v-148h-60v148ZM180-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h600q24 0 42 18t18 42v600q0 24-18 42t-42 18H180Zm0-60h600v-600H180v600Zm0-600v600-600Z" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="flex place-self-center static">
                    <div class="flex justify-center rounded-full bg-yellow-500 text-center w-10 h-10 pt-2">
                        <img class="w-" src="img/shopping_cart_FILL0_wght400_GRAD0_opsz48.svg" alt="shopping">
                    </div>
                </div>

            </div>
        </aside>


        {{-- MIDDLE SECTION HERE --}}
        <div class="items flex-grow m-16  max-h-screen">
            <h2 class="f text-2xl font-bold">Shopping history</h2>
            <p class="mt-10">July 2023</p>

            @foreach ($listnames as $listname)
                <div class="lists_container mt-10">
                    <button class="openModalBtn bg-white flex p-5 w-full justify-between rounded-lg shadow-sm"
                        id="{{ $listname->id }}">
                        <div>
                            <p class="f font-medium">{{ $listname->name }}</p>
                        </div>

                        <div class="flex">
                            <div class="flex">
                                <p class="w text-gray-400">{{ $listname->date }}</p>
                                <span class="material-symbols-outlined text-gray-400">
                                    calendar_today
                                </span>
                            </div>
                            <div>
                                <span
                                    class="border rounded-xl text-cyan-500 border-1 border-cyan-500 p-1">completed</span>
                            </div>
                        </div>
                    </button>
                </div>
            @endforeach



            <!-- Contenedor del modal -->
            <div id="modalContainer" class="hidden fixed start-20 inset-0 flex items-center z-50">
                <!-- Contenido del modal -->
                <div class="history-modal w-list-modal-w h-screen  p-6 rounded overflow-y-scroll overflow-x-hidden">
                    <!-- Botón para cerrar el modal -->
                    <button id="closeModalBtn" class="absolute top-0 right-0 m-4 text-gray-700 hover:text-gray-900">
                        <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M14.348 14.849a.5.5 0 0 1-.707 0l-3.182-3.182-3.182 3.182a.5.5 0 0 1-.707 0 .5.5 0 0 1 0-.707L9.552 10 6.364 6.812a.5.5 0 0 1 0-.707.5.5 0 0 1 .707 0L10 9.552l3.182-3.182a.5.5 0 0 1 .707 0 .5.5 0 0 1 0 .707L10.448 10l3.182 3.182a.5.5 0 0 1 0 .707z" />
                        </svg>
                    </button>

                    <!-- Contenido principal del modal -->
                    <!-- Botón para cerrar el modal -->
                    <div class="flex items-center content-center w-list-modal-w">

                        <button id="modalCloseBtn" class="flex text-orange-400 text-lg">
                            <span class="material-symbols-outlined">arrow_back</span>
                            <p>Back</p>
                        </button>
                    </div>
                    <h2 class="text-xl font-bold mb-4">Market List</h2>
                    <div class="flex">
                        <span class="material-symbols-outlined text-gray-400 me-2">
                            calendar_today
                        </span>
                        <p class="w text-gray-400">15.23.2023</p>
                    </div>



                    @foreach ($categories as $category)
                        <div class="modal-content">
                            <h2 class="f font-medium mt-10">{{ $category->name }}</h2>

                            <div class="grid grid-cols-4 mt-5">
                                @foreach ($listnames as $listname)
                                    @foreach ($listname->items as $item)
                                        @if ($item->category_id === $category->id)
                                       
                                            <div
                                                class="showInfo bg-white rounded-lg shadow-md flex justify-between w-max cursor-pointer p-3 mb-5">

                                                <button wire:click="showDetails"
                                                    class="flex-grow-1 h-auto">{{ $item->name }}</button>

                                                <button {{-- wire:click="showCategr({{ $item->id }})" --}} class="text-gray-500 dark:text-gray-400">
                                                    @foreach ($item_listnames as $listname)
                                                        @if ( $listname->id === $category->id )
                                                            <span
                                                                class="f text-orange-400 ms-5">{{ $listname->pieces }}</span>
                                                        @endif
                                                    @endforeach

                                                    <span class="f text-orange-400">pcs</span>
                                                </button>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    @endforeach




                </div>
            </div>


        </div>







        {{-- MIDDLE SECTION HERE --}}






        {{-- RIGHT SECTION STARTING HERE --}}


        <div class="flex flex-col justify-between">
            <!-- Modal -->

            <div id="myModal" class="hidden fixed inset-0 flex items-center justify-end z-50 modal">
                <div class="bg-white p-6 rounded-lg shadow-lg w-modal-w h-full flex flex-col justify-evenly">
                    <h2 class="text-xl font-bold mb-4">Add a new item</h2>
                    <div class="modal_content ">
                        <div class="form-container">
                            <form action="" method="POST" class="flex flex-col justify-evenly">
                                @csrf
                                <label class="m " for="name">Name</label><br>
                                <input type="text" placeholder="Enter a name" name="name"
                                    class="p-3  focus:outline-orange-400 border-2 rounded-xl mt-3 mb-5  min-w-full">

                                <label class="m " for="notes">Note (optional)</label><br>
                                <textarea type="textarea" placeholder="Enter a note"
                                    class="p-5 focus:outline-orange-400 border-2 rounded-xl mb-5 min-w-full" name="note"></textarea>


                                <label class="m " for="image">Image (optional)</label><br>
                                <input type="text" placeholder="Enter an image" name="image"
                                    class="p-3 focus:outline-orange-400 border-2 rounded-xl mb-5 min-w-full">

                                <div class="col-span-full">
                                    <div class="sm:col-span-4">
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                                        <div class="mt-2">
                                            <select name=category id="categories">
                                                {{-- <option value="null" selected disabled> Select a category </option>
                                                @foreach ($categories as $category)
                                                 
                                                <option  value="{{$category->id}}"id="email" name="category" type="text" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$category->name}}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="form_btns flex justify-evenly items-center content-center">
                        <button id="closeModal"
                            class="mt-4 rounded-xl bg-gray-500 hover:bg-gray-700 text-white font-bold p-5 rounded">
                            Cancel
                        </button>

                        <button id="closeModal"
                            class="mt-4 rounded-xl bg-orange-400 hover:bg-orange-600 text-white font-bold p-5 rounded"
                            type="submit">
                            Save
                        </button>
                        </form>
                    </div>

                </div>
            </div>


            <div class="shopping_list p-10 flex flex-col flex-grow">
                <div class="add_item flex justify-center rounded-3xl">
                    <div class="add_item rounded-3xl text-white w-3/4 h-40 grid grid-cols-2 relative justify-center ">
                        <div class="wine-bottle absolute bottom-10 start-8 col-start-1">
                            <svg width="81" height="135" viewBox="0 0 81 135" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="">
                                <path
                                    d="M31.5096 5.27646L16.643 9.25995C16.1203 9.40002 15.6746 9.74201 15.404 10.2107C15.1334 10.6794 15.0601 11.2364 15.2001 11.7591L16.9486 18.2845C17.0887 18.8072 17.4307 19.2529 17.8993 19.5235C18.368 19.7941 18.925 19.8674 19.4477 19.7274L21.9114 19.0673L24.5312 28.8445L34.4706 26.1813L31.8507 16.404L34.3144 15.7439C34.8371 15.6038 35.2828 15.2618 35.5534 14.7931C35.824 14.3245 35.8973 13.7675 35.7572 13.2447L34.0088 6.71934C33.8687 6.1966 33.5267 5.7509 33.058 5.48031C32.5893 5.20971 32.0324 5.13639 31.5096 5.27646Z"
                                    fill="#F9A109" />
                                <path
                                    d="M62.4022 61.0071C49.7276 50.124 40.8227 35.5085 36.9632 19.2546C36.8717 18.8802 36.6535 18.549 36.3456 18.3172C36.0377 18.0854 35.659 17.9674 35.2739 17.9831L34.5184 15.1635L18.8173 19.3706L19.5623 22.151L19.346 22.209C19.1246 22.2686 18.9179 22.3732 18.7388 22.5163C18.5596 22.6594 18.4119 22.8379 18.3049 23.0406C18.1978 23.2433 18.1337 23.466 18.1165 23.6946C18.0994 23.9232 18.1295 24.1529 18.2051 24.3693C24.0622 41.2808 24.0287 57.863 18.1043 74.1161C17.7631 75.0504 17.7341 76.0701 18.0217 77.0221L33.9685 129.669C34.3271 130.842 35.1251 131.832 36.196 132.431C37.2668 133.03 38.5276 133.193 39.7154 132.885L75.2289 123.369C76.4251 123.038 77.4447 122.253 78.0706 121.181C78.6965 120.11 78.8792 118.836 78.5798 117.631L65.4253 65.8918C64.9378 63.994 63.8832 62.29 62.4022 61.0071V61.0071Z"
                                    fill="#3F3D56" />
                                <path opacity="0.2"
                                    d="M28.9801 8.23311C29.2823 9.36092 29.1241 10.5626 28.5403 11.5737C27.9565 12.5849 26.995 13.3227 25.8672 13.6249C24.7394 13.9271 23.5377 13.7689 22.5265 13.1851C21.5154 12.6013 20.7775 11.6398 20.4753 10.512"
                                    fill="black" />
                                <path
                                    d="M61.5071 80.1538L57.2066 81.3061C56.0822 78.752 54.0809 76.6846 51.5646 75.478C49.0482 74.2713 46.1832 74.005 43.4876 74.7273C40.792 75.4496 38.4439 77.1127 36.8681 79.4159C35.2922 81.719 34.5927 84.5101 34.896 87.2843L30.5953 88.4366C30.1377 88.5592 29.712 88.7793 29.3475 89.0818C28.9829 89.3843 28.6881 89.7621 28.4832 90.1892C28.2784 90.6164 28.1683 91.0827 28.1605 91.5564C28.1527 92.03 28.2474 92.4997 28.4382 92.9333L41.2451 122.045L68.0679 114.857L65.6335 83.0765C65.5966 82.5952 65.4541 82.1278 65.2161 81.7078C64.9781 81.2878 64.6505 80.9253 64.2565 80.6463C63.8626 80.3672 63.412 80.1785 62.9367 80.0934C62.4615 80.0082 61.9734 80.0289 61.5071 80.1538Z"
                                    fill="#F9A109" />
                            </svg>

                        </div>
                        <div class="p-6 col-end-10">
                            <p class="font-bold">Didn't find what you need?</p>
                            <button id="openModal"
                                class="w-32 p-3 bg-white text-black rounded-lg hover:bg-slate-100 mt-4 font-bold">
                                Add item
                            </button>
                        </div>

                    </div>
                </div>

                <h1 class=" font-bold text-3xl mt-10">Shopping List</h1>
                <p class="mt-8 text-zinc-500">Fruits and vegetables</p>


                <div class="overflow-y-scroll max-h-96 scrollbar-thumb-orange-400 scrollbar-track-white">
                    <div class="item flex justify-between mb-3">
                        <p class="flex items-center font-bold">Avocado</p>
                        <a class=" border-orange-300 text-orange-400 border-2 p-3 rounded-full content-center w-24 text-center"
                            href="#">3
                            pcs</a>
                    </div>

                </div>



            </div>
            <div class="bg-white p-6">
                <div class="flex  border-y-2 border-l-2 border-orange-400 justify-end rounded-2xl">
                    <input type="text" name="" class="p-5  focus:outline-none flex-grow rounded-full"
                        placeholder="Enter a name">
                    <button class="border border-orange-400 bg-orange-400 text-white p-5 rounded-xl ">Save</button>
                </div>
            </div>
        </div>
    </div>



    {{-- RIGHT SECTION ENDING HERE --}}
    <script>
        // Obtén el botón del menú y el menú desplegable
        var menuButton = document.getElementById('menu-button');
        var menu = document.querySelector('.absolute.right-0');

        // Agrega un evento de clic al botón del menú
        menuButton.addEventListener('click', function() {
            // Alternar la clase "hidden" para mostrar u ocultar el menú desplegable
            menu.classList.toggle('hidden');
        });
    </script>

    <script>
        function toggleHover(element) {
            const listItems = document.querySelectorAll('.flex.items-center');

            listItems.forEach(item => {
                item.classList.remove('border-l-4', 'border-yellow-500');
            });

            element.classList.add('border-l-4', 'border-yellow-500');
        }
    </script>

    {{-- RIGHT SIDE MODAL --}}
    <script>
        // GETTING DOM'S ELEMENTS
        const openModalBtns = document.getElementsByClassName('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const modalContainer = document.getElementById('modalContainer');
        const modalCloseBtn = document.getElementById('modalCloseBtn');

        // OPEN MODAL FUNCTION
        function openModal() {
            modalContainer.classList.remove('hidden');
        }

        // CLOSE MODAL FUNCTION
        function closeModal() {
            modalContainer.classList.add('hidden');
        }

        // ADDING CLICK EVENTS TO OPEN AND CLOSE THE MODAL
        for (let i = 0; i < openModalBtns.length; i++) {
            openModalBtns[i].addEventListener('click', openModal);
        }

        closeModalBtn.addEventListener('click', closeModal);
        modalCloseBtn.addEventListener('click', closeModal);
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var menuButton = document.getElementById('menu-button');
            var menuDropdown = document.getElementById('menu-dropdown');
            var categoryItems = document.querySelectorAll('[data-category-id]');

            // Abrir/cerrar el dropdown al hacer clic en el botón
            menuButton.addEventListener('click', function() {
                menuDropdown.classList.toggle('hidden');
            });

            // Seleccionar una categoría al hacer clic en ella
            categoryItems.forEach(function(item) {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    var categoryId = this.getAttribute('data-category-id');

                    // Asignar el ID de la categoría seleccionada al campo oculto
                    document.getElementById('category-id').value = categoryId;

                    // Actualizar el texto del botón con el nombre de la categoría seleccionada
                    document.getElementById('menu-button').innerText = this.innerText;

                    // Cerrar el dropdown después de seleccionar una categoría
                    menuDropdown.classList.add('hidden');
                });
            });
        });
    </script>



</body>

</html>
