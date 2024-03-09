<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
        <title>Login House of Sanctuary</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('assets/style/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        @yield('style')
    </head>

    <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
        @yield('content')
        @if ($errors->any())
            <div class="absolute top-5 right-5 z-50">
                <div class="flex flex-col gap-3">
                @foreach ($errors->all() as $error)
                    <span class="bg-red-600 text-base text-center text-white px-10 py-2 max-w-96 min-w-72 min-h-10 items-center rounded-md overflow-hidden messages">
                        {{ $error }}
                    </span>
                @endforeach
                </div>
            </div>
        @endif
    </body>

    <script>
        (function() {
            const messages = document.getElementsByClassName('messages');

            Array.prototype.forEach.call(messages, (msg, index) => {
                setTimeout(() => {
                    msg.classList.add('hidden');
                }, (2000 * (index + 1)))
            })
        })();
    </script>
</html>
