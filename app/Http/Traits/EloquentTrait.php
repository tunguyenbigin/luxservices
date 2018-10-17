<?php namespace App\Http\Traits;
use Illuminate\Support\Facades\Cache;

    trait EloquentTrait{
          protected $model;

          public function setModel($model){
              $this->model = $model;
          }

          public function getModel(){
              return $this->model;
          }

          public function get($id){
              return $this->model->find($id);
          }

          public function delete($id){
              Cache::flush();
              return $this->model->get($id)->delete();
          }

          public function update($id, $data){
              Cache::flush();
              return $this->model->where('id', $id)->update($data);
          }

          public function create($data){
              Cache::flush();
              return $this->model->create($data);
          }

          public function filter($data){
              return $this->model->where($data);
          }

    }
?>