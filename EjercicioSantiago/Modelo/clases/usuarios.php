<?php
class Usuarios{
	
	private $usuario;
    private $correo;
	private $contraseña;
	private $avatar;

    public function __construct($usuario, $correo, $contraseña, $avatar)
    {
        $this->usuario = $usuario;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->avatar = $avatar;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    public function getContraseña()
    {
        return $this->contraseña;
    }
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }
}
?>