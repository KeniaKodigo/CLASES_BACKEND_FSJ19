<?php

interface StrategyRedesSociales{
    public function enviarNotificacion($mensaje);
}

#creamos las estrategias (alternativas)
class Facebook implements StrategyRedesSociales{
    public function enviarNotificacion($mensaje)
    {
        return "Se ha enviado por via facebook: $mensaje";
    }
}

class Slack implements StrategyRedesSociales{
    public function enviarNotificacion($mensaje)
    {
        return "Se ha enviado por via slack: $mensaje";
    }
}

class WhatsApp implements StrategyRedesSociales{
    public function enviarNotificacion($mensaje)
    {
        return "Se ha enviado por via WhatsApp: $mensaje";
    }
}

#clase donde elegimos la estrategia
class EnviarNotificacion{
    private StrategyRedesSociales $red_social;

    //set, get
    public function setNotificacion(StrategyRedesSociales $estrategia){
        $this->red_social = $estrategia;
    }

    public function getNotificacion($mensaje){
        return $this->red_social->enviarNotificacion($mensaje);
    }
}

$notificacion = new EnviarNotificacion();
$notificacion->setNotificacion(new Slack);
echo $notificacion->getNotificacion("Falta 5 para los 8pm");

?>