<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ingresar</h5>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('login')}}" method="POST">
          @csrf
          <div class="form-group">
            <input id="email-modal" type="text" placeholder="Correo electrónico" class="form-control" name="correo" required>
            @error('email-modal')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input id="password-modal" type="password" placeholder="Contraseña" class="form-control" name="password" required>
            @error('password-modal')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <p class="text-center">
            <button class="btn btn-primary"><i class="fa fa-sign-in"></i>Ingresar</button>
          </p>
        </form>
        <p class="text-center text-muted">¿Aún no has creado tu cuenta?</p>
        <p class="text-center text-muted">
          <a href="{{route('register')}}">
            <strong>¡Regístrate ahora!</strong>
          </a> Es rápido y fácil y podrás tener acceso a descuentos especiales y mucho más.
        </p>
      </div>
    </div>
  </div>
</div>