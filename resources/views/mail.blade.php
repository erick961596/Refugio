@php ($accion = $_POST['accion'])

@if ($accion === "1")
Name: {{ $name }}
E-mail: {{ $email }}
Message: {{ $bodyMessage }}
@elseif ($accion === "2")
Name: {{ $name }}
E-mail: {{ $email }}
Phone: {{ $phone }}
Pet: {{ $mascota }}
Message: {{ $bodyMessage }}
@else
    Error al enviar la información
@endif