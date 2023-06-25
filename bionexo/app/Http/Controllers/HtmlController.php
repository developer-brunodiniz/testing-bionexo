<?php

namespace App\Http\Controllers;

use App\Models\HtmlModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class HtmlController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    private $model;

    public function __construct()
    {
        $this->model = new HtmlModel();
    }

    public function index()
    {
        $list = $this->model
            ->orderBy('name')->get();

        return view(
            'index',
            [
                "pagetitle" => "Listar dados da quantia",
                "title" => "Dados quantia HTML",
                'list' => $list,
            ]
        );
    }

    public function store()
    {
        try {
            $homepage = file_get_contents('https://testpages.herokuapp.com/styled/tag/table.html');
            $tag = '</tr>';
            $tagsHomepage = explode($tag, $homepage);

            foreach ($tagsHomepage as $key => $val) {
                if ($key !== 0) {
                    $limpaValue = trim($val);
                    $valorTag = explode(' ', trim($limpaValue));
                    unset($valorTag[0]);

                    foreach ($valorTag as $index => $value) {
                        if (!$value) {
                            unset($valorTag[$index]);
                        }
                    }
                    $valorFinalTag = array_values($valorTag);

                    if (count($valorFinalTag) === 2) {
                        $params = [
                            'name' => trim(strip_tags($valorFinalTag[0])),
                            'amount' => round(intval(strip_tags($valorFinalTag[1])))
                        ];

                        $ifExists = $this->model
                            ->where('name', '=', trim(strip_tags($valorFinalTag[0])))
                            ->where('amount', '=', round(intval(strip_tags($valorFinalTag[1]))))
                            ->orderBy('name')->get();

                        if (count($ifExists) === 0) {
                            $this->model->create($params);
                        }
                    }
                }
            }

            return Redirect::to('/');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
