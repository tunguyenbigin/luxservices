<?php namespace Modules\Locations\Services\Eloquents;
    use Modules\Locations\Repositories\LocationRepositories;
    use Modules\Locations\Services\LocationServices;
    use App\Http\Traits\EloquentTrait;
    use Modules\Locations\Entities\Location;
    class EloquentLocationServices implements LocationServices{
    	use EloquentTrait;
        protected $repositories;

        public function __construct(LocationRepositories $repositories){
            $this->repositories = $repositories;
            $this->setModel(new Location());
        }
    }
?>