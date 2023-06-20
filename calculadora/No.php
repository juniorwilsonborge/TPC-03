<?php
final class Node
{
    private int $elemento;
    private  ?Node $proximo;

    //construtor com todo parametros
    public function __construct(int $elemento, ?Node $proximo = null)
    {
        $this->elemento = $elemento;
        $this->proximo = $proximo;
    }
    //metudos de acessos
    public function getProximo(): ?Node
    {
        return $this->proximo;
    }
    
    public function getElemento(): int
    {
        return $this->elemento;
    }
}
?>