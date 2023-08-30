<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\MockObject\Verifiable;

class GithubUserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $userData = "";

        $username = $request->input('username');

        if (empty($username)) {
            return \Redirect::back()->with('error', '*Por favor, insira um nome de usuário para consulta.');
        }

        $username = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $username);

        $username = urlencode(strtolower(str_replace(' ', '', $username)));

        $endpoint = "users";

        $userData = $this->getUrlData($endpoint, $username)['data'];

        if ($this->getUrlData($endpoint, $username)['success'] == false) {
            return \Redirect::back()->with('error', $this->getUrlData($endpoint, $username)['message']);
        }

        return view('user', ['userData' => $userData]);
    }

    /**
     * getUrlData metodo para pegar dados APIgitHub  .
     *
     * @param string $endpoint aqui espera que seja users.
     * @param string $data usado para buscar o user.
     * @return array Array resposta com retorno de 3 parametros.
    */

    private function getUrlData($endpoint, $data = false)
    {
        $url = env('API_GIT_URL_BASE');

        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => [
                    'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36',
                ],
            ],
        ]);

        try {

            $response = file_get_contents($url, false, $context);

        } catch (\Exception $e) {

            return [
                'success' => false,
                'data' => '',
                'message' => 'URL invalida!'
            ];
        }

        if ($data == false) {
            $url = "{$url}/{$endpoint}/";
        } else {
            $url = "{$url}/{$endpoint}/{$data}";
        }

        try {

            $response = file_get_contents($url, false, $context);

            return  [
                'success' => true,
                'data' => json_decode($response, true),
                'message' => 'Dados encotrado com sucesso!'
            ];
        } catch (\Exception $e) {

            return [
                'success' => false,
                'data' => '',
                'message' => 'Usuário não encontrado!'
            ];
        }
    }
}
