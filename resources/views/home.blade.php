<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- Favicon --}}
    <link rel="icon" href="{{ URL::asset('/img/favicon.svg') }}" type="image/x-icon"/>

    <!-- Tailwind CDN -->
    {{-- <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    /> --}}

    <!-- Fontawesome icons CDN -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <!-- Alpine.js CDN -->
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- Custom styles --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Главная</title>
  </head>
  <body>
    <!-- Header start -->
    <header class="fixed top-center w-full text-center py-3 text-white font-semibold text-lg tracking-wide shadow-lg bg-gradient-to-r from-blue-900 to-blue-600 z-40">
        <div class="wrapper flex items-center justify-between">
          <nav class="flex justify-between items-center">
            <a href="#" class="logo inline-block w-12 h-12 relative bg-gradient-to-br from-blue-300 to-blue-500 p-5 rounded-full mr-2 hover:from-blue-600 hover:to-blue-600 transition-all duration-300">
              <img src="{{ URL::asset('/img/favicon.svg') }}" alt="logo" class="w-8 h-8 absolute inset-center">
            </a>

            <a href="#" class="link ml-3 inline-block px-2 py-0.5 rounded-lg text-white hover:bg-white hover:text-blue-600 transition-all duration-300">Главная</a>
            <a href="/o-nas" class="link ml-3 inline-block px-2 py-0.5 rounded-lg text-white hover:bg-white hover:text-blue-600 transition-all duration-300">О нас</a>
            <a href="#" class="link ml-3 inline-block px-2 py-0.5 rounded-lg text-white hover:bg-white hover:text-blue-600 transition-all duration-300">Контакты</a>
          </nav>

          <div class="right flex items-center">
            <div class="profile flex items-center">
              <a href="/user/profile" class="inline-block px-2 py-0.5 rounded-lg text-white hover:bg-white hover:text-blue-600 transition-all duration-300">Профиль</a>
              <a href="/user/profile" class="user_icon inline-block p-5 rounded-full ml-1 bg-gradient-to-br from-gray-100 to-blue-200 relative">
                <img src="{{ URL::asset('/img/courses_2.svg') }}" alt="profile_image" class="w-8 h-8 absolute inset-center">
              </a>
            </div>

            <div class="languages flex items-center ml-2">
              <a href="#" class="inline-block px-1 rounded-lg text-white hover:bg-white hover:text-blue-600 transition-all duration-300 mr-1">Рус</a>
              |
              <a href="#" class="inline-block px-1 rounded-lg text-white hover:bg-white hover:text-blue-600 transition-all duration-300 ml-1">Укр</a>
            </div>
          </div>
        </div>
    </header>
    <!-- Header end -->

    <!-- Content -->
    <main>

      <!-- Login/Registration form -->
      <section class="registration mt-36 mb-10">
        <img src="{{ URL::asset('/img/keyboard.png') }}" class="absolute z-0 w-1/2 -left-1/3 top-1/4">
        <img src="{{ URL::asset('/img/headphones.png') }}" class="absolute z-0 w-1/4 -right-48 -rotate-12" style="transform: rotate(-8deg)">
        <div class="wrapper">
            <h1 class="text-center text-4xl font-bold mb-5">Онлайн-школа</h1>
            <p class="text-center text-2xl font-normal w-3/4 mx-auto mb-5">
                Дистанционная школа с получением полного общего среднего образования<br> с 1 по 11 (12) класс и выдачей документов государственного образца
            </p>
            <form class="shadow-md rounded px-8 py-10 mb-4 flex flex-col w-2/5 xl:w-3/5 md:w-4/5 sm:w-full mx-auto bg-gradient-to-br from-blue-50 to-gray-200">

                <div class="mb-4">
                  <label
                    class="block text-grey-darker text-sm font-bold mb-2"
                    for="username"
                  >
                    Логин
                  </label>
                  <input
                    class="shadow appearance-none border-2 border-transparent rounded w-full py-2 px-3 text-grey-darker outline-none focus:border-blue-200 bg-white"
                    id="username"
                    type="text"
                    placeholder="Логин"
                  />
                </div>

                <div class="mb-6">
                  <label
                    class="block text-grey-darker text-sm font-bold mb-2"
                    for="password"
                  >
                    Пароль
                  </label>
                  <input
                    class="shadow appearance-none border-2 border-transparent rounded w-full py-2 px-3 text-grey-darker outline-none focus:border-blue-200 bg-white"
                    id="password"
                    type="password"
                    placeholder="Пароль"
                  />
                </div>

                <div class="flex items-center justify-between mt-3">
                  <button
                    class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition-all duration-200"
                    type="button"
                  >
                    Войти
                  </button>
                  <button
                    class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition-all duration-200"
                    type="button"
                  >
                    Регистрация
                  </button>
                  <a
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 hover:underline"
                    href="#"
                  >
                    Забыли пароль?
                  </a>
                </div>

            </form>
        </div>
      </section>

      <!-- Cards - Pros -->
      <section class="pros my-10">
        <div class="wrapper">
          <h2 class="section_title">Почему мы</h2>
          <div class="py-4 flex flex-wrap justify-center">
            <!-- Сard -->
            <div class="card w-1/4 xl:w-1/3 m-4 p-6">
                <img
                    class="relative h-24 w-auto mx-auto"
                    src="{{ URL::asset('/img/students-cap.svg') }}"
                    alt="why_we"
                />
                <p class="block mt-6 font-semibold text-xl text-gray-700 text-center">Полное общее среднее образование</p>
                <p class="block mt-3 opacity-75 text-gray-700 text-center">с 1 по 11(12) класс с выдачей документов государственного образца, возможность экстерната</p>
            </div>
            <!-- Сard -->
            <div class="card w-1/4 xl:w-1/3 m-4 p-6">
                <img
                    class="relative h-24 w-auto mx-auto"
                    src="{{ URL::asset('/img/monitor.svg') }}"
                    alt="why_we"
                />
                <p class="block mt-6 font-semibold text-xl text-gray-700 text-center">Полное общее среднее образование</p>
                <p class="block mt-3 opacity-75 text-gray-700 text-center">с 1 по 11(12) класс с выдачей документов государственного образца, возможность экстерната</p>
            </div>
            <!-- Сard -->
            <div class="card w-1/4 xl:w-1/3 m-4 p-6">
                <img
                    class="relative h-24 w-auto mx-auto"
                    src="{{ URL::asset('/img/video-lecture.svg') }}"
                    alt="why_we"
                />
                <p class="block mt-6 font-semibold text-xl text-gray-700 text-center">Полное общее среднее образование</p>
                <p class="block mt-3 opacity-75 text-gray-700 text-center">с 1 по 11(12) класс с выдачей документов государственного образца, возможность экстерната</p>
            </div>
            <!-- Сard -->
            <div class="card w-1/4 xl:w-1/3 m-4 p-6">
                <img
                    class="relative h-24 w-auto mx-auto"
                    src="{{ URL::asset('/img/clock.svg') }}"
                    alt="why_we"
                />
                <p class="block mt-6 font-semibold text-xl text-gray-700 text-center">Полное общее среднее образование</p>
                <p class="block mt-3 opacity-75 text-gray-700 text-center">с 1 по 11(12) класс с выдачей документов государственного образца, возможность экстерната</p>
            </div>
            <!-- Сard -->
            <div class="card w-1/4 xl:w-1/3 m-4 p-6">
                <img
                    class="relative h-24 w-auto mx-auto"
                    src="{{ URL::asset('/img/language.svg') }}"
                    alt="why_we"
                />
                <p class="block mt-6 font-semibold text-xl text-gray-700 text-center">Полное общее среднее образование</p>
                <p class="block mt-3 opacity-75 text-gray-700 text-center">с 1 по 11(12) класс с выдачей документов государственного образца, возможность экстерната</p>
            </div>
            <!-- Сard -->
            <div class="card w-1/4 xl:w-1/3 m-4 p-6">
                <img
                    class="relative h-24 w-auto mx-auto"
                    src="{{ URL::asset('/img/pen-test.svg') }}"
                    alt="why_we"
                />
                <p class="block mt-6 font-semibold text-xl text-gray-700 text-center">Полное общее среднее образование</p>
                <p class="block mt-3 opacity-75 text-gray-700 text-center">с 1 по 11(12) класс с выдачей документов государственного образца, возможность экстерната</p>
            </div>

          </div>
        </div>
      </section>

      <!-- Tabs -->
      <section class="my-10">
        <div class="wrapper">
            <h2 class="section_title">Выберите свой метод обучения</h2>
            <div class="flex items-center justify-center mx-auto mt-4">
            <div
                class="container mx-auto h-full flex flex-col justify-center items-stretch"
                x-data="{tab: 1}"
            >
                <div class="flex justify-center -space-x-px z-10">
                <a
                    href="!#0"
                    @click.prevent="tab = 1"
                    :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 1, 'text-gray-600 bg-gray-200 hover:bg-blue-400 hover:text-white focus:outline-none focus:shadow-outline': tab !== 1}"
                    class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                    >Онлайн-школа
                </a>
                <a
                    href="!#0"
                    @click.prevent="tab = 2"
                    :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 2, 'text-gray-600 bg-gray-200 hover:bg-blue-400 hover:text-white focus:outline-none focus:shadow-outline': tab !== 2}"
                    class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                    >Дополнительное образование
                </a>
                <a
                    href="!#0"
                    @click.prevent="tab = 3"
                    :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 3, 'text-gray-600 bg-gray-200 hover:bg-blue-400 hover:text-white focus:outline-none focus:shadow-outline': tab !== 3}"
                    class="block align-middle px-6 py-4 text-base font-semibold leading-none uppercase outline-none rounded-t-md"
                    >Индивидуальные занятия
                </a>
                </div>

                <div
                    x-show="tab === 1"
                    class="z-0 -mt-px px-8 py-12 border flex items-center justify-around bg-white rounded-md shadow transition-all duration-300">
                    <div class="left w-3/5 pr-12">
                        <h1 class="text-center text-gray-900 text-2xl font-bold leading-tighter">
                            Как поступить в онлайн-школу
                        </h1>
                        <p class="mt-4 text-base leading-snug">
                            Дистанционное обучение, которое продолжалось почти год, позади. Школы возвращаются к обычному формату и, как после затяжной войны, подсчитывают потери. Знаниям учеников «дистанционка» вряд ли пошла на пользу. Особенно, если учителя не старались найти оптимальный вариант не только для усвоения знаний, но и для тренировки полученных навыков и их проверки.
                            <br><br>
                            Еще весной я нашла для себя такой инструмент — интерактивную рабочую тетрадь Skysmart . Мне она помогла в работе, а моему сыну — в учебе.
                            <br><br>
                            С тех пор, как я впервые поделилась с вами своей находкой, сервис серьезно изменился и вырос. Теперь это не просто интерактивная тетрадь для домашних заданий, это полноценный тренажер, который могут использовать не только учителя, но и сами школьники
                        </p>
                    </div>
                    <div class="right relative w-1/3 h-full">
                        <img
                        class="relative h-full w-auto mx-auto"
                        src="{{ URL::asset('/img/school_build.png') }}"
                        alt=""
                        />
                    </div>
                </div>

                <div
                    x-show="tab === 2"
                    class="z-0 -mt-px px-8 py-12 border flex items-center justify-around bg-white rounded-md shadow transition-all duration-300">
                    <div class="left w-3/5 pr-12">
                        <h1 class="text-center text-gray-900 text-2xl font-bold leading-tighter">
                            Что даёт сертификат дополнительного образования и как его использовать?
                        </h1>
                        <p class="mt-4 text-base leading-snug">
                            Сертификат дополнительного образования используется родителями для того, чтобы выбирать и записываться в кружки и секции, предлагаемые разнообразными организациями и даже индивидуальными предпринимателями, без затрат со стороны семейного бюджета или с незначительной доплатой.
                            <br><br>
                            Получая сертификат Вы получаете и доступ в личный кабинет информационной системы yar.pfdo.ru (в моём случае, так как я живу в Ярославле), который, по сути, является Вашим доступом к персональному счету. Выбирая кружки и секции Вы используете доступные бесплатные «зачисления» и/или непосредственно деньги, закрепленные за Вашим сертификатом, которые могут направляться на оплату получаемого детьми дополнительного образования в муниципальных и частных организациях.
                        </p>
                    </div>
                    <div class="right relative w-1/3 h-full">
                        <img
                        class="relative h-full w-auto mx-auto"
                        src="{{ URL::asset('/img/pencil.png') }}"
                        alt=""
                        />
                    </div>
                </div>

                <div
                    x-show="tab === 3"
                    class="z-0 -mt-px px-8 py-12 border flex items-center justify-around bg-white rounded-md shadow transition-all duration-300">
                    <div class="left w-3/5 pr-12">
                        <h1 class="text-center text-gray-900 text-2xl font-bold leading-tighter">
                            Плюсы и минусы занятий индивидуальных.
                        </h1>
                        <p class="mt-4 text-base leading-snug">
                            Какие существуют плюсы? И действительно ли это плюсы?
                            <ul>
                                <li>Подстраиваются под конкретного ученика</li>
                                <li>Индивидуальный подход (персональный творческий подход!)</li>
                                <li>Студент может попросить преподавателя разобрать непонятный материал</li>
                                <li>Студент не боится говорить по-английски в соответствии со своими способностями </li>
                                <li>Внимание преподавателя фокусируется на отдельном ученике</li>
                                <li>Студент может следить за расходом собственных сил</li>
                            </ul>
                            Все эти пункты объединяет наличие определенной свободы в организации занятий со стороны студента. Однако, проработав 7 лет в сфере дополнительного образования, скажу, что все перечисленные пункты действительно становятся плюсами для очень - ох и замозолили же это слово, но лучшего пока нет - осознанных студентов, которые четко знают и собственный лимит сил, и ясно видят личные цели. Для всех остальных эти плюсы моментально становятся минусами.
                        </p>
                    </div>
                    <div class="right relative w-1/3 h-full">
                        <img
                        class="relative h-full w-auto mx-auto"
                        src="{{ URL::asset('/img/tutor.png') }}"
                        alt=""
                        />
                    </div>
                </div>

            </div>
            </div>
        </div>
      </section>

      <!-- Cards - Some courses/prices -->
      <section class="prices w-full my-20">
        <div class="wrapper">
            <h2 class="section_title">Цены на обучение в нашей школе</h2>
            <div class="flex items-stretch justify-center xl:flex-wrap w-full -mx-4 mt-4">

                <!-- Сard -->
                <div class="card mx-4 w-1/4 xl:w-1/3 xl:mb-8 flex flex-col items-center text-center text-xl">
                    <h3 class="price-block__header bg-red-700 text-white w-full rounded-t-lg p-3 leading-7 h-20 flex items-center justify-center">
                        Полное среднее образование
                    </h3>
                    <div class="price-block__body px-4 py-7 my-auto">
                        <span class="text-red-700 font-bold text-3xl">1200 </span>
                        <small class="text-xl">грн/мес</small>
                        <img class="my-5 mx-auto max-h-24" src="{{ URL::asset('/img/icon-certificate.svg') }}">
                        <p class="text-lg leading-5 mt-3 opacity-80">с выдачей документов государственного образца</p>
                    </div>
                    <a href="/auth_log.php?type=1" class="price-block__footer bg-red-700 text-white w-full rounded-b-lg p-3 hover:bg-blue-300 transition-all duration-300 capitalize text-xl mt-auto">оплатить</a>
                </div>

                <!-- Сard -->
                <div class="card mx-4 w-1/4 xl:w-1/3 xl:mb-8 flex flex-col items-center text-center text-xl">
                    <h3 class="price-block__header bg-red-700 text-white w-full rounded-t-lg p-3 leading-7 h-20 flex items-center justify-center">
                        Дополнительное среднее образование
                    </h3>
                    <div class="price-block__body p-4 my-auto">
                        <span class="text-red-700 font-bold text-3xl">600 </span>
                        <small class="text-xl">грн/мес</small>
                        <img class="my-5 mx-auto max-h-24" src="{{ URL::asset('/img/icon-chart.svg') }}">
                        <p class="text-lg leading-5 mt-3 opacity-80">по всем предметам</p>
                    </div>
                    <a href="/auth_log.php?type=1" class="price-block__footer bg-red-700 text-white w-full rounded-b-lg p-3 hover:bg-blue-300 transition-all duration-300 capitalize text-xl mt-auto">оплатить</a>
                </div>

                <!-- Сard -->
                <div class="card mx-4 w-1/4 xl:w-1/3 xl:mb-8 flex flex-col items-center text-center text-xl">
                    <h3 class="price-block__header bg-red-700 text-white w-full rounded-t-lg p-3 leading-7 h-20 flex items-center justify-center">
                        Дополнительное среднее образование
                    </h3>
                    <div class="price-block__body p-4 my-auto">
                        <span class="text-red-700 font-bold text-3xl">300 </span>
                        <small class="text-xl">грн/мес</small>
                        <img class="my-5 mx-auto max-h-24" src="{{ URL::asset('/img/icon-chart-pieces.svg') }}">
                        <p class="text-lg leading-5 mt-3 opacity-80">по трём выбранным предметам</p>
                    </div>
                    <a href="/auth_log.php?type=1" class="price-block__footer bg-red-700 text-white w-full rounded-b-lg p-3 hover:bg-blue-300 transition-all duration-300 capitalize text-xl mt-auto">оплатить</a>
                </div>

                <!-- Сard -->
                <div class="card mx-4 w-1/4 xl:w-1/3 xl:mb-8 flex flex-col items-center text-center text-xl">
                    <h3 class="price-block__header bg-red-700 text-white w-full rounded-t-lg p-3 leading-7 h-20 flex items-center justify-center">
                        Индивидуальные занятия
                    </h3>
                    <div class="price-block__body p-4 my-auto">
                        <span class="text-red-700 font-bold text-3xl">от 200 </span>
                        <small class="text-xl">грн/мес</small>
                        <img class="my-5 mx-auto max-h-24" src="{{ URL::asset('/img/icon-certificate.svg') }}">
                        <p class="text-lg leading-5 mt-3 opacity-80">с репетитором</p>
                    </div>
                    <a href="/auth_log.php?type=1" class="price-block__footer bg-red-700 text-white w-full rounded-b-lg p-3 hover:bg-blue-300 transition-all duration-300 capitalize text-xl mt-auto">оплатить</a>
                </div>

            </div>
        </div>
      </section>

      <!-- Tabs -->
      <section class="videos my-10 w-full">
        <div class="wrapper">
            <h2 class="section_title">
                Видеоуроки в студийном качестве
              </h2>
              <div class="flex items-center justify-center mx-auto w-full mt-4">
                <div
                  class="container mx-auto h-full flex flex-row justify-center items-stretch"
                  x-data="{tab: 1}">

                  <div x-show="tab === 1" class="p-12 w-1/2 xl:w-2/3 bg-white rounded-md shadow h-96">
                        <iframe src="https://www.youtube.com/embed/Vg45zf2b_YI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-full rounded"></iframe>
                  </div>
                  <div x-show="tab === 2" class="p-12 w-1/2 xl:w-2/3 bg-white rounded-md shadow h-96">
                        <iframe src="https://www.youtube.com/embed/Gc2h5-isIEw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-full rounded"></iframe>
                  </div>
                  <div x-show="tab === 3" class="p-12 w-1/2 xl:w-2/3 bg-white rounded-md shadow h-96">
                        <iframe src="https://www.youtube.com/embed/zyKo7kLgAIk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-full rounded"></iframe>
                  </div>
                  <div x-show="tab === 4" class="p-12 w-1/2 xl:w-2/3 bg-white rounded-md shadow h-96">
                        <iframe src="https://www.youtube.com/embed/THwrc2keOK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-full rounded"></iframe>
                  </div>
                  <div x-show="tab === 5" class="p-12 w-1/2 xl:w-2/3 bg-white rounded-md shadow h-96">
                        <iframe src="https://www.youtube.com/embed/aIBCZio2dic" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-full rounded"></iframe>
                  </div>

                  <div class="flex flex-col justify-start -space-x-px z-10 w-1/3">
                    <a
                      href="!#0"
                      @click.prevent="tab = 1"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 1, 'text-gray-600 bg-gray-200 hover:bg-blue-400 hover:text-white focus:outline-none focus:shadow-outline': tab !== 1}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none outline-none rounded-t-md"
                      >Английский язык 5 класс
                    </a>
                    <a
                      href="!#0"
                      @click.prevent="tab = 2"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 2, 'text-gray-600 bg-gray-200 hover:bg-blue-400 hover:text-white focus:outline-none focus:shadow-outline': tab !== 2}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none outline-none rounded-t-md"
                      >Биология 9 класс
                    </a>
                    <a
                      href="!#0"
                      @click.prevent="tab = 3"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 3, 'text-gray-600 bg-gray-200 hover:bg-blue-400 hover:text-white focus:outline-none focus:shadow-outline': tab !== 3}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none outline-none rounded-t-md"
                      >Литературное чтение 2 класс
                    </a>
                    <a
                      href="!#0"
                      @click.prevent="tab = 4"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 4, 'text-gray-600 bg-gray-200 hover:bg-blue-400 hover:text-white focus:outline-none focus:shadow-outline': tab !== 4}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none outline-none rounded-t-md"
                      >История Украины 8 класс
                    </a>
                    <a
                      href="!#0"
                      @click.prevent="tab = 5"
                      :class="{'cursor-default border-b-0 text-white bg-blue-500': tab === 5, 'text-gray-600 bg-gray-200 hover:bg-blue-400 hover:text-white focus:outline-none focus:shadow-outline': tab !== 5}"
                      class="block align-middle px-6 py-4 text-base font-semibold leading-none outline-none rounded-t-md"
                      >Я исследую мир 1 класс
                    </a>
                  </div>
                </div>
              </div>
        </div>
      </section>

      <!-- Screenshots about -->
      <section class="how_we_teach my-10 w-full">
        <div class="wrapper">
            <h2 class="section_title">Как мы учим</h2>
            <div class="slides flex flex-col mt-4">
            <img src="{{ asset('img/how_we_teach_1.png') }}" class="inline-block" />
            <img src="{{ asset('img/how_we_teach_2.jpg') }}" class="inline-block" />
            <img src="{{ asset('img/how_we_teach_3.jpg') }}" class="inline-block" />
            </div>
        </div>
      </section>

      <!-- Slider with other courses -->
      <section class="courses my-10 w-full">
        <div class="wrapper">
            <h2 class="section_title">Наши курсы</h2>
            <div class="slides inline-flex relative w-full">
            <div
                class="card mx-3 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white">
                <img src="{{ asset('img/courses_1.svg') }}" class="w-20 h-20 mx-auto" />
                <h5 class="block mt-5 font-bold">
                    Подготовка к ЗНО по украинскому языку и литературе
                </h5>
                <span class="block mt-5">
                Количество уроков:
                <strong>8</strong>
                </span>
                <span class="block mt-5">
                Цена за курс:
                <strong>3750 грн</strong>
                </span>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
                >
                Записаться
                </a>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
                >
                Подробнее
                </a>
            </div>

            <div
                class="card mx-3 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
            >
                <img src="{{ asset('img/courses_2.svg') }}" class="w-20 h-20 mx-auto" />
                <h5 class="block mt-5 font-bold">
                Подготовка к ЗНО по украинскому языку и литературе
                </h5>
                <span class="block mt-5">
                Количество уроков:
                <strong>8</strong>
                </span>
                <span class="block mt-5">
                Цена за курс:
                <strong>3750 грн</strong>
                </span>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
                >
                Записаться
                </a>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
                >
                Подробнее
                </a>
            </div>

            <div
                class="card mx-3 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
            >
                <img src="{{ asset('img/courses_3.svg') }}" class="w-20 h-20 mx-auto" />
                <h5 class="block mt-5 font-bold">
                Подготовка к ЗНО по украинскому языку и литературе
                </h5>
                <span class="block mt-5">
                Количество уроков:
                <strong>8</strong>
                </span>
                <span class="block mt-5">
                Цена за курс:
                <strong>3750 грн</strong>
                </span>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
                >
                Записаться
                </a>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
                >
                Подробнее
                </a>
            </div>

            <div
                class="card mx-3 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
            >
                <img src="{{ asset('img/courses_1.svg') }}" class="w-20 h-20 mx-auto" />
                <h5 class="block mt-5 font-bold">
                Подготовка к ЗНО по украинскому языку и литературе
                </h5>
                <span class="block mt-5">
                Количество уроков:
                <strong>8</strong>
                </span>
                <span class="block mt-5">
                Цена за курс:
                <strong>3750 грн</strong>
                </span>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
                >
                Записаться
                </a>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
                >
                Подробнее
                </a>
            </div>

            <div
                class="card mx-3 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
            >
                <img src="{{ asset('img/courses_2.svg') }}" class="w-20 h-20 mx-auto" />
                <h5 class="block mt-5 font-bold">
                Подготовка к ЗНО по украинскому языку и литературе
                </h5>
                <span class="block mt-5">
                Количество уроков:
                <strong>8</strong>
                </span>
                <span class="block mt-5">
                Цена за курс:
                <strong>3750 грн</strong>
                </span>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
                >
                Записаться
                </a>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
                >
                Подробнее
                </a>
            </div>

            <div
                class="card mx-3 inline-block w-96 text-center p-7 shadow-md rounded-3xl bg-white"
            >
                <img src="{{ asset('img/courses_3.svg') }}" class="w-20 h-20 mx-auto" />
                <h5 class="block mt-5 font-bold">
                Подготовка к ЗНО по украинскому языку и литературе
                </h5>
                <span class="block mt-5">
                Количество уроков:
                <strong>8</strong>
                </span>
                <span class="block mt-5">
                Цена за курс:
                <strong>3750 грн</strong>
                </span>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 p-2 bg-blue-400 rounded-lg text-white font-bold hover:bg-blue-300 transition-all"
                >
                Записаться
                </a>
                <a
                href="#"
                class="inline-block w-2/5 mt-6 ml-5 p-2 bg-indigo-600 rounded-lg text-white font-bold hover:bg-indigo-500 transition-all"
                >
                Подробнее
                </a>
            </div>
            </div>
        </div>
      </section>
    </main>

    <!-- Footer start -->
    <footer class="bg-gradient-to-b from-purple-900 to-blue-900 pt-10 sm:mt-10 pt-10">
      <div class="wrapper">
        <div class="max-w-6xl m-auto text-white flex flex-wrap justify-left">
            <!-- Col-1 -->
            <div class="p-5 w-1/3 sm:w-4/12 md:w-3/12">
              <!-- Col Title -->
              <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Getting Started
              </div>

              <!-- Links -->
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Installation
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Release Notes
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Upgrade Guide
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Using with Preprocessors
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Optimizing for Production
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Browser Support
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                IntelliSense
              </a>
            </div>

            <!-- Col-2 -->
            <div class="p-5 w-1/3 sm:w-4/12 md:w-3/12">
              <!-- Col Title -->
              <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Core Concepts
              </div>

              <!-- Links -->
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Utility-First
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Responsive Design
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Hover, Focus, & Other States
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Dark Mode
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Adding Base Styles
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Extracting Components
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Adding New Utilities
              </a>
            </div>

            <!-- Col-3 -->
            <div class="p-5 w-1/3 sm:w-4/12 md:w-3/12">
              <!-- Col Title -->
              <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Customization
              </div>

              <!-- Links -->
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Configuration
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Theme Configuration
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Breakpoints
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Customizing Colors
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Customizing Spacing
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Configuring Variants
              </a>
              <a
                href="#"
                class="my-3 block text-white hover:text-gray-100 text-sm font-medium duration-700"
              >
                Plugins
              </a>
            </div>
          </div>

          <!-- Copyright Bar -->
          <div class="pt-2">
            <div
              class="flex pb-5 px-3 m-auto pt-5 border-t border-gray-500 text-white text-sm flex-col md:flex-row max-w-6xl"
            >
              <div class="mt-2">© Copyright 2021. All Rights Reserved.</div>

              <!-- Required Unicons (if you want) -->
              <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                <a href="#" class="w-6 mx-1">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="w-6 mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="w-6 mx-1">
                  <i class="fab fa-youtube"></i>
                </a>
                <a href="#" class="w-6 mx-1">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Link slick -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        $("section.how_we_teach .slides")
          .not(".slick-initialized")
          .slick({
            arrows: false,
            draggable: true,
            focusOnSelect: false,
            infinite: false,
            autoplay: false,
            dots: true,
            variableWidth: true,
            vertical: false,
            verticalSwiping: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  draggable: true,
                  touchThreshold: 300,
                },
              },
            ],
        });

        $("section.courses .slides")
          .not(".slick-initialized")
          .slick({
            arrows: true,
            prevArrow: `
              <button type="button">
                <i class="fas fa-chevron-left"></i>
              </button>
            `,
            nextArrow: `
              <button type="button">
                <i class="fas fa-chevron-right"></i>
              </button>
            `,
            draggable: true,
            focusOnSelect: false,
            infinite: false,
            autoplay: false,
            dots: false,
            variableWidth: true,
            vertical: false,
            verticalSwiping: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: false,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  draggable: true,
                  touchThreshold: 300,
                },
              },
            ],
          });
      });
    </script>
  </body>
</html>

