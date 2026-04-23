
<?php
 include('../includes/header.php');
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200">

<div class="flex h-screen">

<!-- SIDEBAR -->
<div class="w-64 bg-gray-900 text-white flex flex-col p-6">

    <h1 class="text-2xl font-bold mb-10 text-blue-400">
        EduSync
    </h1>

    <nav class="space-y-3">

        <a href="#" class="flex items-center gap-3 bg-gray-800 p-3 rounded-lg">
            <i class="fa-solid fa-chart-line text-blue-400"></i> Dashboard
        </a>

        <a href="#" class="flex items-center gap-3 hover:bg-gray-800 p-3 rounded-lg transition">
            <i class="fa-solid fa-user"></i> Users
        </a>

        <a href="#" class="flex items-center gap-3 hover:bg-gray-800 p-3 rounded-lg transition">
            <i class="fa-solid fa-gear"></i> Settings
        </a>

        <a href="#" class="flex items-center gap-3 hover:bg-red-600 p-3 rounded-lg mt-10 transition">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>

    </nav>

</div>

<!-- MAIN -->
<div class="flex-1 flex flex-col">

    <!-- TOP BAR -->
    <div class="bg-white/70 backdrop-blur-md shadow p-4 flex justify-between items-center">

        <h2 class="text-xl font-semibold">Dashboard</h2>

        <div class="flex items-center gap-4">

            <!-- SEARCH -->
            <div class="relative">
                <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-400">
                <i class="fa-solid fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>

            <i class="fa-solid fa-bell text-gray-600 cursor-pointer hover:text-blue-500"></i>

            <img src="https://i.pravatar.cc/40" class="rounded-full border-2 border-blue-400 cursor-pointer">

        </div>

    </div>

    <!-- CONTENT -->
    <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- CARD -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1 cursor-pointer">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500">Users</p>
                    <h3 class="text-3xl font-bold">120</h3>
                </div>
                <div class="bg-blue-100 px-5 py-4 rounded-full">
                    <i class="fa-solid fa-user text-blue-500 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1 cursor-pointer">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500">Messages</p>
                    <h3 class="text-3xl font-bold">54</h3>
                </div>
                <div class="bg-green-100 px-5 py-4 rounded-full">
                    <i class="fa-solid fa-envelope text-green-500 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1 cursor-pointer">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-gray-500">Revenue</p>
                    <h3 class="text-3xl font-bold">$2,450</h3>
                </div>
                <div class="bg-yellow-100 px-5 py-4 rounded-full">
                    <i class="fa-solid fa-sack-dollar text-yellow-500 text-xl"></i>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

</body>
</html>