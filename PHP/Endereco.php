<?php
class endereco{
        private string $logradouro;
        private string $numero;
        private string $complemento;
        private string $cidade;
        private string $estado;
        private string $cep;
        private string $bairro;
        private string $pais;
        private string $uf;

        public function __construct(string $logradouro, string $numero, string $complemento, string $cidade, string $estado, string $cep, string $bairro, string $pais, string $uf){
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->complemento = $complemento;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->cep = $cep;
            $this->bairro = $bairro;
            $this->pais = $pais;
            $this->uf = $uf;
        }

        //Metodos Gets e Sets
        public function getLogradouro() : string{
            return $this->logradouro;
        }//fim do getlogradouro

        public function setLogradouro(string $logradouro) : void{
            $this->logradouro = $logradouro;
        }//fim do setlogradouro
        

        public function getNumero() : string{
            return $this->numero;
        }//fim do getNumero

        public function setNumero(string $numero) : void{
            $this->numero = $numero;
        }//fim do setNumero

        //Metodos Gets e Sets
        public function getComplemento() : string{
            return $this->complemento;
        }//fim do getlComplemento

        public function setComplemento(string $complemento) : void{
            $this->complemento = $complemento;
        }//fim do getlComplemento
        
        //Metodos Gets e Sets
        public function getCidade() : string{
            return $this->cidade;
        }//fim do getCidade

        public function setCidade(string $cidade) : void{
            $this->cidade = $cidade;
        }//fim do getCidade

        //Metodos Gets e Sets
        public function getEstado() : string{
            return $this->estado;
        }//fim do getEstado

        public function setEstado(string $estado) : void{
            $this->estado = $estado;
        }//fim do getEstado

        public function getCEP() : string{
            return $this->cep;
        }//fim do getCEP

        public function setCEP(string $cep) : void{
            $this->cep = $cep;
        }//fim do setCEP

        public function getBairro() : string{
            return $this->bairro;
        }//fim do getBairro

        public function setBairro(string $bairro) : void{
            $this->bairro = $bairro;
        }//fim do getBairro

        public function getPais() : string{
            return $this->pais;
        }//fim do getPais

        public function setPais(string $pais) : void{
            $this->pais = $pais;
        }//fim do getPais

        public function getUF() : string{
            return $this->uf;
        }//fim do getUF

        public function setUF(string $uf) : void{
            $this->uf = $uf;
        }//fim do getTUF
        

    }
?>