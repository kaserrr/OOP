<?php

      class Pokemon {
        protected $base;
        protected $attack;
        protected $weakness;
        protected $resistance;
        protected $energytype;
      
        public function __construct($base, $attack, $weakness, $resistance, $energytype) {
          $this->base = $base;
          $this->attack = $attack;
          $this->weakness = $weakness;
          $this->resistance = $resistance;
          $this->energytype = $energytype;
        }

        function getData($data) {
          return $this->$data;
        }

        public function __toString() {
            return json_encode($this);
        }
      }