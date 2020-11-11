<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $categories = $this->category->paginate(7);
        $keyword = $request->input('search');
        return view('category.list', compact('categories','keyword'));
    }

    public function store(CategoryRequest $request)
    {
        $category = $this->category->create($request->all());
        if ($category) {
            alert()->success('Category Created', 'Successfully');
        } else {
            alert()->error('Category Created Failed', 'Something went wrong!');
        }
        return response()->json([
            'success' => true,
            'task' => $category,
        ], 200);


    }

    public function update(CategoryRequest $request, $id)
    {
        $category = $this->category->findOrFail($id);
        $category->update($request->all());
        if ($category) {
            alert()->success('Category Updates', 'Successfully');
        } else {
            alert()->error('Category Updates', 'Something went wrong!');
        }
        return response()->json([
            'status' => 200,
            'message' => 'cap nhat thanh cong',
            'category' => $category
        ]);
    }

    public function show($id)
    {
        $category = $this->category->findOrFail($id);
        return response()->json([
            'status' => 200,
            'message' => 'OK!',
            'category' => $category
        ]);

    }

    public function destroy($id)
    {
        $category = $this->category->destroy($id);
        if ($category) {
            alert()->success('Category Deleted', 'Successfully');
        } else {
            alert()->error('Category Deleted', 'Something went wrong!');
        }
        return response()->json([
            'error' => false,
            'task' => $category,
        ], 200);
    }

    public function search(Request $request){
        $keyword = $request->input('search');
        $categories = Category::where('name','like',"%$keyword%")->paginate(7);
        return view('category.list',compact('categories','keyword'));

    }

    public function searchAjax(Request $request)
    {

        if (request()->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $categories = DB::table('categories')->where('name', 'LIKE', "%$query%")->orderBy('id', 'desc')->get();
            } else {
                $categories = DB::table('categories')->orderBy('id')->get();

            }
            $total_row = $categories->count();
            if ($total_row > 0) {
                foreach ($categories as $key => $category) {
                    $output .= '
                    <tr>
                       <td>' . ++$key . '</td>
                       <td>' . $category->name . '</td>
                       <td><button class="btn btn-light" onclick="function (' . $category->id . ') {

                       }">Edit</button></td>
                    </tr>';
                }

            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No data Found...</td>
                </tr>';
            }

            $data = array(
                'table_data' => $output,
            );
            echo json_encode($data);
        }
    }
}
