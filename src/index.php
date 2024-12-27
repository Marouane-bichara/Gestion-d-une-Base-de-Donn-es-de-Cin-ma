<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">


<div class="min-h-screen bg-gray-200 flex items-center justify-center">


  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8 space-y-6">


    <h2 class="text-3xl font-semibold text-center text-gray-800">Welcome Back!</h2>
    <p class="text-center text-gray-600">Please sign in to continue.</p>


    <form id="login-form" action="../src/server/register.php" method="POST" class="space-y-6">

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" id="email" name="email" required
          class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none">
      </div>


      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
          class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none">
      </div>


      <div class="flex justify-end">
        <a href="#" class="text-sm text-blue-600 hover:text-blue-500">Forgot Password?</a>
      </div>


      <div>
        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
          Sign In
        </button>
      </div>
    </form>


    <form id="register-form" action="../src/server/register.php" method="POST" class="space-y-6 hidden">

      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" id="name" name="nameRegister" required
          class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none">
      </div>


      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" id="email" name="emailRegister" required
          class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none">
      </div>


      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="passwordRegister" required
          class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none">
      </div>


      <div>
        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-passwordRegister" required
          class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 placeholder-gray-500 text-gray-900 focus:outline-none">
      </div>


      <div>
        <button type="submit" name="registeruser" id="buttonRegister"
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
          Sign Up
        </button>
      </div>
    </form>


    <div class="text-center">
      <p class="text-sm text-gray-600">
        <a href="#" id="toggle-link" onclick="toggleForm()" class="text-blue-600 hover:text-blue-500 font-semibold">Don't have an account? Sign Up</a>
      </p>
    </div>

  </div>
</div>


<script src="../src/scripts/register.js"></script>

</body>
</html>