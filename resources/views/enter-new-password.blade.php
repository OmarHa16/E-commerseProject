<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <h1 class="text-2xl font-semibold mb-4">Update Password</h1>
        <form>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-200" placeholder="New password" required>
            </div>
            <div class="mb-4">
                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                <input type="password" id="confirm-password" name="confirm-password" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-blue-200" placeholder="Confirm new password" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300">Update Password</button>
        </form>
        <p class="mt-4 text-sm text-gray-600">Recalled your old password? <a href="#" class="text-blue-500 hover:underline">Sign in</a></p>
    </div>
</body>
</html>
