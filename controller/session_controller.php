<?php

class SessionController
	{
		public $error;
		public $pag;

		public function __construct($pag)
			{
				$this->error;
				$this->pag=$pag;
			}
				public function paginas()
					{

						try
							{
								include 'view/'.$this->pag.'.php';

							}catch(PDOExeption $e)
							 {
							 	echo $e->getMessage();
							 }

					}
						
			
	}






?>