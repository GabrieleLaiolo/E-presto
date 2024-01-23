<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-presto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-main-navbar></x-main-navbar>
    
    <div class="resolve-main-navbar"></div>
    <x-navbar></x-navbar>
    
    <x-profile-img-modal></x-profile-img-modal>
    
    
    
    <div class="min-vh-100">
        {{$slot}} 
    </div>  
    
    
    
    
    
    @auth
    <x-form-work-us></x-form-work-us> 
    @endauth
    
    <x-footer></x-footer> 
    
    
    
    
    
</body>
</html>