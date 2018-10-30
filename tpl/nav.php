<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">JavaScript</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <form class="navbar-form navbar-right" role="form">
        <div class="form-group">
          <input type="text" placeholder="E-mail" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Пароль" class="form-control">
        </div>
        <button type="submit" onclick="clickReg()" class="btn btn-success">Регистрация</button>
      </form>
    </div>
  </div>
</nav>

<script type="text/javascript">
  function clickReg() {
    alert("Лучше этого не делать на непроверенных сайтах, ведь Ваш пароль может попасть в руки мошенников");
  }
</script>>