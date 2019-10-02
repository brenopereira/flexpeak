<?php
/**
 * AbstractInterface.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Support\Repository;

/**
 * Interface AbstractInterface
 * @package App\Support\Repository
 */
interface AbstractInterface
{
    /**
     * @return mixed
     */
    public function all();

    /**
     * @param array $array
     * @return mixed
     */
    public function create(array $array);

    /**
     * @param array $array
     * @param $id
     * @return mixed
     */
    public function update(array $array, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);

    /**
     * @param $model
     * @return mixed
     */
    public function setModel($model);

    /**
     * @return mixed
     */
    public function getModel();
}
