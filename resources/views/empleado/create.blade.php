Formulario de creación de empleado

<form action="{{url('/empleado')}}" method="POST" enctype="multipart/form-data">
    <!-- llave de seguridad para que se sepa que el formulario está viniendo del mismo sistema-->
    @csrf
    <!--En esta secciones toy incluyendo el contenido del archivo form.blade.php para reutilizar el codigo en create y edit-->
    @include('empleado.form');
</form>