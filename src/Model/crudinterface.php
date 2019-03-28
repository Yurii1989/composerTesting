<?php
namespace Model;

interface CrudInterface
{
    public function create(array $fieldValues) : int;

    public static function read(int $id);

    public static function readAll() : array ;

    public function update(int $id, array $fieldValues) : bool;

    public function delete(int $id) : bool;
}
