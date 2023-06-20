<?php

declare(strict_types=1);

namespace Growthdev\DataStructure\Stack;

class Pilha implements Collection, Countable, Iterator
{
    private int $tamanho = 0;
    private int $position = 0;
    private ?No $node = null;
    private ?No $ultimo = null;

    public function peek(): int
    {
        return $this->node->getValue();
    }
    //adicionar elemento na pilha 
    public function push(int $valor): void
    {
        $this->node = new No($valor, $this->node);
        $this->ultimo = $this->node;

        $this->tamanho++;
    }

    public function pop(): int
    {
        if ($this->tamanho=== 0) {
            return null;
        }

        $node = $this->node;
        $this->node = $this->node->getProximo();
        $this->tamanho--;

        return $node->getElemento();
    }

    public function count(): int
    {
        return $this->tamanho;
    }

    public function hasNext(): bool
    {
        return $this->position < $this->count;
    }

    public function current(): int
    {
        return $this->node->getValue();
    }
    //vai pegar sempre o proximo elemento
    public function Proximo(): void
    {
        $this->node = $this->node->getProximo();
        $this->position++;
    }


    public function isEmpty(): bool
    {
        return $this->count === 0;
    }
}
?>