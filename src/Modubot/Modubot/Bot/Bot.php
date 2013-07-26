<?php

namespace Modubot\Modubot\Bot;


class Bot {

    public function __construct($bot) {

        foreach($bot as $key => $value) {
            $this->$key = $value;
        }

    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            return new \Exception('Property doesn\'t exist.');
        }

    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }

    /**
     * Validate the bot properties
     */
    public function validate() {

    }

    /**
     * Let's register what we need to for the bot to work.
     */
    private function registerLibraries() {

    }

    public function start() {
        // Register libraries
        $this->registerLibraries();

        // Create network configuration and store in the Bot

    }

}
