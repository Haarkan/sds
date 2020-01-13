<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\Style\TablePosition;
use Session;

class WordDownload extends Controller
{
    public function createWord()
    {
    $value = Session::get('cart');
    // New Word Document
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    $section = $phpWord->addSection();
    $header = array('size' => 16, 'bold' => true);
    // 2. Advanced table
    $section->addTextBreak(1);
    $section->addText('Recognition at the Sending Institution', $header);
    $fancyTableStyleName = 'Recognition at the Sending Institution';
    $fancyTableStyle = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER, 'cellSpacing' => 50);
    $fancyTableFirstRowStyle = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
    $fancyTableCellStyle = array('valign' => 'center');
    $fancyTableCellBtlrStyle = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
    $fancyTableFontStyle = array('bold' => true);
    $phpWord->addTableStyle($fancyTableStyleName, $fancyTableStyle, $fancyTableFirstRowStyle);
    $table = $section->addTable($fancyTableStyleName);
    $table->addRow(900);
    $table->addCell(2000, $fancyTableCellStyle)->addText('Component code', $fancyTableFontStyle);
    $table->addCell(2000, $fancyTableCellStyle)->addText('Component title at the Sending Institution', $fancyTableFontStyle);
    $table->addCell(2000, $fancyTableCellStyle)->addText('Semester', $fancyTableFontStyle);
    $table->addCell(2000, $fancyTableCellStyle)->addText('Number of ECTS credits (or equivalent) to be recognised by the Sending Institution', $fancyTableFontStyle);
    $total=0;
    foreach(session('cart') as $id => $details){
        $table->addRow();
        $table->addCell(1000)->addText("{$details['code']}");
        $table->addCell(4000)->addText("{$details['name']}");
        $table->addCell(2000)->addText("{$details['semester']}");
        $table->addCell(2000)->addText("{$details['credit']}");
    $total=$total+$details['credit'];
}
$table->addRow();
$table->addCell(1000)->addText("");
$table->addCell(4000)->addText("");
$table->addCell(2000)->addText("");
$table->addCell(2000)->addText("Total :{$total}");
    $temp_file = tempnam(sys_get_temp_dir(), 'PHPWord');
    $phpWord->save($temp_file);
    // Your browser will name the file "myFile.docx"
    // regardless of what it's named on the server 
    header("Content-Disposition: attachment; filename='myFile.docx'");
    readfile($temp_file); // or echo file_get_contents($temp_file);
    unlink($temp_file);  // remove temp file
    }
}
