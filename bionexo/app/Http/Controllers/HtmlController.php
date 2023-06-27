<?php

namespace App\Http\Controllers;

use App\Models\HtmlModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    use AuthorizesRequests;
    use ValidatesRequests;
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
                'pagetitle' => 'Listar dados da quantia',
                'title' => 'Dados quantia HTML',
                'message' => '',
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

    public function processarForm(Request $request)
    {
        $url = 'https://testpages.herokuapp.com/styled/the_form_processor.php';

        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'comments' => $request->comentario,
            'filename' => $request->file,
            'checkboxes[]' => $request->checkbox,
            'radioval' => $request->radioval,
            'multipleselect[]' => $request->multipleselect,
            'dropdown' => $request->dropdown,
            'submitbutton' => 'submit'
        ];

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        switch($httpcode) {
            case 200:
                return back()->with('success', 'Ok!');
                break;
            case 201:
                return back()->with('success', 'Criado!');
                break;
            case 202:
                return back()->with('success', 'Aceito!');
                break;
            case 203:
                return back()->with('error', 'Não autorizado!');
                break;
            case 302:
                return back()->with('success', 'Encontrado!');
                break;
            case 401:
                return back()->with('error', 'Não autorizado!');
                break;
            case 404:
                return back()->with('error', 'Não encontrado!');
                break;
            case 405:
                return back()->with('warning', 'Método não permitido!');
                break;
            case 415:
                return back()->with('warning', 'Tipo de mídia não suportado!');
                break;
            case 500:
                return back()->with('error', 'Erro do Servidor Interno!');
                break;
            case 502:
                return back()->with('secondary', 'Porta de entrada ruim!');
                break;
            case 503:
                return back()->with('error', 'Serviço Indisponível!');
                break;
        }
    }
}
