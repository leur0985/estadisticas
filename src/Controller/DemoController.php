<?php 

namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Arbitros Controller
 *
 * @property \App\Model\Table\ArbitrosTable $Arbitros
 */
class DemoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function demo()
    {
    	echo "Hola";
    }
}
?>