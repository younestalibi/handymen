<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('generateNewArticle');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $errorMessage = Cache::pull('your_scheduled_task_error');
        $successMessage = Cache::pull('your_scheduled_task_success');

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(3);
        $myProfile = User::find(Auth::user()->id)->Profile;
        return view('blogs.index', compact('myProfile', 'blogs','errorMessage','successMessage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $myProfile = User::find(Auth::user()->id)->Profile;
        return view('blogs.create', compact('myProfile'));
    }

    public static  function generateNewArticle(Request $request){        
        $blog=Blog::whereNull('content')->first();
        if(!is_null($blog)){
            $title=$blog->title;
            // $imgPrompt = "Create an image that visually represents the essence of '{{$title}}.' Envision a captivating scene that captures the core theme and emotions associated with the given title. Feel free to incorporate diverse elements, colors, and visual elements that align with the subject matter."            ;
            $wordCount = 1000; 
            $prompt = "Generate an SEO-friendly blog post about {{$title}} containing {{$wordCount}} words. Follow SEO standards with. Output the result within <div id='content'> use <h><p><b>.";
        
            
            try{
                $result = OpenAI::chat()->create([
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'user', 'content' => $prompt],
                    ],
                ]);
                // $image=OpenAI::images()->create([
                //     "prompt"=>$imgPrompt ,
                //     'n'=>1,
                //     "size"=>"1024x1024",
                //     'response_format'=>'url'
                // ]);

                // $url=$image->data[0]->url;
            
                // $imageContents = file_get_contents($url);
                // $imageName = uniqid() . '.png';
                // Storage::disk('public')->put('imagesBlogs/' . $imageName, $imageContents);

                if (isset($result->choices[0]->message->content)) {
                    $blog->content=$result->choices[0]->message->content;
                    $blog->save();
                    Cache::put('your_scheduled_task_success', 'Article generated successfully.');
                } else {
                    Cache::put('your_scheduled_task_error', 'Error generating article. Please check your API key or try again later.');

                    throw new \Exception("Error: Unable to generate content. Check OpenAI response.");
                }
            } catch (\Exception $e) {
                Cache::put('your_scheduled_task_error', 'Error generating article. Please check your API key or try again later.');
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
        }
    }
    public static  function generateTitles(Request $request){        
 
            $keywords=$request->input('keyword');
            $prompt = "Generate 10 SEO-friendly article titles based on the keywords '{{$keywords}}'. Each title should be separated by a semicolon (;)";

            if(!is_null($keywords)){
                try{
                    $result = OpenAI::chat()->create([
                        'model' => 'gpt-3.5-turbo',
                        'messages' => [
                            ['role' => 'user', 'content' => $prompt],
                        ],
                    ]);
                    if (isset($result->choices[0]->message->content)) {
                        return response()->json(['results'=>$result->choices[0]->message->content]);
                    } else {
                        return response()->json(["results"=>" Unable to generate titiles. Check OpenAI response."]);
                    }
                } catch (\Exception $e) {
                    response()->json(["results"=>" Unable to generate titiles. Check OpenAI response."]);
                }
            }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titles' => 'required',
        ]);
        $titlesArray = explode(';', $validated['titles']);
        $titlesArray = array_filter($titlesArray);
        $titlesArray = array_map('trim', $titlesArray);

        foreach ($titlesArray as $title) {
            Blog::create(['title' => $title]);
        }
        return redirect()->back()->with('success', 'Titles Created successfully it\' and articles daily!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        echo "<h1>still working it</h1>";
        // $myProfile = User::find(Auth::user()->id)->Profile;
        // return view('blogs.edit', compact('blog', 'myProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Blog::findOrFail($id);
        $service->delete();
        return response()->json([
            'status' => true,
            'success' => 'Service deleted successfully',
        ]);
    }
}
