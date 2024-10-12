<header class="bg-gray-900 text-gray-100">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
      <!-- Logo and Brand Name -->
      <div class="flex items-center">
        <a href="/" class="text-3xl font-bold text-indigo-500 hover:text-indigo-400"><strong>23</strong></a>
      </div>
      <!-- Primary Navigation -->
      <nav class="hidden md:flex items-center space-x-8">
        <!-- Dropdown Menu for Categories -->
        <div class="group inline-block relative">
          <button class="text-white font-semibold py-2 px-4 rounded inline-flex items-center">
            <span class="mr-1">Categories</span>
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M5.9 7.3L10 11.6l4.1-4.3c.2-.2.5-.2.7 0s.2.5 0 .7l-4.5 4.7c-.2.2-.5.2-.7 0l-4.5-4.7c-.2-.2-.2-.5 0-.7s.5-.2.7 0z"/>
            </svg>
          </button>
          <ul class="absolute hidden text-gray-700 pt-1 group-hover:block">
            <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Subcategory 1</a></li>
            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Subcategory 2</a></li>
            <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Subcategory 3</a></li>
          </ul>
        </div>
        <a href="/cart-page" class="hover:text-indigo-500">Cart</a>
        <a href="/order-history" class="hover:text-indigo-500">Orders</a>
        <a href="/profile" class="hover:text-indigo-500">Profile</a>
        <a href="/store-locator" class="hover:text-indigo-500">Stores</a>
      </nav>
      <!-- Search Bar -->
      <div class="flex items-center border-b border-teal-500 py-2">
        <input class="appearance-none bg-transparent border-none w-full text-white mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Search..." aria-label="Search">
        <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M12.9 14.3c-1.7 1.4-3.9 2.2-6.2 2.2C3 16.5 0 13.5 0 9.8S3 3 6.8 3c2.3 0 4.5.8 6.2 2.2l.8-.8V.8h2.5v6.5H14l-.8-.8 4.5 4.5-5.8 5.8zm-6.1-2.6c2.5 0 4.5-2 4.5-4.5S9.3 2.8 6.8 2.8 2.3 4.7 2.3 7.3s2 4.5 4.5 4.5z"/>
          </svg>
        </button>
      </div>
      <!-- Mobile Menu Button -->
      <button class="md:hidden text-gray-500 hover:text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
    <!-- Mobile Menu -->
    <div class="md:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="/category-overview" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">Shop</a>
        <a href="/cart-page" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">Cart</a>
        <a href="/order-history" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">Orders</a>
        <a href="/profile" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">Profile</a>
        <a href="/store-locator" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">Stores</a>
      </div>
    </div>
  </header>
