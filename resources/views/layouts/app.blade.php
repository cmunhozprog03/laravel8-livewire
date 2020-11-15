<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de Laravel Livewire</title>
  @livewireStyles
</head>
<body>
  
  <div class="containet">

    {{ $slot }}
    
  </div>

  @livewireScripts
</body>
</html>