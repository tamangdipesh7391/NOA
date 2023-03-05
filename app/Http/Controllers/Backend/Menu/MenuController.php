<?php

namespace App\Http\Controllers\Backend\Menu;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Http\Controllers\Controller;
use App\Repositories\Menu\MenuInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MenuController extends BackendController
{
    private MenuInterface $menu;

    public function __construct(MenuInterface $menuRepo)
    {
        parent::__construct();
        $this->menu = $menuRepo;
    }

    public function index(Request $request)
    {
        $menuResponse = $this->menu->ShowAll()
            ->paginate(10);

        if (!empty($request->search)) {
            $menuResponse = $this->menu->ShowAll($request->search,
                ['name']
            )->paginate(10);
        }
        $this->data('menuData', $menuResponse);
        return view($this->pagePath . 'menu.index', $this->data);
    }


    public function create()
    {
        return view($this->pagePath . 'menu.create', $this->data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required|unique:menus,slug',
        ]);
        $allData = $request->all();
        if ($this->menu->add($allData)) {
            return redirect()->route('admin-menu.index')
                ->with('success', 'Menu was created successfully');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }

    }

    public function show($id)
    {
        $this->data('menuData', $this->menu->get($id));
        return view($this->pagePath . 'menu.show', $this->data);
    }


    public function edit($id)
    {
        $this->data('menuData', $this->menu->get($id));
        return view($this->pagePath . 'menu.update', $this->data);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required|', [
                Rule::unique('menus', 'slug')
                    ->ignore($id)
            ],
        ]);
        $allData = $request->all();
        $this->menu->Update($id, $allData);
        return redirect()->back()->with('success', 'Data was updated');
    }


    public function destroy($id)
    {
        $this->menu->Delete($id);
        return redirect()->route('admin-menu.index')->with('success', 'Menu was deleted');
    }

}
