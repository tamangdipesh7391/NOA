<?php

namespace App\Http\Controllers\Backend\Events;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Repositories\Events\EventsInterface;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventsController extends BackendController
{
    private EventsInterface $eventsRepo;

    public function __construct(EventsInterface $eventRepository)
    {
        parent::__construct();
        $this->eventsRepo = $eventRepository;
    }


    public function index(Request $request)
    {
        $eventData = $this->eventsRepo->showAll()->paginate(10);
        if (!empty($request->search)) {
            $aboutData = $this->eventsRepo->showAll($request->search,
                ['title']
            )->paginate(100);
        }
        $this->data('eventsData', $eventData);
        return view($this->pagePath . 'events.index', $this->data);
    }


    public function create()
    {
        return view($this->pagePath . 'events.create', $this->data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:events,title',
            'slug' => 'required|unique:events,slug',
        ]);
        $data = $request->all();
        if ($this->eventsRepo->add($data)) {
            $id = $this->eventsRepo->last();
            if ($request->hasFile('image')) {
                $filesName = $this->singleFileUpload('uploads/events');
                $this->eventsRepo->fileUpload($id, $filesName);
                return redirect()->route('admin-events.index')->with('success', 'data was inserted');
            } else {
                return redirect()->route('admin-events.index')->with('success', 'data was inserted');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function show($id)
    {
        $this->data('eventsData', $this->eventsRepo->get($id));
        return view($this->pagePath . 'events.show', $this->data);
    }


    public function edit($id)
    {
        $events = $this->eventsRepo->get($id);
        $this->data('eventsData', $events);
        return view($this->pagePath . 'events.update', $this->data);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('events', 'title')->ignore($id)
            ],
        ]);
        $getInfrastructure = $this->eventsRepo->get($id);

        if ($this->eventsRepo->update($id, $request->all())) {
            if ($request->hasFile('image')) {
                $this->deleteFile($getInfrastructure->image);
                $fileName = $this->singleFileUpload('uploads/events');
                $this->eventsRepo->fileUpload($id, $fileName);
                return redirect()->route('admin-events.index')->with('success', 'data was updated');

            } else {
                return redirect()->route('admin-events.index')->with('success', 'data was updated');

            }
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function destroy($id)
    {
        $this->deleteFile($this->eventsRepo->get($id)->image);
        if ($this->eventsRepo->delete($id)) {
            return redirect()->route('admin-events.index')->with('success', 'data was deleted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }
}
