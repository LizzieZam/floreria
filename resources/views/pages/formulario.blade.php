@extends('templates.layout')
@section('title')
Prueba
@endsection
@section('script')
<script>
     $(document).ready(function(){
       $("#submit").click(function(){
      $("#form").fadeOut("slow");
         $.post("https://localhost:8000/api/login",$("#form").serialize()).done(function(data){
        console.log(data);
        $("#listado").html(data);
        $("#listado").show();
        $("#listado").fadeIn();

      }).fail(function(){
        $("#msg").html("Tuvimos una complicacion al ingresar tu dato, intenta nuevamente");
        $("#form").fadeIn("slow");
      });
    });
        });

    
   
   
</script>

@endsection

@section('content')
    
    <div class="row">
        <div class="medium-12 large-12 columns">
        <form id="form">
      
            <div class="medium-4  columns">
              <label>Usuario</label>
              <input name="login" type="text" id="login" placeholder="Nombres">
            </div><br/>
            <div class="medium-4  columns">
              <label>Contraseña</label>
              <input name="password" type="password" id="password">
            </div><br/>
           
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="medium-12  columns">
              <input value="Ingresar" class="button success hollow" id="submit"type="submit" disabled>
            </div>
            
          
          </form>
        </div>
      </div>
      <div class="row" id="listado" hidden>

      </div>
@endsection
