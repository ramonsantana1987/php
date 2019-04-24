<?php

namespace aula7\Http\Controllers;

use aula7\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FuncionarioController extends Controller
{
    public function index(){
        $funcionarios = Funcionario::all();
        return view('index')->with('funcionarios', $funcionarios);
    }
    public function novo(){
        return view('cadastrar');
    }

    public function salvar(Request $request){
        $url = $this->gerarURLamigavel($request->nome);
        $request->data_nascimento = new \DateTime($request->data_nascimento);
        $funcionario=[
            'nome'=>$request->nome,
            'data_nascimento'=> $request->data_nascimento->format('Y-m-d'),
            'url'=>$url
        ];
        Funcionario::create($funcionario);
        return redirect()->action('FuncionarioController@index');
    }

    public function editar(string $url)
    {
        $funcionario = Funcionario::where('url', $url)->get();
        if(!empty($funcionario)){
            return view('editar')->with('funcionario',$funcionario);
        }else{
            return redirect()->action('FuncionarioController@index');
        }
    }

    public function editarSalvar(Request $request, int $id)
    {
        $request->data_nascimento = new \DateTime($request->data_nascimento);
        $url = $this->gerarURLamigavel($request->nome);
        $funcionario = Funcionario::find($id);
        $funcionario->nome = $request->nome;
        $funcionario->data_nascimento = $request->data_nascimento->format('Y-m-d');
        $funcionario->url = $url;
        $funcionario->save();
        return redirect()->action('FuncionarioController@index');
    }

    public function excluir(int $id)
    {
        DB::where('id',2)->orderby('nome')->groupby('nome');
        //DB::delete("delete from funcionario where id=?",[$id]);
        Funcionario::where('id', $id)->delete();
        return redirect()->action('FuncionarioController@index');
    }

    /**
     * @param string
     * @param int|null $contagem
     * @return string
     */
    private function gerarURLamigavel(string $url, int $contagem=null): string {
        $url = Str::slug($url).$contagem;
        $cont = Funcionario::where('url', $url)->get();
        if($cont->count()>0)
            $url=$this->gerarURLamigavel($url, ($contagem+1));

        return $url;
    }

}
