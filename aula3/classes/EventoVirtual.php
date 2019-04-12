<?php


namespace Classes;


class EventoVirtual extends Evento
{
    /**
     * @var string
     */
    private $link;

    public function __construct(string $descricao, \DateTime $data, float $preco, string $link, int $quantidade = null)
    {
        parent::__construct($descricao, $data, $preco, $quantidade);
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    public function registrarPessoas(string $nome, string $email)
    {
        $this->quantidade ++;
        $this->setRegistro($nome, $email);
    }


}