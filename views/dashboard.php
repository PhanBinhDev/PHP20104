<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- link icons phophoricons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>


</head>

<body class="bg-slate-100 px-2 md:px-5">
  <!-- Header -->
  <div class="mx-4 w-full z-30 flex bg-white p-2 items-center justify-center h-16 px-10">
    <div class="logo ml-12  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
      NERVE
    </div>
    <!-- SPACER -->
    <div class="grow h-full flex items-center justify-center"></div>
    <div class="flex-none h-full text-center flex items-center justify-center space-x-2">

      <div class="flex space-x-3 items-center px-3 py-2.5 rounded-md bg-blue-500">
        <div class="flex-none flex justify-center">
          <div class="size-4 flex ">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShta_GXR2xdnsxSzj_GTcJHcNykjVKrCBrZ9qouUl0usuJWG2Rpr_PbTDu3sA9auNUH64&usqp=CAU"
              alt="profile" class="shadow rounded-full object-cover" />
          </div>
        </div>

        <div class="hidden md:block text-sm md:text-md text-white">Admin</div>
      </div>
      <!-- Logout -->
      <a href="index.php?route=logout" class="flex items-center bg-rose-500 px-3 py-2.5 rounded-md">
        <button class="text-sm md:text-md text-white">Logout</button>
      </a>

    </div>
  </div>
  <!-- Content -->
  <div class="content transform ease-in-out duration-500 pt-16 pb-4 ">
    <!-- Thống kế -->
    <div class="flex flex-wrap my-5 -mx-2">
      <div class="w-full lg:w-1/4 p-2">
        <div
          class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
          <div
            class="flex text-indigo-500 items-center justify-center bg-white p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
            <i class="ph ph-users text-lg"></i>
          </div>
          <div class="flex flex-col justify-around flex-grow ml-5 text-white">
            <div class="text-xs whitespace-nowrap">
              Total User
            </div>
            <div class="">
              2
            </div>
          </div>
          <div class=" flex items-center flex-none text-white">
            <i class="ph ph-caret-right"></i>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 p-2 ">
        <div
          class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
          <div
            class="flex text-indigo-500 items-center justify-center bg-white p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
            <i class="ph ph-truck text-lg"></i>
          </div>
          <div class="flex flex-col justify-around flex-grow ml-5 text-white">
            <div class="text-xs whitespace-nowrap">
              Total Product
            </div>
            <div class="">
              <?= count($products)?>
            </div>
          </div>
          <div class=" flex items-center flex-none text-white">
            <i class="ph ph-caret-right"></i>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 p-2 ">
        <div
          class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
          <div
            class="flex text-indigo-500 items-center justify-center bg-white p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
            <i class="ph ph-truck text-lg"></i>
          </div>
          <div class="flex flex-col justify-around flex-grow ml-5 text-white">
            <div class="text-xs whitespace-nowrap">
              Total Categories
            </div>
            <div class="">
              <?= count($categories)?>
            </div>
          </div>
          <div class=" flex items-center flex-none text-white">
            <i class="ph ph-caret-right"></i>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 p-2">
        <div
          class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
          <div
            class="flex text-indigo-500 items-center justify-center bg-white p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
            <i class="ph ph-trend-up text-lg"></i>
          </div>
          <div class="flex flex-col justify-around flex-grow ml-5 text-white">
            <div class="text-xs whitespace-nowrap">
              Total Visitor
            </div>
            <div class="">
              253
            </div>
          </div>
          <div class=" flex items-center flex-none text-white">
            <i class="ph ph-caret-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Products -->
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="px-4 py-6 bg-white border-b">
      <div class="flex items-center justify-between">
        <h2 class="text-lg font-medium text-gray-900">Products</h2>
        <div class="flex items-center space-x-2">
          <a href="index.php?route=product/create"
            class="px-3 py-2 text-sm text-white hover:bg-blue-600 bg-blue-500 rounded-md">
            New
          </a>
        </div>
      </div>
      <hr class="my-2">
      <div class="flex items-center justify-between">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-white ">
            <tr>
              <th scope="col" class="px-16 py-3">
                <span class="sr-only">Image</span>
              </th>
              <th scope="col" class="px-6 py-3">
                Product
              </th>
              <th scope="col" class="px-6 py-3">
                Category
              </th>
              <th scope="col" class="px-6 py-3">
                Description
              </th>
              <th scope="col" class="px-6 py-3">
                Price
              </th>
              <th scope="col" class="px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($products as $product){ ?>
            <tr class="bg-white border-b hover:bg-gray-50">
              <td class="p-4">
                <img src="public/images/<?= $product['image_name']?>" class="w-10 max-w-full max-h-full"
                  alt="Apple Watch">
              </td>
              <td class="px-6 py-4 font-semibold text-gray-900">
                <?= $product['name']?>
              </td>
              <td class="px-6 py-4 font-semibold text-gray-900">
                <?= $product['categoryName']?>
              </td>
              <td class="px-6 py-4">
                <?= $product['description']?>
              </td>
              <td class="px-6 py-4 font-semibold text-gray-900">
                <?= $product['price']?>
              </td>
              <td class="px-6 py-4">
                <a href="index.php?route=product/edit&id=<?= $product['id']?>"
                  class="p-2 bg-indigo-500 rounded-md text-white">Edit</a>
                <a href="index.php?route=product/delete&id=<?= $product['id']?>"
                  class="p-2 bg-rose-500 text-white rounded-md">Remove</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>

      </div>
      <!-- manage categories -->
      <div class="flex items-center justify-between mt-6">
        <h2 class="text-lg font-medium text-gray-900">Categories</h2>
        <div class="flex items-center space-x-2">
          <a href="index.php?route=category/create"
            class="px-3 py-2 text-sm text-white hover:bg-blue-600 bg-blue-500 rounded-md">
            New
          </a>
        </div>
      </div>
      <hr class="my-2">
      <div class="flex items-center justify-between">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-white ">
            <tr>
              <th scope="col" class="px-6 py-3">
                Name
              </th>
              <th scope="col" class="px-6 py-3">
                Description
              </th>
              <th scope="col" class="px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($categories as $category){ ?>
            <tr class="bg-white border-b hover:bg-gray-50">
              <td class="px-6 py-4 font-semibold text-gray-900">
                <?= $category['name']?>
              </td>
              <td class="px-6 py-4">
                <?= $category['description']?>
              </td>
              <td class="px-6 py-4">
                <a href="index.php?route=category/edit&id=<?= $category['id']?>"
                  class="p-2 bg-indigo-500 rounded-md text-white">Edit</a>
                <a onclick="return confirm('Việc xóa danh mục sẽ xóa toàn bộ sản phẩm liên quan. Bạn có chắc muốn xóa không?')"
                  href="index.php?route=category/delete&id=<?= $category['id']?>"
                  class="p-2 bg-rose-500 text-white rounded-md">Remove</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

</body>

</html>