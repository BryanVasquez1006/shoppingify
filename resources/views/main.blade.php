<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;200;300;400;500;600;700;800;900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&family=Nunito+Sans:ital,wght@0,600;1,300&family=Quicksand:wght@300;400;500;600;700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,600;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <title>Document</title>
    @livewireStyles
</head>

<body>
    {{-- <div class="grid grid-cols-3 gap-4">
        <div class="side_bar">
            <div class="brand">
                <svg width="42" height="43" viewBox="0 0 42 43" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M31.5698 2.36509C32.0835 2.36509 32.5 1.94725 32.5 1.43181C32.5 0.916377 32.0835 0.498535 31.5698 0.498535C31.0561 0.498535 30.6396 0.916377 30.6396 1.43181C30.6396 1.94725 31.0561 2.36509 31.5698 2.36509Z"
                        fill="#3F3D56" />
                    <path
                        d="M31.5698 9.74644C32.0835 9.74644 32.5 9.3286 32.5 8.81316C32.5 8.29772 32.0835 7.87988 31.5698 7.87988C31.0561 7.87988 30.6396 8.29772 30.6396 8.81316C30.6396 9.3286 31.0561 9.74644 31.5698 9.74644Z"
                        fill="#3F3D56" />
                    <path
                        d="M40.8713 11.613C41.385 11.613 41.8015 11.1952 41.8015 10.6797C41.8015 10.1643 41.385 9.74646 40.8713 9.74646C40.3576 9.74646 39.9412 10.1643 39.9412 10.6797C39.9412 11.1952 40.3576 11.613 40.8713 11.613Z"
                        fill="#3F3D56" />
                    <path
                        d="M39.3421 14.7653C38.9537 14.1225 37.5969 14.1391 37.5969 14.1391C36.3615 15.9807 33.3921 14.0245 33.3921 14.0245C31.1866 15.0145 29.8409 11.8595 29.8409 11.8595C26.8733 11.4143 27.3318 8.28708 27.3318 8.28708C25.8553 7.98966 26.2696 5.31129 26.2696 5.31129C26.2696 5.31129 27.0889 4.6371 26.6857 4.1439C26.4294 3.83035 26.4135 2.93048 26.4359 2.31616C24.5092 1.72825 22.5063 1.4302 20.4925 1.43171C9.23764 1.43171 0.11377 10.5862 0.11377 21.8789C0.11377 33.1716 9.23764 42.3262 20.4925 42.3262C31.7474 42.3262 40.8713 33.1716 40.8713 21.8789C40.8737 19.4256 40.4351 16.992 39.5765 14.6949C39.4719 14.8133 39.3908 14.8459 39.3421 14.7653Z"
                        fill="#3F3D56" />
                    <path
                        d="M38.1343 14.6846C37.7649 14.0732 36.4745 14.089 36.4745 14.089C35.2997 15.8405 32.4756 13.98 32.4756 13.98C30.3781 14.9216 29.0983 11.921 29.0983 11.921C26.2759 11.4976 26.712 8.52346 26.712 8.52346C25.3078 8.2406 25.7018 5.69334 25.7018 5.69334C25.7018 5.69334 26.4809 5.05215 26.0975 4.5831C25.8537 4.2849 25.8386 3.42907 25.8599 2.84483C24.0275 2.2857 22.1227 2.00223 20.2075 2.00367C9.50355 2.00367 0.826294 10.7101 0.826294 21.45C0.826294 32.1899 9.50355 40.8963 20.2075 40.8963C30.9114 40.8963 39.5886 32.1899 39.5886 21.45C39.591 19.1168 39.1738 16.8022 38.3572 14.6176C38.2578 14.7302 38.1806 14.7612 38.1343 14.6846Z"
                        fill="#3F3D56" />
                    <path
                        d="M17.8933 13.4997C17.8933 13.4997 14.5512 11.3657 11.3609 13.4997C10.2443 14.2466 9.68601 15.3109 9.43198 16.379C8.98032 18.278 9.47565 20.2801 10.6834 21.8108L17.9007 30.958C18.1482 31.2766 18.48 31.519 18.8584 31.6573C19.2367 31.7956 19.6461 31.8244 20.04 31.7402C20.0556 31.7367 20.0713 31.733 20.0871 31.7292C20.3723 31.6588 20.6401 31.5305 20.874 31.3523C21.108 31.1741 21.303 30.9497 21.4472 30.693L26.4666 21.849C27.3951 20.2384 27.7758 18.3682 27.5509 16.5213C27.3155 14.7024 26.445 12.7852 23.97 12.1278C23.97 12.1278 21.0836 10.9084 17.8933 13.4997Z"
                        fill="#F9A109" />
                    <path opacity="0.1"
                        d="M17.8933 13.4997C17.8933 13.4997 14.5512 11.3657 11.3609 13.4997C10.2443 14.2466 9.68601 15.3109 9.43198 16.379C8.98032 18.278 9.47565 20.2801 10.6834 21.8108L17.9007 30.958C18.1482 31.2766 18.48 31.519 18.8584 31.6573C19.2367 31.7956 19.6461 31.8244 20.04 31.7402C20.0556 31.7367 20.0713 31.733 20.0871 31.7292C20.3723 31.6588 20.6401 31.5305 20.874 31.3523C21.108 31.1741 21.303 30.9497 21.4472 30.693L26.4666 21.849C27.3951 20.2384 27.7758 18.3682 27.5509 16.5213C27.3155 14.7024 26.445 12.7852 23.97 12.1278C23.97 12.1278 21.0836 10.9084 17.8933 13.4997Z"
                        fill="black" />
                    <path
                        d="M17.9273 14.0148C17.9273 14.0148 14.7921 12.013 11.7995 14.0148C10.752 14.7154 10.2283 15.7138 9.99001 16.7157C9.56632 18.4972 10.031 20.3752 11.1639 21.8112L17.9342 30.3918C18.1664 30.6908 18.4777 30.9181 18.8326 31.0479C19.1875 31.1776 19.5716 31.2046 19.941 31.1256C19.9557 31.1223 19.9704 31.1189 19.9853 31.1153C20.2528 31.0492 20.504 30.9289 20.7234 30.7617C20.9429 30.5946 21.1259 30.3841 21.2611 30.1433L25.9696 21.847C26.8407 20.3361 27.1977 18.5818 26.9868 16.8492C26.766 15.143 25.9494 13.3445 23.6277 12.7279C23.6277 12.7279 20.92 11.584 17.9273 14.0148Z"
                        fill="#F9A109" />
                    <path opacity="0.1"
                        d="M18.0494 17.4471C18.0494 17.4471 16.524 16.4732 15.068 17.4471C14.6159 17.7541 14.3003 18.2253 14.1877 18.7612C14.0902 19.1909 14.0909 19.6371 14.1899 20.0665C14.2888 20.4958 14.4833 20.8971 14.7588 21.2403C14.7588 21.2403 18.664 25.854 19.0291 25.772C19.0362 25.7704 19.0434 25.7687 19.0506 25.767C19.3137 25.7036 21.9622 21.2577 21.9622 21.2577C22.386 20.5226 22.5597 19.6691 22.4571 18.8262C22.3496 17.9961 21.9523 17.121 20.8228 16.821C20.8228 16.821 19.5054 16.2645 18.0494 17.4471Z"
                        fill="black" />
                    <path opacity="0.1"
                        d="M8.52185 24.7386L8.94938 25.4536L9.80436 26.8835L10.0894 27.8844L9.51939 28.7423L10.2319 30.4582L10.5169 31.4591L9.94692 32.031L11.087 32.8889"
                        fill="black" />
                    <path opacity="0.1"
                        d="M29.4705 18.4473V19.5912L28.758 21.45L28.3304 22.4509L29.043 23.7378L29.3281 24.5958L30.4681 25.0247L30.8956 25.7397V27.4555"
                        fill="black" />
                    <path opacity="0.1"
                        d="M36.7385 19.5912L35.5985 20.3061C35.5985 20.3061 35.0284 20.5921 35.0284 20.7351V21.879"
                        fill="black" />
                    <path opacity="0.1" d="M31.6083 15.5876L31.8932 17.0175L31.6083 18.0184" fill="black" />
                    <path opacity="0.1"
                        d="M32.7482 28.4565L31.8932 29.7433L30.8956 30.6012V31.1732L31.4656 31.8881V32.7461L31.0381 33.604"
                        fill="black" />
                    <path opacity="0.1"
                        d="M24.6253 4.14856H23.2002L22.0601 5.14946L20.2075 6.15035L19.3524 6.86533V7.15133L17.4998 8.15223L16.9298 9.15313"
                        fill="black" />
                    <path opacity="0.1"
                        d="M9.23428 6.57916L7.95171 9.15294L7.52418 10.1539L6.52662 11.4407C6.52662 11.4407 5.81407 12.7276 5.67156 12.8706C5.52905 13.0136 4.53149 13.2996 4.53149 13.2996L5.95658 14.7295"
                        fill="black" />
                    <path opacity="0.1"
                        d="M3.53402 16.4454L3.24897 18.3043L3.53402 19.4482V21.45L2.67896 25.1677L3.53402 26.1686L4.53156 27.4555"
                        fill="black" />
                    <path opacity="0.1"
                        d="M5.67163 17.3035L6.52669 17.7324L7.09671 19.5913L8.23682 19.3053L8.80683 20.3062"
                        fill="black" />
                    <path opacity="0.1" d="M21.3475 35.8918L23.6277 35.6058L24.6252 34.6049H26.0503" fill="black" />
                    <path opacity="0.1"
                        d="M7.52417 32.889L8.37923 33.8899L9.80431 34.3189L10.8019 34.6049L11.0869 36.1777"
                        fill="black" />
                    <path opacity="0.1"
                        d="M24.3402 28.0274L25.3378 27.3125L25.7654 26.1685L26.6204 26.0256L27.0479 24.5957"
                        fill="black" />
                </svg>

            </div>
            <div class="menu">
                <span class="material-symbols-outlined">
                    list
                </span>
            </div>
            <div class="back_icon">
                <span class="material-symbols-outlined">
                    replay
                </span>
            </div>
            <div class="back_icon">
                <span class="material-symbols-outlined">
                    insert_chart
                </span>
            </div>
        </div>




        <div>09</div>
        <div>09</div>
    </div> --}}

    {{-- NAV-BAR STARTING HERE --}}


    <div class="flex justify-between">

        <aside id="left" class="sticky bg-white z-50 top-0  left-0 w-20 h-screen" aria-label="Sidebar">
            <div class="flex flex-col justify-between h-full py-4  bg-white">
                <div class="w-18 h-24 flex justify-center py-2.5">
                    <img src="img/logo.svg" alt="logo">
                </div>
                <ul class="flex flex-col gap-10 font-normal">
                    <li class="flex items-center pl-5" onclick="toggleHover(this)">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 -960 960 960"
                                width="35">
                                <path
                                    d="M377-198v-60h463v60H377Zm0-252v-60h463v60H377Zm0-253v-60h463v60H377ZM189-161q-28.05 0-48.025-19Q121-199 121-227.5t19.5-48q19.5-19.5 48-19.5t47.5 19.975Q255-255.05 255-227q0 27.225-19.387 46.613Q216.225-161 189-161Zm0-252q-28.05 0-48.025-19.681Q121-452.362 121-480t19.975-47.319Q160.95-547 189-547q27.225 0 46.613 19.681Q255-507.638 255-480t-19.387 47.319Q216.225-413 189-413Zm-1-253q-27.637 0-47.319-19.681Q121-705.362 121-733t19.681-47.319Q160.363-800 188-800q27.637 0 47.319 19.681Q255-760.638 255-733t-19.681 47.319Q215.637-666 188-666Z" />
                            </svg>
                        </a>
                    </li>
                    <li class="flex items-center pl-5" onclick="toggleHover(this)">
                        <a href="#">
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
                    <input type="text" name="search" id="" placeholder="search for an item"
                        class=" border-y-2 border-e-2 p-2 w-50 focus:outline-none bg-white rounded-e-lg ">
                </div>
            </div>


            @foreach ($categories as $category)
            <div class="items_container">
                <h2 class="a font-bold text-lg mt-10">{{ $category->name }}</h2>
                <div class="grid grid-cols-4 mt-10 ">
                    @foreach ($category->items->where('category_id', $category->id) as $item) <!-- Filtra los elementos por categoría -->
                        <a href="#"
                            class="p-3 border rounded-lg drop-shadow-md font-bold flex justify-between w-52 mt-5">
                            <p>{{ $item->name }}</p>
                            <button class="material-symbols-outlined hover:text-gray-500">
                                add
                            </button>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

        {{-- MIDDLE SECTION ENDING HERE --}}

        <div class="flex flex-col justify-between">
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
                            <button class="w-32 p-3 bg-white text-black rounded-lg hover:bg-slate-100 mt-4 font-bold"
                                type="submit">Add item</button>
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
    {{-- NAV-BAR ENDING HERE --}}


    <script>
        function toggleHover(element) {
            const listItems = document.querySelectorAll('.flex.items-center');

            listItems.forEach(item => {
                item.classList.remove('border-l-4', 'border-yellow-500');
            });

            element.classList.add('border-l-4', 'border-yellow-500');
        }
    </script>
    @livewireScripts
</body>

</html>
