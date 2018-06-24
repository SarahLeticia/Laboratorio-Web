<!DOCTYPE html>
<html  lang="en">
<head>

  <title> Editor </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

</body>
</html>

<!-- Estilos do editor -->
<link rel="stylesheet" href="css/prism.css">
<link rel="stylesheet" href="css/estilo.css">

<iframe id="preview"></iframe>

<div class="editor">
  
  <textarea id="html" class="language-html">

    <h1>Hello! Isso funciona ?</h1>

  </textarea>

  <textarea id="css" class="language-css">
    body {
  align-items: center;
  background: #CD5C5C;
  display: flex;
  justify-content: center;
}

h1 {
  color: white;
  font-size: 70px;
}

span {
  color: red;
  font-size: 80px;
}
  </textarea>
  <textarea id="js" class="language-js">
    
    var hello = document.querySelector('h1');

hello.innerHTML += ' Sim, está funcionando! <span> JS! ❤</span>';

  </textarea>
</div>

<!-- Arquivos do editor e highlight -->
<script src="js/prism.js"></script>
<script src="js/prism-highlight.js"></script>
<script src="js/app.js"></script>
