<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
{{ $slot }}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoZz1HIcje39Wm4jDKdf19U8gI4ddQ3Dyf+e1Hc7+4dKNVd"
        crossorigin="anonymous"></script>

@livewireScripts

<script>
    window.addEventListener("closeModal", () => {
        const myModal = document.getElementById("exampleModal");
        const modal = bootstrap.Modal.getInstance(myModal);
        modal?.hide();
    });

    window.addEventListener("showModal", (e) => {
        const myShowModal = document.getElementById("showModal");
        const showModal = bootstrap.Modal.getOrCreateInstance(myShowModal);
        showModal.show();
    });

    window.addEventListener("showToast", (e) => {
        console.log('showToast event fired');
        const toastLiveExample = document.getElementById('liveToast');
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        toastBootstrap.show();
        toastLiveExample.addEventListener('shown.bs.toast', () => {
            console.log('yes');
        });
    });
</script>
</body>
</html>
