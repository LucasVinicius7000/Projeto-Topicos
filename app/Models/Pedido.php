<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $table = 'pedidos';
    protected $fillable = ['nome','email','celular','cpf','qtWheyBlue','qtCreatine','qtWheyPink','idUser','mensagem'];
    use HasFactory;
}
