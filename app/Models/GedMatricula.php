<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GedMatricula extends Model
{
    protected $table= [
        'GED.TBGEDMATRICULA',
        'ged.TBGEDALUNO',
        'GER.TBGERPESSOA',
        'ged.TBGEDALUNO',
        'GER.TBGERPESSOA',
        'GER.TBGERLOTACAO',
        'GER.TBGERPARMLOTACAO',
        'GER.TBGERCIDADE',
        'GER.TBGERTURMA',
        'GER.TBGERTURNO',
        'GER.TBGERMATRIZ',
        'GER.TBGERMATRIZREGRA',
        'GER.TBGERMODALIDADEENSINO',
        'GER.TBGERETAPAENSINOEDUCACENSO',
        'GER.TBGERETAPAENSINO',
        'GER.TBGERORGAOREGIONAL',
        'GED.TBGEDNECESSIDADESESPECIAIS',
    ];

}
