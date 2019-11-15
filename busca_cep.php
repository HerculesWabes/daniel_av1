<html>
    <head>
    <title> Webservice ConsultaCEP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        
        <style>
            
          /* formulário configuração */

            #cep{
                background-color:white;

                
            }
            #logradouro{
                background-color:white;

                
            }
            #bairro{
                background-color:white;

                
            }
            #uf{
                background-color:white;
            }
            
            .bt{
                background-color:#A9D0F5;
            }
            
            
          /* logo configuração */
  
    .logop{
        width: 90%;
    }
            
           /* navbar configuração */

            
    .navbar-darck{
        background-color:#0B173B;
        box-shadow: 0 2px 3px -1px rgba(0,0,0,0.06), 0 4px 5px 0 rgba(0,0,0,0.06), 0 1px 10px 0 rgba(0,0,0,0.08);
    }
    .margin-top{
        margin-top: 40px;
    }
    .center-itens{
        display: flex;
    justify-content: center;
    }
   
    </style>
        

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('logradouro').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('logradouro').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('uf').value=(conteudo.uf);
          
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('logradouro').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    </head>

    <body>
        
        <nav class="navbar navbar-expand-lg navbar-darck ">
             <a class="navbar-brand"  href="#"><img src="../imagem/logo.png" class="logop"/></a> 
         </nav>
        
        
        
        
        
    <!-- Inicio do formulario -->
      <form method="get" action="gravar.php">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="20" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Logradouro:
        <input name="logradouro" type="text" id="logradouro" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
          <label>UF:
        <input name="uf" type="text" id="uf" size="10" /></label><br />
       
      
          <input type="submit" value="Gravar CEP" class="bt">
      </form>
    </body>

    </html>