<?php

class RedirectController extends Controller
{

	public function index()
	{
		// validamos si existe una sesión
		if( $this->auth->check() ){
			// validar el rol del usuario en sesion
			switch ( $this->auth->user->__get( 'role_id' ) ) {
				case '1':
					// Redirecciona a la vista del Superadministrador
					$this->redirect('Admin');
					break;
				case '2':
					// Redirecciona a la vista del administrador
					$this->redirect('Admin');
					break;
				case '3':
					// Redirecciona a la vista del cliente
					$this->redirect('Client');
					break;
				default:
					// Redirecciona a la vista principal
					$this->redirect('/');
					break;
			}

		}
	}
}
