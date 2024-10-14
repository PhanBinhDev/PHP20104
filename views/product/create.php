<!DOCTYPE html>
<html>

<head>
  <title>Create Product</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
  <div class="bg-white border border-2 rounded-lg shadow relative m-10 max-w-4xl m-auto mt-4">

    <div class="flex items-start justify-between p-5 border-b rounded-t">
      <h3 class="text-xl font-semibold">
        Create product
      </h3>
    </div>

    <form method="POST" enctype="multipart/form-data">
      <div class="p-6 space-y-6">
        <div class="grid grid-cols-4 gap-6">
          <div class="col-span-4">
            <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Product Name</label>
            <input type="text" name="name" id="name" required
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
              placeholder="Apple Imac 27”">
          </div>
          <div class="col-span-4">
            <label for="image" class="text-sm font-medium text-gray-900 block mb-2">Brand</label>
            <input type="file" name="image" id="image" required
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
          </div>
          <div class="col-span-4">
            <label for="image" class="text-sm font-medium text-gray-900 block mb-2">Category</label>
            <select name="category_id" id="category_id" required
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
              <option value="">Select Category</option>
              <?php foreach ($categories as $category) :?>
              <option value="<?= $category['id']?>"><?= $category['name']?></option>
              <?php endforeach;?>
            </select>
          </div>
          <div class="col-span-4">
            <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Price</label>
            <input type="number" name="price" id="price" required
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
              placeholder="$2300">
          </div>
          <div class="col-span-full">
            <label for="description" class="text-sm font-medium text-gray-900 block mb-2">Product Details</label>
            <textarea id="description" rows="6" name="description"
              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"
              placeholder="Details"></textarea>
          </div>
        </div>
      </div>

      <div class="p-6 border-t border-gray-200 rounded-b flex justify-between">
        <a href="index.php?route=dashboard">Back to Dashboard</a>
        <button name="create_product"
          class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
          type="submit">Create</button>
      </div>
    </form>

  </div>
</body>

</html>