<?php
namespace ResourceCatalog\Model;

class Template
{

	protected $id;
	protected $items;

	public function __construct(int $id = 0)
    {
        $this->id = !empty($id) ? $id : 0;
        $this->items = '';
    }

    public function __destruct()
    {
        unset($this->id);
        unset($this->items);
    }

    public function setItems(int $id) : void
    {
        $this->id = $id;
    }

    public function getItems() : int
    {
        return $this->id;
    }

    public function setItems(string $items) : void
    {
        $this->items = $items;
    }

    public function getItems() : string
    {
        return $this->items;
    }

    public function add() : bool
    {
    	var_dump("hello world");
        return true;
    }

}