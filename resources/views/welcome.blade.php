<!DOCTYPE html>
<html lang="en">

<head>
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>
    @php
    $courses = [
        ['title' => 'course 1', 'desc' => 'des course1', 'price' => 231431, 'img' =>'https://www.google.com/imgres?q=minimal%20gold&imgurl=https%3A%2F%2Fburstofarabia.com%2Fcdn%2Fshop%2Ffiles%2Fsingle-initial-necklace-apparel-accessories-jewelry-necklaces-620_533x.webp%3Fv%3D1705391126&imgrefurl=https%3A%2F%2Fburstofarabia.com%2Fcollections%2Fminimalist-gold-jewelry%3Fsrsltid%3DAfmBOoruvc9I-Ao2Qj1Wt0jhILIlF9rX10XvRJzylXIoM_uzwcC5IIGw&docid=unCw9xuuHoEOqM&tbnid=vGufCr8-HbqA5M&vet=12ahUKEwiqkpDKk-SOAxWr8LsIHSGhIqsQM3oECCIQAA..i&w=533&h=533&hcb=2&ved=2ahUKEwiqkpDKk-SOAxWr8LsIHSGhIqsQM3oECCIQAA'],
        ['title' => 'course 2', 'desc' => 'des course2', 'price' => 231432, 'img'=> 'https://www.google.com/imgres?q=minimal%20gold&imgurl=https%3A%2F%2Fi.etsystatic.com%2F7449018%2Fr%2Fil%2F444a42%2F2654753762%2Fil_570xN.2654753762_e1l4.jpg&imgrefurl=https%3A%2F%2Fwww.etsy.com%2Flisting%2F223280484%2Fgold-necklace-with-sterling-silver-beads&docid=ubK4F4OwQG7DeM&tbnid=4KvI1bp-RuPV4M&vet=12ahUKEwiqkpDKk-SOAxWr8LsIHSGhIqsQM3oECB0QAA..i&w=570&h=570&hcb=2&ved=2ahUKEwiqkpDKk-SOAxWr8LsIHSGhIqsQM3oECB0QAA'],
        ['title' => 'course 3', 'desc' => 'des course3', 'price' => 231433, 'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fferkosfinejewelry.com%2Fproducts%2F14k-gold-3-stone-minimalist-diamond-ring%3Fsrsltid%3DAfmBOoofUXuI5QR8S3Z_ruSQtwYKOLzqWNlGwIEHlPIgTk4OQCwtwIiu&psig=AOvVaw0rTaOwmS8bSh1GTgGiYjyD&ust=1753950142522000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCMD0i-yt5o4DFQAAAAAdAAAAABAK'],
        ['title' => 'course 4', 'desc' => 'des course4', 'price' => 231434, 'img'=> 'https://www.google.com/imgres?q=minimal%20gold&imgurl=https%3A%2F%2Fvacier.com%2Fcdn%2Fshop%2Fproducts%2FGoldLifestyleShot-15.jpg%3Fv%3D1753360679%26width%3D1080&imgrefurl=https%3A%2F%2Fvacier.com%2Fproducts%2Fminimal-chain-necklace&docid=ZjJxYfmDL27AvM&tbnid=vuJPKDqOXbeX8M&vet=12ahUKEwiqkpDKk-SOAxWr8LsIHSGhIqsQM3oECGwQAA..i&w=1080&h=1440&hcb=2&ved=2ahUKEwiqkpDKk-SOAxWr8LsIHSGhIqsQM3oECGwQAA'],

]
    @endphp
<div class="container">
     <div class="row">
         @foreach ($courses as $course)
{{--             <livewire:show-courses :title="$course['title'] "--}}
             <livewire:show-courses :course="$course"/>
         @endforeach
     </div>
</div>
<h1>
    this is test
</h1>
@livewireScripts
</body>
</html>
