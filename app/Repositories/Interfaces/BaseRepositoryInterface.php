<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\RepositoryInterface;

interface BaseRepositoryInterface extends RepositoryInterface
{
    /**
     * @param array $attributes
     * @return void
     */
    public function validateCreate(array $attributes);

    /**
     * @param array $attributes
     * @return void
     */
    public function validateUpdate(array $attributes);

    /**
     * @param $validator
     * @return $this
     */
    public function setValidator($validator);

    /**
     * @param $results
     * @return mixed
     */
    public function present($results);

    /**
     * @param Model $targetModel
     * @return $this
     */
    public function setRelateModel(Model $targetModel);

    /**
     * @return \Prettus\Repository\Contracts\PresenterInterface
     */
    public function getPresenter();

    /**
     * @param array $meta
     */
    public function setPresenterMeta(array $meta);

    /**
     * @return bool
     */
    public function getIsSearchableForceAndWhere();

    /**
     * Find data by where conditions
     *
     * @param array $where
     *
     * @return $this
     */
    public function where(array $where);

    /**
     * Retrieve first data of repository with fail if not found
     *
     * @param array $columns
     *
     * @return mixed
     */
    public function firstOrFail($columns = ['*']);

    /**
     * Where first
     *
     * @param array $where
     * @param array $columns
     * @return mixed
     */
    public function whereFirst(array $where, $columns = ['*']);

    /**
     * Wrapper result data
     *
     * @param mixed $result
     *
     * @return mixed
     */
    public function parserResult($result);


}
