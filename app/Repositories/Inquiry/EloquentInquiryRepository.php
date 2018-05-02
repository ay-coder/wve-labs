<?php namespace App\Repositories\Inquiry;

/**
 * Class EloquentInquiryRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\Inquiry\Inquiry;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentInquiryRepository extends DbRepository
{
    /**
     * Inquiry Model
     *
     * @var Object
     */
    public $model;

    /**
     * Inquiry Title
     *
     * @var string
     */
    public $moduleTitle = 'Inquiry';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        'id'                => 'Id',
        'name'              => 'Name',
        'emailid'           => 'Emailid',
        'contact_number'    => 'Mobile',
        'description'       => 'Description',
        'budget'            => 'Budget',
        'country'           => 'Country',
        'lat'               => 'Lat',
        'long'              => 'Long',
        'created_at'        => 'Created At',
        "actions"           => "Actions"
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
		'name' =>   [
                'data'          => 'name',
                'name'          => 'name',
                'searchable'    => true,
                'sortable'      => true
            ],
		'emailid' =>   [
                'data'          => 'emailid',
                'name'          => 'emailid',
                'searchable'    => true,
                'sortable'      => true
            ],
		'contact_number' =>   [
                'data'          => 'contact_number',
                'name'          => 'contact_number',
                'searchable'    => true,
                'sortable'      => true
            ],
		'description' =>   [
                'data'          => 'description',
                'name'          => 'description',
                'searchable'    => true,
                'sortable'      => true
            ],
		'budget' =>   [
                'data'          => 'budget',
                'name'          => 'budget',
                'searchable'    => true,
                'sortable'      => true
            ],
		'country' =>   [
                'data'          => 'country',
                'name'          => 'country',
                'searchable'    => true,
                'sortable'      => true
            ],
		'lat' =>   [
                'data'          => 'lat',
                'name'          => 'lat',
                'searchable'    => true,
                'sortable'      => true
            ],
		'long' =>   [
                'data'          => 'long',
                'name'          => 'long',
                'searchable'    => true,
                'sortable'      => true
            ],
		'created_at' =>   [
                'data'          => 'created_at',
                'name'          => 'created_at',
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
        'listRoute'     => 'inquiry.index',
        'createRoute'   => 'inquiry.create',
        'storeRoute'    => 'inquiry.store',
        'editRoute'     => 'inquiry.edit',
        'updateRoute'   => 'inquiry.update',
        'deleteRoute'   => 'inquiry.destroy',
        'dataRoute'     => 'inquiry.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'inquiry.index',
        'createView'    => 'inquiry.create',
        'editView'      => 'inquiry.edit',
        'deleteView'    => 'inquiry.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new Inquiry;
    }

    /**
     * Create Inquiry
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
     * Update Inquiry
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
     * Destroy Inquiry
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
            //$input = array_merge($input, ['user_id' => access()->user()->id]);
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