<?php
session_start();
include("../scripts/database.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lovable Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 font-sans">

  <div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md rounded-r-2xl p-5">
      <h1 class="text-xl font-bold text-slate-700 mb-8">🌸 Dashboard</h1>

      <nav class="space-y-3">
        <a href="#" class="flex items-center gap-3 p-3 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
          🏠 <span>Home</span>
        </a>
        <a href="#" class="flex items-center gap-3 p-3 rounded-xl text-slate-600 hover:bg-slate-100 transition">
          📊 <span>Analytics</span>
        </a>
        <a href="#" class="flex items-center gap-3 p-3 rounded-xl text-slate-600 hover:bg-slate-100 transition">
          📁 <span>Projects</span>
        </a>
        <a href="#" class="flex items-center gap-3 p-3 rounded-xl text-slate-600 hover:bg-slate-100 transition">
          ⚙️ <span>Settings</span>
        </a>
        <form action="../scripts/logout.php" method="post">
            
            <button name="logout"  class="flex items-center gap-3 p-3 rounded-xl text-slate-600 hover:bg-slate-100 transition">
           ⚙️ <span>logout</span>
            </button>

        </form>
      </nav>
    </aside>



    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-y-auto">

      <!-- Header -->
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-slate-700">Welcome back 👋<?php
$email = $_SESSION['login_email'];
$sql = "SELECT firstname from talamids where email = '$email'";

$result = mysqli_query($conn , $sql);

$row = mysqli_fetch_assoc($result);


echo $row['firstname'];


mysqli_close($conn); 





?></h2>

        <div class="flex items-center gap-4">
          <input type="text" placeholder="Search..."
            class="px-4 py-2 rounded-xl bg-white shadow-sm outline-none focus:ring-2 focus:ring-indigo-200"/>

          <div class="w-10 h-10 bg-indigo-200 rounded-full flex items-center justify-center">
            😊
          </div>
        </div>
      </div>

      <!-- Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

        <div class="bg-white p-5 rounded-2xl shadow-sm hover:shadow-md transition">
          <p class="text-slate-500 text-sm">Revenue</p>
          <h3 class="text-2xl font-bold text-slate-700 mt-2">$12,340</h3>
          <span class="text-green-500 text-sm">+12%</span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm hover:shadow-md transition">
          <p class="text-slate-500 text-sm">Users</p>
          <h3 class="text-2xl font-bold text-slate-700 mt-2">1,245</h3>
          <span class="text-green-500 text-sm">+8%</span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm hover:shadow-md transition">
          <p class="text-slate-500 text-sm">Sales</p>
          <h3 class="text-2xl font-bold text-slate-700 mt-2">320</h3>
          <span class="text-red-400 text-sm">-3%</span>
        </div>

      </div>

      <!-- Chart Placeholder -->
      <div class="bg-white p-6 rounded-2xl shadow-sm mb-6">
        <h3 class="text-lg font-semibold text-slate-700 mb-4">Overview</h3>

        <div class="h-64 flex items-center justify-center text-slate-400">
          📈 Chart goes here
        </div>
      </div>

      <!-- Table -->
      <div class="bg-white p-6 rounded-2xl shadow-sm">
        <h3 class="text-lg font-semibold text-slate-700 mb-4">Recent Activity</h3>

        <table class="w-full text-left">
          <thead>
            <tr class="text-slate-500 text-sm">
              <th class="pb-3">Name</th>
              <th class="pb-3">Status</th>
              <th class="pb-3">Date</th>
            </tr>
          </thead>

          <tbody class="text-slate-600">
            <tr class="border-t hover:bg-slate-50 transition">
              <td class="py-3">Project Alpha</td>
              <td class="py-3 text-green-500">Completed</td>
              <td class="py-3">Apr 22</td>
            </tr>
            <tr class="border-t hover:bg-slate-50 transition">
              <td class="py-3">Project Beta</td>
              <td class="py-3 text-yellow-500">Pending</td>
              <td class="py-3">Apr 20</td>
            </tr>
            <tr class="border-t hover:bg-slate-50 transition">
              <td class="py-3">Project Gamma</td>
              <td class="py-3 text-red-400">Delayed</td>
              <td class="py-3">Apr 18</td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  </div>

</body>
</html>