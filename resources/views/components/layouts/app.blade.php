<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script> --}}

    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    {{ $slot }}


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script>
        window.addEventListener("closeModal", () => {
            const myModal = document.getElementById("exampleModal");
            const modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
        });

        window.addEventListener("showModal", (e) => {
            const myShowModal = document.getElementById("showModal");
            const showModal = bootstrap.Modal.getOrCreateInstance(myShowModal);
            showModal.show();
        });

        window.addEventListener("showToast", (e) => {
            const toastLiveExample = document.getElementById('liveToast')
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
            toastBootstrap.show()
            toastLiveExample.addEventListener('shown.bs.toast', () => {
                console.log('yes');
            })
        });

        window.addEventListener("showEditModal", (e) => {
            const myShowEditModal = document.getElementById("exampleModal");
            const showEditModal = bootstrap.Modal.getOrCreateInstance(myShowEditModal);
            showEditModal.show();
        });
    </script>
</body>

</html>
