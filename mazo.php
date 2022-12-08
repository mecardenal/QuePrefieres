
<!DOCTYPE html>
<html>
<head>
  <style>
    /* Estilos para la carta */
    body
    {
    font-family: Source Sans Pro;
    }

    .letter {
      width: 500px;
      height: 300px;
      background-color: #eee;
      background-image: url("happyRic.jpg");
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    /* Estilos para los bloques de texto */
    .text-block {
      margin-bottom: 10px;
      padding: 10px;
      background-color: #fff;
      border: 1px solid #ccc;
    }

    /* Estilos para el texto de la pregunta */
    .question {
      font-size: 18px;
      font-weight: bold;
      text-align:center;
    }

    /* Estilos para el texto de las respuestas */
    .answer {
      font-size: 16px;
    }

    #otraPregunta {
      background-color: yellow;
      padding: 15px;
      float:left;
    }
  </style>

 
</head>
<body>


  <div class="letter">
    <div class="text-block question" id="pregunta">
      ¿Qué prefieres?
    </div>
    <div class="text-block answer" id="respuesta-1">
      A) Rojo
    </div>
    <div class="text-block answer" id="respuesta-2">
      B) Azul
    </div> 
      <div id="otraPregunta">
    Otra Pregunta
  </div> 
  </div>


</body>

<!-- Cargamos jQuery y nuestro código JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  // Función que genera un array de preguntas y respuestas
  function generarPreguntas() {
    let preguntas = [
      {
       // pregunta: "¿Cuál es el nombre del presidente de España?",
        respuestas: ["Pedro Sánchez", "Mariano Rajoy"]
      },
      {
        respuestas: ["Caca en la espalda", "Pis en la boca"]
      },
       {
        respuestas: ["Saber cuándo vas a morir", "Saber cómo vas a morir"]
      },
       {
        respuestas: ["Ser mudo", "Ser sordo"]
      },
       {
        respuestas: ["Follarte a una cabra y que nadie lo sepa", "No follarte a una cabra pero que todo el mundo piense que si"]
      },
       {
        respuestas: ["Ser invisible", "Volar"]
      },
      // ...
    ];
    return preguntas;
  }


    // Generamos el array de preguntas y respuestas
    let preguntas = generarPreguntas();


  function actualizaPregunta(){
    // Función que devuelve un elemento aleatorio de un array
    function obtenerElementoAleatorio(array) {
      let indiceAleatorio = Math.floor(Math.random() * array.length);
      return array[indiceAleatorio];
    }



    // Obtenemos un elemento aleatorio del array
    let preguntaAleatoria = obtenerElementoAleatorio(preguntas);

    // Mostramos la pregunta y las respuestas en la página HTML
  //  $("#pregunta").text(preguntaAleatoria.pregunta);
    $("#respuesta-1").text(preguntaAleatoria.respuestas[0]);
    $("#respuesta-2").text(preguntaAleatoria.respuestas[1]);
  }

$(document).ready(function(){
  $("#otraPregunta").on("click",function(){
    actualizaPregunta();
  });
});

</script>


</html>

