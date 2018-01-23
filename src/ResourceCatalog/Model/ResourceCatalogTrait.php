<?php
namespace ResourceCatalog\Model;

trait ResourceCatalogTrait
{

    /**
     * @var $id 资源目录id
     */
    protected $id;
    /**
     * @var int $type 资源目录类型
     */
    protected $type;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setType(int $type) : void
    {
        $types = $this->getTypes();

        $this->type = in_array(
            $type, $types
        ) ? $type : self::TYPE['NULL']['id'];
    }

    public function getType() : int
    {
        return $this->type;
    }

    protected function getTypes() : array
    {
        $types = array();
        foreach (self::TYPE as $value) {
            $types[] = $value['id'];
        }
        return $types;
    }

}