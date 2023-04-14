<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulario Up gravações</title>

    <style>
@media only screen and (max-width: 600px) {
  body {
    background: #f1f1f1;
  }
}

legend {
  font-size: 24px;
  font-weight: bold;
  color: white;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
  border: none;
  padding: 20px;
  background-color: #4CAF50;
  background-image: linear-gradient(to bottom, #4CAF50, #3E8E41);
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5);
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.2s ease-in-out;
}

legend:hover {
  background-color: #43A047;
}

fieldset {
  border: 2px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
  padding: 20px;
}
   /// teste css

        input {
            margin: 20px;
        }

        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(147, 59, 138, 1) 100%, rgba(0, 212, 255, 1) 100%);
            color: aliceblue;
            font-size: 22px;
            width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .button {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(223, 136, 12, 1) 100%, rgba(0, 212, 255, 1) 100%);
            width: 130px;
            height: 60px;
            font-size: 25px;
            color: aliceblue;

        }

        .btn {
            background-color: #d47a04;
            /* cor de fundo */
            border: none;
            /* sem borda */
            color: white;
            /* cor do texto */
            padding: 16px 32px;
            /* tamanho do botão */
            text-align: center;
            /* alinhamento do texto */
            text-decoration: none;
            /* sem sublinhado */
            display: inline-block;
            /* exibição em linha */
            font-size: 16px;
            /* tamanho do texto */
            margin: 4px 2px;
            /* margem */
            cursor: pointer;
            /* cursor em forma de mãozinha */
        }

        .btn {
            /* código do botão */
            transition-duration: 0.4s;
            /* duração da animação */
        }

        .btn:hover {
            background-color: white;
            /* cor de fundo ao passar o mouse */
            color: black;
            /* cor do texto ao passar o mouse */
        }

        .ripple-btn {
            background-color: #c1720a;
            /* cor de fundo */
            color: white;
            /* cor do texto */
            border: black;
            /* remove a borda padrão */
            padding: 12px 24px;
            /* espaçamento interno */
            border-radius: 4px;
            /* bordas arredondadas */
            position: relative;
            /* torna o elemento posicionado */
            overflow: hidden;
            /* oculta o conteúdo que extrapola as bordas */
            cursor: pointer;
        }

        .ripple-btn::after {
            content: "";
            /* cria um elemento pseudo-conteúdo */
            display: block;
            /* torna o elemento um bloco */
            position: absolute;
            /* o posiciona em relação ao elemento pai */
            width: 100%;
            /* tamanho do elemento igual ao do elemento pai */
            height: 100%;
            /* tamanho do elemento igual ao do elemento pai */
            top: 0;
            /* posiciona no topo */
            left: 0;
            /* posiciona na esquerda */
            pointer-events: none;
            /* não permite a interação do usuário com o elemento */
            background-color: rgba(139, 12, 126, 0.6);
            /* cor do efeito ripple */
            border-radius: 50%;
            /* bordas arredondadas para criar um círculo */
            transform: scale(0);
            /* começa com escala zero */
            transition: transform 0.3s ease-out;
            /* animação de transição */

        }

        .ripple-btn:hover::after,
        .ripple-btn:active::after {
            transform: scale(2);
            /* escala do efeito ripple */
        }
    </style>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <h1>Cadastro de Pedidos</h1>
    <p>Complete o formulário</p>
    </div>
    <form action="processa_formulario.php" method="post">
        <fieldset>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">

            </div>

            <div>
<br>
                <label for="empresa">Empresa:</label>
                <input type="text" name="empresa" id="empresa">
            </br>
            </div>

        </fieldset>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
<br>

        <div>
            <label for="tipo_personalizacao">Tipo de Personalização:</label>
            <select id="tipo_personalizacao" name="tipo_personalizacao">
                <option value="Plano"><strong>Silk Plano</strong></option>
                <option value="Silk Cilindrico">Silk Cilindrico</option>
                <option value="Transfer DTF">Transfer DTF</option>
                <option value="Transfer Cilindrico">Transfer Cilindrico</option>
                <option value="Transfer Vinilico">Transfer Vinilico</option>
                <option value="Digital UV">Digital UV</option>
                <option value="Banner">Banner</option>
                <option value="Adesivos e Etiquetas Resinadas">Adesivos e Etiquetas Resinadas</option>
                <option value="Laser CO2">Laser CO2</option>
                <option value="Laser Metal">Laser Metal</option>
                <option value="Sublimação">Sublimação</option>
            </select>
        </br>
        </div <div><label for="prazoDeEntrega">Prazo de Entrega:</label>
        <input type="date" id="prazoDeEntrega" name="prazoDeEntrega"><br></div>
        <div>
            <p>Informe a quantidade de peças a serem gravadas</p>

            <input id="id1" type="numero" required>

            <p>Atenção certifique-se sempre de mandar peças a mais para testes e possiveis perdas!</p>
        </div>

        </div>
    <div>
        <h1><strong>Selecione o seu vendedor</strong></h1>

        <form action="/action_page.php">
            <input type="checkbox" id="vendedor1" name="vendedor1" value="felipe">
            <label for="vendedor1"> <strong>Felipe</strong></label><br>
            <input type="checkbox" id="vendedor2" name="vendedor2" value="larissa">
            <label for="vendedor2"> <strong>Larissa</strong></label><br>
            <input type="checkbox" id="vendedor3" name="vendedor3" value="icaro">
            <label for="vendedor3"> <strong>Ícaro</strong></label><br>
            <input type="checkbox" id="vendedor4" name="vendedor4" value="thamara">
            <label for="vendedor4"> <strong>Thamara</strong></label><br>
            <input type="checkbox" id="vendedor5" name="vendedor5" value="Mayara">
            <label for="vendedor5"> <strong>Mayara</strong></label><br></br>
            <button class="ripple-btn">Enviar Formulário</button>
        </br>
        </form>
    </div>
    </form>
</body>

</html>
