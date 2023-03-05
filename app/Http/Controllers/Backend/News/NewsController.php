<?php

namespace App\Http\Controllers\Backend\News;


use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\News\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class NewsController extends BackendController
{
    public function index()
    {
        $this->data('newsData', News::orderBy('id', 'DESC')->get());
        return view($this->pagePath . 'news.index', $this->data);

    }

    public function create()
    {
        return view($this->pagePath . 'news.create', $this->data);

    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:news,title',
            'slug' => 'required|unique:news,slug'
        ]);

        $blog = new News();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->slug);
        $blog->date = $request->date;
        $blog->status = $request->status;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->link = $request->link;
        $blog->description = $request->description;
        $blog->image = $this->singleFileUpload('uploads/news');
        if ($blog->save()) {
            return redirect()->route('admin-news.index')->with('success', 'news was inserted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function show($id)
    {
        $this->data('newsData', News::findOrFail($id));
        return view($this->pagePath . 'news.show', $this->data);
    }


    public function edit($id)
    {
        $newData = News::findOrFail($id);
        $this->data('newsData', $newData);
        return view($this->pagePath . 'news.update', $this->data);
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|', [
                Rule::unique('news', 'title')->ignore($id)
            ],
            'slug' => 'required|', [
                Rule::unique('news', 'slug')->ignore($id)
            ]

        ]);

        $blog = News::findOrFail($id);

        if ($request->hasFile('image')) {
            $this->deleteFile($blog->image);
            $blog->image = $this->singleFileUpload('uploads/news', false);
        }
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->date = $request->date;
        $blog->status = $request->status;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->link = $request->link;
        $blog->description = $request->description;
        if ($blog->update()) {
            return redirect()->route('admin-news.index')->with('success', 'news was updated');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }
    }


    public function destroy($id)
    {

        $findData = News::findOrFail($id);
        if ($this->deleteFile($findData->image) &&
            $findData->delete()) {
            return redirect()->route('admin-news.index')->with('success', 'news was deleted');
        } else {
            return redirect()->back()->with('error', 'there was a problems');
        }

    }

}
