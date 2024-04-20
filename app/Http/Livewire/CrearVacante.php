<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use App\Models\Categoria;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|min:3|max:50|string',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required|string',
        'ultimo_dia' => 'required|date',
        'descripcion' => 'required|min:10|max:500|string',
        'imagen' => 'required|image:jpeg,png,jpg,gif,svg|max:1024'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function crearVacante()
    {
        $datos = $this->validate();

        // Almacenar la imagen en storage/app/public/vacantes
        $imagen = $this->imagen->store('public/vacantes');
        $nombreImagen = \str_replace('public/vacantes/', '', $imagen);

        // Crear la vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            'salario_id' => $datos['salario'],
            'categoria_id' => $datos['categoria'],
            'empresa' => $datos['empresa'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $nombreImagen,
            'user_id' => auth()->user()->id
        ]);

        // Crear un mensaje
        session()->flash('mensaje', 'La vacante se creó correctamente');

        // Redireccionar
        return redirect()->route('vacantes.index');
    }

    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.crear-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
