<?php

class Funcionarios
{
    private $funcionarios;

    public function __construct()
    {
        $this->funcionarios = [
            ['id' => 4, 'nome' => 'João', 'salario' => 1500, "cpf" => '11111111111'],
            ['id' => 21, 'nome' => 'José', 'salario' => 1230.50, "cpf" => '22222222222'],
            ['id' => 34, 'nome' => 'Maria', 'salario' => 1678.54, "cpf" => '33333333333']
        ];
    }

    public function all()
    {
        return $this->funcionarios;
    }

    /**
     * Busca um funcionário pelo id
     * 
     * @param int $id
     * 
     * @return array|null
     */
    public function find($cpf)
    {
        foreach ($this->funcionarios as $func) {
            if ($func['cpf'] == $cpf) {
                return $func;
            }
        }
    
        return null;
    }
}

?>