<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sprawdz extends CI_Controller {
	
	public function index()
	{
		$licznikTrafionych=0;
		$listaCyfrUzytkownika=array();
		for($a=1;$a<9;$a++)
		{
			$listaCyfrUzytkownika[$a]=$_POST['cyfra'.$a];
		}
	
		$listaWylosowanych=array();
		for($i=1;$i<9;$i++)
		{
			$listaWylosowanych[$i]= rand(1,50);
		}
		for($a=1;$a<8;$a++)
		{
			if($listaWylosowanych[$a+1]==$listaWylosowanych[$a])
			{
				$listaWylosowanych[$a]=rand(1,49);
			}

		}

			for($s=1;$s<9;$s++)
			{
				for($sp=1;$sp<9;$sp++)
				{
					if($listaCyfrUzytkownika[$s]==$listaWylosowanych[$sp])
					{
						$licznikTrafionych++;

					}
				
				}

			}
			

		$lista['ListaWylosowanych']=$listaWylosowanych;
		$lista['CyfryUzytkownika']=$listaCyfrUzytkownika;
		$lista['trafione']=$licznikTrafionych;	
		$this->load->view('welcome_message',$lista);         
	}                     		
}
	
	
