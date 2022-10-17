
    <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
    >
      <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
      >
        <button
          class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
          type="button"
          onclick="toggleNavbar('example-collapse-sidebar')"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="logo">
            <a href="{{ route('welcome') }}">
              <img src="images/logo.svg" alt="Hotel Himara" />
            </a>
            </div>
        <ul class="md:hidden items-center flex flex-wrap list-none">

          <li class="inline-block relative">
            <a
              class="text-blueGray-500 block"
              href="#pablo"
              onclick="openDropdown(event,'user-responsive-dropdown')"
              ><div class="items-center flex">
                <span
                  class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                  >

                  {{-- Picture profile responsive --}}
                  <img
                    alt="..."
                    class="w-full rounded-full align-middle border-none shadow-lg"
                    src="images/users/admin.jpg"
                /></span></div
            ></a>

            <div
              class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
              id="user-responsive-dropdown"
            >
              <a
                href="#pablo"
                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                >Profile</a
              >
              <div
                class="h-0 my-2 border border-solid border-blueGray-100"
              ></div>
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700" href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();"></i>
                    {{ __('Log Out') }}
            </a>
            </form>
            </div>
          </li>
        </ul>
        <div
          class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
          id="example-collapse-sidebar"
        >
          <div
            class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
          >
            <div class="flex flex-wrap">
              <div class="w-6/12">
                <div class="logo">
                    <a href="{{ route('welcome') }}">
                      <img src="images/logo.svg" alt="Hotel Himara" />
                    </a>
                    </div>
              </div>
              <div class="w-6/12 flex justify-end">
                <button
                  type="button"
                  class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                  onclick="toggleNavbar('example-collapse-sidebar')"
                >
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </div>
          <form class="mt-6 mb-4 md:hidden">
            <div class="mb-3 pt-0">
              <input
                type="text"
                placeholder="Search"
                class="border-0 px-3 py-2 h-12 border border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
              />
            </div>
          </form>
          <!-- Divider -->
          <hr class="my-4 md:min-w-full" />
          <!-- Heading -->
          <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
          >
            Admin Layout Sections
          </h6>
          <!-- Navigation -->

          <ul class="md:flex-col md:min-w-full flex flex-col list-none">
            <li class="items-center">
              <a
                href="{{ route('users.index') }}"
                class="{{ Route::currentRouteNamed('back.users.index') ? 'active' : '' }} text-xs uppercase py-3 font-bold block text-currentGold hover:text-hoverGold"
              >
                <i class="fas fa-solid fa-users-gear mr-2 text-sm opacity-75"></i>
                User List
              </a>
            </li>


            <li class="items-center">
              <a
                href="{{ route('nav.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold {{ Route::currentRouteNamed('nav.index') ? 'active' : '' }}"
              >
                <i class="fas fa-solid fa-bars mr-2 text-sm text-blueGray-300"></i>
               Navbar
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('rooms.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-solid fa-city mr-2 text-sm text-blueGray-300"></i>
                Rooms
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('slider.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-solid fa-sliders mr-2 text-sm text-blueGray-300"></i>
                Slider
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('gallery.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-solid fa-images mr-2 text-sm text-blueGray-300"></i>
                Gallery
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('services.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-solid fa-blender-phone mr-2 text-sm text-blueGray-300"></i>
             Services
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('team.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-solid fa-people-group mr-2 text-sm text-blueGray-300"></i>
               Team
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('about.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-solid fa-circle-info mr-2 text-sm text-blueGray-300"></i>
               About
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('testimonials.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-solid fa-quote-left mr-2 text-sm text-blueGray-300"></i>
                Testimonials
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('restaurant.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-solid fa-utensils mr-2 text-sm text-blueGray-300"></i>
                Restaurant
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('news.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                news
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('video.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-solid fa-video mr-2 text-sm text-blueGray-300"></i>
                video
              </a>
            </li>
            <li class="items-center">
              <a
                href="{{ route('footer.index') }}"
                class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
              >
                <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                footer
              </a>
            </li>

          </ul>

          <!-- Divider -->
          <hr class="my-4 md:min-w-full" />
          <!-- Heading -->
          <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
          >
            Auth Layout Pages
          </h6>
          <!-- Navigation -->

          <ul
            class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
          >
            <li class="items-center">
              <a
                href="../auth/login.html"
                class="text-blueGray-700 hover:text-currentGold text-xs uppercase py-3 font-bold block"
              >
                <i
                  class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                ></i>
                Login
              </a>
            </li>

            <li class="items-center">
              <a
                href="../auth/register.html"
                class="text-blueGray-700 hover:text-currentGold text-xs uppercase py-3 font-bold block"
              >
                <i
                  class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"
                ></i>
                Register
              </a>
            </li>
          </ul>

          <!-- Divider -->
          <hr class="my-4 md:min-w-full" />
          <!-- Heading -->
          <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
          >
            No Layout Pages
          </h6>
          <!-- Navigation -->

          <ul
            class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
          >
            <li class="items-center">
              <a
                href="../landing.html"
                class="text-blueGray-700 hover:text-currentGold text-xs uppercase py-3 font-bold block"
              >
                <i
                  class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"
                ></i>
                Landing Page
              </a>
            </li>

            <li class="items-center">
              <a
                href="../profile.html"
                class="text-blueGray-700 hover:text-currentGold text-xs uppercase py-3 font-bold block"
              >
                <i
                  class="fas fa-user-circle text-blueGray-300 mr-2 text-sm"
                ></i>
                Profile Page
              </a>
            </li>
          </ul>

          <!-- Divider -->
          <hr class="my-4 md:min-w-full" />
          <!-- Heading -->
          <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
          >
            Personal Pages
          </h6>
          <!-- Navigation -->
          <ul
            class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
          >
          <li class="items-center">
            <a
              href="./settings.html"
              class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
            >
              <i class="fas fa-light fa-user mr-2 text-sm text-blueGray-300"></i>
              Profile
            </a>
          </li>
          <li class="items-center">
            <a
              href="./settings.html"
              class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-currentGold"
            >
              <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
              Settings
            </a>
          </li>
          <li class="items-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="text-blueGray-700 hover:text-currentGold text-xs uppercase py-3 font-bold block" href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();"><i
                class="fas fa-solid fa-power-off text-blueGray-300 mr-2 text-sm"
              ></i>
                    {{ __('Log Out') }}
            </a>
            </form>

          </li>

          </ul>
        </div>
      </div>
    </nav>
