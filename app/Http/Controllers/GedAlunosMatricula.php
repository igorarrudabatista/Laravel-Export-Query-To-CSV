<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\DB;


use App\Models\GedAlunos;


class GedAlunosMatricula extends Controller
{
    //


    // public function exportData() {
    //     // get the data
    //     $data = GedAlunos::all();

    //     dd($data);
    
    //     // get a Writer object for writing to CSV
    //     $csv = League\Csv\Writer::createFromFileObject(new SplTempFileObject());
    
    //     // add the data to the writer
    //     $csv->insertAll($data);
    
    //     // output the file
    //     $csv->output('testdata.csv');
    // }


public function exportCsv(Request $request)
{

    //GedAluCod	GedAluIdINEP	GedAluPartPrjSoc	GedAluLotPartPrjSoc	GedAluAtenEscDif	
    // GedAluTransPub	GedAluRespTransPub	GedAluRecAteEduEsp	GedAluIncPor	GedAluIncEm	GedAluAltPor
    // 	GedAluAltEm	GedAluInativ	GedAluAlfab	GedAluLogin	GedAluSnh	GedAluEmailConf	GedAluCodConfEmail
    //     	GedAluMaeInep	GedAluDtaCadPDA	GedAluSss	GedAluDtaUltAltSnh	GedAluDtaLgn
    //         	GedAluTipoSanguineo	GedAluInfAdicionais	GedAluPartBenSocial	GedAluNumPasseLivre
    //             	GedAluPasseLivre	GedAluRespScrt	GedAluPergScrt

   $fileName = 'Matricula.csv';

   $tasks = \DB::select('select * from Ged.TBGEDALUNO where GedAluIncPor = 52809');  


        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0",
        );

        $columns = array('GedAluCod', 'GedAluIdINEP', 'GedAluPartPrjSoc', 'GedAluLotPartPrjSoc', 'GedAluAtenEscDif');

        $callback = function() use($tasks, $columns) {
            $file = fopen('php://output', 'w');
            $delimiter = '.';
            fputcsv($file, $columns, $delimiter);

            foreach ($tasks as $task) {
                $row['GedAluCod']            = $task->GedAluCod;
                $row['GedAluIdINEP']         = $task->GedAluIdINEP;
                $row['GedAluPartPrjSoc']     = $task->GedAluPartPrjSoc;
                $row['GedAluLotPartPrjSoc']  = $task->GedAluLotPartPrjSoc;
                $row['GedAluAtenEscDif']     = $task->GedAluAtenEscDif;

                fputcsv($file, array($row['GedAluCod'], $row['GedAluIdINEP'], $row['GedAluPartPrjSoc'], $row['GedAluLotPartPrjSoc'], $row['GedAluAtenEscDif']), $delimiter);
            }

            fclose($file);
        };
    //    dd($callback);
    

        return response()->stream($callback, 200, $headers);
    }







    public function downloadCSVReport()
    {
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=product-' . date("Y-m-d-h-i-s") . '.csv');
        $output = fopen('php://output', 'w');
      

            //GedAluCod	GedAluIdINEP		GedAluLotPartPrjSoc	GedAluAtenEscDif	
    // GedAluTransPub	GedAluRespTransPub	GedAluRecAteEduEsp	GedAluIncPor	GedAluIncEm	GedAluAltPor
    // 	GedAluAltEm	GedAluInativ	GedAluAlfab	GedAluLogin	GedAluSnh	GedAluEmailConf	GedAluCodConfEmail
    //     	GedAluMaeInep	GedAluDtaCadPDA	GedAluSss	GedAluDtaUltAltSnh	GedAluDtaLgn
    //         	GedAluTipoSanguineo	GedAluInfAdicionais	GedAluPartBenSocial	GedAluNumPasseLivre
    //             	GedAluPasseLivre	GedAluRespScrt	GedAluPergScrt



        fputcsv($output, array('GedAluCod', 'GedAluIdINEP', 'GedAluPartPrjSoc'));

        $products = GedAlunos::get()->limit(1);

        if (count($products) > 0) {

            foreach ($products as $product) {

                $product_row = [
                    $product['GedAluCod'],
                    ucfirst($product['GedAluIdINEP']),
                    $product['GedAluPartPrjSoc']
                ];

                fputcsv($output, $product_row);
            }
        }
    }
}


