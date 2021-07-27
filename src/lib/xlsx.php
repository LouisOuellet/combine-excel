<?php

// Import Librairies
require_once dirname(__FILE__,3) . '/vendor/PHPExcel-1.8.2/Classes/PHPExcel.php';

class apiXLSX{

	public function __construct(){}

	public function combine($files, $destDIR, $output = null){

		// Create our main spreadsheet
		$objXLSX["obj"] = new PHPExcel();
		$objXLSX["worksheet"] = $objXLSX["obj"]->setActiveSheetIndex(0);

		// Load spreadsheets files
		foreach($files as $key => $file){
			echo "Processing ".$file."<br>\n";
			// Read spreadsheets
			$objPHPExcel[$key]["obj"] = PHPExcel_IOFactory::load("$file");
			$objPHPExcel[$key]["worksheet"] = $objPHPExcel[$key]["obj"]->setActiveSheetIndex(0);
			$objPHPExcel[$key]["endRow"] = $objPHPExcel[$key]["worksheet"]->getHighestRow();
			$objPHPExcel[$key]["endColumn"] = $objPHPExcel[$key]["worksheet"]->getHighestColumn();
			$objPHPExcel[$key]["endData"] = $objPHPExcel[$key]["endColumn"].$objPHPExcel[$key]["endRow"];
			$objPHPExcel[$key]["data"] = $objPHPExcel[$key]["worksheet"]->rangeToArray('A2:' . $objPHPExcel[$key]["endData"]);
			// Append Data
			$StartRow = $objXLSX["worksheet"]->getHighestRow() + 1;
			$objXLSX["worksheet"]->fromArray($objPHPExcel[$key]["data"], null, 'A' . $StartRow);
		}

		// Save the spreadsheet with the merged data
		if($output == null){ $output = time(); }
		$filename = '/'.trim($destDIR,'/').'/'.$output.'.xlsx';
		$objWriter = PHPExcel_IOFactory::createWriter($objXLSX["obj"], 'Excel2007');
		$objWriter->save($filename);

		// Return
		return $filename;
	}
}
