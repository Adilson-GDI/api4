
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\User;



class APIController extends Controller
{

public function __construct()
{
    $this->middleware('jwt.auth');
}

    public function ListaUsuario()
    {
        $json = [
            'usuario' => [
                'nome' => 'Adilson',
                'idade' => '39',
            ],
            'usuario2' => [
                'nome' => 'Michele',
                'idade' => '35',
            ],
        ];

        return response($json, 201)->header('Content-Type', 'application/json');
    }

    public function ListaClientes()
    {
        $clientes = User::all();

        return response($clientes, 201)->header(
            'Content-Type',
            'application/json'
        );
    }

    public function ListaCliente($id)
    {
        $clientes = Clientes::find($id);

        return response($clientes, 201)->header(
            'Content-Type',
            'application/json'
        );
    }

    public function CadastraCliente(Request $data)
    {
        $clientes = Clientes::create([
            'nome' => $data->nome,
            'cnpj' => $data->cnpj,
        ]);

        return response($clientes, 201)->header(
            'Content-Type',
            'application/json'
        );
    }

    public function DeleteClientes($id)
    {
        $clientes = Clientes::find($id);
        $clientes->delete();

        return response($clientes, 201)->header(
            'Content-Type',
            'application/json'
        );
    }

    public function AlteraCliente(Request $data)
    {
        $clientes = Clientes::find($data->id);
        $clientes->nome = $data->nome;
        $clientes->cnpj = $data->cnpj;
        $clientes->save();

        return response($clientes, 201)->header(
            'Content-Type',
            'application/json'
        );
    }

}