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
    public $retornoErro;

    // Função para buscar o cep através das API e retornar o resultado para as varáveis declaradas.
    public function consultarCep($cep){

        $arrayDadosCep = array();

        // Formatar o CEP recebido por parâmetro para remover o '-'.
        $cep = str_replace('-', '', $cep);
        
        // Verificar o tamanho do CEP, caso 8 então fazer a consulta.
        if(strlen($cep) == 8) {

            // Montar url para consulta na API.
            $url = "https://viacep.com.br/ws/".$cep."/json/";

            // Iniciar a conexão com a API utilizando cURL e definir os parâmetros.
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

            // Executar a conexão e obter o retorno da API, em seguida fechar a conexão e converter o JSON para array.
            $jsonDadosCep = curl_exec($ch);
            curl_close($ch);

            $arrayDadosCep = json_decode($jsonDadosCep, true);

            // Verificar se o array possui dados para então preencher as variáveis.
            if(count($arrayDadosCep) > 0) {

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
}