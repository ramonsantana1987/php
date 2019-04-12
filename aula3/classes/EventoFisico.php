<?php


namespace Classes;


class EventoFisico  extends Evento
{
    /**
     * @var EnderecoEventoFisico
     */
    private $enderecoEventoFisico;

    public function __construct(string $descricao, \DateTime $data, float $preco, int $quantidade, $enderecoEventoFisico)
    {
        parent::__construct($descricao, $data, $preco, $quantidade);
        $this->enderecoEventoFisico=$enderecoEventoFisico;
    }


}