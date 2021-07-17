<div class="wrapper">
  <form class="login" action="/postlogin" method="POST">
    <p class="title">Masuk</p>
    {{csrf_field()}}
    <input name="email" type="email" placeholder="email" autofocus/>
    <i class="email"></i>
    <input name="password" type="password" placeholder="password" />
    <i class="password"></i>
    <a href="/lupapassword">Lupa Password?</a>
    <button>
      <i class="spinner"></i>
      <span class="state">Login</span>
    </button>
  </form>
  </p>
</div>
