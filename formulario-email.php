<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Contato</title>
    <link rel="stylesheet" href="style-form.css" />
  </head>
  <body>
    <h1>Formulario de Contato</h1>
    <form
      action="https://formsubmit.co/deoliveirarodriguesp412@gmail.com"
      method="POST"
      class="form"
    >
      <label for="name">Nome</label>
      <input type="text" name="name" id="name" required />
      <label for="email">E-mail</label>
      <input type="email" name="email" id="email" required />
      <label for="message">Mensagem</label>
      <textarea
        name="message"
        id="message"
        placeholder="Escreva aqui"
      ></textarea>
      <input
        type="hidden"
        name="_next"
        value="http://localhost/email-de-contato/obrigado.php"
      />
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>
