<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="index.php?route=home" class="-m-1.5 p-1.5">
        <span class="sr-only">Shop Online</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
    </div>

    <div class="hidden lg:flex lg:gap-x-12">
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Products</a>
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end items-center space-x-2">
      <!-- Dashboard -->
      <?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') { ?>
      <a href="index.php?route=dashboard"
        class="ml-10 text-sm font-semibold leading-6 text-gray-900 p-2 bg-indigo-400 text-white rounded-md">Dashboard</a>
      <?php }?>
      <!-- Login -->
      <?php if(!isset($_SESSION['user'])){ ?>
      <a href="index.php?route=login" class="text-sm font-semibold leading-6 text-gray-900">Log in
        <span>&rarr;</span></a>
      <?php }else{?>
      <a href="index.php?route=logout" class="text-sm font-semibold leading-6 text-red-600">Logout
        <span>&rarr;</span></a>
      <?php }?>
    </div>
  </nav>
</header>