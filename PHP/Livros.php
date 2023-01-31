<?php

class Livro{
    private string $autor;
    private float $valor;
    private int $estoque;
    private int $ano;
    private string $editora;
    private string $nomelivro;
    
   
    public function __construct(string $autor, float $valor, int $estoque, int $ano, string $editora, string $nomelivro){
        $this->autor = $autor;
        $this->valor = $valor;
        $this->estoque = $estoque;
        $this->ano = $ano;
        $this->editora = $editora;
        $this->nomelivro = $nomelivro;
    }

	/**
	 * @return string
	 */
	public function getAutor(): string {
		return $this->autor;
	}

	/**
	 * @param string $autor 
	 * @return self
	 */
	public function setAutor(string $autor): self {
		$this->autor = $autor;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getValor(): float {
		return $this->valor;
	}

	/**
	 * @return int
	 */
	public function getEstoque(): int {
		return $this->estoque;
	}

	/**
	 * @param int $estoque 
	 * @return self
	 */
	public function setEstoque(int $estoque): self {
		$this->estoque = $estoque;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAno(): int {
		return $this->ano;
	}

    /**
	 * @param int $ano
	 * @return self
	 */
	public function setAno(int $ano): self {
		$this->ano = $ano;
		return $this;
	}

    /**
	 * @return string
	 */
	public function getEditora(): string {
		return $this->editora;
	}

	/**
	 * @param string $editora 
	 * @return self
	 */
	public function setEditora(string $editora): self {
		$this->editora = $editora;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNomelivro(): string {
		return $this->nomelivro;
	}

	/**
	 * @param string $nomelivro 
	 * @return self
	 */
	public function setNomelivro(string $nomelivro): self {
		$this->nomelivro = $nomelivro;
		return $this;
	}
   

    public function imprimir(Livro $livro){
        echo "<br><br>Autor: ".$livro->getAutor();
        echo "<br>Valor: R$ ".$livro->getValor();
        echo "<br>Estoque: ".$livro->getEstoque();
        echo "<br>Ano: ".$livro->getAno();
        echo "<br>Editora: ".$livro->getEditora();
        echo "<br>Nome do Livro: ".$livro->getNomelivro();
        return;
    }

    public function comprar(Livro $livro, int $quantidadeLivro){
        if($quantidadeLivro <= $livro->getEstoque()){
            echo "<br><br>  |-----COMPRA EFETUADA COM SUCESSO-----|";
        }else{
            echo "<br><br> |-----A QUANTIDADE ESCOLHIDA NÃO TEM EM NOSSA LOJA-----|";
        }
        
    }

    

	
}
?>