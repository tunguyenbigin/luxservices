<?php namespace Modules\Locations\Services;
    interface LocationServices{
    	public function get($id);

        public function delete($id);

        public function update($id, $data);

        public function create($data);

        public function filter($data);
    }
?>