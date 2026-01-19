@extends('layouts.app')

@section('title', 'dashboard')
@section('content')
    <!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind Dashboard</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Material Icons -->
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded"
    rel="stylesheet"
  />

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#695CFE",
            bgPrimary: "#f9fafb",
            bgSecondary: "#ECECFD",
            borderHr: "#E2E8F0",
          },
        },
      },
    };
  </script>

  <style>
    /* Sidebar collapse */
    .sidebar.collapsed {
      width: 90px;
    }
    .sidebar.collapsed .menu-label,
    .sidebar.collapsed .theme-text,
    .sidebar.collapsed .sidebar-logo {
      opacity: 0;
      pointer-events: none;
    }

    /* Mobile overlay */
    body.sidebar-open::before {
      content: "";
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.6);
      z-index: 20;
    }
  </style>
</head>

<body class="bg-bgPrimary dark:bg-gray-900 transition">

<!-- Mobile Navbar -->
<nav class="md:hidden sticky top-0 z-30 bg-bgPrimary dark:bg-gray-900 border-b border-borderHr p-4">
  <button class="sidebar-toggle w-10 h-10 flex items-center justify-center rounded-lg bg-bgSecondary">
    <span class="material-symbols-rounded">menu</span>
  </button>
</nav>

<div class="flex min-h-screen">

  <!-- Sidebar -->
  <aside class="sidebar w-[270px] bg-white dark:bg-gray-800 border-r border-borderHr flex flex-col transition-all duration-300 fixed md:sticky top-0 h-screen z-30">

    <!-- Header -->
    <div class="flex items-center justify-between p-5 border-b border-borderHr relative">
      <img src="logo.png" class="sidebar-logo w-12 h-12 rounded-full" />
      <button class="sidebar-toggle absolute right-4 w-10 h-10 flex items-center justify-center rounded-lg bg-bgSecondary">
        <span class="material-symbols-rounded text-2xl">chevron_left</span>
      </button>
    </div>

    <!-- Content -->
    <div class="flex-1 p-4 space-y-4 overflow-y-auto">

      <!-- Search -->
      <div class="flex items-center gap-3 bg-bgSecondary rounded-lg px-4 h-12">
        <span class="material-symbols-rounded text-gray-400">search</span>
        <input type="search" placeholder="Search..." class="bg-transparent outline-none w-full" />
      </div>

      <!-- Menu -->
      <ul class="space-y-1">
        <li>
          <a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary text-white">
            <span class="material-symbols-rounded">dashboard</span>
            <span class="menu-label">Dashboard</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-primary hover:text-white transition">
            <span class="material-symbols-rounded">insert_chart</span>
            <span class="menu-label">Analytics</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-primary hover:text-white transition">
            <span class="material-symbols-rounded">notifications</span>
            <span class="menu-label">Notifications</span>
          </a>
        </li>
        <li>
          <a class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-primary hover:text-white transition">
            <span class="material-symbols-rounded">settings</span>
            <span class="menu-label">Settings</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- Footer -->
    <div class="p-4 border-t border-borderHr">
      <button class="theme-toggle flex items-center gap-3 w-full h-12 px-4 rounded-lg bg-bgSecondary">
        <span class="material-symbols-rounded">dark_mode</span>
        <span class="theme-text">Dark Mode</span>
        <div class="ml-auto w-12 h-6 bg-gray-300 dark:bg-primary rounded-full relative transition">
          <div class="w-4 h-4 bg-white rounded-full absolute top-1 left-1 dark:translate-x-6 transition"></div>
        </div>
      </button>
    </div>

  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8 text-gray-800 dark:text-gray-100 md:ml-[270px] transition-all">
    <h1 class="text-2xl font-semibold mb-6">Dashboard Overview</h1>
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
      Welcome to your dashboard! Everything is in a single HTML file using Tailwind CSS.
    </div>
  </main>

</div>

<script>
  // Sidebar toggle
  document.querySelectorAll(".sidebar-toggle").forEach(btn => {
    btn.addEventListener("click", () => {
      document.querySelector(".sidebar").classList.toggle("collapsed");
      document.body.classList.toggle("sidebar-open");
    });
  });

  // Dark mode toggle
  document.querySelector(".theme-toggle").addEventListener("click", () => {
    document.documentElement.classList.toggle("dark");
  });
</script>

</body>
</html>


@endsection