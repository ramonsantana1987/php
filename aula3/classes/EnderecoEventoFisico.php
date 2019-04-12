<?php


namespace Classes;


class EnderecoEventoFisico
{
    /**
     * @var string
     */
    private $cidade;
    /**
     * @var string
     */
    private $estado;

    /**
     * EnderecoEventoFisico constructor.
     * @param string $cidade
     * @param string $estado
     */
    public function __construct(string $cidade, string $estado)
    {
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    /**
     * @return string
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }




}