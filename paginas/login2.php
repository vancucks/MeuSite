<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login Box Concept</title>
  <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="plugins/login002/style.css" />
</head>
<body>
<!-- partial:index.partial.html -->
<div class='brand'>
  <a href='https://www.jamiecoulter.co.uk' target='_blank'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/logo.png'>
  </a>
</div>
<div class='login'>
  <div class='login_title'>
    <span>Faça login na sua conta</span>
  </div>
  <div class='login_fields'>
    <div class='login_fields__user'>
      <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
      </div>
      <input placeholder='Usuário' type='text'>
        <div class='validation'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
        </div>
      </input>
    </div>
    <div class='login_fields__password'>
      <div class='icon'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
      </div>
      <input placeholder='Senha' type='password'>
      <div class='validation'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
      </div>
    </div>
    <div class='login_fields__submit'>
      <input type='submit' value='Conectar'>
      <div class='forgot'>
        <a href='#'>Senha esquecida?</a>
      </div>
      <div class='forgot'>
        <a href='http://localhost/site/?pg=inicio'>Voltar</a>
      </div>
    </div>
  </div>
  <div class='success'>
    <h2>Authentication Success</h2>
    <p>Welcome back</p>
  </div>
  <div class='disclaimer'>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper laoreet placerat. Nullam semper auctor justo, rutrum posuere odio vulputate nec.</p>
  </div>
</div>
<div class='authent'>
  <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
  <p>Authenticating...</p>
</div>
<div class='love'>
  <p>Made with <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/love_copy.png" /> by <a href='https://www.jamiecoulter.co.uk' target='_blank'> Jcoulterdesign </a></p>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="./script.js"></script>
<script src="plugins/login002/script.js"</script>

</body>
</html>
