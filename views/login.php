<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="min-h-screen flex items-center justify-center w-full">
    <div class="bg-white shadow-md rounded-lg px-8 py-6 max-w-md">
      <h1 class="text-2xl font-bold text-center mb-4">Welcome Back!</h1>
      <?php if (isset($error)): ?>
      <div class="p-2 bg-rose-200 rounded-sm mb-2">
        <p class="text-xs text-red-400"><?= $error ?></p>
      </div>
      <?php endif; ?>
      <form method="POST">
        <div class="mb-4">
          <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
          <input type="text" id="username" name="username"
            class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
            placeholder="Enter your username">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
          <input type="password" id="password" name="password"
            class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
            placeholder="Enter your password">
          <a href="#"
            class="text-xs text-gray-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Forgot
            Password?</a>
        </div>
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center">
            <input type="checkbox" id="remember"
              class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 focus:outline-none" checked>
            <label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Remember me</label>
          </div>
          <a href="#"
            class="text-xs text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create
            Account</a>
        </div>

        <button type="submit"
          class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
      </form>
    </div>
  </div>
</body>

</html>