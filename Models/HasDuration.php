<?php

trait HasDuration {

    protected $duration;

    public function setDuration($_duration) {
        $this->duration = $_duration;
    }

    public function getDuration(){
        return $this->duration;
    }
}


?>