<?php
use PHPUnit\Framework\TestCase;
use src\Item;


class ItemTest extends TestCase
{

    public function testEstadoInicialItem()
    {
        $item = new Item();

        // asserções do phpunit
        $this->assertEquals('', $item->getDescription());
        $this->assertEquals(0, $item->getValue());

    }

    public function testGeteSetDescricao()
    {
        $descricao = 'Cadeira de plástico';

        $item = new Item();
        $item->setDescription($descricao);
        $this->assertEquals($descricao, $item->getDescription());
    }

    public function testItemValideted()
    {
        $item = new Item();
        // seria submeter um item válido para o teste e retornar ok
        $item->setValue(55);
        $item->setDescription('Cadeira de plástico');
        $this->assertEquals(false, $item->validetedItem());

        // seria submeter um item inválido para o teste e retornar false (descricao)
        $item->setValue(55);
        $item->setDescription('');
        $this->assertEquals(false, $item->validetedItem());

        // seria submeter um item inválido para o teste e retornar false (valor)
        $item->setValue(0);
        $item->setDescription('Cadeira de plástico');
        $this->assertEquals(false, $item->validetedItem());
    }

    /**
     * 
     * @dataProvider dateValue
     */
    public function testGeteSetvalor($value)
    {
        $item = new Item();
        $item->setValue($value);
        $this->assertEquals($value, $item->getValue());
    }


    public function dateValue()
    {
        return [
            [100],
            [-2],
            [0],
            [5]
        ];
    }

}