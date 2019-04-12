<?php


namespace Classes;


class Evento
{
    /**
     * @var string
     */
    private $descricao;
    /**
     * @var \DateTime
     */
    private $data;
    /**
     * @var float
     */
    private $preco;
    /**
     * @var int
     */
    protected $quantidade;
    /**
     * @var array
     */
    private $registro;

    /**
 * Evento constructor.
 * @param string $descricao
 * @param \DateTime $data
 * @param float $preco
 * @param int $quantidade
 */
    public function __construct(string $descricao, \DateTime $data, float $preco, int $quantidade=null)
    {
        $this->descricao = $descricao;
        $this->data = $data;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function registrarPessoas(string $nome, string $email){
        if($this->quantidade>=1){
            $this->quantidade -= 1;
            $this->setRegistro($nome, $email);
            echo("<p>Solicitação Registrada: {$nome}</p>");
        }else{
            echo("<p>Não há mais vagas: {$nome}. Desculpe.</p>");
        }
    }

    /**
     * @param array $registro
     */
    protected function setRegistro(string $nome, string $email): void
    {
        $this->registro = [
            "nome"=>$nome,
            "email"=>$email
        ];
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @return \DateTime
     */
    public function getData(): \DateTime
    {
        return $this->data;
    }

    /**
     * @return float
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * @return int
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * @return array
     */
    public function getRegistro(): array
    {
        return $this->registro;
    }






}