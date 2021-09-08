<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\CreateBlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10, ['id', 'title', 'sub_title', 'created_at']);
        return view('admin.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogRequest $req)
    {
        $url_slug = Str::slug($req->input('title'));
        $pictureName = $req->file('picture')->getClientOriginalName();
        $others = [
            'url_slug' => $url_slug,
            'picture' => $pictureName,
            'show_main_picture' => 1,
        ];

        $req->file('picture')->move('images/blog', $pictureName);
        $data = array_merge($req->all(), $others);

        $blog = new Blog();
        $blog->fill($data);
        $blog->save();

        return redirect()->route('blogsIndex');
    }

    /**
     * Upload an image.
     *
     * @param  Response  $req
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $req)
    {
        $image = $req->file("image");
        $imageName = \Str::random(15) . '.' . $image->getClientOriginalExtension();

        $image->move('images/blog/', $imageName);

        session()->regenerate();
        return response()->json(["data" => [
                "url" => asset('images/blog/' . $imageName)
            ]
        ]);
    }

    /**
     * Delete a upload image
     *
     * @param  Response  $req
     * @return \Illuminate\Http\Response
     */
    public function deleteUploadImage(Request $req)
    {
        $image = $req->input("image");
        File::delete(public_path('images/blog/') . $image);

        return response()->json(["data" => ["url" => $image]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin/blog_detail', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $blog = Blog::find($id);
        $data = [];

        if ($req->hasFile('picture')) {
            File::delete(public_path('images/blog/') . $blog->picture);
            $pictureName = $req->file('picture')->getClientOriginalName();
            $req->file('picture')->move('images/blog', $pictureName);
            $data['picture'] = $pictureName;
        }

        $data = array_merge($data, $req->only(['title', 'sub_title', 'author', 'info', 'info_quill']));
        $blog->fill($data);
        $blog->save();

        return redirect()->back()->with('info', 'Se ha actualizado los datos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
