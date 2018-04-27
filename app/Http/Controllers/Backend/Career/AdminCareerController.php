<?php namespace App\Http\Controllers\Backend\Career;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Repositories\Career\EloquentCareerRepository;
use Html;

/**
 * Class AdminCareerController
 */
class AdminCareerController extends Controller
{
    /**
     * Career Repository
     *
     * @var object
     */
    public $repository;

    /**
     * Create Success Message
     *
     * @var string
     */
    protected $createSuccessMessage = "Career Created Successfully!";

    /**
     * Edit Success Message
     *
     * @var string
     */
    protected $editSuccessMessage = "Career Edited Successfully!";

    /**
     * Delete Success Message
     *
     * @var string
     */
    protected $deleteSuccessMessage = "Career Deleted Successfully";

    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->repository = new EloquentCareerRepository;
    }

    /**
     * Career Listing
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view($this->repository->setAdmin(true)->getModuleView('listView'))->with([
            'repository' => $this->repository
        ]);
    }

    /**
     * Career View
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view($this->repository->setAdmin(true)->getModuleView('createView'))->with([
            'repository' => $this->repository
        ]);
    }

    /**
     * Career Store
     *
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input = array_merge($input, [
            'icon' => 'default.png'
        ]);

        if($request->file('icon'))
        {
            $imageName  = rand(11111, 99999) . '_team.' . $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(base_path() . '/public/uploads/career/', $imageName);
            $input = array_merge($input, ['icon' => $imageName]);
        }

        $this->repository->create($input);

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->createSuccessMessage);
    }

    /**
     * Career Edit
     *
     * @return \Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = $this->repository->findOrThrowException($id);

        return view($this->repository->setAdmin(true)->getModuleView('editView'))->with([
            'item'          => $item,
            'repository'    => $this->repository
        ]);
    }

    /**
     * Career Show
     *
     * @return \Illuminate\View\View
     */
    public function show($id, Request $request)
    {
        $item = $this->repository->findOrThrowException($id);

        return view($this->repository->setAdmin(true)->getModuleView('editView'))->with([
            'item'          => $item,
            'repository'    => $this->repository
        ]);
    }


    /**
     * Career Update
     *
     * @return \Illuminate\View\View
     */
    public function update($id, Request $request)
    {
        $input = $request->all();

        if($request->file('icon'))
        {
            $imageName  = rand(11111, 99999) . '_career.' . $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(base_path() . '/public/uploads/career/', $imageName);
            $input = array_merge($input, ['icon' => $imageName]);
        }

        $status = $this->repository->update($id, $input);

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->editSuccessMessage);
    }

    /**
     * Career Destroy
     *
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $status = $this->repository->destroy($id);

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->deleteSuccessMessage);
    }

    /**
     * Get Table Data
     *
     * @return json|mixed
     */
    public function getTableData()
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['id', 'sort'])
            ->addColumn('icon', function ($item) 
            {
                if(isset($item->icon) && file_exists(public_path('uploads/career/'.$item->icon)))
                {
                    return  Html::image('/uploads/career/'.$item->icon, 'Image', ['width' => 60, 'height' => 60]);    
                }

                return '';
            })
            ->addColumn('actions', function ($item) {
                return $item->admin_action_buttons;
            })
            ->make(true);
    }
}