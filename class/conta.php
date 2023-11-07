<?php

    class conta
    {
        
        private $numero;
        private $agencia;
        private $proprietario;
        private $saldo;
        private $limite;

      
        public function __construct(){}

        public function create($_numero, $_agencia, $_proprietario, $_saldo, $_limite)
        {
            $this->numero = $_numero;
            $this->agencia = $_agencia;
            $this->proprietario = $_proprietario;
            $this->saldo = $_saldo;
            $this->limite = $_limite;
        }


        public function getSaldo()
        {
            return $this->saldo;
        }

        public function setSaldo($_saldo)
        {
            $this->saldo = $_saldo;
        }

        public function getLimite()
        {
            return $this->limite;
        }

        public function setLimite($_limite)
        {
            $this->limite = $_limite;
        }

        public function depositar($_valor)
        {
          
            $this->saldo += $_valor;
            return $this->saldo;
        }

        public function sacar($_valor)
        {
            if ($this->saldo + $this->limite >= $_valor)
            {
                $this->saldo -= $_valor;
                return $this->saldo;
            }
            else {
                return false;
            }
        }

    }

?>