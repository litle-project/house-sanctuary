<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/hos.ico') }}" />
      <link rel="icon" type="image/png" href="{{ asset('assets/images/hos.ico') }}" />
      <title>House Sanctuary Dashboard</title>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link href="{{ asset('assets/style/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />
      <script src="https://cdn.tailwindcss.com"></script>
      @yield('style')
    </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-100 text-slate-500">
    @include('components.dashboard.menu')

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <div class="w-full px-6 py-6 mx-auto" id="content">
        @include('components.dashboard.breadcrumb')
        @yield('content')
        @include('components.dashboard.footer')
      </div>
    </main>
  </body>
  <script src="{{ asset('assets/script/menu.js') }}"></script>
  @yield('script')
</html>
