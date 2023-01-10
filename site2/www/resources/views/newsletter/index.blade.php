<!doctype html>
<html lang="en" data-theme="night">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.1/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
<main class="flex justify-center min-h-screen items-center"><div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Subscribe</h2>
            <form action="{{ route("newsletter.subscribe") }}" method="post" class="space-y-4">
                @csrf
                <input name="name" type="text" placeholder="Name" class="block input input-bordered w-full max-w-xs" />
                <input name="email" type="text" placeholder="Email" class="block input input-bordered w-full max-w-xs" />
                <button type="submit" class="btn btn-block btn-primary">Subscribe</button>
            </form>
        </div>
    </div></main>
</body>
</html>
