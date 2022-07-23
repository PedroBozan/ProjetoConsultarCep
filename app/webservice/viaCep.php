<?php

namespace App\webservice;

class ViaCep{

    public $numCep;
    public $descLogradouro;
    public $descComplemento;
    public $descBairro;
    public $descCidade;
    public $descEstado;
    public $codIbge;

    public function consultarCep($cep){

        $retorno       = '';
        $arrayDadosCep = array();

        $cep = str_replace('-', '', $cep);
        
        if(strlen($cep) == 8) {

            $url = "https://viacep.com.br/ws/".$cep."/json/";

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

            $jsonDadosCep = curl_exec($ch);
            curl_close($ch);

            $arrayDadosCep = json_decode($jsonDadosCep, true);

            $this->numCep          = isset($arrayDadosCep['cep']) ? $arrayDadosCep['cep'] : '';
            $this->descLogradouro  = isset($arrayDadosCep['logradouro']) ? $arrayDadosCep['logradouro'] : '';
            $this->descComplemento = isset($arrayDadosCep['complemento']) ? $arrayDadosCep['complemento'] : '';
            $this->descBairro      = isset($arrayDadosCep['bairro']) ? $arrayDadosCep['bairro'] : '';
            $this->descCidade      = isset($arrayDadosCep['localidade']) ? $arrayDadosCep['localidade'] : '';
            $this->descEstado      = isset($arrayDadosCep['uf']) ? $arrayDadosCep['uf'] : '';
            $this->codIbge         = isset($arrayDadosCep['ibge']) ? $arrayDadosCep['ibge'] : '';
        }
    }
}