<?php
interface Notificacion{
    public function EnviarNotificacion();
}
class Urgente implements Notificacion{
    public function EnviarNotificacion(){
        return "Esto es un mensaje urgente";
    }
}
class Rercordatorio implements Notificacion{
    public function EnviarNotificacion(){
        return "Recordatorio para completar la asignación";
    }
}
class Reunion implements Notificacion{
    public function EnviarNotificacion(){
        return "Tiene una reunión pendiente";
    }
}
class DecoratorNotificacion implements Notificacion{
    protected $propiedad_notificacion;
    public function __construct(Notificacion $notificacion)
    {
        $this->propiedad_notificacion = $notificacion;
    }
    public function EnviarNotificacion()
    {
        return $this->propiedad_notificacion->EnviarNotificacion();
    }
}
class Emoji extends DecoratorNotificacion{
    public function EnviarNotificacion(){
        return parent::EnviarNotificacion() . " con emojis";
    }
}
class Alarma extends DecoratorNotificacion{
    public function EnviarNotificacion(){
        return parent::EnviarNotificacion() . " con un sonido de alarma para avisar al receptor";
    }
}
class Mensaje extends DecoratorNotificacion{
    public function EnviarNotificacion(){
        return parent::EnviarNotificacion() . " con un mensaje de texto o correo electrónico enviado al empleado";
    }
}
function CrearNotificacion(Notificacion $notificacion){
    echo "Se le enviará una notificación: " . $notificacion->EnviarNotificacion() . "<br><br>";
}
$notificacion_1 = new Urgente();
$notificacion_1 = new Emoji($notificacion_1);
$notificacion_1 = new Alarma($notificacion_1);
$notificacion_1 = new Mensaje($notificacion_1);
CrearNotificacion($notificacion_1);
$notificacion_2 = new Rercordatorio();
$notificacion_2 = new Emoji($notificacion_2);
$notificacion_2 = new Alarma($notificacion_2);
$notificacion_2 = new Mensaje($notificacion_2);
CrearNotificacion($notificacion_2);