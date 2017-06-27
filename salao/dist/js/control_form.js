   function formatar(mascara, documento){
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i)
  
        if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
        }
      }

      /*function PermiteNumeros()
      {
        var tecla = window.event.keyCode;
        tecla     = String.fromCharCode(tecla);
        alert(tecla);
        if(!((tecla >= "0") && (tecla <= "9")))
        {
          alert("Teste");
          window.event.keyCode = 0;
          alert(window.event.keyCode);
        }
      }
*/