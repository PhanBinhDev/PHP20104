<!DOCTYPE html>
<html>

<head>
  <title>Edit Category</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
  <div class="bg-white border border-2 rounded-lg shadow relative m-10 max-w-4xl m-auto mt-4">

    <div class="flex items-start justify-between p-5 border-b rounded-t">
      <h3 class="text-xl font-semibold">
        Edit Category
      </h3>
    </div>

    <form method="POST" enctype="multipart/form-data">
      <div class="p-6 space-y-6">
        <div class="grid grid-cols-4 gap-6">
          <div class="col-span-4">
            <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Category Name</label>
            <input type="text" name="name" id="name" required value="<?= $category['name']?>"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
              placeholder="Điện thoại, Laptop...">
          </div>
          <div class="col-span-full">
            <label for="description" class="text-sm font-medium text-gray-900 block mb-2">Category Description</label>
            <textarea id="description" rows="6" name="description"
              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"
              placeholder="Details"><?= $category['description']?></textarea>
          </div>
        </div>
      </div>

      <div class="p-6 border-t border-gray-200 rounded-b flex justify-between">
        <a href="index.php?route=dashboard">Back to Dashboard</a>
        <button name="edit_category"
          class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
          type="submit">Update</button>
      </div>
    </form>

  </div>
</body>

</html>