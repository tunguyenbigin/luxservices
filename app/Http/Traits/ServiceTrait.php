<?php
namespace App\Http\Traits;
use Cache;
trait ServiceTrait{
	protected $model;
	public function setModel($model){
		$this->model = $model;
		$this->repositories->setModel($model);
	}
	public function get($id){
		return $this->repositories->get($id);
	}

	public function delete($id){
		Cache::flush();
		return $this->repositories->delete($id);
	}

	public function update($id, $data){
		Cache::flush();
		return $this->repositories->update($id, $data);
	}

	public function create($data){
		Cache::flush();
		return $this->repositories->create($data);
	}

	public function filter($data){
		return $this->repositories->filter($data);
	}
}
?>