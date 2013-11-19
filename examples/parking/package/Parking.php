<?php

class Parking extends SplObjectStorage {

    public function addPark(iParking $v) {
        $id=$this->getHash($v);
        $this->attach($v, $id);
    }

    public function removPark(iParking $v) {
        $this->detach($v);
    }

    public function getAll() {
        $this->rewind();
        while ($this->valid()) {
            $index = $this->key();
            $object = $this->current(); // similar to current($s)
            $data = $this->getInfo();

            var_dump($object);
            var_dump($data);
            $this->next();
        }
    }

    public function getName(iParking $v) {
        return $v->getName();
    }

}

?>