<?php
/**
 * AbstractInterface.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package SISVAPE
 *
 */

namespace App\Support\Repository;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractRepository
 * @package App\Support\Repository
 */
class AbstractRepository implements AbstractInterface {
    /**
     * AbstractRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Model[]|mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param array $array
     * @return mixed
     */
    public function create(array $array)
    {
        return $this->model->create($array);
    }

    /**
     * @param array $array
     * @param $id
     * @return mixed
     */
    public function update(array $array, $id)
    {
        return $this->model->find($id)->update($array);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $this->model->find($id);
    }

    /**
     * @return Model|mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $model
     * @return $this|mixed
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @param $relations
     * @return \Illuminate\Database\Eloquent\Builder|Model
     */
    public function with($relations)
    {
        return $this->model->with($relations);
    }
}
