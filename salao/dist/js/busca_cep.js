function limpa_formulario_cep() {
            //Limpa valores do formul�rio de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");  
            document.getElementById('rua1').value=("");
            document.getElementById('bairro1').value=("");
            document.getElementById('cidade1').value=("");
            document.getElementById('estado1').value=("");           
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
            document.getElementById('rua1').value=(conteudo.logradouro);
            document.getElementById('bairro1').value=(conteudo.bairro);
            document.getElementById('cidade1').value=(conteudo.localidade);
            document.getElementById('estado1').value=(conteudo.uf);            
        } //end if.
        else {
            //CEP n�o Encontrado.
            limpa_formulario_cep();
            //alert("CEP n�o encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova vari�vel "cep" somente com d�gitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Express�o regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua1').value="...";
                document.getElementById('bairro1').value="...";
                document.getElementById('cidade1').value="...";
                document.getElementById('estado1').value="...";                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conte�do.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep � inv�lido.
                limpa_formulario_cep();
                alert("Formato de CEP inv�lido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formul�rio.
            limpa_formulario_cep();
        }
    };
