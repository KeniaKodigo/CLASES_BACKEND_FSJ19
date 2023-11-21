<?php

#envio notificacion
class Notificador{

    public function enviar_notificacion($tipo, $mensaje, $destinatario){
        switch($tipo){
            case "correo":
                //code..
                break;
            
            case "SMS":
                //code..
                break;
            
            case "Slack":
                //code..

            case "WhatsApp":
                //code..

            case "Facebook":
                //code..
            
            default:
                //code..
        }
    }
}

#aplicando el principio open closed (clase abstract, interfaz)

abstract class TipoRedesSociales{
    protected $mensaje;
    protected $destinario;

    //metodo obligatorio para las clases hijas
    abstract function enviar_notificacion();
}

class Slack extends TipoRedesSociales{

    public function enviar_notificacion()
    {
        //code..
    }

    //nuevo metodo
}

class SMS extends TipoRedesSociales{

    public function enviar_notificacion()
    {
        //code..
    }
}

class Correo extends TipoRedesSociales{

    public function enviar_notificacion()
    {
        //code..
    }
}

class Discord extends TipoRedesSociales{

    public function enviar_notificacion()
    {
        //code..
    }
}
?>