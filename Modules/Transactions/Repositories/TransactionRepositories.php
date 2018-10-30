<?php namespace Modules\Transactions\Repositories;
	interface TransactionRepositories{
		public function get($id);

        public function delete($id);

        public function update($id, $data);

        public function create($data);

        public function filter($data);
	}
?>