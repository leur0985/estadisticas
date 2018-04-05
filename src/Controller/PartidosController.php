<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;


/**
 * Partidos Controller
 *
 * @property \App\Model\Table\PartidosTable $Partidos
 */
class PartidosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Torneos', 'Equipos', 'Tecnicos', 'Estadios', 'Arbitros']
        ];
        $partidos = $this->paginate($this->Partidos);

        $this->set(compact('partidos'));
        $this->set('_serialize', ['partidos']);
    }

    /**
     * View method
     *
     * @param string|null $id Partido id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partido = $this->Partidos->get($id, [
            'contain' => ['Torneos', 'Equipos', 'Tecnicos', 'Estadios', 'Arbitros', 'Puntos']
        ]);

        $this->set('partido', $partido);
        $this->set('_serialize', ['partido']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($idtorneo=null)
    {
        $connection = ConnectionManager::get('default');
        $partido = $this->Partidos->newEntity();
       
        if ($this->request->is('post')) {

            $partido = $this->Partidos->patchEntity($partido, $this->request->data);
            if ($this->Partidos->save($partido)) {
                $query = "select nombre from torneos where id=$partido->torneo_id";
           $torneo= $connection->execute($query);
                $this->Flash->success(__('El partido ha sigo guardado exitosamente'));
                //debug($torneo);
                return $this->redirect(['action' => 'partidos/'.$partido->torneo_id]);
            } else {
                $this->Flash->error(__('The partido could not be saved. Please, try again.'));
            }
        }
        $torneos = $this->Partidos->Torneos->find('list');
        $equipos = $this->Partidos->Equipos->find('list');
        $tecnicos = $this->Partidos->Tecnicos->find('list');
        $estadios = $this->Partidos->Estadios->find('list');
        $arbitros = $this->Partidos->Arbitros->find('list');
        $this->set(compact('partido', 'torneos', 'equipos', 'tecnicos', 'estadios', 'arbitros'));
        $this->set('id',$idtorneo);
        //$this->set('_serialize', ['partido']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Partido id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partido = $this->Partidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partido = $this->Partidos->patchEntity($partido, $this->request->data);
            if ($this->Partidos->save($partido)) {
                $this->Flash->success(__('The partido has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The partido could not be saved. Please, try again.'));
            }
        }
        $torneos = $this->Partidos->Torneos->find('list', ['limit' => 200]);
        $equipos = $this->Partidos->Equipos->find('list', ['limit' => 200]);
        $tecnicos = $this->Partidos->Tecnicos->find('list', ['limit' => 200]);
        $estadios = $this->Partidos->Estadios->find('list');
        $arbitros = $this->Partidos->Arbitros->find('list', ['limit' => 200]);
        $this->set(compact('partido', 'torneos', 'equipos', 'tecnicos', 'estadios', 'arbitros'));
        $this->set('_serialize', ['partido']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Partido id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partido = $this->Partidos->get($id);
        if ($this->Partidos->delete($partido)) {
            $this->Flash->success(__('The partido has been deleted.'));
        } else {
            $this->Flash->error(__('The partido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function partidos($id = null)
    {
          $this->paginate = [
            'contain' => ['Paises']
        ];
        
        $connection = ConnectionManager::get('default');
        $results = $connection->execute("select p.id as partidoid, p.num_partido, p.jornada, p.fecha, p.hora, e.nombre as estadio, e.ciudad, p.asistencia,a.id as idarbitro, a.nombre as arbitro,
eq.logo as logol, eq.nombre as nombreL ,eq.id as idlocal, p.goleslocal, p.golesvisitante, eq1.nombre as nombrev, eq1.logo as logov, p.penales, p.tiempoextra,
p.goleslocaltiempoextra, p.golesvisitantetiempoextra, p.goleslocalpenales, p.golesvisitantepenales, t.nombre,
t.id as torneoid, tl.nombre as TecnicoLocal, tv.nombre as TecnicoVisitante
from partidos p
inner join  estadios e
on p.estadio_id = e.id
left join arbitros a
on a.id = p.arbitro_id
inner join equipos eq 
on eq.id = p.equipo_local_id
inner join equipos eq1
on eq1.id = p.equipo_visitante_id
inner join torneos t 
on t.id=p.torneo_id
left join tecnicos tl
 on tl.id= p.tecnico_local_id
left join tecnicos tv
 on tv.id = p.tecnico_visitante_id

 where t.id=$id order by p.fecha desc, p.hora desc, p.num_partido desc");

       $this->set('results',$results);
       $this->set('torneo',$id);
       
        //$this->set('_serialize', ['results']);
    }

public function arbitros($idtorneo = null, $idarbitro=null)
    {
          $this->paginate = [
            'contain' => ['Paises']
        ];
        
        $connection = ConnectionManager::get('default');
        $results = $connection->execute("select p.id as partidoid, p.num_partido, p.jornada, p.fecha, p.hora, e.nombre as estadio, e.ciudad, p.asistencia,a.id as idarbitro, a.nombre as arbitro,
eq.logo as logol, eq.nombre as nombreL ,p.goleslocal, p.golesvisitante, eq1.nombre as nombrev, eq1.logo as logov, p.penales, p.tiempoextra,
p.goleslocaltiempoextra, p.golesvisitantetiempoextra, p.goleslocalpenales, p.golesvisitantepenales, t.nombre,
t.id as torneoid, tl.nombre as TecnicoLocal, tv.nombre as TecnicoVisitante
from partidos p
inner join  estadios e
on p.estadio_id = e.id
left join arbitros a
on a.id = p.arbitro_id
inner join equipos eq 
on eq.id = p.equipo_local_id
inner join equipos eq1
on eq1.id = p.equipo_visitante_id
inner join torneos t 
on t.id=p.torneo_id
left join tecnicos tl
 on tl.id= p.tecnico_local_id
left join tecnicos tv
 on tv.id = p.tecnico_visitante_id

 where t.id=$idtorneo and a.id=$idarbitro order by p.fecha desc, p.hora desc, p.num_partido desc");

       $this->set('results',$results);
       //$this->set('torneo',$idtorneo);
       
        //$this->set('_serialize', ['results']);
    }

    public function resultados($idtorneo = null, $equipo=null)
    {
          $this->paginate = [
            'contain' => ['Paises']
        ];
        
        $connection = ConnectionManager::get('default');
        $results = $connection->execute("select p.id as partidoid, p.num_partido, p.jornada, p.fecha, p.hora, e.nombre as estadio, e.ciudad, p.asistencia,a.id as idarbitro, a.nombre as arbitro,
eq.logo as logol, eq.nombre as nombreL ,eq.id as idlocal, p.goleslocal, p.golesvisitante, eq1.nombre as nombrev, eq1.logo as logov, p.penales, p.tiempoextra,
p.goleslocaltiempoextra, p.golesvisitantetiempoextra, p.goleslocalpenales, p.golesvisitantepenales, t.nombre,
t.id as torneoid, tl.nombre as TecnicoLocal, tv.nombre as TecnicoVisitante
from partidos p
inner join  estadios e
on p.estadio_id = e.id
left join arbitros a
on a.id = p.arbitro_id
inner join equipos eq 
on eq.id = p.equipo_local_id
inner join equipos eq1
on eq1.id = p.equipo_visitante_id
inner join torneos t 
on t.id=p.torneo_id
left join tecnicos tl
 on tl.id= p.tecnico_local_id
left join tecnicos tv
 on tv.id = p.tecnico_visitante_id

 where t.id=$idtorneo and (eq.id = $equipo or eq1.id=$equipo) 
 order  by p.fecha desc, p.hora desc, p.num_partido desc;");

       $this->set('results',$results);
       //$this->set('torneo',$idtorneo);
       
        //$this->set('_serialize', ['results']);
    }
}
