<?php namespace App\Repositories\Portfolio;

/**
 * Class EloquentPortfolioRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\Portfolio\Portfolio;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentPortfolioRepository extends DbRepository
{
    /**
     * Portfolio Model
     *
     * @var Object
     */
    public $model;

    /**
     * Portfolio Title
     *
     * @var string
     */
    public $moduleTitle = 'Portfolio';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        'id'            => 'Id',
        'title'         => 'Title',
        'sub_title'     => 'Sub Title',
        'icon'          => 'Icon',
        'image'         => 'Image',
        'category'      => 'Category',
        'os_version'    => 'Os Version',
        'backend'       => 'Backend',
        'rating'        => 'Rating',
        "actions"       => "Actions"
    ];

    /**
     * Table Columns
     *
     * @var array
     */
    public $tableColumns = [
        'id' =>   [
                'data'          => 'id',
                'name'          => 'id',
                'searchable'    => true,
                'sortable'      => true
            ],
		'title' =>   [
                'data'          => 'title',
                'name'          => 'title',
                'searchable'    => true,
                'sortable'      => true
            ],
		'sub_title' =>   [
                'data'          => 'sub_title',
                'name'          => 'sub_title',
                'searchable'    => true,
                'sortable'      => true
            ],
        'icon' =>   [
                'data'          => 'icon',
                'name'          => 'icon',
                'searchable'    => false,
                'sortable'      => false
            ],
		'image' =>   [
                'data'          => 'image',
                'name'          => 'image',
                'searchable'    => true,
                'sortable'      => true
            ],
		'category' =>   [
                'data'          => 'category',
                'name'          => 'category',
                'searchable'    => true,
                'sortable'      => true
            ],
		'os_version' =>   [
                'data'          => 'os_version',
                'name'          => 'os_version',
                'searchable'    => true,
                'sortable'      => true
            ],
        'backend' =>   [
                'data'          => 'backend',
                'name'          => 'backend',
                'searchable'    => true,
                'sortable'      => true
            ],
		'rating' =>   [
                'data'          => 'rating',
                'name'          => 'rating',
                'searchable'    => true,
                'sortable'      => true
            ],
		'actions' => [
            'data'          => 'actions',
            'name'          => 'actions',
            'searchable'    => false,
            'sortable'      => false
        ]
    ];

    /**
     * Is Admin
     *
     * @var boolean
     */
    protected $isAdmin = false;

    /**
     * Admin Route Prefix
     *
     * @var string
     */
    public $adminRoutePrefix = 'admin';

    /**
     * Client Route Prefix
     *
     * @var string
     */
    public $clientRoutePrefix = 'frontend';

    /**
     * Admin View Prefix
     *
     * @var string
     */
    public $adminViewPrefix = 'backend';

    /**
     * Client View Prefix
     *
     * @var string
     */
    public $clientViewPrefix = 'frontend';

    /**
     * Module Routes
     *
     * @var array
     */
    public $moduleRoutes = [
        'listRoute'     => 'portfolio.index',
        'createRoute'   => 'portfolio.create',
        'storeRoute'    => 'portfolio.store',
        'editRoute'     => 'portfolio.edit',
        'updateRoute'   => 'portfolio.update',
        'deleteRoute'   => 'portfolio.destroy',
        'dataRoute'     => 'portfolio.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'portfolio.index',
        'createView'    => 'portfolio.create',
        'editView'      => 'portfolio.edit',
        'deleteView'    => 'portfolio.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new Portfolio;
    }

    /**
     * Create Portfolio
     *
     * @param array $input
     * @return mixed
     */
    public function create($input)
    {
        $input = $this->prepareInputData($input, true);
        $model = $this->model->create($input);

        if($model)
        {
            return $model;
        }

        return false;
    }

    /**
     * Update Portfolio
     *
     * @param int $id
     * @param array $input
     * @return bool|int|mixed
     */
    public function update($id, $input)
    {
        $model = $this->model->find($id);

        if($model)
        {
            $input = $this->prepareInputData($input);

            return $model->update($input);
        }

        return false;
    }

    /**
     * Destroy Portfolio
     *
     * @param int $id
     * @return mixed
     * @throws GeneralException
     */
    public function destroy($id)
    {
        $model = $this->model->find($id);

        if($model)
        {
            return $model->delete();
        }

        return  false;
    }

    /**
     * Get All
     *
     * @param string $orderBy
     * @param string $sort
     * @return mixed
     */
    public function getAll($orderBy = 'id', $sort = 'asc')
    {
        return $this->model->orderBy($orderBy, $sort)->get();
    }

    /**
     * Get by Id
     *
     * @param int $id
     * @return mixed
     */
    public function getById($id = null)
    {
        if($id)
        {
            return $this->model->find($id);
        }

        return false;
    }

    /**
     * Get Table Fields
     *
     * @return array
     */
    public function getTableFields()
    {
        return [
            $this->model->getTable().'.*'
        ];
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->model->select($this->getTableFields())->get();
    }

    /**
     * Set Admin
     *
     * @param boolean $isAdmin [description]
     */
    public function setAdmin($isAdmin = false)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Prepare Input Data
     *
     * @param array $input
     * @param bool $isCreate
     * @return array
     */
    public function prepareInputData($input = array(), $isCreate = false)
    {
        if($isCreate)
        {
            $input = array_merge($input, ['user_id' => access()->user()->id]);
        }

        return $input;
    }

    /**
     * Get Table Headers
     *
     * @return string
     */
    public function getTableHeaders()
    {
        if($this->isAdmin)
        {
            return json_encode($this->setTableStructure($this->tableHeaders));
        }

        $clientHeaders = $this->tableHeaders;

        unset($clientHeaders['username']);

        return json_encode($this->setTableStructure($clientHeaders));
    }

    /**
     * Get Table Columns
     *
     * @return string
     */
    public function getTableColumns()
    {
        if($this->isAdmin)
        {
            return json_encode($this->setTableStructure($this->tableColumns));
        }

        $clientColumns = $this->tableColumns;

        unset($clientColumns['username']);

        return json_encode($this->setTableStructure($clientColumns));
    }
}