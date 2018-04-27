<?php namespace App\Http\Controllers\Backend\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Repositories\Portfolio\EloquentPortfolioRepository;
use Html;

/**
 * Class AdminPortfolioController
 */
class AdminPortfolioController extends Controller
{
    /**
     * Portfolio Repository
     *
     * @var object
     */
    public $repository;

    /**
     * Create Success Message
     *
     * @var string
     */
    protected $createSuccessMessage = "Portfolio Created Successfully!";

    /**
     * Edit Success Message
     *
     * @var string
     */
    protected $editSuccessMessage = "Portfolio Edited Successfully!";

    /**
     * Delete Success Message
     *
     * @var string
     */
    protected $deleteSuccessMessage = "Portfolio Deleted Successfully";

    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->repository = new EloquentPortfolioRepository;
    }

    /**
     * Portfolio Listing
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
     * Portfolio View
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
     * Portfolio Store
     *
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if(isset($input['category']) && count($input['category']) > 0)
        {
           $input['category'] = implode("||", $input['category']);
        }
        
        $input = array_merge($input, [
            'icon'          => 'default_icon.png',
            'image'         => 'default_image.png',
            'banner_image'  => 'default_banner_image.png',
            'background_image'  => 'default_background_image.png'
        ]);
        
        if($request->file('image'))
        {
            $imageName  = rand(11111, 99999) . '_portfolio.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/uploads/portfolio/', $imageName);
            $input = array_merge($input, ['image' => $imageName]);
        }

        if($request->file('icon'))
        {
            $imageName  = rand(11111, 99999) . '_portfolio.' . $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(base_path() . '/public/uploads/portfolio/', $imageName);
            $input = array_merge($input, ['icon' => $imageName]);
        }

        if($request->file('banner_image'))
        {
            $imageName  = rand(11111, 99999) . '_portfolio.' . $request->file('banner_image')->getClientOriginalExtension();
            $request->file('banner_image')->move(base_path() . '/public/uploads/portfolio/', $imageName);
            $input = array_merge($input, ['banner_image' => $imageName]);
        }

        if($request->file('background_image'))
        {
            $imageName  = rand(11111, 99999) . '_portfolio.' . $request->file('background_image')->getClientOriginalExtension();
            $request->file('background_image')->move(base_path() . '/public/uploads/portfolio/', $imageName);
            $input = array_merge($input, ['background_image' => $imageName]);
        }

        $this->repository->create($input);

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->createSuccessMessage);
    }

    /**
     * Portfolio Edit
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
     * Portfolio Show
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
     * Portfolio Update
     *
     * @return \Illuminate\View\View
     */
    public function update($id, Request $request)
    {
        $input = $request->all();
        
        if(isset($input['category']) && count($input['category']) > 0)
        {
           $input['category'] = implode("||", $input['category']);
        }
        
        if($request->file('image'))
        {
            $imageName  = rand(11111, 99999) . '_portfolio.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/uploads/portfolio/', $imageName);
            $input = array_merge($input, ['image' => $imageName]);
        }

        if($request->file('icon'))
        {
            $imageName  = rand(11111, 99999) . '_portfolio.' . $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(base_path() . '/public/uploads/portfolio/', $imageName);
            $input = array_merge($input, ['icon' => $imageName]);
        }

        if($request->file('banner_image'))
        {
            $imageName  = rand(11111, 99999) . '_portfolio.' . $request->file('banner_image')->getClientOriginalExtension();
            $request->file('banner_image')->move(base_path() . '/public/uploads/portfolio/', $imageName);
            $input = array_merge($input, ['banner_image' => $imageName]);
        }

        if($request->file('background_image'))
        {
            $imageName  = rand(11111, 99999) . '_portfolio.' . $request->file('background_image')->getClientOriginalExtension();
            $request->file('background_image')->move(base_path() . '/public/uploads/portfolio/', $imageName);
            $input = array_merge($input, ['background_image' => $imageName]);
        }

        $status = $this->repository->update($id, $input);

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->editSuccessMessage);
    }

    /**
     * Portfolio Destroy
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
            ->addColumn('image', function ($item) 
            {
                if(isset($item->image) && file_exists(public_path('uploads/portfolio/'.$item->image)))
                {
                    return  Html::image('/uploads/portfolio/'.$item->image, 'Image', ['width' => 60, 'height' => 60]);    
                }

                return '';
                
            })
             ->addColumn('icon', function ($item) 
            {
                if(isset($item->icon) && file_exists(public_path('uploads/portfolio/'.$item->icon)))
                {
                    return  Html::image('/uploads/portfolio/'.$item->icon, 'Image', ['width' => 60, 'height' => 60]);    
                }

                return '';
                
            })
            ->addColumn('category', function ($item) 
            {
                if(isset($item->category))
                {
                    return implode(', ', explode('||', $item->category));
                }

                return '';
            }) 
              ->addColumn('banner_image', function ($item) 
            {
                if(isset($item->banner_image) && file_exists(public_path('uploads/portfolio/'.$item->banner_image)))
                {
                    return  Html::image('/uploads/portfolio/'.$item->banner_image, 'Image', ['width' => 60, 'height' => 60]);    
                }

                return '';
            })
            ->addColumn('actions', function ($item) {
                return $item->admin_action_buttons;
            })
            ->make(true);
    }
}