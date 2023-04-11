<?php
namespace Model;
class Task
{
    private $id;
    private $userId;
    private $tile;
    private $desription;
    private $status;
    private $createAt;
    private $upddateAt;
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getTile()
    {
        return $this->tile;
    }

    /**
     * @param mixed $tile
     */
    public function setTile($tile)
    {
        $this->tile = $tile;
    }

    /**
     * @return mixed
     */
    public function getDesription()
    {
        return $this->desription;
    }

    /**
     * @param mixed $desription
     */
    public function setDesription($desription)
    {
        $this->desription = $desription;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @param mixed $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    }

    /**
     * @return mixed
     */
    public function getUpddateAt()
    {
        return $this->upddateAt;
    }

    /**
     * @param mixed $upddateAt
     */
    public function setUpddateAt($upddateAt)
    {
        $this->upddateAt = $upddateAt;
    }


}

?>